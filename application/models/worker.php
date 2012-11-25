<?php

class Worker extends Eloquent
{
    public static $timestamps = true;
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

    public function rating()
    {
        return $this->has_many('Rating');
    }

    public static function create_worker($input)
    {
        // Simulate Account creation on mobile
            $rules = array(
            'email' => 'unique:users|email|required',
            'username' => 'unique:users|required',
            'password' => 'required|confirmed|min:5',
            );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::to('workers/new')->with_input()->with_errors($validation);
        }

        $input = Input::all();
        $worker = new Worker;
        $worker->email = $input['email'];
        $worker->username = $input['username'];
        $worker->password = Hash::make($input['password']);
        $worker->save();

        Auth::login($worker);
        Session::flash('status_success', __('workers.welcome', array('name'=>$worker->username)));
        return Redirect::to('workers');
    }

    public static function update_worker($id, $input)
    {
        $update = Worker::update($id, $input);
        if($update)
            Session::flash('status_success', __('workers.updated'));
        else
            Session::flash('status_error', __('workers.not_updated'));
        return $update;
    }

    public static function search($params=array())
    {
        $limit = (isset($params['limit'])) ? $params['limit'] : 20;
        $workers = Worker::where(function($query) use($params)
        {
            $phone    = (isset($params['phone'])) ? $params['phone'] : null;
            $name     = (isset($params['name'])) ? $params['name'] : null;
            $category = (isset($params['category'])) ? $params['category'] : null;
            $location = (isset($params['location'])) ? $params['location'] : null;
            if($name)
                $query->where('name', 'like', "%{$name}%");
            if($phone)
                $query->where('name', 'like', "%{$phone}%");
            if($category)
                $query->where_category_id($category);
            if($location)
                $query->where_location_id($location);

        })->take($limit)->get();
        return $workers;
    }

    public function delete_worker($id)
    {
        return Worker::delete($id);
    }
}
