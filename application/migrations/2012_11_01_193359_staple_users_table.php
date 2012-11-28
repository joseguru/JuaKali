<?php

class Staple_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::table('users', function($table) {
							
			$table->string("avatar_file_name")->nullable();
			$table->integer("avatar_file_size")->nullable();
			$table->string("avatar_content_type")->nullable();
			$table->timestamp("avatar_uploaded_at")->nullable();
				
		});

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table) {
		
			$table->drop_column("avatar_file_name");
			$table->drop_column("avatar_file_size");
			$table->drop_column("avatar_content_type");
			$table->drop_column("avatar_uploaded_at");
		
		});
	}

}