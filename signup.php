
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bitdonation");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


 
// Attempt insert query execution
$name1 = $_POST['signname'];
$email1=$_POST['signmail'];
$sql = "INSERT INTO signup (name,email) VALUES ('$name1','$email1')";
if(mysqli_query($link, $sql)){
    //echo "<center>thanks for subscribing.</center><br />";
    //echo "<center><a href='index.html'>Go back to home</a></center>";
    header('Location: joincorrect.php');
} else{

header('Location: joinincorrect.php');
	//echo"<center>The email already exists</center>";
  //echo "<center><a href='joinus.php'>Try again</a></center><br />";

  //echo "<center><a href='index.html'>Go back to home</a></center";

}
 
// Close connection
mysqli_close($link);
?>