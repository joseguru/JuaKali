<?php

class Api_V1_Locations_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        $locations = Location::all();
        return Response::eloquent($locations);
    }
}
