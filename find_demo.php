<?php
require_once('config/config.php');

$collection = $db->items;
//find document in collection 'mycol'
   $answers = $collection->find( array('buffet.type' => 'breakfast'));

   foreach ($answers as $document) {
   	 //echo '<pre>';
        $ItemName =  $document["name"];
        foreach($document["buffet"] as $buffet){
          $BuffetTiming[] = $buffet['type'].' '.$buffet['timing'];
        }
        foreach($document['cuisins'] as $cuisin){
          $Cuisins[] = $cuisin ;
        }

        echo 'Item Name: '.$ItemName. "<br>".
             'Buffet & Timing: '.implode(',',$BuffetTiming)."<br>".
             'Cuisins: '.implode(',', $Cuisins);
   }
?>
