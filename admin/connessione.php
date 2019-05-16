<?php
$servername="localhost";
$username="root";
$password="";
$nomeDB="progettocinema";

$conn=new mysqli($servername, $username, $password, $nomeDB);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error."<br>");
}
?>a