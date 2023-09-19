<?php
// including the database connection file
include_once("./Regvalidation.php");

$validate = new Validation();


$servername='localhost';
$username='root';
$password='';
$dbname = 'plantshop';
$conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['Update']))
{       
    $id = $_POST['id']; 
     $uname =$validate->is_name_valid($_POST['uname']);
     $uemail = $validate->is_email_valid($_POST['uemail']);
     $upass = $_POST['upass'];
     $uphone =$validate->is_phone_valid($_POST['uphone']);
	 $uaddr = $validate->is_address_valid($_POST['uaddr']);
	 if ($uname==true && $uemail==true && $uphone==true && $uaddr==true){
     $sql = "UPDATE users SET uname='$uname',uemail='$uemail',upass='$upass',uphone='$uphone',uaddress='$uaddr' WHERE uid='$id'";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Updated Successfully</h3><br/>
       <a href="Users.php">View Result</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn); 
    }
?>