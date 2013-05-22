<?php

class Api_V1_Jobs_Controller extends Base_Controller
{

	public $restful = true;

    /**
     * Show all Jobs
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public function get_index()
    {
        return Response::eloquent(Job::all());
    }

    /**
     * Create Job
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @return json
     */
    public function post_store()
    {
        return Job::createJob();
    }

    /**
     * Show a Job
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id Job ID
     * @return json
     */
    public function get_show($id)
    {
        return Job::findJob($id);
    }

    /**
     * Update Job Details
     *
     * @author mogetutu <imogetutu@gmail.com>
     * @param  int $id Job ID
     * @return json
     */
    public function post_update($id)
    {
        return Job::updateJob($id);
    }

    public function get_destroy($id, $user_id)
    {
        return Job::deleteJob($id, $user_id);
    }

    public static function post_search()
    {
        return Job::searchJob();
    }

}
