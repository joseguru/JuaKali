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
        return self::view_response('message.index',$data);
    }

	public function get_show()
    {
        $user = $this->user;
        $id = URI::segment(2);
        $worker_id = Message::find($id)->worker_id;
        $data['worker'] = Worker::find($worker_id)->name;
        $data['message'] = Message::where_user_id($user)->find($id)->first();
        return self::view_response('message.show', $data);
    }

    public function get_conversation()
    {
        $user = $this->user;
        $data['message'] = $message = Message::find(URI::segment(2));
        $data['messages'] = Message::where_user_id_and_worker_id($user, $message->worker_id)->order_by('id','asc')->get();
        return self::view_response('message.conversation', $data);
    }
}
