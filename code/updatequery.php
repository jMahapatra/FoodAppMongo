<?php
require_once('../config/config.php');


if($_POST){
	$id = new MongoId($_POST['id']);
	$email = $_POST['email'];
	$name = $_POST['name'];

	//select or create collection
	$col_profile = $db->profile->update(
		array('_id'=>$id),
			array('$set' => array(
					'email' => $email,
					'name'=>$name 
					)
			)
		);
	header('location:../showprofiles.php');
	
}