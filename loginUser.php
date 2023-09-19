<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
     $uemail = $_POST['uemail'];
     $upass = $_POST['upass'];
	 if ($upass != ""){
     $sql = "SELECT uid,uemail,upass FROM users WHERE uemail='$uemail'";
	 $data = mysqli_query($conn, $sql);
	 //print_r($data);
     if ($data->num_rows > 0) {
  
  while($row = $data->fetch_assoc()) {
	 if($upass == $row['upass'] && $uemail == $row['uemail']){
		 session_start();
		 $_SESSION['username'] = $uemail;	
		 $_SESSION['uid'] = $row['uid']; 
		 @include("index.php");
	 }
	 else{
		@include("login.php");
	}
  }
}
else{
	@include("login.php");
}
}
else{
		 echo "Please Enter Valid Input";
	 }
     mysqli_close($conn); 
?>