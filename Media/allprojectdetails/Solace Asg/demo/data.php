 <?php
 
 #include 'signup.php';
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";
include 'signup.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo $firstname;
$sql = "INSERT INTO `details`.`userdata` (`fname`, `lname`, `gender`, `email`, `ph`, `add`, `state`, `uname`, `pass`) VALUES ('$firstname', '$lastname', '$gender', '$email', '$phoneno', '$address','$state','$uname','$passd');";
#$sql = "INSERT INTO formdata (fname, uname, email, password, about, gender) VALUES ('$fname', '$uname', '$email', '$pwd', '$abme', '$gender');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	#header('Location: login.php');
	Exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

