
<?php
include_once("./Regvalidation.php");
$validate=new Validation();
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

     $uname =$validate->is_name_valid($_POST['uname']);
     $uemail = $validate->is_email_valid($_POST['uemail']);
     $upass = $_POST['upass'];
     $uphone =$validate->is_phone_valid($_POST['uphone']);
	 $uaddr = $validate->is_address_valid($_POST['uaddr']);
	 if ($uname==true && $uemail==true && $uphone==true && $uaddr==true){
     $sql = "INSERT INTO users(uname,uemail,upass,uphone,uaddress) VALUES ('$uname','$uemail','$upass','$uphone','$uaddr')";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Register Successfully</h3><br/><a href="login.php">Login</a>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn); 
?>