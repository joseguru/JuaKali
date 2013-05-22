<?php

class Create_Categories_Table {

	public function up()
    {
		Schema::create('categories', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id');
			$table->string('description')->nullable();
			$table->timestamps();
        });

        DB::table('categories')->insert(array(
            'name' => 'Plumber',
            'user_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

	public function down()
    {
		Schema::drop('categories');

    }

}
