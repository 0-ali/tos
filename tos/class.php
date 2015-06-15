<?php
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
class tos {
function run($output_name,$output_dir,$text,$lang)
{
if(empty($output_name))
{
$msg_error[] = "Please enter filename ";
}
if(empty($output_dir))
{
$msg_error[] = "Please enter dirname";
}
if(!is_dir($output_dir)){
$msg_error[] = "Please enter create dir before using the class";
}
if(is_array($msg_error))
{
$error = join('<br />', $msg_error);
$this->debug($error);
}
elseif(!is_array($msg_error))
{
$data = $this->get_data($text,$lang);
$this->create_file($output_dir.$output_name,$data);
}
}
protected function debug($error)
{
error_reporting(1);	
session_start();
if(empty($_SESSION['debug'])):
$_SESSION['debug'] = substr(md5(rand(1,10000)),20);
endif;
return print '<div style="border: 1px solid red; padding: 0.5em; margin: 0.5em; font-family:Courier New;"><strong>'. strtoupper(__CLASS__ ).' Debug: </strong>'.$error.'<span style="color:blue; padding-left: 75%;">CLient:</span>'.$_SESSION['debug'].'</div>'; 
exit();
}
protected function create_file($name,$data){
if(empty($name)):
$this->debug("An error curred when getting file name");
endif;
if(!file_put_contents($name, base64_decode($data)) AND $data!=NULL)
{
$this->debug("An error curred when creating");
}
else
{
return $name;	
file_put_contents($name, base64_decode($data));
}

}
protected function get_data($text,$lang)
{
$data = file_get_contents('http://translate.google.com/translate_tts?ie=UTF-8&q='. urlencode($text) .'&tl='. $lang);
if(!$data)
{
$this->debug("An error curred when getting data form server");	
}
else
{
return base64_encode($data);
}
}
}
