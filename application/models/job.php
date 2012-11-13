<?php

class Job extends Eloquent
{
    public function workers()
    {
        return $this->has_many_and_belongs_to('Worker');
    }

    public function user()
    {
        return $this->belongs_to('User');
    }

    public static function create_job($input)
    {
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
            return Redirect::to('jobs/new')->with_input()->with_errors($validation);
        }
        Job::create($input);
        return Redirect::to_route('jobs')->with('status_success',__('jobs.successful_creation'));
    }
}