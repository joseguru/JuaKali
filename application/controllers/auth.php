<?php

class Auth_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {
        if(Auth::check())
        {
            return Redirect::to('dashboard');
        }
        return view('auth.index');
    }

	public function post_create()
    {
        $rules = array(
            'email' => 'unique:users|email|required',
            'username' => 'unique:users|required',
            'password' => 'required|confirmed|min:5',
            );

        $validation = Validator::make(Input::all(), $rules);

        if ($validation->fails())
        {
            return Redirect::to('auth')->with_input()->with_errors($validation);
        }

        $input = Input::all();
        $user = new User;
        $user->email = $input['email'];
        $user->username = $input['username'];
        $user->password = Hash::make($input['password']);
        $user->save();

        Auth::login($user);
        Session::flash('status_success', 'Logged in, Complete Profile');
        return Redirect::to('dashboard');
    }

    public function post_new()
    {
        $input = Input::all();
        $rules = array(
            'user_email' => 'required|email',
            'user_password'  => 'required'
            );
        $validation = Validator::make($input, $rules);
        $credentials = array(
            'username' => Input::get('user_email'),
            'password' => Input::get('user_password'),
        );

        if ($validation->fails())
        {
            return Redirect::to('auth')->with_input()->with_errors($validation);
        }

        if(Auth::attempt($credentials))
        {
            $username = Auth::user()->username;
            Session::flash('status_success', 'Logged in, ' . $username);
            return Redirect::to('dashboard');
        }
        else
        {
            Session::flash('status_error', 'Your email or password is invalid - please try again.');
            return Redirect::to('auth');
        }

    }

    public function get_session($provider)
    {
        Bundle::start('laravel-oauth2');
        // Facebook
        if($provider === 'facebook')
        {
            $provider = OAuth2::provider($provider, array(
                'id' => '265214620168679',
                'secret' => '6f1a1589d23a932f93af75236f386d34',
            ));
        }

        if($provider === 'twitter')
        {

        }

        if ( ! isset($_GET['code']))
        {
            // By sending no options it'll come back here
            return $provider->authorize();
        }
        else
        {
            // Howzit?
            try
            {
                $params = $provider->access($_GET['code']);

                    $token = new OAuth2_Token_Access(array('access_token' => $params->access_token));
                    $user = $provider->get_user_info($token);

                // Here you should use this information to A) look for a user B) help a new user sign up with existing data.
                // If you store it all in a cookie and redirect to a registration page this is crazy-simple.
                echo "<pre>";
                var_dump($user);
            }

            catch (OAuth2_Exception $e)
            {
                show_error('That didnt work: '.$e);
            }

        }
    }

    public function get_destroy()
    {
        Auth::logout();
        return Redirect::to('auth');
    }

}