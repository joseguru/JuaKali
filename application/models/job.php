<?php

class Job extends Eloquent
{
    public static $timestamps = true;
    public $includes = array('user','location','category');

    /**
     * Worker Relation
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return object
     */
    public function workers()
    {
        return $this->has_many_and_belongs_to('Worker');
    }
    /**
     * User Relation
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return object
     */
    public function user()
    {
        return $this->belongs_to('User');
    }
    /**
     * Location Relation
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return object
     */
    public function location()
    {
        return $this->belongs_to('Location');
    }
    /**
     * Category Relation
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return object
     */
    public function category()
    {
        return $this->belongs_to('Category');
    }

    public function get_start_date()
    {
        $start_date = new DateTime($this->get_attribute('start_date'));
        return $start_date->format('Y-m-d');
    }

    public function get_end_date()
    {
        $start_date = new DateTime($this->get_attribute('end_date'));
        return $start_date->format('Y-m-d');
    }

    /**
     * Create a Job
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public static function createJob()
    {
        $input = Input::all();
        $rules = array(
            'title'       => 'required|min:2',
            'category_id' => 'required',
            'location_id' => 'required',
            'start_date'  => 'required|after:'.date('Y-m-d'),
            'end_date'    => 'required|after:'.date('Y-m-d'),
            'details'     => 'required',
            'salary'      => 'required|min:3'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Redirect::json($validation->errors);
        }
        Job::create($input);

        return Response::eloquent(Job::create($input));
    }

    /**
     * Find Job by id only
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id Job ID
     * @return json
     */
    public static function findJob($id)
    {
        $job = static::find($id);
        if($job)
        {
            return Response::eloquent($job);
        }

        return Response::json(' Job not Found! ');
    }

    /**
     * Update Job details
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id Job ID
     * @return json
     */
    public static function updateJob($id)
    {
        $job = static::find($id);
        Input::merge(array('id' => $id));
        $input = Input::all();
        $rules = array(
                'id'          => 'required|exists:jobs,id',
                'title'       => 'required|min:2',
                'category_id' => 'required',
                'location_id' => 'required',
                'start_date'  => 'required|after:'.date('Y-m-d'),
                'end_date'    => 'required|after:'.date('Y-m-d'),
                'details'     => 'required',
                'salary'      => 'required|min:3'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }

        Job::update(Input::all());

        return Response::eloquent($job);
    }

    /**
     * Delete a job
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id Job ID
     * @return json
     */
    public static function deleteJob($id, $user_id)
    {
        $job = Job::where_id_and_user_id($id, $user_id)->first();
        if($job)
        {
            $job->delete();
            return Response::json('Record Deleted');
        }

        return Response::json('Record not Found!');
    }

    public static function searchJob()
    {
        $title = Input::get('title');
        $location_id = Input::get('location_id');
        $category_id = Input::get('category_id');

        if($title and $location_id and $category_id)
        {
            $jobs = static::where('title', 'LIKE', '%'.$title.'%')->where_location_id_and_category_id($title, $location_id, $category_id)->get();
        }

        if($location_id and $category_id)
        {
            $jobs = static::where_location_id_and_category_id($category_id, $location_id)->get();
        }

        if($location_id or $category_id)
        {
            $jobs = static::where_location_id_or_category_id($category_id, $location_id)->get();
        }

        if($location_id or $category_id or $title)
        {
            $jobs = static::where('title', 'LIKE', '%'.$title.'%')->where_location_id_or_category_id($location_id, $category_id)->get();
        }

        if($title)
        {
            $jobs = static::where('title', 'LIKE', '%'.$title.'%')->get();
        }

        return Response::eloquent($jobs);
    }
}
