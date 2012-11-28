<?php

class Create_Categories_Table {

	public function up()
    {
		Schema::create('categories', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id');
			$table->string('description');
			$table->timestamps();
        });

        DB::table('categories')->insert(array(
            'name' => 'Plumber',
        ));

    }

	public function down()
    {
		Schema::drop('categories');

    }

}