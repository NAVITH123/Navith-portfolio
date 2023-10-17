<?php

$name = $_POST['name'];
$email = $_POST['email'];

if (!empty($name) && !empty($email))
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "afrah";

$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  echo('Error');
  die('Connection Error');
}
else{
    $ins=sprintf("INSERT INTO login(name, email) VALUES ('%s','%s')",$name,$email);
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