<?php

class Add_Availability_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->integer('availability');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('availability');
	});

    }

}