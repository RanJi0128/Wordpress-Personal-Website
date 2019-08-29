<?php
/**
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://www.themepunch.com/
 * @copyright 2015 ThemePunch
 */
 
if( !defined( 'ABSPATH') ) exit();

class RevSliderWpml{
	
	private static $sitepress;
	
	/**
	 * 
	 * true / false if the wpml plugin exists
	 */
	public static function isWpmlExists(){
		return did_action( 'wpml_loaded' );
	}
	
	/**
	 * 
	 * valdiate that wpml exists
	 */
	private static function validateWpmlExists(){
		if(!self::isWpmlExists())
			RevSliderFunctions::throwError("The wpml plugin is not activated");
	}
	
	/**
	 * 
	 * get languages array
	 */
	public static function getArrLanguages($getAllCode = true){
		
		self::validateWpmlExists();
		
		$arrLangs = apply_filters( 'wpml_active_languages', array() );
		
		$response = array();
		
		if($getAllCode == true)
			$response["all"] = __("All Languages",'revslider');
		
		foreach($arrLangs as $code=>$arrLang){
			$name = $arrLang["native_name"];
			$response[$code] = $name;
		}
		
		return($response);
	}
	
	/**
	 * 
	 * get assoc array of lang codes
	 */
	public static function getArrLangCodes($getAllCode = true){
		
		$arrCodes = array();
		
		if($getAllCode == true)
			$arrCodes["all"] = "all";
			
		self::validateWpmlExists();
		
		$arrLangs = apply_filters( 'wpml_active_languages', array() );
		
		foreach($arrLangs as $code=>$arr){
			$arrCodes[$code] = $code;
		}
		
		return($arrCodes);
	}
	
	
	/**
	 * 
	 * check if all languages exists in the given langs array
	 */
	public static function isAllLangsInArray($arrCodes){
		$arrAllCodes = self::getArrLangCodes();
		$diff = array_diff($arrAllCodes, $arrCodes);
		return(empty($diff));
	}
	
	
	/**
	 * 
	 * get langs with flags menu list
	 * @param $props
	 */
	public static function getLangsWithFlagsHtmlList($props = "",$htmlBefore = ""){
		
		$arrLangs = self::getArrLanguages();
		
		if(!empty($props))
			$props = " ".$props;
		
		$html = "<ul".$props.">"."\n";
		$html .= $htmlBefore;
	
		foreach($arrLangs as $code=>$title){
			$urlIcon = self::getFlagUrl($code);
		
		/* NEW:
		foreach($arrLangs as $lang){
            $code = $lang['language_code'];
            $title = $lang['native_name'];
            $urlIcon = $lang['country_flag_url'];
		
		*/	
			$html .= "<li data-lang='".$code."' class='item_lang'><a data-lang='".$code."' href='javascript:void(0)'>"."\n";
			$html .= "<img src='".$urlIcon."'/> $title"."\n";				
			$html .= "</a></li>"."\n";
		}

		$html .= "</ul>";
		
		
		return($html);
	}

	
	/**
	 * get flag url
	 */
	public static function getFlagUrl($code){
		
		self::validateWpmlExists();
		
		if ( empty( $code ) || $code == "all" ) {
            $url = RS_PLUGIN_URL.'admin/assets/images/icon-all.png'; // NEW: ICL_PLUGIN_URL . '/res/img/icon16.png';
        } else {
            $active_languages = apply_filters( 'wpml_active_languages', array() );
            $url = isset( $active_languages[$code]['country_flag_url'] ) ? $active_languages[$code]['country_flag_url'] : null;
        }
		
		//default: show all
		if(empty($url)){
			$url = RS_PLUGIN_URL.'admin/assets/images/icon-all.png';
			// NEW: $url = ICL_PLUGIN_URL . '/res/img/icon16.png';
		}
		
		return($url);
	}
	
	
	/**
	 * 
	 * get language title by code
	 */
	public static function getLangTitle($code){

		if($code == "all")
			return(__("All Languages", 'revslider'));
		
		$default_language = apply_filters( 'wpml_default_language', null );
        return apply_filters( 'wpml_translated_language_name', '', $code, $default_language );
	}
	
	
	/**
	 * 
	 * get current language
	 */
	public static function getCurrentLang(){
		self::validateWpmlExists();
		
		if ( is_admin() ) {
            return apply_filters( 'wpml_default_language', null );
        }
        return apply_filters( 'wpml_current_language', null );
		
		return($lang);
	}
	
	
	public static function svg_val_filter( $svg_val ) {

		$current_language = apply_filters( 'wpml_current_language', null );

		if ( is_array( $svg_val ) && array_key_exists( 'src', $svg_val )
		     && $current_language != apply_filters( 'wpml_default_language', null )
		     && apply_filters( 'wpml_setting', null, 'language_negotiation_type' ) == 2
		) {

			$svg_val['src'] = self::convert_url( $svg_val['src'], $current_language );

		}

		return $svg_val;
	}

	public static function convert_url( $url, $language ){

		if ( self::$sitepress instanceof SitePress ) {
			$url = self::$sitepress->convert_url( $url, $language );
		}

		return $url;
	}

	private static function set_sitepress() {

		if ( ! self::$sitepress instanceof SitePress ) {
			global $sitepress;
			self::$sitepress = $sitepress;
		}
	}

	public static function add_hooks() {

		if ( self::isWpmlExists() ) {
			self::set_sitepress();
			add_filter( 'revslider_svg_val', array( 'RevSliderWpml', 'svg_val_filter' ) );
		}
	}
}

/**
 * old classname extends new one (old classnames will be obsolete soon)
 * @since: 5.0
 **/
class UniteWpmlRev extends RevSliderWpml {}
?>