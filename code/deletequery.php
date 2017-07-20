<?php
require_once('../config/config.php');

$id = $_GET['id'];
$id = new MongoId($id);

$db->profile->remove(array('_id'=>$id));

header('location:../showprofiles.php');
?>