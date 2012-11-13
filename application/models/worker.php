<?php

class Worker extends Eloquent
{
    public $includes = array( 'messages', 'category', 'location', 'jobs' );

    public function jobs()
    {
        return $this->has_many_and_belongs_to('Job');
    }

    public function location()
    {
        return $this->belongs_to('Location');
    }

    public function category()
    {
        return $this->belongs_to('Category');
    }

    public function messages()
    {
        return $this->has_many('Message');
    }
}