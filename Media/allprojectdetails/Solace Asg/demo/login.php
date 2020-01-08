<html>
<head>
<title>Login</title>
<style>
fieldset {
  font-size:18px;
  padding:10px;
  width:300px;
  line-height:1.8;
  align:center}
  
  lbl{
  font-size:12px;
  
  }
  .error {color: #FF0000;font-size:12px;}
</style>
</head>
<body>

<?php
/*// define variables and set to empty values
$unameErr = $passErr =$err="";
$uname = $passd  = "";
$valid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;
  if (empty($_POST["uname"])) {
	  $valid=false;
    $unameErr = "Please Enter User Name";
  } else {
    $uname = test_input($_POST["uname"]);
  }
  
  if (empty($_POST["pass"])) {
	  $valid=false;
    $passErr = "Please Enter Password";
  } else {
    $passd = test_input($_POST["pass"]);
  }
 if($valid){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "details";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}else{
		echo "success";
		}
		$sql = "SELECT * FROM `userdata` WHERE `uname`='uname' and `pass`='passd';";
		#$sql = "INSERT INTO `details`.`userdata` (`fname`, `lname`, `gender`, `email`, `ph`, `add`, `state`, `uname`, `pass`) VALUES ('$firstname', '$lastname', '$gender', '$email', '$phoneno', '$address','$state','$uname','$passd');";
#$sql="INSERT INTO userdata(fname,lname,gender,email,ph,add,state,uname,pass) VALUES ('$firstname', '$lastname', '$gender', '$email', '$phoneno', '$address','$state','$uname','$password');";
#$sql = "INSERT INTO formdata (fname, uname, email, password, about, gender) VALUES ('$fname', '$uname', '$email', '$pwd', '$abme', '$gender');";

		if ($conn->query($sql) == 1) {
			echo "New record created successfully";
			header('Location:profile.php');
			Exit();
		} else {
		$err="Username And Password Is Incorrect";
			}

		$conn->close();
     #header('location:db.php');
		
       # exit();
    }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
?>


<form action="#" method="POST">
</fieldset>

<fieldset style="align:centre; margin-left:500px">
<legend style="color:#4169E1;font-size:25px"><b>Login</b></legend>

<label for="uname">User Name </label>
<input type="text" name="uname" id="uname">
<!--<span class="error"><?php echo $unameErr;?></span><br>-->

<label for="pwd">Password </label>
<input type="password" name="pass" id="pass">
<!--<span class="error"><?php echo $passErr;?></span><br>-->
<!--<span class="error"><?php echo $err;?></span><br>-->
<br>
<input type="submit" value="login"/>
</fieldset>
</form>
</body>
</html>