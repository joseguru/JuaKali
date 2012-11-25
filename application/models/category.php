<?php

class Category extends Eloquent
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

    public function user()
    {
        return $this->belongs_to('User');
    }

    public static function category_dropdown()
    {
        foreach (Category::all() as $key => $value)
        {
            $category[$value->id] = $value->name;
        }
        return $category;
    }
}
