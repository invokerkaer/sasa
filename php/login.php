<?php
error_reporting(0);
// $username1 = $_REQUEST["rUsername"];
// $password1 = $_REQUEST["rPassword"];
$get = $_REQUEST;
$username1 = $get["rUsername"];
$password1 = $get["rPassword"];
$falseData = array("username"=>$username1,"password"=>$password1);
$username = $_REQUEST["lUsername"] || "";
$password = $_REQUEST["lPassword"] || "";
if(!$falseData["username"] || !$falseData["password"]){
    $value = false;
}else{
    if($falseData["username"] == $username && $falseData["password"] == $password){
        $value = true;
    }else{
        $value = false;
    }
}
echo $value;
// echo $username1;
// echo "haha";
?>