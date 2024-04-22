<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dentist_management");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['username']);
$parts = explode(' ', $name); // $meta->post_title
$firstname = array_shift($parts);
$lastname = array_pop($parts);
$middlename = trim(implode(' ', $parts));

$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

// attempt insert query execution
$sql = "INSERT INTO users (fname, lname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
if(mysqli_query($link, $sql)){
    
	$message = 'Records added successfully.';

    echo "<SCRIPT>
       alert('".$message."');
	   window.location = 'index.php';
    </SCRIPT>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>