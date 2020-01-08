  <?php require 'logi.php';
 echo"$name";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo $name;
echo "wecome";
$sql = "INSERT INTO `details`.`auth` (`uname`, `pass`) VALUES ('$name','$passd');";


#$sql = "INSERT INTO formdata (fname, uname, email, password, about, gender) VALUES ('$fname', '$uname', '$email', '$pwd', '$abme', '$gender');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	#header('Location: wel.php');
	Exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 





