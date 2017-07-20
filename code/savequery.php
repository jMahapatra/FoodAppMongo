<?php
require_once('../config/config.php');
if($_POST){
	
	$rec['email'] = $_POST['email'];
	$rec['name'] = $_POST['name'];

	//select or create collection
	$col_profile = $db->profile->insert($rec);
	
}
echo '<a href="../showprofiles.php">Click to see records</a>';