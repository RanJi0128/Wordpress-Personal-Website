<?php
	function stonedthemes_get_video_thumbnail_uri( $video_uri ) {
	
		$thumbnail_uri = '';
		
	
		
		// determine the type of video and the video id
		$video = stonedthemes_parse_video_uri( $video_uri );
		
		
		
		// get youtube thumbnail
		if ( $video['type'] == 'youtube' )
			$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
		
		// get vimeo thumbnail
		if( $video['type'] == 'vimeo' )
			$thumbnail_uri = stonedthemes_get_vimeo_thumbnail_uri( $video['id'] );
		// get wistia thumbnail
		if( $video['type'] == 'wistia' )
			$thumbnail_uri = stonedthemes_get_wistia_thumbnail_uri( $video_uri );
		// get default/placeholder thumbnail
		if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
			$thumbnail_uri = ''; 
		
		//return thumbnail uri
		return $thumbnail_uri;
		
	}
	
	
	/**
	 * Parse the video uri/url to determine the video type/source and the video id
	 */
	function stonedthemes_parse_video_uri( $url ) {
		
		// Parse the url 
		$parse = parse_url( $url );
		
		// Set blank variables
		$video_type = '';
		$video_id = '';
		
		// Url is http://youtu.be/xxxx
		if ( $parse['host'] == 'youtu.be' ) {
		
			$video_type = 'youtube';
			
			$video_id = ltrim( $parse['path'],'/' );	
			
		}
		
		// Url is http://www.youtube.com/watch?v=xxxx 
		// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
		// or http://www.youtube.com/embed/xxxx
		if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
		
			$video_type = 'youtube';
			
			parse_str( $parse['query'] );
			
			$video_id = $v;	
			
			if ( !empty( $feature ) )
				$video_id = end( explode( 'v=', $parse['query'] ) );
				
			if ( strpos( $parse['path'], 'embed' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
			
		}
		
		// Url is http://www.vimeo.com
		if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
		
			$video_type = 'vimeo';
			
			$video_id = ltrim( $parse['path'],'/' );	
						
		}
		$host_names = explode(".", $parse['host'] );
		$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
		// Url is an oembed url wistia.com
		if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
		
			$video_type = 'wistia';
				
			if ( strpos( $parse['path'], 'medias' ) == 1 )
					$video_id = end( explode( '/', $parse['path'] ) );
		
		}
		
		// If recognised type return video array
		if ( !empty( $video_type ) ) {
		
			$video_array = array(
				'type' => $video_type,
				'id' => $video_id
			);
		
			return $video_array;
			
		} else {
		
			return false;
			
		}
		
	}
	
	
	 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
	 */
	function stonedthemes_get_vimeo_thumbnail_uri( $clip_id ) {
		$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
		$vimeo_response = wp_remote_get( $vimeo_api_uri );
		if( is_wp_error( $vimeo_response ) ) {
			return $vimeo_response;
		} else {
			$vimeo_response = unserialize( $vimeo_response['body'] );
			return $vimeo_response[0]['thumbnail_large'];
		}
		
	}
	/**
	 * Takes a wistia oembed url and gets the video thumbnail url.
	 */
	function stonedthemes_get_wistia_thumbnail_uri( $video_uri ) {
		if ( empty($video_uri) )
			return false;
		$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
		$wistia_response = wp_remote_get( $wistia_api_uri );
		if( is_wp_error( $wistia_response ) ) {
			return $wistia_response;
		} else {
			$wistia_response = json_decode( $wistia_response['body'], true );
			return $wistia_response['thumbnail_url'];
		}
		
	}	