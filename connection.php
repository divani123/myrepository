<?php

$con=mysqli_connect('127.0.0.1','root','');

if (!$con) {
	echo "not connected";
}

if(!mysqli_select_db($con,'appointments')){
	echo "database not selectes";
}


$Name=$_POST['username'];
$Address=$_POST['address'];

$Age=$_POST['age'];
$Tele=$_POST['tele'];

$DoctorsName=$_POST['doctersname'];
$ChannelingDate=$_POST['channelingdate'];


$sql="INSERT INTO table1(Name,Address,Age,Tele,DoctersName,ChannelDate) VALUES('$Name','$Address','$Age','$Tele','$DoctorsName','$ChannelingDate')";

if (!mysqli_query($con,$sql)) {
	echo "not inserted";
}

else{
	echo "inserted";
}




?>