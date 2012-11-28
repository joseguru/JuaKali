<?php

class Create_Messages_Table {

	public function up()
    {
		Schema::create('messages', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('message');
			$table->integer('worker_id');
			$table->integer('inbox');
			$table->integer('outbox');
			$table->timestamps();
        });

    }

	public function down()
    {
		Schema::drop('messages');

    }

}