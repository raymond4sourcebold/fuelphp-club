<?php

namespace Fuel\Migrations;

class Create_nonprofits
{
	public function up()
	{
		\DBUtil::create_table('nonprofits', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 45, 'type' => 'varchar'),
			'info' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'), true, array('InnoDB'), 'UTF8');
	}

	public function down()
	{
		\DBUtil::drop_table('nonprofits');
	}
}