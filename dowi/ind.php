<?php 


session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$db = "heba";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_REQUEST['submit'])) {

$errors = array();
  if (empty($_POST["name"])) {  
    $errors[] = "Name is required";  
} 
else {  
   $name = input_data($_POST["name"]);  
  // check if name only contains letters and whitespace  
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
      $errors[] = "Only alphabets and white space are allowed";  
  }  
}  

if (empty($_POST["email"])) {  
  $errors[] = "Email is required";  
} else {  
  $email = input_data($_POST["email"]);  
  // check that the e-mail address is well-formed  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $errors[] = "Invalid email format";  
  }  
}  

//Number Validation  
if (empty($_POST["phone"])) {  
  $errors[] = "Mobile no is required";  
} else {  
  $mobileno = input_data($_POST["phone"]);  
  // check if mobile no is well-formed  
  if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
    $errors[] = "Only numeric value is allowed.";  
  }  
 
}  

if (empty($_POST["message"])) {  
  $errors[] = "message is required";  
} 
else {  
 $message = input_data($_POST["message"]);  
// check if name only contains letters and whitespace  
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
    $errors[] = "Only alphabets and white space are allowed";  
}  
}  


if(count($erros) == 0){
   echo $name.$message.$mobileno.$email;
  $query = "INSERT INTO contact (name, email, message, number) 
  VALUES('$name', '$email', '$message', '$mobileno')";
   mysqli_query($conn, $query);
 }


   
}
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
  //End of validation
  ?> -->