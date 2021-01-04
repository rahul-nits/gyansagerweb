

<?php 
require "database/database-config.php";
$errors = array();
if (isset($_POST['register'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$email = strtolower($email);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$message = mysqli_real_escape_string($db, $_POST['message']);
	$status = 0;

  if (empty($name)) { array_push($errors, "Name "); echo "<script type='text/javascript'>alert('Please Fill in Your Name');</script>";}
  if (empty($message)) { array_push($errors, "Message "); echo "<script type='text/javascript'>alert('Please give your valuable feedback by filling the message Section');</script>";}

if ($errors == NULL) {
	# code...
 $query = "INSERT INTO tbl_feedback (name, email, phone, message, status) 
           VALUES('$name', '$email', '$phone', '$message', '$status')";
    mysqli_query($db, $query);
echo "<script type='text/javascript'>alert('Thanks for your valuable feedback');</script>";
}

header( "refresh:0.5 ;url=reachUs.php" );
// header('location: reachUs.php');


}
 ?>