/**
 * Class Text to Speech API -  (tos)
 *
 * @author Mohamed Ali Musa - (XC0d3rZ);
 * @since  2015-06-03
 * @version  1.1
 * @modified 00-00-00
 * @copyright 2013 - 2015 XC0d3rZ
 * @githup https://github.com/x-c0d3rz
 * @facebook https://fb.com/mr.face.king
 * @website xc0d3rz.gq
 **/
 
 Support All Langauges 
Live Demo ; 
http://xc0d3rz.gq/tos.php?text=Hello World&lang=en-US
For Example 
<?php
error_reporting(1); // hide notice;
include "class/tos.php"; // Include Class Text to Speech API
$output_dir='audio/'; // Output files dir  
$output_name = md5(time().rand(1000,100000000)).'.mp3'; // Output name , must be rand name and type .mp3 
$tos  = new tos; // Call Class Text to Speech API
$text = 'Hello World'; // Text 
$lang = 'en-US'; // Lang  
$tos->run($output_name,$output_dir,$text,$lang); // connect to server and create file /n . $tos->run(output_name,output_dir,$text,$lang); 
// Run Outputfile 
print '<audio autoplay controls>
  <source src="'.$output_dir.$output_name.'" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>' ;

?>
