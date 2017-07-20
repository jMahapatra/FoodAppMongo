<?php
require_once('config/config.php');

   //select collection
   $collection = $db->items;

   //assigning variables
   $itemname = "Dosa";
   $type = "veg";
   $ingredients = array("urad dal","ground rice");
   $buffet = array(
                  0 => array("type" => "breakfast", "timing" => "07:30-10:30"),
                  1 => array("type" => "tiffin", "timing" => "16:30-19:30"),
                );
   $cusins = array("indian", "south indian");

   //insert data
   $doc = array(
      "name" => $itemname,
      "type" => $type,
      "ingredients" => $ingredients,
      "buffet" => $buffet,
      "cuisins" => $cusins
  );

   $collection->insert($doc);
   echo "Document inserted successfully";
?>
