<?php
//require_once('config/config.php');
print_r($_FILES);

   //select collection
   //$collection = $db->items;

   //assigning variables
   $itemname = $_POST['itemname'];
   $type = $_POST['item-type'];
   $ingredients = '';//array("urad dal","ground rice");
   foreach($_POST['buffet'] as $key=>$value){
     $buffet[] = array("type" => $value, "timing" => $_POST['timing'][$key]);
   }
   $file = $_FILES['tmp_name'];
   $cusins = $_POST['cuisin'];
   


   //insert data
   $doc = array(
      "name" => $itemname,
      "type" => $type,
      "ingredients" => $ingredients,
      "buffet" => $buffet,
      "cuisins" => $cusins,
      "photo" => new MongoBinData(file_get_contents($file))
  );

   //$collection->insert($doc);
   //header("addproduct.html");
?>
