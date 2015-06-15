<?php
error_reporting(1); // hide notice;
include "class/tos.php"; // Include Class Text to Speech API
$output_dir='audio/'; // Output files dir  
$output_name = md5(time().rand(1000,100000000)).'.mp3'; // Output name , must be rand name and type .mp3 
$tos  = new tos; // Call Class Text to Speech API
$text = $_GET['text']; // Text 
$lang = $_GET['lang']; // Lang  
$tos->run($output_name,$output_dir,$text,$lang); // connect to server and create file /n . $tos->run(output_name,output_dir,$text,$lang); 
// Run Outputfile 
print '<audio autoplay controls>
  <source src="'.$output_dir.$output_name.'" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>' ;

?>
