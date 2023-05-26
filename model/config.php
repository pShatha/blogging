<?php

$username='root';
$password = "";
$host = "127.0.0.1";
$db = "blogging";
$port = '3306';


try{
       $connect = new mysqli($host,$username,$password,$db,$port);

    //   print_r($connect);
  
}catch(Exception $e){
    echo "Error: ".$e->getMessage();
}