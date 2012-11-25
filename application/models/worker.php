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

    public function delete_worker($id)
    {
        return Worker::delete($id);
    }
}
