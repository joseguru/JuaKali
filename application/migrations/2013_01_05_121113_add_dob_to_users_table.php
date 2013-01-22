<?php

class Add_Dob_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->date('dob');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('dob');
	});

    }

}