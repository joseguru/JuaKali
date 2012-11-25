<?php

class Users_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['users'] = User::all();
        return self::view_response('user.index', $data);
    }

	public function get_show($id)
    {
        $data['user'] = User::find($id);
        return self::view_response('user.show', $data);
    }

	public function get_edit($id)
    {
        $data['user'] = User::find($id);
        return self::view_response('user.edit', $data);
    }

    public function post_update()
    {
        return User::update_user();
    }

}
