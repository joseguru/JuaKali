<?php

class Create_Countries_Table {

	public function up()
    {
		Schema::create('countries', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
        });
        DB::table('countries')->insert(array(
            'name' => 'Kenya',
        ));

    }

	public function down()
    {
		Schema::drop('countries');

    }

}