<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

// check your subscriptions 
// GET https://api.instagram.com/v1/subscriptions?client_secret=CLIENT-SECRET&client_id=CLIENT-ID
// easy to do in API console - http://instagram.com/developer/api-console/

// to delete all hashtags subscription
// DELETE https://api.instagram.com/v1/subscriptions?client_secret=CLIENT-SECRET&object=all&client_id=CLIENT-ID
// easy to do in API console - http://instagram.com/developer/api-console/

// these are not required
$config['instagram_client_name']	= '';
$config['instagram_description']	= '';

// a quick configuration for the Subscribe controller (required)
$config['website_callback_url']	= 'http://insta.dev/';

// these are required
$config['instagram_client_id']		= 'fa0152480ec64d9d980e782c0e765fee';
$config['instagram_client_secret']	= '3b568bbb0f5f45f0b7453d4b71032b83';
$config['instagram_callback_url']	= 'http://insta.dev/';
$config['instagram_website']		= 'http://insta.dev/';



// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= FALSE;