<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Inherit from another theme
	|--------------------------------------------------------------------------
	|
	| Set up inherit from another if the file is not exists, this 
	| is work with "layouts", "partials", "views" and "widgets"
	|
	| [Notice] assets cannot inherit.
	|
	*/

	'inherit' => null, //default

	/*
	|--------------------------------------------------------------------------
	| Listener from events
	|--------------------------------------------------------------------------
	|
	| You can hook a theme when event fired on activities this is cool 
	| feature to set up a title, meta, default styles and scripts.
	|
	| [Notice] these event can be override by package config.
	|
	*/

	'events' => array(

		'before' => function($theme)
		{
			$theme->setTitle('Default Theme');
			$theme->setAuthor('Nick');
		},

		'asset' => function($asset)
		{
			$asset->themePath()->add([
										['bootstrap', 'vendor/bootstrap/css/bootstrap.min.css'],
										['all', 'vendor/fontawesome-free/css/all.min.css'],
										['clean-blog','css/clean-blog.min.css']

									 ]);

			// You may use elixir to concat styles and scripts.
			
			$asset->themePath()->add([
										['jquery', 'vendor/jquery/jquery.min.js'],
										['bootstrap','vendor/bootstrap/js/bootstrap.bundle.min.js'],
										['clean-blog','js/clean-blog.min.js']
									 ]);
			

			// Or you may use this event to set up your assets.
			/*
			$asset->themePath()->add('core', 'core.js');		
			$asset->add([
							['jquery', 'vendor/jquery/jquery.min.js'],
							['bootstrap','vendor/bootstrap/js/bootstrap.bundle.min.js'],
							['clean-blog','js/clean-blog.min.js']
							//['jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', ['jquery']]
						]);
			*/	
		},


		'beforeRenderTheme' => function($theme)
		{
			// To render partial composer
			
	        $theme->partialComposer('header', function($view){
	            $view->with('auth', Auth::user());
	        });
			

		},

		'beforeRenderLayout' => array(

			'mobile' => function($theme)
			{
				// $theme->asset()->themePath()->add('ipad', 'css/layouts/ipad.css');
			}

		)

	)

);