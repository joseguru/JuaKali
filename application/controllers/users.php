<?php

class Users_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['users'] = User::all();
        return view('user.index', $data);
    }

	public function get_show($id)
    {
        $data['user'] = User::find($id);
        return view('user.show', $data);
    }

	public function get_edit($id)
    {
        $data['user'] = User::find($id);
        return view('user.edit', $data);
    }

    public function post_update()
    {
        return User::update_user();
    }

	public function get_delete()
    {

    }

}