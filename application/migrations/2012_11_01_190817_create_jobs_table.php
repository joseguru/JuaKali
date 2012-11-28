<?php

class Create_Jobs_Table {

	public function up()
    {
		Schema::create('jobs', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('category_id');
			$table->integer('user_id');
			$table->integer('location_id');
			$table->timestamp('start_date');
			$table->timestamp('end_date');
			$table->string('details');
			$table->integer('salary');
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('jobs');

    }

}