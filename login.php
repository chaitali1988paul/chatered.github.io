
<?php

$con = mysqli_connect('localhost','root','');

if($con){

	echo "connection successfull";

}
else{
	echo"connection failed";
}

 mysqli_select_db($con,'uid');


 $email = $_POST['email'];
 $password = $_POST['password'];


 $query = "insert into uid(email,password)
values('$email','$password')";

 mysqli_query($con,$query);

 header('location:dashboard.php');





 ?>




