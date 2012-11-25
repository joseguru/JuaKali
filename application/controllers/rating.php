<?php

class Rating_Controller extends Base_Controller
{

    public $restful = true;

    public function get_index()
    {
        $data['ratings'] = Rating::all();
        return self::view_response('rating.index', $data);
    }

    public function get_show($id)
    {
        $rating = Rating::find($id);
        return self::view_response('rating.show', $rating);
    }

    public function get_new()
    {
        return self::view_response('rating.new');
    }

    public function post_create()
    {
        $rating = new Rating(Input::only('user_id','worker_id','rating'));
        $save = $rating->save();
        if(Request::ajax())
        {
            return self::view_response('', $save);
        }
        elseif($save)
        {
            Redirect::back();
        }
        Redirect::to('rating/new');
    }

    public function put_update($id)
    {
        $rating = Rating::find($id);
        $save = Rating::update($id, $data);
        if(Request::ajax())
        {
            return Response::json($save);
        }
        else
        {
            if($save)
            {
                Redirect::to_route('rating@show', $id);
            }
            Redirect::back();
        }
    }

    public function get_edit($id)
    {
        $data['rating'] = Rating::find($id);
        return view_response('rating.edit', $data);
    }

    public function get_destroy($id)
    {
        $delete = Rating::delete($id);
        if(Request::ajax())
            return view_response('', $delete);
        else
            if($delete)
                Session::flash('status_success', __('rating.deleted'));
            else
                Session::flash('status_error'), __('rating.not_deleted');
            Redirect::back();
    }
}
