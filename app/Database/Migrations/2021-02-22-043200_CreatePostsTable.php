<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			"id" => [
				'type' => "INT",
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],

			"full_name" => [
				'type' => 'VARCHAR',
				'constraint' => '128'
			],

			"email_address" => [
				'type' => 'VARCHAR',
				'constraint' => '225'
			],

			"comment" => [
				'type' => 'text',
			],

			'created_at' => [
				'type' => 'DATETIME',
				'null' => true,
				'default' => null
			],

			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true,
				'default' => null
			]
		]);

		$this->forge->addPrimaryKey('id');

		$this->forge->createTable('posts');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('posts');
	}
}
