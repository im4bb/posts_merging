<?php
/**
 *
 * Posts Merging extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020, rxu, https://www.phpbbguru.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace rxu\postsmerging\migrations;

class v_3_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\rxu\postsmerging\migrations\v_3_0_0'];
	}

	public function update_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'postsmerging' => array(
					'post_id' => array('ULINT', 0),
				),
			),
		);
	}
}
