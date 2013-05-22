<?php

class Create_Users_Table {

    public function up()
    {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('bio')->nullable();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
            'username' => 'admin',
            'email'    => 'admin@getwork.com',
            'name'     => 'Administrator',
            'password' => Hash::make('password'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

    public function down()
    {
        Schema::drop('users');

    }

}
