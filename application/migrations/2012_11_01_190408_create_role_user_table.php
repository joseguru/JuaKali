<?php

class Create_Role_User_Table {

	public function up()
    {
		Schema::create('role_user', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('role_id');
			$table->timestamps();
        });

        DB::table('role_user')->insert(array(
            'user_id' => 1,
            'role_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }

	public function down()
    {
		Schema::drop('role_user');

    }

}
