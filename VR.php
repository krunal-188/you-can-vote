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
$name=$mobile_no=$address=$age=$zone=$gender=$email=$doc1=$doc2=$doc3="";
$vid=rand(100000,999999);
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["mobile_no"])){
    $mobile_no = (int)$_POST["mobile_no"];
}
 print('$mobile_no');
if(isset($_POST["address"])){
    $address = $_POST["address"];
}
if(isset($_POST["age"])){
    $age= $_POST["age"];
}
if(isset($_POST["zone"])){
    $zone = $_POST["zone"];
}

if(isset($_POST["gender"])){
    $gender= $_POST["gender"];
}

if(isset($_POST["email"])){
    $email = $_POST["email"];
}

if(isset($_POST["doc1"])){
    $doc1 = $_POST["doc1"];
}

if(isset($_POST["doc2"])){
    $doc2 = $_POST["doc2"];
}

if(isset($_POST["doc3"])){
    $doc3 = $_POST["doc3"];
}

$sql = "INSERT INTO voter VALUES ($vid,'$name',$mobile_no,'$address','$age','$zone','$gender','$email',$doc1,$doc2,$doc3);";
if ($conn->query($sql) === TRUE) {
    echo "Sign in successful!";
} else {
	echo "Error: " . $conn->error;
}
}
?>