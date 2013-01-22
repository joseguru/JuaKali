<?php

class Add_Bio_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->text('bio');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('bio');
	});

    }

}