<?php

class Workers_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['workers'] = Worker::all();
        return view('worker.index',$data);
    }

    public function get_new()
    {
        return view('worker.new');
        // $worker = new Worker;
        // $worker->name = "Jane Doe";
        // $worker->phone = "254722286085";
        // $worker->location_id = Location::where('location_name', 'LIKE', '%nairobi%')->first()->id;
        // $worker->category_id = Category::where('category_name', 'LIKE', '%gardener%')->first()->id;
        // return $worker->save();
    }

    public function post_create()
    {
        // Simulate Account creation on mobile

    }

	public function get_show()
	public function get_show($id)
    {
        $data['worker'] = Worker::find($id);
        if(Request::ajax())
        {
            return Response::json($data);
        }
        return view('worker.show', $data);
    }

	public function get_edit()
    {
        return view('worker.edit');
    }

	public function get_destroy()
    {

    }

	public function get_category()
    {
        return view('worker.category');
    }

    public function get_search()
    public function get_search($limit=20)
    {
        if (Request::ajax())
        {
            return Response::json(Worker::take($limit)->get());
        }
        return view('worker.search');
    }

}