<?php
$servername="localhost";
$username="root";
$password="";
$db="origin";
//Create connection
$conn=mysqli_connect($servername,$username,$password,$db);

//Check connection
if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$subject = $_REQUEST['subject'];
$sql = "INSERT INTO contact_details VALUES ('$firstname','$lastname','$email','$phone','$subject')";
if(mysqli_query($conn,$sql)){
    echo "Message sent successfully....";
}
?>