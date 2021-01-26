<?php
/**
 * フォームバリデーション 検証ルール
 */
$config = array(
	// ユーザ登録
	'users_insert' => array(
		array(
			'field' => 'name',
			'label' => 'lang:users_name',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'mail',
			'label' => 'lang:users_mail',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'password',
			'label' => 'lang:users_password',
			'rules' => 'trim|required|matches[password_confirm]|min_length[4]|max_length[32]|md5'
		),
		array(
			'field' => 'password_confirm',
			'label' => 'lang:users_password_confirm',
			'rules' => 'trim|required'
		),
	),
	// ユーザ編集
	'users_edit' => array(
		array(
			'field' => 'name',
			'label' => 'lang:users_name',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'mail',
			'label' => 'lang:users_mail',
			'rules' => 'trim|required|valid_email'
		),
		array(
			'field' => 'password_current',
			'label' => 'lang:users_password',
			'rules' => 'trim|min_length[4]|max_length[32]|callback_password_current'
		),
		array(
			'field' => 'password',
			'label' => 'lang:users_password',
			'rules' => 'trim|matches[password_confirm]|min_length[4]|max_length[32]|md5'
		),
		array(
			'field' => 'password_confirm',
			'label' => 'lang:users_password_confirm',
			'rules' => 'trim'
		),
	),
);
// 記事投稿、記事編集
$config['entries_insert'] = $config['entries_edit'] = array(
	array(
		'field' => 'name',
		'label' => 'lang:entries_name',
		'rules' => 'trim|required|xss_clean'
	),
	array(
		'field' => 'body',
		'label' => 'lang:entries_body',
		'rules' => 'required||max_length[1000]|xss_clean'
	)
);/*
$config['pets_insert'] = $config['pets_edit'] = array(
	array(
		array(
			'field' => 'name',
			'label' => 'lang:users_name',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'type',
			'label' => 'lang:pets_type',
			'rules' => 'trim'
		),
		array(
			'field' => 'sex',
			'label' => 'lang:pets_sex',
			'rules' => 'trim'
		),
		array(
			'field' => 'ownerid',
			'label' => 'lang:pets_ownerid',
			'rules' => 'trim'
		),
		array(
			'field' => 'toyid',
			'label' => 'lang:pets_toyid',
			'rules' => 'trim'
		),
	),
);*/