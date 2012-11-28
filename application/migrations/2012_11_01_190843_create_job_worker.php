<?php

class Create_Job_Worker {

	public function up()
    {
		Schema::create('job_worker', function($table) {
			$table->increments('id');
			$table->integer('job_id');
			$table->integer('worker_id');
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('job_worker');

    }

}