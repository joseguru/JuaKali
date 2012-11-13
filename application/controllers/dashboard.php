<?php

class Dashboard_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        return view('dashboard.index');
    }

	public function get_show()
    {

    }

	public function get_edit()
    {

    }

}