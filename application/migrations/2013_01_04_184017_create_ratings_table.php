<?php

class Create_Ratings_Table {    

	public function up()
    {
		Schema::create('ratings', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('worker_id');
			$table->integer('rating');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('ratings');

    }

}