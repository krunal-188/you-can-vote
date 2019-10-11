<?php
if(isset($_POST['submit']))
{
    require("config.php");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    echo "Succesful";
}
$party_name=$party_abbrev=$party_head="";
$pid=rand(100000,999999);
if(isset($_POST["party_name"])){
    $party_name = $_POST["party_name"];
}
if(isset($_POST["party_abbrev"])){
    $party_abbrev =$_POST["party_abbrev"];
}
if(isset($_POST["party_head"])){
    $party_head = $_POST["party_head"];
}
$sql = "INSERT INTO party VALUES ($pid,'$party_name','$party_abbrev','$party_head');";
if ($conn->query($sql) === TRUE) {
    echo "Sign in successful!";
} else {
	echo "Error: " . $conn->error;
}
}
?>