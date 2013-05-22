<?php

class Create_Roles_Table {

	public function up()
    {
		Schema::create('roles', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
        });

        DB::table('roles')->insert(array(
            'name' => 'Administrator',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

	public function down()
    {
		Schema::drop('roles');

    }

}
