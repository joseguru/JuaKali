<?php

class Api_V1_Workers_Controller extends Base_Controller
{
    public $restful = true;

    public function get_index()
    {
        // Get Workers
        return User::getWorkers();
    }

    public function get_show($id)
    {
        return User::getWorker($id);
    }

    public function post_rating()
    {
        return Rating::createRating();
    }

    public function post_search()
    {
        // Search Workers
        return User::searchWorker();
    }

}
