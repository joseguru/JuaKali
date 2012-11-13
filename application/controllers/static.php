<?php

class Static_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        return view('static.home');
    }

	public function get_about()
    {
        return view('static.about');
    }

	public function get_gettingstarted()
    {
        return view('static.gettingstarted');
    }

	public function get_blog()
    {
        return view('static.blog');
    }

}