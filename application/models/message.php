<?php

class Message extends Eloquent
{
    public static $timestamps = true;
    public $includes = array('user');

    public function user()
    {
        return $this->belongs_to('User');
    }
}
