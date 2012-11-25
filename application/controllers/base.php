<?php

class Base_Controller extends Controller {

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

	public function __construct()
	{
		 //Assets
        Asset::add('jquery', 'js/jquery-1.8.0 700.min.js');
        Asset::add('bootstrap-js', 'js/bootstrap.min.js');
        Asset::add('script-js', 'js/script.js');

        Asset::add('bootstrap-css', 'css/bootstrap.min.css');
        Asset::add('bootstrap-css-responsive', 'css/bootstrap-responsive.min.css', 'bootstrap-css');
        Asset::add('font-style-css', 'css/font-awesome.css');
        Asset::add('red-css', 'css/red.css');
        Asset::add('style-css', 'css/base.css');


        //Filters
        $class = get_called_class();
        switch($class) {
            case 'Users_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Dashboard_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Messages_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Workers_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Categories_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Jobs_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Locations_Controller':
                $this->filter('before', 'not_auth');
                break;

            case 'Auth_Controller':
                $this->filter('before', 'auth')->only(array('new'));
                break;

            default:
                $this->filter('before', 'auth');
                break;
        }
        parent::__construct();
	}

    public function view_response($view, $data=null)
    {
        return (Request::ajax()) ? Response::json($data) : view($view, $data);
    }

}
