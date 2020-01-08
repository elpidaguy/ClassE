<html>
<head>
<title>Sign Up..</title>
<style>
fieldset {
  font-size:18px;
  padding:10px;
  width:500px;
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
// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $phonErr = $addressErr =$genderErr = $unameErr = $passwordErr = $unameErr=$repasswordErr="";
$firstname = $lastname = $email = $phoneno = $address =$gender = $state = $uname = $passd = "";
$valid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;
  if (empty($_POST["firstname"])) {
	  $valid=false;
    $fnameErr = "Name Is Required";
	#echo "hii";
  } else {
    $firstname = test_input($_POST["firstname"]);
	echo "f";
  }
  
  if (empty($_POST["lastname"])) {
	  $valid=false;
    $lnameErr = "LastName Is Required";
  } else {
    $lastname = test_input($_POST["lastname"]);
	echo "l";
  }
  
  if (empty($_POST["email"])) {
	  $valid=false;
    $emailErr = "Email Is Required";
  } else {
    $email = test_input($_POST["email"]);
	echo "e";
  }
  
  if (empty($_POST["phoneno"])) {
	  $valid=false;
    $phonErr = "Phone Number Is Required";
  } else {
    $phoneno = test_input($_POST["phoneno"]);
	echo "p";
  }
    
  

  if (empty($_POST["address"])) {
	  $valid=false;
    $addressErr = "Address Is Required";
  } else {
    $address = test_input($_POST["address"]);
	echo "add";
  }

  if (empty($_POST["sex"])) {
	  $valid=false;
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["sex"]);
	echo "g";
  }
  if (empty($_POST["pwd"])) {
	  $valid=false;
    $passwordErr = "Please Enter Password";
  } else {
    $passd = test_input($_POST["pwd"]);
	echo "p";
  }
  
  if (empty($_POST["uname"])) {
	  $valid=false;
    $unameErr = "UserName Is Required";
  } else {
    $uname = test_input($_POST["uname"]);
	echo "u";
  }
  
  if (strcmp($_POST["pwd"],$_POST["repass"])!=0)
  {
	  $valid=false;
	  $repasswordErr="Password Mismatch";
	  $state=test_input($_POST["state"]);
		echo "rep";
  }  
  if($valid){
	  header('location:db.php');
		#echo $firstname;
		# $uname=test_input($_POST["uname"]);
		#$state=test_input($_POST["state"]);
		
		#echo "all";
		# $pwd = test_input($_POST["pass1"]);		
		#exit();
    }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="#" method="post">
<fieldset >
<legend style="color:#4169E1;font-size:25px" ><b>SIGN UP</b></legend>
<label class="lbl" for="fs">Firstname </label>
<input type="text" id ="fs" name="firstname" >
<span class="error">*<?php echo $fnameErr;?></span><br>

<label for="ls">Lastname </label>
<input type="text" id ="ls" name="lastname">
<span class="error">*<?php echo $lnameErr;?></span><br>


<label >Gender </label><br>Male:
<input type="radio"  name="sex" value="male">
Female:
<input type="radio"  name="sex" value="female" >

<span class="error">*<?php echo $genderErr;?></span><br>

<label for="mail">Email Id </label>
<input type="email" name="email" id="mail" >
<span class="error">*<?php echo $emailErr;?></span><br>

<label for="ph">Phone No. </label>
<input type="tel" name="phoneno" id="ph">
<span class="error">*<?php echo $phonErr;?></span><br>

<label for="add">Address </label>
<textarea row =4 col=20 id="add" name="address"></textarea>
<span class="error">*<?php echo $addressErr;?></span><br>

<label>State </label>
<select name ="state">
<option>Maharashtra</option>
<option>Gujrat</option>
<option>Gao</option>
<option>Panjab</option>
<option>Karnataka</option>
<option>Jammu</option>
</select><br><br>

<label for="uname">UserName </label>
<input type="text" name="uname" id="uname">
<span class="error">*<?php echo $unameErr;?></span><br>

<label for="pwd">Password </label>
<input type="password" name="pwd" id="pwd">
<span class="error">*<?php echo $passwordErr;?></span><br>

<label for="rpwd">Re-Enter Password </label>
<input type="password" name="repass" id="rpwd">
<span class="error">*<?php echo $repasswordErr;?></span><br>
<input type="Submit" value="submit"/>

</formfield>
</form>


</body>
</html>