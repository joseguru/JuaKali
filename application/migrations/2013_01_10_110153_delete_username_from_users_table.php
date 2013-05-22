<?php

class Delete_Username_From_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->drop_column('username');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->string('username');
	});

    }

}