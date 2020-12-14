
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
$phone=$_POST['phone'];
$comments=$_POST['comments'];
$sql = "INSERT INTO contactus (name,email,phone,comment) VALUES ('$name','$email','$phone','$comments')";
if(mysqli_query($link, $sql)){
    echo "<center>Thanks for contacting us,Our team will reach you shortly.<br /></center>";
    echo "<center><a href='index.html'>Go back to home</a></center>";

} else{
   echo "<center><a href='contact.html'>try again</a></center>";
}
 
// Close connection
mysqli_close($link);
?>