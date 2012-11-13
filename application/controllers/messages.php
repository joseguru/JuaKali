<?php

class Messages_Controller extends Base_Controller {

	public $restful = true;

    function __construct()
    {
        $this->user = Auth::user()->id;
    }
	public function get_index()
    {
        $data['messages'] = Message::where_user_id_and_inbox($this->user, 1)->get();
        return View::make('message.index',$data);
    }

	public function get_show()
    {
        $user = $this->user;
        $id = URI::segment(2);
        $worker_id = Message::find($id)->worker_id;
        $data['worker'] = Worker::find($worker_id)->name;
        $data['message'] = Message::where_user_id($user)->find($id)->first();
        return View::make('message.show', $data);
    }

    public function get_conversation()
    {
        $user = $this->user;
        $data['message'] = $message = Message::find(URI::segment(2));
        $data['messages'] = Message::where_user_id_and_worker_id($user, $message->worker_id)->order_by('id','asc')->get();
        return View::make('message.conversation', $data);
    }

	public function get_send()
    {

    }

	public function get_delete()
    {

    }

}