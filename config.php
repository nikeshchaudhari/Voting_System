<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_Name = "voting";

$conn = new mysqli($host,$user,$pass,$db_Name);

if($conn){
    // echo "Dbconnecet";
}
else{
    echo "Not connected";
}
?>