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
$name=$mobile_no=$address=$age=$zone=$gender=$prev_acc=$qualification=$income=$doc1=$doc2=$doc3="";
$cid=rand(10000,99999);
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
if(isset($_POST["income"])){
    $income = $_POST["income"];
}
if(isset($_POST["prev_acc"])){
    $prev_acc= $_POST["prev_acc"];
}

if(isset($_POST["qualification"])){
    $qualification = $_POST["qualification"];
}

if(isset($_POST["zone"])){
    $zone = $_POST["zone"];
}

if(isset($_POST["gender"])){
    $gender = $_POST["gender"];
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
if(isset($_POST["partyname"])){
    $partyname =$_POST["partyname"];
}

$sql = "INSERT INTO candidate VALUES ($cid,'$name',$mobile_no,'$address',$age,$income,'$prev_acc','$qualification','$zone','$gender',$doc1,$doc2,$doc3,'$partyname');";
if ($conn->query($sql) === TRUE) {
    echo "Sign in successful!";
} else {
	echo "Error: " . $conn->error;
}
}
?>