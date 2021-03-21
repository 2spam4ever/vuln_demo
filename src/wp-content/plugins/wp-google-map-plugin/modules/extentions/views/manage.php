<?php
/**
 *
 * @author Flipper Code <hello@flippercode.com>
 * @version 4.1.3
 * @package Maps
 */

	$form = new WPGMP_Template();
	$form->set_header( esc_html__( 'Premium Add-Ons / Extentions For WP Google Maps Pro', 'wpgmp-google-map' ), array() );
	$extentions = array();

	$listing = array('url' => 'https://www.wpmapspro.com/product/listing-designs-for-google-maps', 'thumb' => 'listing-designs-on-google-maps.png');
	$search_widget = array('url' => 'https://www.wpmapspro.com/product/search-widget-for-google-maps', 'thumb' => 'search-widget-for-google-maps.jpg');
	$filter_by_viewport = array('url' => 'https://www.wpmapspro.com/product/filter-map-listing-by-viewport', 'thumb' => 'filter-map-listing-by-viewport.jpg');
	$frontend_submissions = array('url' => 'https://www.wpmapspro.com/product/frontend-submissions-on-google-maps', 'thumb' => 'frontend-submission-thumb.png');
	$user_location = array('url' => 'https://www.wpmapspro.com/product/user-location-on-google-maps', 'thumb' => 'User-Location-on-Google-Maps.jpg');
	$skin_color = array('url' => 'https://www.wpmapspro.com/product/google-maps-skin-color', 'thumb' => 'google-maps-skin-color.jpg');
	$migration = array('url' => 'https://www.wpmapspro.com/product/wp-google-maps-migration', 'thumb' => 'wp-google-maps-migration.jpg');
	$mysql = array('url' => 'https://www.wpmapspro.com/product/mysql-to-google-maps', 'thumb' => 'mysql-to-google-maps.jpg');
	$excel = array('url' => 'https://www.wpmapspro.com/product/excel-to-google-maps', 'thumb' => 'excel-to-google-maps.jpg');
	$airtable = array('url' => 'https://www.wpmapspro.com/product/airtable-data-on-google-maps', 'thumb' => 'airtable-to-googlemaps.jpg');
	$gravity = array('url' => 'https://www.wpmapspro.com/product/gravity-form-submission-to-google-maps', 'thumb' => 'gravity-form-thumb.jpg');
	$buddypress = array('url' => 'https://www.wpmapspro.com/product/buddypress-members-on-google-maps', 'thumb' => 'buddypress-thumb.png');
	$cf7 = array('url' => 'https://www.wpmapspro.com/product/contact-form-7-submissions-to-google-maps', 'thumb' => 'cf7-thumb.jpg');
	$bookmark = array('url' => 'https://www.wpmapspro.com/product/bookmarks-locations-on-googlemaps', 'thumb' => 'Bookmark-Locations-On-Google-Maps.jpg');
	$Itinerary = array('url' => 'https://www.wpmapspro.com/product/customer-itinerary-on-google-maps', 'thumb' => 'Customer-Itinerary-On-Google-Maps.jpg');
	$json = array('url' => 'https://www.wpmapspro.com/product/json-to-google-maps', 'thumb' => 'JSON-To-Google-Maps.jpg');
	$wpusers = array('url' => 'https://www.wpmapspro.com/product/wordpress-users-on-google-maps', 'thumb' => 'wordpress-users-thumb.png');
	$request = array('url' => 'https://www.wpmapspro.com/contact/', 'thumb' => 'request-customisation.png');

	$extentions[] =  $listing;
	$extentions[] =  $buddypress;
	$extentions[] =  $search_widget;
	$extentions[] =  $filter_by_viewport;
	$extentions[] =  $frontend_submissions;
	$extentions[] =  $user_location;
	$extentions[] =  $skin_color;
	$extentions[] =  $migration;
	$extentions[] =  $mysql;
	$extentions[] =  $excel;
	$extentions[] =  $airtable;
	$extentions[] =  $gravity;
	$extentions[] =  $bookmark;
	$extentions[] =  $cf7;
	$extentions[] =  $Itinerary;
	$extentions[] =  $json;
	$extentions[] =  $wpusers;
	$extentions[] =  $request;

	$html = '<div class="fc-row">';

	foreach($extentions as $key => $addon){

		if($key != 0 && $key % 4 == 0){ $html .= '</div><div class="fc-row">';	}
		
		$addon['url'] = add_query_arg( array(  'utm_source' => 'extensions', 'utm_medium' => 'liteplugin', 'utm_campaign' => 'pro_extensions'  ),  $addon['url'] );

		$html .= '<div class="fc-3">
					<a target="_blank" href="'.$addon['url'].'"><img src="http://img.flippercode.com/addon-thhumbnails/'.$addon['thumb'].'"/></a>
		   		 </div>';

	}
	
	$html .= '</div>';

	$html .= '<div class="fc-row view_all_extentions"><div class="fc-12"><a class="all_extention_link" href="https://www.wpmapspro.com/shop/?orderby=popularity" target="_blank">View All Extentions</a></div></div>';

	$form->add_element(
		'html', 'wpgmp_extentions_listing', array(
			'id'     => 'wpgmp_extentions_listing',
			'class'  => 'wpgmp_extentions_listing',
			'html' => $html,
			'before' => '<div class="fc-12">',
			'after' => '</div>'
		)
	);

    $form->render();
