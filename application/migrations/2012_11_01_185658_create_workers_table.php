<?php

class Create_Workers_Table {

	public function up()
    {
		Schema::create('workers', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
			$table->integer('location_id');
            $table->integer('category_id');
			$table->integer('available')->not_null();
			$table->timestamps();
	});

    }

	public function down()
    {
		Schema::drop('workers');

    }

}
