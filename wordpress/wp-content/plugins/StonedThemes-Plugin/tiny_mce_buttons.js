var sth_active_tiny_mce;

(function() {
	
	/*Tabs*/
    tinymce.PluginManager.add('tabs', function(editor, url) {
            editor.addButton('tabs', {
                title : 'Tabs',
                image : url+'/shortcodesImg/tab.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[tabgroup][tab title=\"\" icon=\"\"]" + editor.selection.getContent() + "[/tab][/tabgroup]");
                }
            });        
    });
	/*Tabs*/
	/*Accordion*/
    tinymce.PluginManager.add('accordion', function(editor, url) {
            editor.addButton('accordion', {
                title : 'Accordion',
                image : url+'/shortcodesImg/toggle.png',
                onclick : function() {
                    sth_active_tiny_mce = editor
					// tb_show('Accordion', 'admin-ajax.php?action=sth_tabs_wizard&shortcode1=accordion&shortcode2=accordion_item');
                    sth_active_tiny_mce.selection.setContent("[accordion]\r\n[accordion_item title=\"\"]" + editor.selection.getContent() + "[/accordion_item]\r\n[/accordion]");
                }
            });        
    });
	/*Accordion*/
	/*Slider*/
    tinymce.PluginManager.add('slider1', function(editor, url) {
            editor.addButton('slider1', {
                title : 'Slider',
                image : url+'/shortcodesImg/gallery.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
					sth_active_tiny_mce.selection.setContent("[slider title=\"\"]\r\n[sliderimage src=\"\"]" + editor.selection.getContent() + "[/sliderimage]\r\n[/slider]");
                }
            });        
    });
	/*Slider*/
	/*Pricing Table*/
    tinymce.PluginManager.add('PricingTables', function(editor, url) {
            editor.addButton('PricingTables', {
                title : 'PricingTable',
				image : url+'/shortcodesImg/pricing-icon.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[pricetable title=\"\"][pricecol title=\"\" price=\"\" showcolor=\"\"][priceitem yesno=\"\"]" + editor.selection.getContent() + "[/priceitem][/pricecol][/pricetable]");
                }
            });        
    });
	/*Pricing Table*/
	/*alertInfo*/
    tinymce.PluginManager.add('alertInfo', function(editor, url) {
            editor.addButton('alertInfo', {
                title : 'Alert Info',
                image : url+'/shortcodesImg/alertInfo.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[alertInfo title=\"\"]" + editor.selection.getContent() + "[/alertInfo]");
                }
            });        
    });
	/*alertInfo*/
	/*alertSuccess*/
    tinymce.PluginManager.add('alertSuccess', function(editor, url) {
            editor.addButton('alertSuccess', {
                title : 'Alert Success',
                image : url+'/shortcodesImg/alertSuccess.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[alertSuccess title=\"\"]" + editor.selection.getContent() + "[/alertSuccess]");
                }
            });        
    });
	/*alertSuccess*/
	/*alertError*/
    tinymce.PluginManager.add('alertError', function(editor, url) {
            editor.addButton('alertError', {
                title : 'Alert Error',
                image : url+'/shortcodesImg/alertError.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[alertError title=\"\"]" + editor.selection.getContent() + "[/alertError]");
                }
            });        
    });
	/*alertError*/
	/*alertWarning*/
    tinymce.PluginManager.add('alertWarning', function(editor, url) {
            editor.addButton('alertWarning', {
                title : 'Alert Warning',
                image : url+'/shortcodesImg/alertWarning.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[alertWarning title=\"\"]" + editor.selection.getContent() + "[/alertWarning]");
                }
            });        
    });
	/*alertWarning*/
	/*fontAwesome*/
    tinymce.PluginManager.add('fontAwesome', function(editor, url) {
            editor.addButton('fontAwesome', {
                title : 'AFont Awesome',
                image : url+'/shortcodesImg/fontAwesome.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[fontAwesome name=\"\" size=\"\"][/fontAwesome]");
                }
            });        
    });
	/*fontAwesome*/	
	/*Columns*/	
	  tinymce.PluginManager.add('columns', function( editor, url ) {
        editor.addButton( 'columns', {
            title: 'Columns',
            type: 'menubutton',
            icon: ' fa fa-th',
            menu: [
                {
                    text: 'full_width',
                    value: "[full_width][/full_width]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },                
				{
                    text: 'half_width',
                    value: "[half_width][/half_width]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
                    text: 'one_third',
                    value: "[one_third][/one_third]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
                    text: 'one_fourth',
                    value: "[one_fourth][/one_fourth]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
				{
                    text: 'one_sixth',
                    value: "[one_sixth][/one_sixth]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }                     	
           ]
        });
    });
	/*Columns*/
     tinymce.PluginManager.add('animated_text', function(editor, url) {
            editor.addButton('animated_text', {
                text: 'Animated Text',
                title : 'Animated Text',
                icon: false,
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[animated_text variations=\"\" color=\"\"][/animated_text]");
                }
            });        
    });
	/*Buttons*/
	  tinymce.PluginManager.add('buttons', function( editor, url ) {
        editor.addButton( 'buttons', {
            title: 'Buttons',
            type: 'menubutton',
            icon: ' fa fa-th',
            menu: [
                {
                    text: 'white',
                    value: "[btn_white link=\"\" filled=\"\"][/btn_white]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'grey',
                    value: "[btn_grey link=\"\" filled=\"\"][/btn_grey]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'yellow',
                    value: "[btn_yellow link=\"\" filled=\"\"][/btn_yellow]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'black',
                    value: "[btn_black link=\"\" filled=\"\"][/btn_black]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'red',
                    value: "[btn_red link=\"\" filled=\"\"][/btn_red]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                } ,
                {
                    text: 'orange',
                    value: "[btn_orange link=\"\" filled=\"\"][/btn_orange]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }  ,
                {
                    text: 'green',
                    value: "[btn_green link=\"\" filled=\"\"][/btn_green]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                } ,
                {
                    text: 'blue',
                    value: "[btn_blue link=\"\" filled=\"\"][/btn_blue]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                },
                {
                    text: 'purple',
                    value: "[btn_purple link=\"\" filled=\"\"][/btn_purple]",
                    onclick: function() {
                        editor.insertContent(this.value());
                    }
                }              	
           ]
        });
    });
	/*Buttons*/
	
	/*testimonials*/
    tinymce.PluginManager.add('testimonials', function(editor, url) {
            editor.addButton('testimonials', {
                title : 'Testimonials',
                image : url+'/shortcodesImg/testimonials.png',
                onclick : function() {
					sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent('[testimonials title=\"\" top_left=\"\" author=\"\" author_position=\"\" image_url=\"\"]' + editor.selection.getContent() + '[/testimonials]');
                }
            });        
    });
	/*testimonials*/
	/*blockqoute*/
    tinymce.PluginManager.add('stblockquote', function(editor, url) {
            editor.addButton('stblockquote', {
                title : 'Stblockquote',
                image : url+'/shortcodesImg/quote.png',
                onclick : function() {
					sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent('[stblockquote title=\"\" top_left=\"\" author=\"\"]' + editor.selection.getContent() + '[/stblockquote]');
                }
            });        
    });
	/*blockqoute*/
    /*CV*/
    tinymce.PluginManager.add('st_cv', function(editor, url) {
            editor.addButton('st_cv', {
                title : 'CV',
                image : url+'/shortcodesImg/cv.png',
                onclick : function() {
                    sth_active_tiny_mce = editor;
                    sth_active_tiny_mce.selection.setContent("[cv][cvdata cv_field_name=\"\"]" + editor.selection.getContent() + "[/cvdata][/cv]");
                }
            });        
    });
    /*CV*/
})();