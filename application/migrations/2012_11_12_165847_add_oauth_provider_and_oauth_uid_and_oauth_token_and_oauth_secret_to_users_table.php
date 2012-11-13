<?php

class Add_Oauth_Provider_And_Oauth_Uid_And_Oauth_Token_And_Oauth_Secret_To_Users_Table {    

	public function up()
    {
		Schema::table('users', function($table) {
			$table->text('oauth_provider');
			$table->text('oauth_uid');
			$table->text('oauth_secret');
	});

    }    

	public function down()
    {
		Schema::table('users', function($table) {
			$table->drop_column(array('oauth_provider', 'oauth_uid', 'oauth_secret'));
	});

    }

}