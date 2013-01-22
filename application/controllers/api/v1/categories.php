<?php

class Api_V1_Categories_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        $limit = Input::query('limit', 10);
        $categories = Category::take($limit)->get();
        return Response::eloquent($categories);
    }

    public function post_store()
    {
        return Response::eloquent(Category::create(
            array(
                'name' => Input::get('name'),
                'description' => Input::get('description')
            ))
        );
    }
}
