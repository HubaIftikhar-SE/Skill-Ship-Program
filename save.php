<?php
$server = "localhost";
$username = "root";
$password = ""; // Your database password here
$dbname = "webcoding";
$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    echo "Not connected";
} else {
    echo "Connected";
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$donor = $_POST['donor'];


// Assuming you have already established a database connection
// and stored the connection object in $con variable

$sql = "INSERT INTO `test`(`Name`, `Email`, `Phone Number`, `Donor`) VALUES ('$name','$email','$phone','$donor')";

$result = mysqli_query($con, $sql);

if ($result) 
{
    echo "Data submitted successfully";
} 

else 
{
    echo "Query failed!";
}

?>

