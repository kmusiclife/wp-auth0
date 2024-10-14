<?php

add_action( 'init', function(){
		
	$raw_current_url = (is_ssl() ? 'https':'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	$parsed_url = parse_url($raw_current_url);
    
	if( home_url($parsed_url['path']) == ROUTE_URL_LOGIN ){
		include('config.php');
	    $auth0->clear();
	    header("Location: " . $auth0->login(ROUTE_URL_CALLBACK));
	    exit;
    }
    if( home_url($parsed_url['path']) == ROUTE_URL_CALLBACK ){
	    include('config.php');
	    $auth0->exchange(ROUTE_URL_CALLBACK);
	    header("Location: " . ROUTE_URL_INDEX);
	    exit;
    }
    if( home_url($parsed_url['path']) == ROUTE_URL_LOGOUT ){
		include('config.php');
		header("Location: " . $auth0->logout(ROUTE_URL_INDEX));
		exit;
	}
    
});
