<?php

class User extends Eloquent {

    public static $timestamps = true;
    public static $hidden = array('password');

    public function messages()
    {
        return $this->has_many('Message');
    }

    public function ratings()
    {
        return $this->has_many('Rating');
    }

    public function workerRatings()
    {
        return $this->has_many('Rating', 'worker_id');
    }

    public function roles()
    {
        return $this->has_many_and_belongs_to('Role');
    }

    /**
     * Calculated Date of Birth
     *
     * @return string Age since Birth
     */
    public function get_dob()
    {
        $dob = new DateTime($this->get_attribute('dob'));
        $end = new DateTime(date('Y-m-d'));
        $age = $end->diff($dob)->format('%Y');
        return $age;
    }
    /**
     * Update User Account Details
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return void
     */
    public static function updateUser()
    {
        $id = Auth::user()->id;
        $rules = array(
                'username' => 'required|min:2',
                'email'    => 'required|email',
            );
        $validation = Validator::make(Input::except('avatar'), $rules);
        if($validation->fails())
        {
            return Redirect::to_route('edit_user', $id)->with_input()->with_errors($validation);
        }
        $user = User::find($id);
        $user->update($id, Input::except('avatar'));

        return Redirect::to_route('edit_user', $id)->with('success_status', 'Profile Updated.');
    }
    /**
     * Create Account
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return array [Json]
     */
    public static function createAccount()
    {
        $input = array(
            'name'     => Input::get('name'),
            'phone'    => Input::get('phone'),
            'password' => Input::get('password'),
            'bio'      => Input::get('bio'),
            'dob'      => Input::get('dob')
            );
        $rules = array(
                'name'     => 'required|min:2',
                'phone'    => 'required|unique:users,phone',
                'password' => 'required'
            );
        $validation = Validator::make($input, $rules);

        if($validation->fails())
        {
            return Response::json($validation->errors);
        }

        $role_id = Input::get('role_id');
        $user = User::create(
                    array(
                        'name'        => Input::get('name'),
                        'email'       => Input::get('email'),
                        'phone'       => Input::get('phone'),
                        'password'    => Hash::make(Input::get('password')),
                        'location_id' => Input::get('location_id'),
                        'category_id' => Input::get('category_id'),
                        'bio'         => Input::get('bio'),
                        'dob'         => Input::get('dob')

                    )
                );
        $user->roles()->attach($role_id);
        return Response::eloquent($user);
    }

    /**
     * Get User by ID
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id User ID
     * @return json
     */
    public static function getUser($id)
    {
        $input = array('id' => $id);
        $rules = array('id' => 'required|exists:users,id');
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }

        return Response::eloquent(User::find($id));
    }

    /**
     * Update User Account if not logged in
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id User ID
     * @return json
     */
    public static function updateAccount($id)
    {
        $input = array('id' => $id, 'dob' => Input::get('dob'));
        $rules = array(
                'id' => 'required|exists:users,id',
                'dob' => 'before:1995-01-01'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }
        User::update($id, Input::all());
        return Response::eloquent(User::find($id));
    }

    /**
     * Login user
     * @return array
     */
    public static function login()
    {
        $input = Input::all();
        $rules = array(
                'phone' => 'required|exists:users,phone',
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors());
        }
        $credentials = array('username' => Input::get('phone'), 'password' => Input::get('password'));

        if(Auth::attempt($credentials))
        {
           return Response::eloquent(Auth::user());
        }

        return Response::json(Auth::attempt($credentials));
    }
    /**
     * Change Availability of a User
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id User id
     * @return array
     */
    public static function changeAvailability($id)
    {
        $input = Input::all();
        $rules = array(
            'availability' => 'required|integer|between:0,1'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }
        User::update($id, $input);
        $user = User::find($id);
        return Response::eloquent($user);
    }
    /**
     * Update User Rating
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id
     * @return boolean
     */
    public static function updateRating($id)
    {
        $input = array('id' => $id);
        $rules = array(
                'id' => 'required|exists:users,id'
            );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            return Response::json($validation->errors);
        }

        $ratings = Rating::where_worker_id($id)->get();
        foreach ($ratings as $rating) {
            $rate[] = $rating->rating;
        }
        // Update user account with average rating
        $avg = (array_sum($rate) / count($rate));

        $affected = DB::table('users')->where('id', '=', $id)->update(array('rating' => $avg));

        return $affected;
    }

    /**
     * Get Worker by ID
     *
     * @author mogetutu <imogetutu>
     * @param  int $id
     * @return json
     */
    public static function getWorker($id)
    {
        $role = Role::where_name('worker')->first();
        $worker = $role->users()->where_user_id($id)->get();

        if($worker)
        {
            return Response::eloquent($worker);
        }
        return Response::json(array('error'=>'Worker Doesn\'t Exists'));
    }

    /**
     * Get ALL Workers
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public static function getWorkers()
    {
        $role = Role::where_name('worker')->first();
        $workers = $role->users()->get();

        return Response::eloquent($workers);
    }

    /**
     * Search for a worker
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public static function searchWorker()
    {
        $role = Role::where_name('worker')->first();
        $location_id = Input::get('location_id');
        $category_id = Input::get('category_id');
        if($location_id && $category_id)
        {
            $workers = $role->users()->where_location_id_and_category_id($location_id, $category_id)->get();
        }
        else
        {
            $workers = $role->users()->get();
        }
        if(!$category_id && $location_id)
        {
            $workers = $role->users()->where_location_id($location_id)->get();
        }
        if($category_id && !$location_id)
        {
            $workers = $role->users()->where_location_id($category_id)->get();
        }

        return Response::eloquent($workers);
    }

}
