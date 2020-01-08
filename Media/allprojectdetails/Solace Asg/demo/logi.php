<html>
<head>
<style>
.error {color: #FF0000;font-size:12px;}
</style>
</head>
<body>
<?php
$name=$passd="";
$valid=true;
#$pwd = test_input($_POST["pass1"]);
if (empty($_POST["uname"]) and empty($_POST["pwd"]))
{
	$valid=false;
}
if($valid)
{
	$name=test_input($_POST["uname"]);
	$passd=test_input($_POST["pwd"]);
	#echo $name;
	header('location:conn.php');
	#exit();
}
function test_input($data) {
	
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<form method="post" action="#">
<label for="uname">UserName </label>
<input type="text" name="uname" id="uname">

</br>

<label for="pwd">Password </label>
<input type="password" name="pwd" id="pwd"></br>

<input type="Submit" value="submit"/>

</form>
</body>
</html>