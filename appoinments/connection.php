<?php

$db = mysqli_connect("localhost", "root", "", "dentacare");

$msg="";


$Name=$_POST['username'];
$Address=$_POST['address'];

$Age=$_POST['age'];
$Tele=$_POST['tele'];

$DoctorsName=$_POST['doctersname'];
$ChannelingDate=$_POST['channelingdate'];


$sql="INSERT INTO table1(Name,Address,Age,Tele,DoctersName,ChannelDate) VALUES('$Name','$Address','$Age','$Tele','$DoctorsName','$ChannelingDate')";

if (!mysqli_query($db,$sql)) {
	echo "Try Again";
}

else{
	echo "Inserted Successfully!";
}




?>