<?php

class Locations_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        $data['location'] = Location::all();
        return view('location.index',$data);
    }

    public function get_new()
    {
        // $location = new Location;
        // $location->location_name = 'Nairobi';
        // return $location->save();
    }
}