<?php

class Jobs_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $user = Auth::user()->id;
        $data['jobs'] = Job::where_user_id($user)->get();
        return view('job.index', $data);
    }

	public function get_show()
    {
        return view('job.show');
    }

	public function get_new()
    {
        $data['locations'] = Location::location_dropdown();
        $data['categories'] = Category::category_dropdown();
        $data['attributes'] = array('class'=>'input-xlarge');

        return view('job.new', $data);
    }

	public function post_create()
    {
        Input::merge(array('user_id' => Auth::user()->id));
        return Job::create_job(Input::all());
    }

	public function get_edit()
    {

    }

	public function get_destroy()
    {

    }

	public function get_workers()
    {

    }

	public function get_employer()
    {

    }

}