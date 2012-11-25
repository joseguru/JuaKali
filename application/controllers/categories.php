<?php

class Categories_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['categories'] = Category::all();
        return self::view_response('category.index', $data);
    }

    public function get_new()
    {
        return self::view_response('category.new');
    }

    public function get_create()
    {
        $category = new Category(Input::all());
        return self::view_response('', $category->save());
    }

	public function get_show($id)
    {
        $data['category'] = $category = Category::find($id);
        return self::view_response('category.show', $data);
    }

	public function get_edit($id)
    {
        $data['category'] = Category::find($id);
        return self::view_response('category.edit', $data);
    }

    public function put_update($id)
    {
        $update = Category::update($id, Input::all());
        ($update) ? Session::flash('status_success', __('categories.deleted')) :
        Session::flash('status_error', __('categories.not_deleted'));
        if(Request::ajax())
        {
            return self::view_response('',$delete);
        }
        redirect('workers');
    }

	public function get_destroy()
    {
        $delete = Worker::delete_category($id);
        ($delete) ? Session::flash('status_success', __('categories.deleted')) :
        Session::flash('status_error', __('categories.not_deleted'));
        if(Request::ajax())
        {
            return self::view_response('',$delete);
        }
        redirect('categories');
    }
}
