<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<title><?php wp_title('| ', true, 'right'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<!-- Mobile Specific Metas
	================================================== -->
	<?php if(ot_get_option('responsive_design','on')=='on'){ ?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php }else { ?>
		<meta name="viewport" content="width=1200" />
	<?php } ?>

	
	

	<?php
	// If WP4.3+ and no site_icon is set - show custom
	if ( ( function_exists( 'has_site_icon' ) && !has_site_icon() ) ) { ?>
		<link rel="icon" type="image/x-icon" href="<?php echo esc_url(ot_get_option('favicon_uploaded', get_template_directory_uri().'/images/favicon.png'));?>">	
	<?php }
	// If before WP4.3 - show custom
	if ( ! ( function_exists( 'wp_site_icon' ) ) ) { ?>
		<link rel="icon" type="image/x-icon" href="<?php echo esc_url(ot_get_option('favicon_uploaded', get_template_directory_uri().'/images/favicon.png'));?>">		
	<?php } ?>
	

	<?php wp_head(); ?>	

	<style type="text/css" media="screen">
        .button, a.button, button, input[type='submit'], input[type='reset'], input[type='button'] {
            text-transform: uppercase;
        }

        @media only screen and (min-width: 1018px){
            #header.scrolled #menu > ul > li > a, #header.scrolled .header_cart .icon { line-height: 36px; }
            #header.scrolled .header_cart .widget_shopping_cart { top: 36px; }
            #header.scrolled #menu > ul > li.boc_nav_button { height: 36px; }
            #header.scrolled #logo .logo_img { height: 40px;}
            #header.scrolled #boc_searchform_close { top:9px; }
        }

        #menu > ul > li > a, #header .header_cart a.icon { color: #ffffff; }
        #menu > ul > li.boc_nav_button a{ color: #ffffff; border: 2px solid #ffffff; }

        #menu > ul > li:not(.boc_nav_button):hover > a, #header .header_cart li a.icon:hover { color: #eeee22; }
        #menu > ul > li.boc_nav_button a:hover{ background: #eeee22; border: 2px solid #eeee22; }

        .main_menu_underline_effect #menu > ul > li > a:after{ background-color: #08ada7; }

        #footer {
            position: relative;
        }

    #logo-slider-wraper {
            position:relative;	
	}
	.slider-controls {
            position:absolute;
            width:450px;	
            top: 80px !important;
	}
	#logo-slider {
            position: relative;
            width: 450px;
            height: 198px;
            margin: 0; padding: 0;
            overflow: hidden;
            list-style:none;
            background:#FFFFFF;
            text-align:center;
	}
	.slide {
            list-style:none;
            margin:0 !important;
            width:450px !important;
	}
	.slider-controls a {
            height:40px;
            width:40px;
            display:inline-block;
            text-indent:-9000px;
	}
	#prev{
            background:url(http://trungtamthanhmaulavang.org.au/wp-content/plugins/logo-slider/arrows/arrow1.png) no-repeat center;
            float:right;
            margin-right:-50px;
	}	
	#next{
            background:url(http://trungtamthanhmaulavang.org.au/wp-content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
            float:left;
            margin-left:-50px
	}	
    .rel_pos {
        background:none;
    }
    .background-header {
        background-image:url("banner-hoan-thien.jpg");
        background-position:top right;
        background-size:cover;
        background-repeat:no-repeat;
    }

    /*
        For anh Lap
        CSS chinh color theo mua
    */
    .full_header {
        background-color: #05b13a;
        color: white;
    }
    .full_header #subheader {
        color: white
    }
    .full_header #subheader .section a {
        color: white !important;
    }

    /*
    ===============================================================
        --------------------_ Responsive _--------------------
    ===============================================================
    */
	@media screen and (max-width:320px) {
            #logo-slider-wraper{
                position:relative !important;
                width:52% !important;
                left:42px;
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                left:30px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 110% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
            #next{
                background:url(http://trungtamthanhmaulavang.org.au/wp-content/plugins/logo-slider/arrows/arrow1-prev.png) no-repeat center;
                float:left;
                margin-left:-66px !important;
            }
            .logo-img {
                margin-left:32px;
            }
	}
	@media screen and (min-width:321px) and (max-width:480px){
            #logo-slider-wraper{
                position:relative;
                width:35% !important;
                left:55px !important;
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 102% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
	}
	@media screen and (min-width:321px) and (max-width:360px){
            #logo-slider-wraper{
                position:relative;
                width:50% !important;
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
	}
	@media screen and (min-width:481px) and (max-width:640px){
            #logo-slider-wraper{
                position:relative;
                width:28% !important;
                left:34px !important;
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
	}
	@media only screen and (min-width:641px) and (max-width:768px){
            #logo-slider-wraper{
                position:relative;
                width:78% !important;
                left:34px !important
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
                left:-12px;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 100% !important;
            }
	}
	@media only screen and (min-width:770px){
            #logo-slider-wraper{
                position:relative;
                width:450px !important;
                left:34px !important;
            }
            .slider-controls {
                position: absolute;
                top: 80px;
                width: 100% !important;
            }
            #logo-slider {
                background:#FFFFFF;
                height: 198px;
                list-style: none outside none;
                margin: 0;
                overflow: hidden;
                padding: 0;
                position: relative;
                width: 100% !important;
            }
            .slide {
                list-style: none outside none;
                margin: 0 !important;
                width: 450px !important;
            }
	}
	#mobile_menu_toggler {
	    float: right;
	    width: 34px;
	    height: 34px;
	    margin-top: 20px;
	    margin-right: 1px;
	    cursor: pointer;
	    background: #FFF;
	    padding-top: 4px;
	    box-sizing: border-box;
	}

        /*CSS MODIFICATION BY KHANH PHAN*/
        .blue-text {color:#1e2c5e;}
        .red-text { color:#8a1b23;}
        .yellow-text { color:#bb891e; }
        /*.rel_pos { background:url("images/bgd-texture.gif");}*/
        .menu-default-menu-bar-minh-container { background:#1e2c5e !important;}
        #header.scrolled .rel_pos { background:#1e2c5e !important;}
        #menu > ul > li:not(.boc_nav_button):hover > a, #header .header_cart li a.icon:hover { color:#FFFFFF !important; }
        .heading-logo {display: table-cell; vertical-align: middle; text-align: left; box-sizing:border-box; padding-left: 30px; }
        .heading-logo span { display: block; font-weight: 600; }
        .heading-logo span.red-text { font-size: 28px; line-height: 50px; }
        .heading-logo span.blue-text { font-size: 37px; line-height: 40px; }
        .heading-logo span.yellow-text { font-size: 17px; margin-top: 20px; line-height: 20px; }
        #header.scrolled #logo { padding:10px 0; display: none;}
        #header.scrolled #logo .logo_img { padding:10px 0; display: none;  width: auto !important;}
        /*#header .scrolled .block_header  #logo .heading-logo { display: none; }*/
        .post_item_block.boxed { background:#f9f9f9; border-radius:0; }
        @media only screen and (max-width: 1017px) {
            #logo { float: left; }
            .heading-logo { display: none; }
            #logo .logo_img { width: auto !important; }
        }
        @media only screen and (max-width: 768px) {
            #logo { padding-bottom: 0; }
            #logo .logo_img { margin: 10px 0;}
            #logo .logo_img { height: 82px; }
        }

        @media only screen and (max-width: 1280px) and (min-width: 1018px){
            #menu > ul > li > a { font-size: 16px; }
            #logo .logo_img { width: auto !important; }
        }

        /*CSS MODIFICATION BY KHANH PHAN*/
    </style>
	
</head>

<body <?php body_class(); ?>>

	<?php 
		$page_heading_style 		= ot_get_option('page_heading_style') ? ot_get_option('page_heading_style') : '';
		$sticky_header 			= boc_is_header_sticky();
		$subheader 				= ot_get_option('subheader','off') == 'on';
		$hide_subheader_on_scroll 	= ot_get_option('hide_subheader_on_scroll','on') == 'on';
		$is_transparent_header 	= boc_is_transparent_header();

		if($is_transparent_header){
			$transparent_logo_effect = boc_get_transparent_logo_effect();
		}
		$responsive_option 	= boc_responsive_option();
		$wrapper_style 		= boc_page_wrapper_style();
		
		// Preloader
		$has_page_preloader 	= ot_get_option('has_page_preloader','off') == 'on';
		if(!$has_page_preloader && isset($post->ID)){
			// Check Page Settings also
			$has_page_preloader = get_post_meta($post->ID, 'has_page_preloader_set', true)=='on' ? true : false;
		}
		// Check if Header is disabled
		$header_is_off = false;
		if(isset($post->ID)){
			// Check Page Settings also
			$header_is_off = get_post_meta($post->ID, 'boc_header_is_off', true)=='on' ? true : false;
		}
	?>


	<?php if($has_page_preloader){	// Preloader 	?>	
		<div id="boc_page_preloader">
			<span class="boc_preloader_icon"></span>
		</div>
	<?php }	?>

	
  <!-- Page Wrapper::START -->
  <div id="wrapper" class="<?php echo esc_attr( $wrapper_style.' '.$page_heading_style.' '.$responsive_option);?> ">
  
	<!-- Header::START -->
	<?php if(!$header_is_off) { ?>
	
	<header id= "header" 
			class= "<?php echo $subheader ? 'has_subheader' : 'no_subheader';?> 
					<?php echo $is_transparent_header ? 'transparent_header' : '';?>
					<?php echo $sticky_header ? 'sticky_header' : '';?>
					<?php echo ($sticky_header && $hide_subheader_on_scroll) ? 'hide_subheader_on_scroll' : '';?>">
		
		
		<?php if($subheader){ ?>
		<!-- SubHeader -->
		<div class="full_header">
			<div id="subheader" class="container">	
				<div class="section">
						
						<?php $header_contacts_position_is_left = ot_get_option('header_contacts_position_is_left'); ?>		
						<div class="header_contacts <?php echo (!$header_contacts_position_is_left? "right": '');?>">
							<?php if($header_email = ot_get_option('header_email')){?>
								<div class="header_contact_item"><span class="icon icon-mail2"></span> <?php echo wp_kses_post($header_email);?></div>
							<?php }  ?>	
							<?php if($header_phone = ot_get_option('header_phone')){?>
								<div class="header_contact_item"><span class="icon icon-mobile3"></span> <?php echo wp_kses_post($header_phone);?></div>
							<?php }  ?>
						</div>
						
					<?php if(is_array($header_icons = ot_get_option('header_icons'))){
							if($header_contacts_position_is_left){
								$header_icons = array_reverse($header_icons);							
							}
							foreach($header_icons as $header_icon){
								echo "<a target='_blank' 
										href='". ( $header_icon['icons_service']!='rss' ? $header_icon['icons_url'] : get_bloginfo('rss2_url') )."' 
										class='header_soc_icon'
										".(!$header_contacts_position_is_left? " style='float: left;'": '')."
										title='". esc_attr($header_icon['title']) ."'>
										<span class='icon ". esc_attr($header_icon['icons_service']) ."'></span></a>";			
							}
						  }
					?>
					
					<?php 
					// Subheader Menu if set
					if ( has_nav_menu( 'subheader_navigation' ) ) {
						wp_nav_menu( array(
							'theme_location'	=> 'subheader_navigation',
							'container_id'	=> 'subheader_menu', 
							'items_wrap' 		=> '<ul>%3$s</ul>',
						));
					}
					?>

					
				</div>	
			</div>	
		</div>
		<?php }  ?>		
		
		<div class="rel_pos background-header">
		
			<div class="container">
			
				<div class="section rel_pos <?php echo (boc_is_main_nav_block_style() ? 'block_header' : '');?>">
			
					<?php
						$logo = ot_get_option('logo_upload');
						$logo_transparent = '';
						if($is_transparent_header){
							$logo_transparent = ot_get_option('logo_transparent_upload');
						}
					?>
						
					<div id="logo">
				<?php	if($logo) { ?>
							<div class='logo_img <?php echo $logo_transparent ? "transparent_logo_".esc_attr($transparent_logo_effect) : "";?>'>
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
									<img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>"/>
									<?php if($logo_transparent) { ?>
										<span id="transparent_logo"><img src="<?php echo esc_url($logo_transparent); ?>" alt="<?php bloginfo('name'); ?>"/></span>
									<?php } ?>
								</a>
							</div>
                            <div class="heading-logo" style="height: 190px">
                                <span class="blue-text">TRUNG TÂM THÁNH MẪU LA VANG</span>
                                <span class="red-text">CỘNG ĐOÀN THÁNH TÔMA THIỆN</span>
                                <span class="yellow-text">SAINT THOMAS THIEN CATHOLIC COMMUNITY</span>
                            </div>
				<?php	} else { ?>
							<div class='logo_img <?php echo $logo_transparent ? "transparent_logo_".esc_attr($transparent_logo_effect) : "";?>'>
								<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
									<img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
									<?php if($logo_transparent) { ?>
										<span id="transparent_logo"><img src="<?php echo esc_url(get_template_directory_uri().'/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>"/></span>
									<?php } ?>
								</a>
							</div>
                            <div class="heading-logo" style="height: 190px">
                                <span class="blue-text">TRUNG TÂM THÁNH MẪU LA VANG</span>
                                <span class="red-text">CỘNG ĐOÀN THÁNH TÔMA THIỆN</span>
                                <span class="yellow-text">SAINT THOMAS THIEN CATHOLIC COMMUNITY</span>
                            </div>
				<?php	} ?>
					</div>

					<div id="mobile_menu_toggler">
					  <div id="m_nav_menu" class="m_nav">
						<div class="m_nav_ham button_closed" id="m_ham_1"></div>
						<div class="m_nav_ham button_closed" id="m_ham_2"></div>
						<div class="m_nav_ham button_closed" id="m_ham_3"></div>
					  </div>
					</div>
 
				<?php 
					// Cart in Header
					if(boc_cart_in_header()) {
						boc_render_cart_in_header();
					}

					// Main Navigation
					$main_menu_underline_effect_class = (boc_is_main_nav_underline_effect() ? "main_menu_underline_effect" : "");
				?>

<!--					<div class="--><?php //echo get_theme_mod('main_menu_style', 'custom_menu_4').' '.esc_attr($main_menu_underline_effect_class); ?><!--">	-->
<!--					--><?php //
//					if ( has_nav_menu( 'main_navigation' ) ) {
//						wp_nav_menu( array(
//							'theme_location'	=> 'main_navigation',
//							'container_id'	=> 'menu',
//							'container_class'	=> '',
//							'menu_class' 		=> '',
//							'walker' 		=> new boc_Menu_Walker,
//							'items_wrap' 		=> '<ul>%3$s</ul>',
//						));
//					}
//					?>
<!--					</div>-->




				</div>
				
				<?php 
				$show_search_option = boc_show_search_in_header();
				if($show_search_option=='on') {
					echo boc_search_form_in_header();
				}
				?>				
			
			
			</div>

            <div class="<?php echo get_theme_mod('main_menu_style', 'custom_menu_4').' '.esc_attr($main_menu_underline_effect_class); ?>">
                <?php
                if ( has_nav_menu( 'main_navigation' ) ) {
                    wp_nav_menu( array(
                        'theme_location'	=> 'main_navigation',
                        'container_id'	=> 'menu',
                        'container_class'	=> '',
                        'menu_class' 		=> '',
                        'walker' 		=> new boc_Menu_Walker,
                        'items_wrap' 		=> '<ul>%3$s</ul>',
                    ));
                }
                ?>
            </div>
		</div>

	
			
		<div id="mobile_menu">
			<?php 
			if ( has_nav_menu( 'main_navigation' ) ) {
				wp_nav_menu( array(
					'theme_location'=> 'main_navigation',
					'container' 	=> '',
					'menu_class' 	=> '', 
					'walker' 		=> new boc_Menu_Walker,
					'fallback_cb'   => 'respMenuFallBack',
					'items_wrap' => '<ul>%3$s</ul>',
				));
			}
			?>
		</div>
	
	</header>
	<?php } ?>
	<!-- Header::END -->
	
	<!-- Page content::START -->
	<div class="content_body">
	
	<?php boc_page_header();