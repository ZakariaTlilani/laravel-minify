<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Env Variable for MINIFY
	|--------------------------------------------------------------------------
	|
	*/
	'activate'       => env('MINIFY_ACTIVATE', true),  // Set this value to the false if you don't need minify your HTML

	'off_production'    => env('MINIFY_ONLY_PRODUCTION', false), //Set this value to the true if you want to enable it on production only

	// exclude route name for exclude from minify
	'exclude_route' => [
		// 'routeName'
	]
];
