<?php

class Location extends Eloquent
{
    public static $timestamps = true;
    public function workers()
    {
        return $this->has_many('Worker');
    }

    public function jobs()
    {
        return $this->has_many('Job');
    }

    public static function location_dropdown()
    {
        foreach (Location::all() as $key => $value)
        {
            $location[$value->id] = $value->name;
        }
        return $location;
    }

    public static function delete_location($id)
    {
        return Location::delete($id);
    }
}
