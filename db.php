<?php 
$server="localhost";
$user="root";
$password="";
$db="chat";

$connect= mysqli_connect($server,$user,$password,$db);

if(!$connect){
    echo mysqli_error();
}
?>