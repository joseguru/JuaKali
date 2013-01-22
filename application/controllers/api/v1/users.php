<?php

class Api_V1_Users_Controller extends Base_Controller
{
    public $restful = true;

    /**
     * Get User by ID
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id
     * @return json
     */
    public function get_show($id)
    {
        return User::getUser($id);
    }

    /**
     * Update User Account
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id User ID
     * @return json
     */
    public function post_update($id)
    {
        return User::updateAccount($id)
    }

}
