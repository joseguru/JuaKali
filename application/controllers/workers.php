<?php

class Workers_Controller extends Base_Controller
{
    public $restful = true;
	public function get_index()
    {
        $data['workers'] = Worker::all();
        return self::view_response('worker.index', $data);
    }

    public function get_new()
    {
        return self::view_response('worker.new');
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

    public function get_edit($id)
    {
        $data['worker'] = Worker::find($id);
        return self::view_response('worker.edit', $data);
    }

    public function put_update($id)
    {
        $input = Input::all();
        $worker = Worker::update_worker($id,$input);
        return self::view_response('',$worker);
    }

    public function get_destroy($id)
    {
        $delete = Worker::delete_worker($id);
        ($delete) ? Session::flash('status_success', __('workers.deleted')) :
        Session::flash('status_error', __('workers.not_deleted'));
        if(Request::ajax())
        {
            return self::view_response('',$delete);
        }
        redirect('workers');
    }

    public function get_search()
    {
        $params = Input::get();
        $data['workers'] = Worker::search($params);
        dd($data);
        return self::view_response('worker.search', $data);
    }

}
