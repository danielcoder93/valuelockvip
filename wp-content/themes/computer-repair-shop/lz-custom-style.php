<?php 

	$computer_repair_shop_custom_style = '';

	// Logo Size
	$computer_repair_shop_logo_top_padding = get_theme_mod('computer_repair_shop_logo_top_padding');
	$computer_repair_shop_logo_bottom_padding = get_theme_mod('computer_repair_shop_logo_bottom_padding');
	$computer_repair_shop_logo_left_padding = get_theme_mod('computer_repair_shop_logo_left_padding');
	$computer_repair_shop_logo_right_padding = get_theme_mod('computer_repair_shop_logo_right_padding');

	if( $computer_repair_shop_logo_top_padding != '' || $computer_repair_shop_logo_bottom_padding != '' || $computer_repair_shop_logo_left_padding != '' || $computer_repair_shop_logo_right_padding != ''){
		$computer_repair_shop_custom_style .=' .logo {';
			$computer_repair_shop_custom_style .=' padding-top: '.esc_attr($computer_repair_shop_logo_top_padding).'px; padding-bottom: '.esc_attr($computer_repair_shop_logo_bottom_padding).'px; padding-left: '.esc_attr($computer_repair_shop_logo_left_padding).'px; padding-right: '.esc_attr($computer_repair_shop_logo_right_padding).'px;';
		$computer_repair_shop_custom_style .=' }';
	}

	// Header Image
	$header_image_url = computer_repair_shop_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$computer_repair_shop_custom_style .=' #inner-pages-header {';
			$computer_repair_shop_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat;';
		$computer_repair_shop_custom_style .=' }';
		$computer_repair_shop_custom_style .=' .header-overlay {';
			$computer_repair_shop_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$computer_repair_shop_custom_style .=' }';
	} else {
		$computer_repair_shop_custom_style .=' #inner-pages-header {';
			$computer_repair_shop_custom_style .=' background:linear-gradient(0deg,#ccc,#0a0607 80%) no-repeat; ';
		$computer_repair_shop_custom_style .=' }';
	}

	$computer_repair_shop_slider_hide_show = get_theme_mod('computer_repair_shop_slider_hide_show',false);
	if( $computer_repair_shop_slider_hide_show == true){
		$computer_repair_shop_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$computer_repair_shop_custom_style .=' display:none;';
		$computer_repair_shop_custom_style .=' }';
	}