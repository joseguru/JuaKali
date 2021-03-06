<?php

class Create_Locations_Table {

	public function up()
    {
		Schema::create('locations', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('country_id');
			$table->timestamps();
        });

        DB::table('locations')->insert(array(
            'name' => 'Nairobi',
            'country_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

	public function down()
    {
		Schema::drop('locations');

    }

}
