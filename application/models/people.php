<?php

class Worker extends Eloquent
{
    public function category()
    {
        return $this->belongs_to('Category');
    }

    public function location()
    {
        return $this->belongs_to('Location');
    }

    public function jobs()
    {
        return $this->has_many('Job', 'worker_id');
    }
}