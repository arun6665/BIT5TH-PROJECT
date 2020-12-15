
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
$name = $_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql = "INSERT INTO donateus(name,email,address,phone,message) VALUES ('$name','$email','$address','$phone','$message')";
if(mysqli_query($link, $sql)){
    //echo "<center>Thanks for your help,Our team will reach you shortly.</center><br />";
    //echo "<center><a href='index.html'>Go back to home</a></center>";
     header('Location: donatecorrect.php');

} else{
   echo "<center><a href='detaildonor.php'>try again</a></center>";
}
 
// Close connection
mysqli_close($link);
?>