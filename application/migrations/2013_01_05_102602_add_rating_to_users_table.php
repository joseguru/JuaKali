<?php

class Add_Rating_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->integer('rating');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column('rating');
	});

    }

}