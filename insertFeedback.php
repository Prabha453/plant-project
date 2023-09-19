
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'plantshop';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
     $name =$_POST['name'];
     $email =$_POST['mail'];
     $feed =$_POST['doubt'];
	 if ($name==true && $email==true){
     $sql = "INSERT INTO feedback(username,useremail,feedbacks) VALUES ('$name','$email','$feed')";
     if (mysqli_query($conn, $sql)) {
        echo '<h3 style="color:green">Thanks For Your FeedBack!!</h3><br/>
        <button onclick="history.back()">Go Back</button>';
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo '<button onclick="history.back()">Go Back</button>';
	 }
     mysqli_close($conn); 
?>