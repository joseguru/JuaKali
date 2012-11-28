<?php

class Jobs_Controller extends Base_Controller {

	public $restful = true;
    public $layout = 'account';

    function __construct()
    {
        parent::__construct();
    }
	public function get_index()
    {
        $user = Auth::user()->id;
        $data['jobs'] = Job::where_user_id($user)->get();
        return self::view_response('job.index', $data);
    }

	public function get_show()
    {
        $data['job'] = Job::find($id);
        return self::view_response('job.show', $data);
    }

	public function get_new()
    {
        $data['locations'] = Location::location_dropdown();
        $data['categories'] = Category::category_dropdown();
        $data['attributes'] = array('class'=>'input-xlarge');

        return self::view_response('job.new', $data);
    }

	public function post_create()
    {
        Input::merge(array('user_id' => Auth::user()->id));
        return Job::create_job(Input::all());
    }

	public function get_edit($id)
    {
        $job = Job::find($id);
    }

	public function get_destroy($id)
    {
        Job::delete($id);
    }
}
