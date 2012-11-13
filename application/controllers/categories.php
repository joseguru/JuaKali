<?php

class Categories_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        $data['categories'] = Category::all();
        return view('category.index',$data);
    }

    public function get_new()
    {
        return view('category.new');
    }

    public function get_create()
    {
        // $category = new Category(array(
        //     'category_name'=>'Gardener'
        //     ));
        // return $category->save();
    }

	public function get_show()
    {
        $id = URI::segment(2);
        $data['category'] = $category = Category::find($id);
        return view('category.show', $data);
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

}