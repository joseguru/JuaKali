<?php

class Create_Workers_Table {

	public function up()
    {
		Schema::create('workers', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('phone')->unique();
			$table->integer('location_id');
			$table->integer('category_id');
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('workers');

    }

}