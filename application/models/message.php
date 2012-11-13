<?php

class Message extends Eloquent
{
    public $includes = array('user','worker');

    public function user()
    {
        return $this->belongs_to('User');
    }

    public function worker()
    {
        return $this->belongs_to('Worker');
    }
}