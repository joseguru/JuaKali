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
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

	public function down()
    {
		Schema::drop('countries');

    }

}
