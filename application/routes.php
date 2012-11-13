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

Route::get('/', function()
{
    return view('static.home');
});
// Route::controller(Controller::detect());
// Static Site Resources
Route::get('home', array('as' => 'home', 'uses' => 'static@index'));
Route::get('getting-started', array('as' => 'getting-started', 'uses' => 'static@gettingstarted'));
Route::get('about', array('as' => 'about', 'uses' => 'static@about'));
Route::get('blog', array('as' => 'blog', 'uses' => 'static@blog'));
Route::get('contact', array('as' => 'contact', 'uses' => 'static@contact'));

// user Resource
Route::get('users', array('as' => 'users', 'uses' => 'users@index'));
Route::get('users/(:any)', array('as' => 'user', 'uses' => 'users@show'));
Route::get('users/new', array('as' => 'new_user', 'uses' => 'users@new'));
Route::get('users/(:any)/edit', array('as' => 'edit_user', 'uses' => 'users@edit'));
Route::post('users', 'users@create');
Route::put('users/(:any)', 'users@update');
Route::post('users/(:any)', 'users@update');
Route::delete('users/(:any)', 'users@destroy');

// auth Resource
Route::get('auth', array('as' => 'auth', 'uses' => 'auth@index'));
Route::post('auth/new', array('as' => 'new_auth', 'uses' => 'auth@new'));
Route::post('auth', 'auth@create');
Route::get('auth/session', 'auth@session');
Route::get('auth/destroy', array('as' => 'logout', 'uses' => 'auth@destroy'));

// dashboard Resource
Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'dashboard@index'));
Route::get('dashboard/(:any)', array('as' => 'dashboard', 'uses' => 'dashboard@show'));
Route::get('dashboard/new', array('as' => 'new_dashboard', 'uses' => 'dashboard@new'));
Route::get('dashboard/(:any)/edit', array('as' => 'edit_dashboard', 'uses' => 'dashboard@edit'));
Route::post('dashboard', 'dashboard@create');
Route::put('dashboard/(:any)', 'dashboard@update');
Route::delete('dashboard/(:any)', 'dashboard@destroy');

// message Resource
Route::get('messages', array('as' => 'messages', 'uses' => 'messages@index'));
Route::get('messages/(:any)', array('as' => 'message', 'uses' => 'messages@show'));
Route::get('messages/new', array('as' => 'new_message', 'uses' => 'messages@new'));
Route::get('messages/(:any)/edit', array('as' => 'edit_message', 'uses' => 'messages@edit'));
Route::get('messages/(:any)/category', array('as' => 'category_message', 'uses' => 'messages@category'));
Route::get('messages/(:any)/reply', array('as' => 'reply_message', 'uses' => 'messages@reply'));
Route::get('messages/(:any)/conversation', array('as' => 'conversation_message', 'uses' => 'messages@conversation'));
Route::post('messages', 'messages@create');
Route::put('messages/(:any)', 'messages@update');
Route::delete('messages/(:any)', 'messages@destroy');

// setting Resource
Route::get('settings', array('as' => 'settings', 'uses' => 'settings@index'));
Route::get('settings/(:any)', array('as' => 'setting', 'uses' => 'settings@show'));
Route::get('settings/new', array('as' => 'new_setting', 'uses' => 'settings@new'));
Route::get('settings/(:any)/edit', array('as' => 'edit_setting', 'uses' => 'settings@edit'));
Route::post('settings', 'settings@create');
Route::put('settings/(:any)', 'settings@update');
Route::delete('settings/(:any)', 'settings@destroy');

// categories Resource
Route::get('categories', array('as' => 'categories', 'uses' => 'categories@index'));
Route::get('categories/(:any)', array('as' => 'category', 'uses' => 'categories@show'));
Route::get('categories/new', array('as' => 'new_category', 'uses' => 'categories@new'));
Route::get('categories/(:any)/edit', array('as' => 'edit_category', 'uses' => 'categories@edit'));
Route::post('categories', 'categories@create');
Route::put('categories/(:any)', 'categories@update');
Route::delete('categories/(:any)', 'categories@destroy');

// workers Resource
Route::get('workers', array('as' => 'workers', 'uses' => 'workers@index'));
Route::get('workers/(:any)', array('as' => 'worker', 'uses' => 'workers@show'));
Route::get('workers/new', array('as' => 'new_worker', 'uses' => 'workers@new'));
Route::get('workers/(:any)/edit', array('as' => 'edit_worker', 'uses' => 'workers@edit'));
Route::get('workers/(:any)/category', array('as' => 'category_worker', 'uses' => 'workers@category'));
Route::get('workers/search', array('as' => 'search_worker', 'uses' => 'workers@search'));
Route::post('workers', 'workers@create');
Route::post('workers/(:any)', array('as' => 'search_worker', 'uses' => 'workers@search'));
Route::put('workers/(:any)', 'workers@update');
Route::delete('workers/(:any)', 'workers@destroy');

// job Resource
Route::get('jobs', array('as' => 'jobs', 'uses' => 'jobs@index'));
Route::get('jobs/(:any)', array('as' => 'job', 'uses' => 'jobs@show'));
Route::get('jobs/new', array('as' => 'new_job', 'uses' => 'jobs@new'));
Route::get('jobs/(:any)/edit', array('as' => 'edit_job', 'uses' => 'jobs@edit'));
Route::post('jobs', 'jobs@create');
Route::put('jobs/(:any)', 'jobs@update');
Route::delete('jobs/(:any)', 'jobs@destroy');

// location Resource
Route::get('locations', array('as' => 'locations', 'uses' => 'locations@index'));
Route::get('locations/(:any)', array('as' => 'location', 'uses' => 'locations@show'));
Route::get('locations/new', array('as' => 'new_location', 'uses' => 'locations@new'));
Route::get('locations/(:any)/edit', array('as' => 'edit_location', 'uses' => 'locations@edit'));
Route::post('locations', 'locations@create');
Route::put('locations/(:any)', 'locations@update');
Route::delete('locations/(:any)', 'locations@destroy');

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

Route::filter('not_auth', function()
{
	if (Auth::guest()) return Redirect::to('auth');
});

Route::filter('auth', function()
{
    if (Auth::guest() == false) return Redirect::to('dashboard');
});