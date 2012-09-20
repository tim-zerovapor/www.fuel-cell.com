<?php
use Orm\Model;

class Model_Type extends Model
{
	protected static $_properties = array(
		'id',
		'name',
		'downloadlink',
		'category',
		'gist',
		'about',
		'howto',
		'tags',
		'version',
		'howtogist',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('downloadlink', 'Downloadlink', 'required');
		$val->add_field('category', 'Category', 'required|valid_string[numeric]');
		$val->add_field('gist', 'Gist', 'required|max_length[80]');
		$val->add_field('about', 'About', 'required');
		$val->add_field('howto', 'Howto', 'required');
		$val->add_field('tags', 'Tags', 'required');
		$val->add_field('version', 'Version', 'required|max_length[80]');
		$val->add_field('howtogist', 'Howtogist', 'required|max_length[80]');

		return $val;
	}

}
