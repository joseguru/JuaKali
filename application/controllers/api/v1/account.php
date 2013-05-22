<?php

class Api_V1_Account_Controller extends Base_Controller
{
    public $restful = true;

    public function post_auth()
    {
        return User::login();
    }

    public function post_store()
    {
        return User::createAccount();
    }

    public function post_availability($id)
    {
        return User::changeAvailability($id);
    }

    public function post_update($id)
    {
        return User::updateAccount($id);
    }
}
