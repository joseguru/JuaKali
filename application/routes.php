<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

// API category Resource
Route::get('api/v1/categories', array('as' => 'category', 'uses' => 'api.v1.categories@index'));
Route::get('api/v1/categories/(:any)', array('as' => 'category', 'uses' => 'api.v1.categories@show'));
Route::get('api/v1/categories/new', array('as' => 'new_category', 'uses' => 'api.v1.categories@new'));
Route::get('api/v1/categories/(:any)/edit', array('as' => 'edit_category', 'uses' => 'api.v1.categories@edit'));
Route::post('api/v1/categories', 'api.v1.categories@store');
Route::put('api/v1/categories/(:any)', 'api.v1.categories@update');
Route::delete('api/v1/categories/(:any)', 'api.v1.categories@destroy');

// location Resource
Route::get('api/v1/locations', array('as' => 'locations', 'uses' => 'api.v1.locations@index'));
Route::get('api/v1/locations/(:any)', array('as' => 'location', 'uses' => 'api.v1.locations@show'));
Route::get('api/v1/locations/new', array('as' => 'new_location', 'uses' => 'api.v1.locations@new'));
Route::get('api/v1/locations/(:any)/edit', array('as' => 'edit_location', 'uses' => 'api.v1.locations@edit'));
Route::post('api/v1/locations', 'api.v1.locations@store');
Route::put('api/v1/locations/(:any)', 'api.v1.locations@update');
Route::delete('api/v1/locations/(:any)', 'api.v1.locations@destroy');

// account Resource
Route::get('api/v1/account/(:any)', array('as' => 'account', 'uses' => 'api.v1.account@show'));
Route::get('api/v1/account/(:any)/edit', array('as' => 'edit_account', 'uses' => 'api.v1.account@edit'));
Route::post('api/v1/account', 'api.v1.account@store');
Route::post('api/v1/account/auth', 'api.v1.account@auth');
Route::post('api/v1/account/(:any)', 'api.v1.account@update');
Route::post('api/v1/account/availability/(:any)', 'api.v1.account@availability');
Route::delete('api/v1/account/(:any)', 'api.v1.account@destroy');

// worker Resource
Route::get('api/v1/workers', array('as' => 'workers', 'uses' => 'api.v1.workers@index'));
Route::get('api/v1/workers/(:any)', array('as' => 'worker', 'uses' => 'api.v1.workers@show'));
Route::get('api/v1/workers/create', array('as' => 'new_worker', 'uses' => 'api.v1.workers@create'));
Route::get('api/v1/workers/rating', array('as' => 'worker_rating', 'uses' => 'api.v1.workers@rating'));
Route::get('api/v1/workers/(:any)/edit', array('as' => 'edit_worker', 'uses' => 'api.v1.workers@edit'));
Route::post('api/v1/workers', 'api.v1.workers@store');
Route::post('api/v1/workers/search', 'api.v1.workers@search');
Route::post('api/v1/workers/rating', 'api.v1.workers@rating');
Route::put('api/v1/workers/(:any)', 'api.v1.workers@update');
Route::delete('api/v1/workers/(:any)', 'api.v1.workers@destroy');

// user Resource
Route::get('api/v1/users', array('as' => 'users', 'uses' => 'api.v1.users@index'));
Route::get('api/v1/users/(:any)', array('as' => 'user', 'uses' => 'api.v1.users@show'));
Route::get('api/v1/users/create', array('as' => 'new_user', 'uses' => 'api.v1.users@create'));
Route::get('api/v1/users/(:any)/edit', array('as' => 'edit_user', 'uses' => 'api.v1.users@edit'));
Route::post('api/v1/users', 'api.v1.users@store');
Route::post('api/v1/users/(:any)', 'api.v1.users@update');
Route::delete('api/v1/users/(:any)', 'api.v1.users@destroy');


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Router::register('GET /', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('auth');
});
