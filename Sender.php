<?php
$text="";
$image="";
$response="";
$contentId="";
$text=$_POST["textbox"];
$image=$_POST["img"];

if($text!="")
{
	$response=http_get('http://api.globalhack4.test.lockerdome.com/create_pw_login?{"username": "compsigh","password_hash": "password", "email": "jmp6xb@mst.edu"}');
}

$contentId=http_get('http://api.globalhack4.test.lockerdome.com/create_content?{"login_token":'$reponse',"account_id":1,"type":"page","title":"title","body":'$text'}');

?>

