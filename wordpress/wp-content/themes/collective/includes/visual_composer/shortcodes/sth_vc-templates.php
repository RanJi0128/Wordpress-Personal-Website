<?php
add_action( 'vc_load_default_templates_action','stonedthemes_custom_templates' );
 
function stonedthemes_custom_templates() {

/** Home1 creative page template */
$data = array();
$data['name'] = __( 'Home1-Creativ', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1460537374026{padding-top: 0px !important;}"][sth_portfolio grid_elements="3" sorting="DESC" exclude="1182" border_offset="30" item_hover_effect="zoom-effect" title="Portfolio" portfolio_cats="industrial, apartments, classic"][/vc_column][/vc_row][vc_row][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Interior" icon_type="linecons" color="#999999" service_icon="fa-align-left" icon_linecons="vc_li vc_li-stack" title_color="#000000" href="http://themeforest.net/item/throne-minimal-wordpress-theme/12664890?ref=StonedThemes"]Time goes by fast, so today we'd like to share a colorful freebie to remind ourselves to appreciate each and every month of the year.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Architecture" icon_type="linecons" color="#999999" service_icon="fa-archive" title_color="#000000" icon_linecons="vc_li vc_li-shop"]Every month of the year comes loaded with unique energy, so that it can give us inspiration and ideas, and then leave so many.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Planning" icon_type="linecons" service_icon="fa-arrows-alt" icon_linecons="vc_li vc_li-params" title_color="#000000" color="#999999"]In the tech industry, many of us came of age during hip-hop's rise as a dominant art form, its spirit of individualism.[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3"][sth_services service_title="Engineering" icon_type="linecons" color="#999999" service_icon="fa-arrow-circle-o-up" icon_linecons="vc_li vc_li-truck" title_color="#000000"]If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition.[/sth_services][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home2 creative page template */
$data = array();
$data['name'] = __( 'Home2-Creativ Alt', 'collective' );
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1466760842729{padding-top: 60px !important;padding-bottom: 60px !important;background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/03/crop_12.jpg?id=2854) !important;}"][vc_column][vc_column_text]
<h4 style="text-align: center;"><span style="color: #ffffff;">CREATIVE WARFARE</span></h4>
<p style="text-align: center;"><span style="color: #ffffff;">We're a team of badass architects &amp; engineers</span></p>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1467205666691{margin-right: 0px !important;margin-left: 0px !important;}"][vc_column css=".vc_custom_1460537013039{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][sth_portfolio grid_elements="3" overlay_offset="30" overlay_opacity="9" item_hover_effect="zoom-effect" portfolio_cats="46, houses, industrial, classic"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home3 fullscreen page template */
$data = array();
$data['name'] = __( 'Home3-Fullscreen', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider title="Slider" slider="1338"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** Home4 Bordered fullscreen page template */
$data = array();
$data['name'] = __( 'Home4-Bordered Fullscreen', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_slider title="Slider" slider="1338"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home6 Fullscreen vertical page template */
$data = array();
$data['name'] = __( 'Home6-Fullscreen Vertical', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_portfoliovertical text_position="left-bottom" projects="1182, 1180, 1174, 1177"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home7 Horizontal Mosaic page template */
$data = array();
$data['name'] = __( 'Home7-Horizontal Mosaic', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column css=".vc_custom_1461696837829{padding-top: 0px !important;}"][sth_portfoliomosaic text_position="middle-middle" border_offset="20" item_hover_effect="zoom-effect" projects="1182, 1164, 1180, 1175, 1177, 1174, 1173, 1172, 1179, 1178"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home8 Bordered Slider page template */
$data = array();
$data['name'] = __( 'Home8-Bordered Slider', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider slider="1818"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home9 Illustration page template */
$data = array();
$data['name'] = __( 'Home9-Illustration', 'collective' );
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1466684625626{padding-top: 20px !important;padding-bottom: 20px !important;}"][vc_column][vc_column_text]

INTERIOR DESIGN

We're an award winning agency working with international clients

[/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1464003618032{background-position: center !important;background-repeat: no-repeat !important;background-size: contain !important;}"][vc_column][sth_gallery projects="1180, 1175, 1177, 1181, 1178, 1174" css=".vc_custom_1480695016778{margin-bottom: 50px !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home10 Portfolio Slider page template */
$data = array();
$data['name'] = __( 'Home10-Portfolio Slider', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_portfolio total_items="6" grid_elements="3" grid_elements1="4" sorting="DESC" exclude="1182" slider_display="Yes" item_display="Vertical Rect" text_position="left-bottom" item_offset="10" overlay_offset="20" overlay_opacity="10" item_hover_effect="zoom-effect" portfolio_cats="classic, industrial, apartments, houses"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home11 Mosaic Alt page template */
$data = array();
$data['name'] = __( 'Home11-Mosaic Alt', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content" css=".vc_custom_1467642231119{margin-bottom: 30px !important;padding-top: 65px !important;padding-bottom: 65px !important;background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/04/s_t3.jpg?id=2572) !important;}"][vc_column css=".vc_custom_1467635196090{padding-top: 0px !important;}"][vc_column_text css=".vc_custom_1467635352441{margin-bottom: 0px !important;}"]

PHOTOGRAPHY AGENCY

Another award for spilling good in advertising

[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Home12 Slider & Services page template */
$data = array();
$data['name'] = __( 'Home12-Slider & Services', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1466691136582{margin-bottom: 0px !important;}"][vc_column][sth_slider slider="1348"][/vc_column][/vc_row][vc_row gap="10" css=".vc_custom_1466691777541{margin-top: 5px !important;margin-right: -25px !important;margin-bottom: 5px !important;margin-left: -25px !important;}"][vc_column css=".vc_custom_1466945729920{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-4 vc_col-md-4"][sth_services service_title="Lighting Study" icon_fontawesome="fa fa-lightbulb-o" css=".vc_custom_1478607496251{margin-bottom: 0px !important;background-color: #a59a94 !important;}" title_color="#ffffff" color="#ffffff" href="http://collective.stonedthemes.com/"]Time goes by fast, so today we'd like to share a colorful freebie to remind ourselves to appreciate each and every month of the year, have you stopped to smell the pink blooming trees in March...[/sth_services][/vc_column][vc_column css=".vc_custom_1466945773872{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-4 vc_col-md-4"][sth_services service_title="Furniture Design" icon_fontawesome="fa fa-bed" css=".vc_custom_1467121218811{margin-bottom: 0px !important;background-color: #bd9c8b !important;}" title_color="#ffffff" color="#ffffff"]In the tech industry, many of us came of age during hip-hop's rise as a dominant art form. Its spirit of individualism, bravado, and constant reinvention makes it impossible for us not to admire.[/sth_services][/vc_column][vc_column css=".vc_custom_1466945791876{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-4 vc_col-md-4"][sth_services service_title="Home Planning" icon_fontawesome="fa fa-home" css=".vc_custom_1467121227714{margin-bottom: 0px !important;background-color: #c0b599 !important;}" title_color="#ffffff" color="#ffffff"]When launching an app, you need to spend a lot of time and resources to attract users. You can pull people into your app using a variety of means, including advertising, referral programs, public relations...[/sth_services][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** HomeShop Home Shop page template */
$data = array();
$data['name'] = __( 'HomeShop-Home Shop', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider slider="3224"][/vc_column][/vc_row][vc_row css=".vc_custom_1473276772875{margin-top: 30px !important;}"][vc_column width="1/2"][vc_single_image image="3226" img_size="full"][/vc_column][vc_column width="1/2"][vc_single_image image="3227" img_size="full"][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]

Featured items

[/vc_column_text][featured_products per_page="4" columns="4" orderby="" order=""][/vc_column][/vc_row][vc_row][vc_column][vc_column_text]

Latest items

[/vc_column_text][recent_products per_page="8" columns="4" orderby="" order=""][/vc_column][/vc_row][vc_row][vc_column width="1/3"][sth_services service_title="Free Shipping" icon_type="linecons" icon_aligment="top" icon_linecons="vc_li vc_li-shop" title_color="#2a2a2a" color="#999999" css=".vc_custom_1473324578490{background-color: #ffffff !important;}"]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/sth_services][/vc_column][vc_column width="1/3"][sth_services service_title="Worldwide" icon_type="linecons" icon_aligment="top" icon_linecons="vc_li vc_li-world" title_color="#000000" color="#999999" css=".vc_custom_1473277844999{background-color: #ffffff !important;}"]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/sth_services][/vc_column][vc_column width="1/3"][sth_services service_title="30-day Money Back" icon_aligment="top" color="#999999" icon_fontawesome="fa fa-usd" css=".vc_custom_1473277855301{background-color: #ffffff !important;}"]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/sth_services][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/**Vertical Slider page template */
$data = array();
$data['name'] = __( 'Vertical Slider', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider slider="3748"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** About 1 page template */
$data = array();
$data['name'] = __( 'About 1', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_aboutMeSlider title="About Me" slider_height="700px"][sth_aboutme author="RON WITERTHUR" author_position="Art Director, Husband of one, Father of four, Gamer" image_url="2595" position="right" author_color="#ffffff" author_position_color="#999999"]Nothing is perfect on the web. We can't make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren't that easy to break — both in terms of interface design and security. In practice, mock-ups usually represent a perfect experience in a perfect context with perfect data which doesn't really exist. A good example for it are “optimal" usernames which are perfectly short, fit on a single line on mobile and wrap nicely, or perfect photography that allows for perfectly legible text overlays. It's not realistic. We need to work with dynamic content in our prototypes, with both average and extremes being represented.

Graphic Design
Art & Directing
Typography
Exhibition Events
[btn_grey link="#" filled="1"]HIRE ME[/btn_grey][/sth_aboutme][sth_aboutme author="Yogi Pascal" author_position="Performance manager" image_url="2597" author_color="#ffffff" author_position_color="#999999"]Nothing is perfect on the web. We can't make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren't that easy to break — both in terms of interface design and security. In practice, mock-ups usually represent a perfect experience in a perfect context with perfect data which doesn't really exist. A good example for it are “optimal" usernames which are perfectly short, fit on a single line on mobile and wrap nicely, or perfect photography that allows for perfectly legible text overlays. It's not realistic. We need to work with dynamic content in our prototypes, with both average and extremes being represented.

Graphic Design
Art & Directing
Typography
Exhibition Events
[btn_grey link="#" filled="1"]HIRE ME[/btn_grey][/sth_aboutme][/sth_aboutMeSlider][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** About 2 page template */
$data = array();
$data['name'] = __( 'About 2', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_aboutMeSlider slider_height="700px"][sth_aboutme author="JIM HARMOND" author_position="Art Director, Husband, Father , Gamer" image_url="3073" position="right" author_cv="true" cvs="%5B%7B%22cv_field_name%22%3A%22Full%20Name%22%2C%22cv_field_value%22%3A%22John%20Andrew%22%7D%2C%7B%22cv_field_name%22%3A%22Date%20of%20Birth%22%2C%22cv_field_value%22%3A%2222%20August%201990%22%7D%2C%7B%22cv_field_name%22%3A%22Address%22%2C%22cv_field_value%22%3A%22Albuquerque%2C%5CnNew%20Mexico%5CnUnited%20States%20of.%22%7D%2C%7B%22cv_field_name%22%3A%22Education%22%2C%22cv_field_value%22%3A%22Natural%20Science%20Gymnaisum%5CnNorth%20Dakoda%202014%20South%20Harmon%20Institute%202016%5CnUniversity%20of%20Geneva%2C%20Masters%202017%22%7D%2C%7B%22cv_field_name%22%3A%22Experience%22%2C%22cv_field_value%22%3A%22Sagmeister%20-%20Graphic%20Designer%20(2014-2016)%5CnUmbrella%20Corp.%20-%20Web%20Developer%20(2012-2014)%5CnGoogle%20-%20Intern%20(2011-2012)%5Cn%5CnSagmeister%20-%20Graphic%20Designer%20(2014-2016)%5CnUmbrella%20Corp.%20-%20Web%20Developer%20(2012-2014)%5CnGoogle%20-%20Intern%20(2011-2012)%22%7D%2C%7B%22cv_field_name%22%3A%22Languages%22%2C%22cv_field_value%22%3A%22French%20(Mother%20Tongue)%5CnGerman%20(read%2C%20talk%2C%20write)%22%7D%2C%7B%22cv_field_value%22%3A%22%3Cimg%20src%3D%5C%22http%3A%2F%2Fcollective.stonedthemes.com%2Fwp-content%2Fuploads%2F2015%2F01%2Fsignature.png%5C%22%3E%22%7D%5D" author_color="#ffffff" author_position_color="#999999"][/sth_aboutme][/sth_aboutMeSlider][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** About 3 page template */
$data = array();
$data['name'] = __( 'About 3', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/3"][sth_author author_name="Jason Simons" author_position="Managing Director" author_link="http://collective.stonedthemes.com/about-1/" image_url="3153" display="Extended Info" sc_networks="%5B%7B%22sc_net_url%22%3A%22%23%22%2C%22icon_fontawesome%22%3A%22fa%20fa-facebook%22%7D%2C%7B%22sc_net_url%22%3A%22%23%22%2C%22icon_fontawesome%22%3A%22fa%20fa-twitter%22%7D%2C%7B%22sc_net_url%22%3A%22%23%22%2C%22icon_fontawesome%22%3A%22fa%20fa-tumblr%22%7D%5D"]Accessibility has always been a slightly unsettling realm for web developers. Surrounded with myths, misunderstandings and contradicting best practices, it used to be a domain for a small group of experts who would "add" accessibility on top of the finished product.[/sth_author][/vc_column][vc_column width="1/3"][sth_author author_name="Ana Paulsen" author_position="Financial Director" image_url="3159" display="Extended Info" sc_networks="%5B%7B%22sc_net_url%22%3A%22%23%22%2C%22icon_fontawesome%22%3A%22fa%20fa-facebook%22%7D%5D"]To help you start into July freshly inspired, artists and designers from across the globe challenged their artistic abilities and created desktop wallpapers for you to indulge in. This monthly creativity mission has been going on for eight years now, and each month the enthusiastic work.[/sth_author][/vc_column][vc_column width="1/3"][sth_author author_name="Michael Green" author_position="Senior Advisor" image_url="3154" display="Extended Info" sc_networks="%5B%7B%22sc_net_url%22%3A%22%23%22%2C%22icon_fontawesome%22%3A%22fa%20fa-stumbleupon%22%7D%5D"]With this in mind, I constantly optimized my approach to providing support. Let me share with you what I learned. Read on to find out what I learned about support, the four sides that will help you understand each request, which fears of mine proved to be unfounded, what an efficient support system.[/sth_author][/vc_column][/vc_row][vc_row][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Arthur Ronalds" author_position="Support Officer" image_url="3155" css=".vc_custom_1467469869118{margin-bottom: 30px !important;}"][/sth_author][/vc_column][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Melissa Sandre" author_position="Human Resources" image_url="3158" css=".vc_custom_1467469882758{margin-bottom: 30px !important;}"][/sth_author][/vc_column][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Albert Bowie" author_position="Architect" image_url="3157" css=".vc_custom_1467469898587{margin-bottom: 30px !important;}"][/sth_author][/vc_column][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Catelyn Oswald" author_position="Interior Designer" image_url="3160" css=".vc_custom_1467469916501{margin-bottom: 30px !important;}"][/sth_author][/vc_column][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Joe Ross" author_position="Architect" image_url="3156" css=".vc_custom_1467469932713{margin-bottom: 30px !important;}"][/sth_author][/vc_column][vc_column width="1/3" offset="vc_col-lg-2 vc_col-md-4"][sth_author author_name="Helen Lee" author_position="Photographer" image_url="3162" css=".vc_custom_1467469947882{margin-bottom: 30px !important;}"][/sth_author][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** About 4 page template */
$data = array();
$data['name'] = __( 'About 4', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_slider slider="2521"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Service 1 page template */
$data = array();
$data['name'] = __( 'Service 1', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column offset="vc_col-lg-4 vc_col-md-4" el_class="service-height"][sth_services service_title="INTERIOR DESIGN" icon_aligment="top" icon_fontawesome="fa fa-fort-awesome" css=".vc_custom_1466955510691{margin-bottom: 0px !important;padding-top: 40px !important;padding-right: 40px !important;padding-left: 40px !important;background-color: #ffffff !important;}" title_color="#000000" color="#999999"]

Nothing is perfect on the web. We can't make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren't.

[/sth_services][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4" css=".vc_custom_1467296324537{background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/02/x2.jpg?id=2930) !important;}" el_class="service-height"][/vc_column][vc_column offset="vc_col-lg-4 vc_col-md-4" el_class="service-height"][sth_services service_title="ENGINIERING & SYSTEMS" icon_aligment="top" icon_fontawesome="fa fa-anchor" css=".vc_custom_1466955550463{margin-bottom: 0px !important;padding-top: 40px !important;padding-right: 40px !important;padding-left: 40px !important;background-color: #ffffff !important;}" title_color="#000000" color="#999999"]

Sublime Text is, no doubt, one of the most powerful text editors out there. The number of satisfied users attests to that. If you explore it, you will eventually see.

[/sth_services][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column width="1/3" el_class="service-height" css=".vc_custom_1467295066147{background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/02/x1.jpg?id=2929) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][/vc_column][vc_column width="1/3" el_class="service-height"][sth_services service_title="FUTURISTIC ARCHITECTURE" icon_aligment="top" icon_fontawesome="fa fa-rocket" css=".vc_custom_1466955532781{margin-bottom: 0px !important;padding-top: 40px !important;padding-right: 40px !important;padding-left: 40px !important;background-color: #ffffff !important;}" title_color="#000000" color="#999999"]

Time goes by fast, so today we'd like to share a colorful freebie to remind ourselves to appreciate each and every month of the year, have you stopped to smell the pink.

[/sth_services][/vc_column][vc_column width="1/3" el_class="service-height" css=".vc_custom_1467296384890{background-image: url(http://collective.stonedthemes.com/wp-content/uploads/2016/02/x3.jpg?id=2931) !important;}"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Service 2 page template */
$data = array();
$data['name'] = __( 'Service 2', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][vc_tta_accordion shape="square" c_icon="" active_section="1"][vc_tta_section i_position="right" subtitle="Art Director, Husband of one, Father of four, Gamer" background_image="2570" padding_top_bottom="30" padding_left_right="10" title="ARCHITECTURE" tab_id="1461868325548-c4ef2cfb-5580" add_icon="true"][vc_column_text][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][/vc_column_text][/vc_tta_section][vc_tta_section i_type="entypo" subtitle="Art Director, Husband of one, Father of four, Gamer" background_image="2571" padding_top_bottom="30" padding_left_right="10" title="ENGINEERING" tab_id="1461868325591-1a8c8216-35fc" add_icon="true"][vc_column_text][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][/vc_column_text][/vc_tta_section][vc_tta_section i_icon_fontawesome="fa fa-cog" subtitle="Art Director, Husband of one, Father of four, Gamer" background_image="2572" padding_top_bottom="30" padding_left_right="10" title="INTERIOR DESIGN" tab_id="1462477884685-fa6d5e66-3582" add_icon="true"][vc_column_text][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][/vc_column_text][/vc_tta_section][vc_tta_section subtitle="Art Director, Husband of one, Father of four, Gamer" background_image="2239" padding_top_bottom="30" padding_left_right="10" title="MANAGING SYSTEMS" tab_id="1462477869549-d4813690-6c56" add_icon="true"][vc_column_text][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][half_width]Nothing is perfect on the web. We can’t make sure that our websites always work as intended, but we can try our best to design resilient and flexible websites that aren’t that easy to break — both in terms of interface design and security. Yet still neither resilience nor flexibility are usually reflected in deliverables and mock-ups. [/half_width][/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** Service 3 page template */
$data = array();
$data['name'] = __( 'Service 3', 'collective' );
$data['content'] = <<<CONTENT
[vc_row css=".vc_custom_1467144741586{margin-top: 30px !important;}"][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-6" css=".vc_custom_1467144661361{padding-top: 0px !important;}"][sth_services service_title="PHOTOGRAPHY" size="lg" color="#999999" title_color="#000000" icon_fontawesome="fa fa-camera"]Nothing is perfect on the web. We can't make sure that our websites always work. As intended, but we can try our best to design resilient.

If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition. I’ll be taking you through some of my favorite tips and tricks. Knowing them might just unleash your hidden powers as a programmer to the world.

Brand & identity design
Wonderful Campaigns & Long word here
Another line of text
The long sentence takes place around
[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-6" css=".vc_custom_1467144689970{padding-top: 0px !important;}"][sth_services service_title="ARCHITECTURE" color="#999999" title_color="#000000" icon_fontawesome="fa fa-building-o"]Nothing is perfect on the web. We can't make sure that our websites always work. As intended, but we can try our best to design resilient.

If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition. I’ll be taking you through some of my favorite tips and tricks. Knowing them might just unleash your hidden powers as a programmer to the world.

Brand & identity design
Wonderful Campaigns & Long word here
Another line of text
The long sentence takes place around
[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-6" css=".vc_custom_1467144696901{padding-top: 0px !important;}"][sth_services service_title="FURNITURES" color="#999999" title_color="#000000" icon_fontawesome="fa fa-bed"]Nothing is perfect on the web. We can't make sure that our websites always work. As intended, but we can try our best to design resilient.

If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition. I’ll be taking you through some of my favorite tips and tricks. Knowing them might just unleash your hidden powers as a programmer to the world.

Brand & identity design
Wonderful Campaigns & Long word here
Another line of text
The long sentence takes place around
[/sth_services][/vc_column][vc_column width="1/2" offset="vc_col-lg-3 vc_col-md-6" css=".vc_custom_1467144704110{padding-top: 0px !important;}"][sth_services service_title="ENGINEERING" color="#999999" icon_fontawesome="fa fa-cog" title_color="#000000"]Nothing is perfect on the web. We can't make sure that our websites always work. As intended, but we can try our best to design resilient.

If you have been using Sublime Text for some time, now is the time to upgrade your arsenal with new ammunition. I’ll be taking you through some of my favorite tips and tricks. Knowing them might just unleash your hidden powers as a programmer to the world.

Brand & identity design
Wonderful Campaigns & Long word here
Another line of text
The long sentence takes place around
[/sth_services][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Contact 1 page template */
$data = array();
$data['name'] = __( 'Contact 1', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_googlemap vc_coordinates="%5B%7B%22coordinate%22%3A%2243.73841760000001%2C7.41461579999997%22%7D%5D" map_marker="2542" coordinates="43.73841760000001,7.42461579999997" map_title="Our map location" zoom_level="15" title="CONTACT" sub_title="we are big company"]

Contact

Get in touch with us



Address

Collection Studio

Mosaic Boulevard

12th Palace, 2nd floor

Copenhagen, Denmark

120000



PHONE

650-802-1010



EMAIL

stonedthemes@gmail.com



JOBS

Explore free positions



[btn_grey link="" filled=""]apply here[/btn_grey]

[/sth_googlemap][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Contact 2 page template */
$data = array();
$data['name'] = __( 'Contact 2', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_googlemap vc_coordinates="%5B%7B%22coordinate%22%3A%2243.73841760000001%2C7.42461579999997%22%7D%5D" map_marker="2545" map_style="`{`{``featureType``:``all``,``elementType``:``labels.text.fill``,``stylers``:`{`{``saturation``:36},{``color``:``#000000``},{``lightness``:40}`}`},{``featureType``:``all``,``elementType``:``labels.text.stroke``,``stylers``:`{`{``visibility``:``on``},{``color``:``#000000``},{``lightness``:16}`}`},{``featureType``:``all``,``elementType``:``labels.icon``,``stylers``:`{`{``visibility``:``off``}`}`},{``featureType``:``administrative``,``elementType``:``geometry.fill``,``stylers``:`{`{``color``:``#000000``},{``lightness``:20}`}`},{``featureType``:``administrative``,``elementType``:``geometry.stroke``,``stylers``:`{`{``color``:``#000000``},{``lightness``:17},{``weight``:1.2}`}`},{``featureType``:``landscape``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:20}`}`},{``featureType``:``poi``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:21}`}`},{``featureType``:``road.highway``,``elementType``:``geometry.fill``,``stylers``:`{`{``color``:``#000000``},{``lightness``:17}`}`},{``featureType``:``road.highway``,``elementType``:``geometry.stroke``,``stylers``:`{`{``color``:``#000000``},{``lightness``:29},{``weight``:0.2}`}`},{``featureType``:``road.arterial``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:18}`}`},{``featureType``:``road.local``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:16}`}`},{``featureType``:``transit``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:19}`}`},{``featureType``:``water``,``elementType``:``geometry``,``stylers``:`{`{``color``:``#000000``},{``lightness``:17}`}`}`}`" map_background_color="#151515" coordinates="43.73841760000001,7.42461579999997" map_title="Our map location" zoom_level="15" title="CONTACT" sub_title="we are big company"]

Contact

Get in touch with us



Address

Collection Studio

Mosaic Boulevard

12th Palace, 2nd floor

Copenhagen, Denmark

120000



PHONE

650-802-1010



EMAIL

stonedthemes@gmail.com



JOBS

Explore free positions



[btn_grey link="" filled=""]apply here[/btn_grey]

[/sth_googlemap][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Contact 3 page template */
$data = array();
$data['name'] = __( 'Contact 3', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_googlemap vc_coordinates="%5B%7B%22coordinate%22%3A%2243.73841760000001%2C7.42461579999997%22%7D%5D" map_marker="2542" map_background="solid background" coordinates="43.73841760000001,7.42461579999997" zoom_level="15"]

Contact form

[contact-form-7 id="1268" title="Contact form 1"]

details

PHONE

650-802-1010



EMAIL

stonedthemes@gmail.com



JOBS

Explore free positions

[/sth_googlemap][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );


/** Contact 4 page template */
$data = array();
$data['name'] = __( 'Contact 4', 'collective' );
$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_googlemap vc_coordinates="%5B%7B%22coordinate%22%3A%2243.73841760000001%2C7.42461579999997%22%7D%5D" map_marker="2542" map_background="solid background" coordinates="43.73841760000001,7.42461579999997" zoom_level="15"]
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][sth_googlemap vc_coordinates="%5B%7B%22coordinate%22%3A%2243.73841760000001%2C7.41461579999997%22%7D%2C%7B%22coordinate%22%3A%2243.73841760000001%2C7.42461579999997%22%7D%5D" fit_to_screen="Specific height" map_marker="2542" map_desc="true" coordinates="43.73841760000001,7.42461579999997" zoom_level="15" map_height="360px"][/sth_googlemap][/vc_column][/vc_row][vc_row css=".vc_custom_1464597063421{margin-top: 100px !important;margin-bottom: 70px !important;}"][vc_column width="2/3"][vc_column_text]

Contact form

[/vc_column_text][contact-form-7 id="1268"][/vc_column][vc_column width="1/3"][vc_column_text]

details

PHONE

650-802-1010



EMAIL

stonedthemes@gmail.com



ADDRESS

Collection Studio Mosaic Boulevard

12th Palace,2nd floor Copenhagen,

Denmark 120000[/vc_column_text][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Blog page template */
$data = array();
$data['name'] = __( 'Blog', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_featuredPosts title="Featured Posts" arrow_position="bottom-right" featured_posts="706, 242, 5, 237"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Blog Alt page template */
$data = array();
$data['name'] = __( 'Blog Alt', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_featuredPosts title="Featured Posts" arrow_style="style-2" arrow_position="bottom-right" featured_posts="706, 242, 237, 5"][sth_blogposts title="journal" grid_elements="4" sorting="DESC" item_display="Style2" total_items="10" taxonomies="12, 22" categories="12, 22, 28, 5"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

/** Blog Masonry page template */
$data = array();
$data['name'] = __( 'Blog Masonry', 'collective' );
$data['content'] = <<<CONTENT
[vc_row][vc_column][sth_blogposts title="journal" grid_elements="4" sorting="DESC" total_items="10" taxonomies="12, 22" categories="12, 22, 28, 5"][/vc_column][/vc_row]
CONTENT;

vc_add_default_templates( $data );

}
