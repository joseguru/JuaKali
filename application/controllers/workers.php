<?php

class Workers_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['workers'] = Worker::all();
        return self::view_response('worker.index', $data);
    }

    public function get_new()
    {
        return view('worker.new');
    }

    public function post_create()
    {
        return Worker::create_worker(Input::post());
    }

	public function get_show($id)
    {
        $data['worker'] = Worker::find($id);
        return self::view_response('worker.show', $data);
    }

	public function get_edit()
    {
        return view('worker.edit');
    }

	public function get_destroy($id)
    {
        $delete = Worker::delete_worker($id);
        if(Request::ajax())
        {
            return $delete;
        }
        else
        {
            ($delete) ? Session::flash('status_success', __('workers.deleted')) :
            Session::flash('status_error', __('workers.not_deleted'));
            redirect('workers');
        }

    }

	public function get_category()
    {
        return view('worker.category');
    }

    public function get_search($limit=20)
    {
        if (Request::ajax())
        {
            return Response::json(Worker::take($limit)->get());
        }
        return view('worker.search');
    }

}
