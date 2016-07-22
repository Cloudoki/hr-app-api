<?php

return array(
	
	/*
	|--------------------------------------------------------------------------
	| Oauth2-Stack uri's
	|--------------------------------------------------------------------------
	|
	| The Oauth2-Stack uri's are being used in both pageviews as e-mails.
	| You might want to edit this config in your .app/config/vendor environment.
	|
	*/ 
	
	'invite_url' => env('OAUTH_INVITE_URL'),
	'reset_url' =>  env('OAUTH_RESET_URL'),
	'privacy_url' => env('OAUTH_PRIVACY_URL'),
	'redirect_url' => env('OAUTH_REDIRECT_URL')
);
