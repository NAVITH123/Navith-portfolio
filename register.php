<?php

$uname1 = $_POST['uname1'];
$upswd1 = $_POST['upswd1'];

if (!empty($uname1) && !empty($upswd1))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "navith";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  echo('Error');
  die('Connection Error');
}
else{
  $ins=sprintf("insert into login (Username, Password) values ('%s','%s')",$uname1,$upswd1);
  $q=mysqli_query($conn, $ins);
  if($q)
    echo("Inserted");
  else
    echo("Not Inserted"); 
}
} else {
 echo "All field are required";
 die();
}
?>