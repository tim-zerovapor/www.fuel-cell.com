<?php

namespace Fuel\Migrations;

class Create_types
{
	public function up()
	{
		\DBUtil::create_table('types', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'downloadLink' => array('type' => 'text'),
			'category' => array('constraint' => 3, 'type' => 'int'),
			'gist' => array('constraint' => 80, 'type' => 'varchar'),
			'about' => array('type' => 'text'),
			'howTo' => array('type' => 'text'),
			'tags' => array('type' => 'text'),
			'version' => array('constraint' => 80, 'type' => 'varchar'),
			'howToGist' => array('constraint' => 80, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('types');
	}
}