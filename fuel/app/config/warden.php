<?php
return array(
	'lifetime' => 1209600,
	'default_role' => 'member',
	'profilable' => false,
	'trackable' => false,
	'recoverable' => 
	array(
		'in_use' => false,
		'reset_password_within' => '+1 week',
		'url' => '',
	),
	'confirmable' => 
	array(
		'in_use' => false,
		'confirm_within' => '+1 week',
		'url' => '',
	),
	'lockable' => 
	array(
		'in_use' => false,
		'maximum_attempts' => 10,
		'lock_strategy' => 'sign_in_count',
		'unlock_strategy' => 'both',
		'unlock_in' => '+1 week',
		'url' => '',
	),
	'http_authenticatable' => 
	array(
		'in_use' => false,
		'method' => 'digest',
		'realm' => 'Protected by Warden',
		'users' => 
		array(
		),
	),
);
