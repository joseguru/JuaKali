<?php

class Locations_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        $data['location'] = Location::all();
        return self::view_response('location.index',$data);
    }

    public function get_new()
    {
        return self::view_response('location.new');
    }

    public function post_create()
    {
        $location = new Location(Input::all());
        if(Request::ajax())
            return $location->save();
        else
            if($location->save())
                Session::started('status_success', 'added');
            else
                Session::started('status_error', 'not_added');
            Redirect::to('location');
    }

    public function get_show($id)
    {
        return self::view_response('location.show', $data);
    }

    public function get_edit($id)
    {
        $data['location'] = Location::find($id);
        return self::view_response('location.edit', $data);
    }

    public function put_update($id)
    {
        $update = Location::update($id, Input::only(array('name', 'country_id')));
        if(Request::ajax())
        {
            return self::view_response('', $update);
        }
        ($update) ? Session::flash('status_success', 'updated'):
        Session::flash('status_error','not_updated');
        Redirect::back();
    }

    public function get_destroy($id)
    {
        $delete = Location::delete_location($id);
        ($delete) ?
        Session::flash('status_success', __('locations.deleted')) :
        Session::flash('status_error', __('locations.not_deleted'));
        if(Request::ajax())
        {
            return self::view_response('',$delete);
        }
        Redirect::back();
    }
}
