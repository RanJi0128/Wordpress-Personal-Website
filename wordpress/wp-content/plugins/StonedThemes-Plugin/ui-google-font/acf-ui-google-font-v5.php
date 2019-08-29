<?php

class acf_field_ui_google_font extends acf_field {
	
	
	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		/*
		*  name (string) Single word, no spaces. Underscores allowed
		*/
		
		$this->name = 'ui_google_font';

        $UM_GOOGLEFONTS = array(
            array(
                "kind" => "webfonts#webfont",
                "family" => "--None--",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "ABeeZee",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Abel",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Abril Fatface",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Aclonica",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Acme",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Actor",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Adamina",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Advent Pro",
                "variants" => array
                (
                    0 => '100',
                    1 => '200',
                    2 => '300',
                    3 => 'regular',
                    4 => '500',
                    5 => '600',
                    6 => '700',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Aguafina Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Akronim",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Aladin",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Aldrich",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alegreya",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                    4 => '900',
                    5 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alegreya SC",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                    4 => '900',
                    5 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alex Brush",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alfa Slab One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alice",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alike",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Alike Angular",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Allan",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Allerta",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Allerta Stencil",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Allura",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Almendra",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Almendra Display",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Almendra SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Amarante",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Amaranth",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Amatic SC",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Amethysta",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Anaheim",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Andada",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Andika",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Angkor",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Annie Use Your Telescope",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Anonymous Pro",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Antic",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Antic Didone",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Antic Slab",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Anton",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arapey",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arbutus",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arbutus Slab",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Architects Daughter",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Archivo Black",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Archivo Narrow",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arimo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arizonia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Armata",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Artifika",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Arvo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Asap",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Asset",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Astloch",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Asul",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Atomic Age",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Aubrey",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Audiowide",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Autour One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Average",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Average Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Averia Gruesa Libre",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Averia Libre",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '700',
                    5 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Averia Sans Libre",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '700',
                    5 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Averia Serif Libre",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '700',
                    5 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bad Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Balthazar",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bangers",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Basic",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Battambang",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Baumans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bayon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Belgrano",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Belleza",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "BenchNine",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bentham",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Berkshire Swash",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bevan",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bigelow Rules",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bigshot One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bilbo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bilbo Swash Caps",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bitter",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Black Ops One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bokor",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bonbon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Boogaloo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bowlby One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bowlby One SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Brawler",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bree Serif",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bubblegum Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Bubbler One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Buda",
                "variants" => array
                (
                    0 => '300',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Buenard",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Butcherman",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Butterfly Kids",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cabin",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '500',
                    3 => '500italic',
                    4 => '600',
                    5 => '600italic',
                    6 => '700',
                    7 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cabin Condensed",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '500',
                    2 => '600',
                    3 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cabin Sketch",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Caesar Dressing",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cagliostro",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Calligraffitti",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cambo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Candal",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cantarell",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cantata One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cantora One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Capriola",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cardo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Carme",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Carrois Gothic",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Carrois Gothic SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Carter One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Caudex",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cedarville Cursive",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ceviche One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Changa One",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chango",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chau Philomene One",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chela One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chelsea Market",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chenla",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cherry Cream Soda",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cherry Swash",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chewy",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chicle",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Chivo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '900',
                    3 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cinzel",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                    2 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cinzel Decorative",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                    2 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Clicker Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Coda",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Coda Caption",
                "variants" => array
                (
                    0 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Codystar",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Combo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Comfortaa",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Coming Soon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Concert One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Condiment",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Content",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Contrail One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Convergence",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cookie",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Copse",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Corben",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Courgette",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cousine",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Coustard",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Covered By Your Grace",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Crafty Girls",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Creepster",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Crete Round",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Crimson Text",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '600',
                    3 => '600italic',
                    4 => '700',
                    5 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Croissant One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Crushed",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cuprum",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cutive",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Cutive Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Damion",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dancing Script",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dangrek",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dawning of a New Day",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Days One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Delius",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Delius Swash Caps",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Delius Unicase",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Della Respira",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Denk One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Devonshire",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Didact Gothic",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Diplomata",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Diplomata SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Domine",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Donegal One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Doppio One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dorsa",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dosis",
                "variants" => array
                (
                    0 => '200',
                    1 => '300',
                    2 => 'regular',
                    3 => '500',
                    4 => '600',
                    5 => '700',
                    6 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dr Sugiyama",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Droid Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Droid Sans Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Droid Serif",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Duru Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Dynalight",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "EB Garamond",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Eagle Lake",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Eater",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Economica",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Electrolize",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Elsie",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Elsie Swash Caps",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Emblema One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Emilys Candy",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Engagement",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Englebert",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Enriqueta",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Erica One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Esteban",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Euphoria Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ewert",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Exo",
                "variants" => array
                (
                    0 => '100',
                    1 => '100italic',
                    2 => '200',
                    3 => '200italic',
                    4 => '300',
                    5 => '300italic',
                    6 => 'regular',
                    7 => 'italic',
                    8 => '500',
                    9 => '500italic',
                    10 => '600',
                    11 => '600italic',
                    12 => '700',
                    13 => '700italic',
                    14 => '800',
                    15 => '800italic',
                    16 => '900',
                    17 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Expletus Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '500',
                    3 => '500italic',
                    4 => '600',
                    5 => '600italic',
                    6 => '700',
                    7 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fanwood Text",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fascinate",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fascinate Inline",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Faster One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fasthand",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Federant",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Federo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Felipa",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fenix",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Finger Paint",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fjalla One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fjord One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Flamenco",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Flavors",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fondamento",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fontdiner Swanky",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Forum",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Francois One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Freckle Face",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fredericka the Great",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fredoka One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Freehand",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fresca",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Frijole",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fruktur",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Fugaz One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "GFS Didot",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "GFS Neohellenic",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gabriela",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gafata",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Galdeano",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Galindo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gentium Basic",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gentium Book Basic",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Geo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Geostar",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Geostar Fill",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Germania One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gilda Display",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Give You Glory",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Glass Antiqua",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Glegoo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gloria Hallelujah",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Goblin One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gochi Hand",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gorditas",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Goudy Bookletter 1911",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Graduate",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Grand Hotel",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gravitas One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Great Vibes",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Griffy",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gruppo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Gudea",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Habibi",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Hammersmith One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Hanalei",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Hanalei Fill",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Handlee",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Hanuman",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Happy Monkey",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Headland One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Henny Penny",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Herr Von Muellerhoff",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Holtwood One SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Homemade Apple",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Homenaje",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell DW Pica",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell DW Pica SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell Double Pica",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell Double Pica SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell English",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell English SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell French Canon",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell French Canon SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell Great Primer",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "IM Fell Great Primer SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Iceberg",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Iceland",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Imprima",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Inconsolata",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Inder",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Indie Flower",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Inika",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Irish Grover",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Istok Web",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Italiana",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Italianno",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jacques Francois",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jacques Francois Shadow",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jim Nightshade",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jockey One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jolly Lodger",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Josefin Sans",
                "variants" => array
                (
                    0 => '100',
                    1 => '100italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '600',
                    7 => '600italic',
                    8 => '700',
                    9 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Josefin Slab",
                "variants" => array
                (
                    0 => '100',
                    1 => '100italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '600',
                    7 => '600italic',
                    8 => '700',
                    9 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Joti One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Judson",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Julee",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Julius Sans One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Junge",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Jura",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '500',
                    3 => '600',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Just Another Hand",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Just Me Again Down Here",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kameron",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Karla",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kaushan Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kavoon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Keania One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kelly Slab",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kenia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Khmer",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kite One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Knewave",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kotta One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Koulen",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kranky",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kreon",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Kristi",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Krona One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "La Belle Aurore",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lancelot",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lato",
                "variants" => array
                (
                    0 => '100',
                    1 => '100italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '700',
                    7 => '700italic',
                    8 => '900',
                    9 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "League Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Leckerli One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ledger",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lekton",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lemon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Libre Baskerville",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Life Savers",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lilita One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Limelight",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Linden Hill",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lobster",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lobster Two",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Londrina Outline",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Londrina Shadow",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Londrina Sketch",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Londrina Solid",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lora",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Love Ya Like A Sister",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Loved by the King",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lovers Quarrel",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Luckiest Guy",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lusitana",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Lustria",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Macondo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Macondo Swash Caps",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Magra",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Maiden Orange",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mako",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marcellus",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marcellus SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marck Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Margarine",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marko One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marmelad",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Marvel",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mate",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mate SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Maven Pro",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '500',
                    2 => '700',
                    3 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "McLaren",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Meddon",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "MedievalSharp",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Medula One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Megrim",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Meie Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Merienda",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Merienda One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Merriweather",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                    3 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Merriweather Sans",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                    3 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Metal",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Metal Mania",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Metamorphous",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Metrophobic",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Michroma",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Milonga",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Miltonian",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Miltonian Tattoo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Miniver",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Miss Fajardose",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Modern Antiqua",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Molengo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Molle",
                "variants" => array
                (
                    0 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Monda",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Monofett",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Monoton",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Monsieur La Doulaise",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Montaga",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Montez",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Montserrat",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Montserrat Alternates",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Montserrat Subrayada",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Moul",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Moulpali",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mountains of Christmas",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mouse Memoirs",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mr Bedfort",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mr Dafoe",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mr De Haviland",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mrs Saint Delafield",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mrs Sheppards",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Muli",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Mystery Quest",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Neucha",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Neuton",
                "variants" => array
                (
                    0 => '200',
                    1 => '300',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '700',
                    5 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "New Rocker",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "News Cycle",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Niconne",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nixie One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nobile",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nokora",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Norican",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nosifer",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nothing You Could Do",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Noticia Text",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Noto Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Noto Serif",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Cut",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Flat",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'greek',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Oval",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Round",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Slim",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nova Square",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Numans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Nunito",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Odor Mean Chey",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Offside",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Old Standard TT",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oldenburg",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oleo Script",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oleo Script Swash Caps",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Open Sans",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '600',
                    5 => '600italic',
                    6 => '700',
                    7 => '700italic',
                    8 => '800',
                    9 => '800italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Open Sans Condensed",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oranienbaum",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Orbitron",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '500',
                    2 => '700',
                    3 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oregano",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Orienta",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Original Surfer",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oswald",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Over the Rainbow",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Overlock",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                    4 => '900',
                    5 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Overlock SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ovo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oxygen",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Oxygen Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Sans Caption",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Sans Narrow",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Serif",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "PT Serif Caption",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Pacifico",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Paprika",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Parisienne",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Passero One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Passion One",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                    2 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Patrick Hand",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Patrick Hand SC",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Patua One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Paytone One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Peralta",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Permanent Marker",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Petit Formal Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Petrona",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Philosopher",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Piedra",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Pinyon Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Pirata One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Plaster",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Play",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Playball",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Playfair Display",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                    4 => '900',
                    5 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Playfair Display SC",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                    4 => '900',
                    5 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Podkova",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Poiret One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Poller One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Poly",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Pompiere",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Pontano Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Port Lligat Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Port Lligat Slab",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Prata",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Preahvihear",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Press Start 2P",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Princess Sofia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Prociono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Prosto One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Puritan",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Purple Purse",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quando",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quantico",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quattrocento",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quattrocento Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Questrial",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quicksand",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Quintessential",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Qwigley",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Racing Sans One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Radley",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Raleway",
                "variants" => array
                (
                    0 => '100',
                    1 => '200',
                    2 => '300',
                    3 => 'regular',
                    4 => '500',
                    5 => '600',
                    6 => '700',
                    7 => '800',
                    8 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Raleway Dots",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rambla",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rammetto One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ranchers",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rancho",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rationale",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Redressed",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Reenie Beanie",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Revalia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ribeye",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ribeye Marrow",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Righteous",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Risque",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Roboto",
                "variants" => array
                (
                    0 => '100',
                    1 => '100italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '500',
                    7 => '500italic',
                    8 => '700',
                    9 => '700italic',
                    10 => '900',
                    11 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Roboto Condensed",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '700',
                    5 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'vietnamese',
                    1 => 'cyrillic',
                    2 => 'greek',
                    3 => 'latin-ext',
                    4 => 'latin',
                    5 => 'cyrillic-ext',
                    6 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rochester",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rock Salt",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rokkitt",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Romanesco",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ropa Sans",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rosario",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rosarivo",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rouge Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ruda",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                    2 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rufina",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ruge Boogie",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ruluko",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rum Raisin",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ruslan Display",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Russo One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ruthie",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Rye",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sacramento",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sail",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Salsa",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sanchez",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sancreek",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sansita One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sarina",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Satisfy",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Scada",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Schoolbell",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Seaweed Script",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sevillana",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Seymour One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Shadows Into Light",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Shadows Into Light Two",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Shanti",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Share",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Share Tech",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Share Tech Mono",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Shojumaru",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Short Stack",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Siemreap",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sigmar One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Signika",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '600',
                    3 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Signika Negative",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                    2 => '600',
                    3 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Simonetta",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '900',
                    3 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sintony",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sirin Stencil",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Six Caps",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Skranji",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Slackey",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Smokum",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Smythe",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sniglet",
                "variants" => array
                (
                    0 => '800',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Snippet",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Snowburst One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sofadi One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sofia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sonsie One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sorts Mill Goudy",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Source Code Pro",
                "variants" => array
                (
                    0 => '200',
                    1 => '300',
                    2 => 'regular',
                    3 => '500',
                    4 => '600',
                    5 => '700',
                    6 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Source Sans Pro",
                "variants" => array
                (
                    0 => '200',
                    1 => '200italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '600',
                    7 => '600italic',
                    8 => '700',
                    9 => '700italic',
                    10 => '900',
                    11 => '900italic',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Special Elite",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Spicy Rice",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Spinnaker",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Spirax",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Squada One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stalemate",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stalinist One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stardos Stencil",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stint Ultra Condensed",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stint Ultra Expanded",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Stoke",
                "variants" => array
                (
                    0 => '300',
                    1 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Strait",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sue Ellen Francisco",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Sunshiney",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Supermercado One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Suwannaphum",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Swanky and Moo Moo",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Syncopate",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tangerine",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Taprom",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'khmer',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tauri",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Telex",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tenor Sans",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                    3 => 'cyrillic-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Text Me One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "The Girl Next Door",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tienne",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                    2 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tinos",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Titan One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Titillium Web",
                "variants" => array
                (
                    0 => '200',
                    1 => '200italic',
                    2 => '300',
                    3 => '300italic',
                    4 => 'regular',
                    5 => 'italic',
                    6 => '600',
                    7 => '600italic',
                    8 => '700',
                    9 => '700italic',
                    10 => '900',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Trade Winds",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Trocchi",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Trochut",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Trykker",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Tulpen One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ubuntu",
                "variants" => array
                (
                    0 => '300',
                    1 => '300italic',
                    2 => 'regular',
                    3 => 'italic',
                    4 => '500',
                    5 => '500italic',
                    6 => '700',
                    7 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ubuntu Condensed",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ubuntu Mono",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'greek',
                    2 => 'latin-ext',
                    3 => 'latin',
                    4 => 'cyrillic-ext',
                    5 => 'greek-ext',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Ultra",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Uncial Antiqua",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Underdog",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Unica One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "UnifrakturCook",
                "variants" => array
                (
                    0 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "UnifrakturMaguntia",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Unkempt",
                "variants" => array
                (
                    0 => 'regular',
                    1 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Unlock",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Unna",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "VT323",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Vampiro One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Varela",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Varela Round",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Vast Shadow",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Vibur",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Vidaloka",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Viga",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Voces",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Volkhov",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Vollkorn",
                "variants" => array
                (
                    0 => 'regular',
                    1 => 'italic',
                    2 => '700',
                    3 => '700italic',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Voltaire",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Waiting for the Sunrise",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Wallpoet",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Walter Turncoat",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Warnes",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Wellfleet",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Wendy One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Wire One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Yanone Kaffeesatz",
                "variants" => array
                (
                    0 => '200',
                    1 => '300',
                    2 => 'regular',
                    3 => '700',
                ),
                "subsets" => array
                (
                    0 => 'latin-ext',
                    1 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Yellowtail",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Yeseva One",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'cyrillic',
                    1 => 'latin-ext',
                    2 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Yesteryear",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
            array(
                "kind" => "webfonts#webfont",
                "family" => "Zeyada",
                "variants" => array
                (
                    0 => 'regular',
                ),
                "subsets" => array
                (
                    0 => 'latin',
                ),
            ),
        );

        $this->font = $UM_GOOGLEFONTS;
		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/
		
		$this->label = __('Google Font', 'acf-ui_google_font');
		
		
		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/
		
		$this->category = 'basic';
		
		
		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/
		
		$this->defaults = array(
			'font_size'	=> 14,
		);
		
		
		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('ui_google_font', 'error');
		*/
		
		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-ui_google_font'),
		);
		
				
		// do not delete!
    	parent::__construct();
    	
	}
	
	
	/*
	*  render_field_settings()
	*
	*  Create extra settings for your field. These are visible when editing a field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field_settings( $field ) {
		
		/*
		*  acf_render_field_setting
		*
		*  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		*  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		*
		*  More than one setting can be added by copy/paste the above code.
		*  Please note that you must also have a matching $defaults value for the field name (font_size)
		*/

	}
	
	
	
	/*
	*  render_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field (array) the $field being rendered
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field( $field ) {
		?>
        <select name="<?php echo esc_attr($field['name']) ?>">
            <?php foreach($this->font as $key => $font): ?>
                <option <?php echo $field['value'] == $key ? "selected='selected'" : ""; ?> value="<?php echo $key; ?>"><?php echo $font["family"]; ?></option>
            <?php endforeach; ?>
        </select>
		<?php
	}
	
		
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function input_admin_enqueue_scripts() {
		
		$dir = plugin_dir_url( __FILE__ );
		
		
		// register & include JS
		wp_register_script( 'acf-input-ui_google_font', "{$dir}js/input.js" );
		wp_enqueue_script('acf-input-ui_google_font');
		
		
		// register & include CSS
		wp_register_style( 'acf-input-ui_google_font', "{$dir}css/input.css" ); 
		wp_enqueue_style('acf-input-ui_google_font');
		
		
	}
	
	*/
	
	
	/*
	*  input_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
		
	function input_admin_head() {
	
		
		
	}
	
	*/
	
	
	/*
   	*  input_form_data()
   	*
   	*  This function is called once on the 'input' page between the head and footer
   	*  There are 2 situations where ACF did not load during the 'acf/input_admin_enqueue_scripts' and 
   	*  'acf/input_admin_head' actions because ACF did not know it was going to be used. These situations are
   	*  seen on comments / user edit forms on the front end. This function will always be called, and includes
   	*  $args that related to the current screen such as $args['post_id']
   	*
   	*  @type	function
   	*  @date	6/03/2014
   	*  @since	5.0.0
   	*
   	*  @param	$args (array)
   	*  @return	n/a
   	*/
   	
   	/*
   	
   	function input_form_data( $args ) {
	   	
		
	
   	}
   	
   	*/
	
	
	/*
	*  input_admin_footer()
	*
	*  This action is called in the admin_footer action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_footer)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
		
	function input_admin_footer() {
	
		
		
	}
	
	*/
	
	
	/*
	*  field_group_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is edited.
	*  Use this action to add CSS + JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_enqueue_scripts() {
		
	}
	
	*/

	
	/*
	*  field_group_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is edited.
	*  Use this action to add CSS and JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_head() {
	
	}
	
	*/


	/*
	*  load_value()
	*
	*  This filter is applied to the $value after it is loaded from the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	/*
	
	function load_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	*/
	
	
	/*
	*  update_value()
	*
	*  This filter is applied to the $value before it is saved in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	/*
	
	function update_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	*/
	
	
	/*
	*  format_value()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value which was loaded from the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*
	*  @return	$value (mixed) the modified value
	*/

	function format_value( $value, $post_id, $field ) {
        $font_obj = array();
        $cur_font = isset($this->font[$value]) && $this->font[$value] ? $this->font[$value] : "";
        if($cur_font){
            if($cur_font["family"] == '--None--'){
                return "";
            }
            $cur_font["font_name"] = str_replace(" ","+",$cur_font["family"]);
            $font_obj["font_name"] = $cur_font["font_name"];
            $font_obj["variants"] = "";
            if($cur_font["variants"]){
                $font_obj["variants"] = implode($cur_font["variants"],",");
                $font_obj["variants"] = ":".$font_obj["variants"];
            }
            $font_obj["subset"] = "";
            if($cur_font["subsets"]){
                $font_obj["subset"] = implode($cur_font["subsets"],",");
                $font_obj["subset"] = "&subset=".$font_obj["subset"];
            }
            $font_url_params = $cur_font["font_name"] . $font_obj["variants"] . $font_obj["subset"];
            $font_obj['url'] = "http://fonts.googleapis.com/css?family={$font_url_params}";
            return $font_obj;
        }else{
            return "";
        }
	}
	
	/*
	*  validate_value()
	*
	*  This filter is used to perform validation on the value prior to saving.
	*  All values are validated regardless of the field's required setting. This allows you to validate and return
	*  messages to the user if the value is not correct
	*
	*  @type	filter
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$valid (boolean) validation status based on the value and the field's required setting
	*  @param	$value (mixed) the $_POST value
	*  @param	$field (array) the field array holding all the field options
	*  @param	$input (string) the corresponding input name for $_POST value
	*  @return	$valid
	*/
	
	/*
	
	function validate_value( $valid, $value, $field, $input ){
		
		// Basic usage
		if( $value < $field['custom_minimum_setting'] )
		{
			$valid = false;
		}
		
		
		// Advanced usage
		if( $value < $field['custom_minimum_setting'] )
		{
			$valid = __('The value is too little!','acf-ui_google_font'),
		}
		
		
		// return
		return $valid;
		
	}
	
	*/
	
	
	/*
	*  delete_value()
	*
	*  This action is fired after a value has been deleted from the db.
	*  Please note that saving a blank value is treated as an update, not a delete
	*
	*  @type	action
	*  @date	6/03/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (mixed) the $post_id from which the value was deleted
	*  @param	$key (string) the $meta_key which the value was deleted
	*  @return	n/a
	*/
	
	/*
	
	function delete_value( $post_id, $key ) {
		
		
		
	}
	
	*/
	
	
	/*
	*  load_field()
	*
	*  This filter is applied to the $field after it is loaded from the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0	
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function load_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  update_field()
	*
	*  This filter is applied to the $field before it is saved to the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function update_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  delete_field()
	*
	*  This action is fired after a field is deleted from the database
	*
	*  @type	action
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	n/a
	*/
	
	/*
	
	function delete_field( $field ) {
		
		
		
	}	
	
	*/
	
	
}


// create field
new acf_field_ui_google_font();

?>
