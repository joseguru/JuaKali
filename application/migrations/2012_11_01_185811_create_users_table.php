<?php

class Create_Users_Table {

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
            $table->string('username');
			$table->timestamps();
        });

        DB::table('users')->insert(array(
            'username' => 'Judith',
            'email'    => 'admin@getwork.com',
            'name'     => 'Administrator',
            'password' => Hash::make('password')
        ));

    }

	public function down()
    {
		Schema::drop('users');

    }

}