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


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username =  $_POST['username'];
  $email =  $_POST['email'];
  $password_1 =  $_POST['password_1'];
  $password_2 =  $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) {$errors[] ="Username is required"; }
  if (empty($email)) { $errors[] =" Email is required"; }
  if (empty($password_1)) { $errors[] = "Password is required"; }
  if ($password_1 != $password_2) {
    $errors[] = "The two passwords do not match";
  }



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if (mysqli_num_rows ($result)) { // if user exists

    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  else if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, is_admin) 
  			  VALUES('$username', '$email', '$password', 0)";
    mysqli_query($conn, $query);
  	$_SESSION['success'] = "You are now logged in";
    header("location: /dowi/login/signup.php");
    
  }
}

if (isset($_POST['login_user'])) {
    $username =  $_POST['username'];
    $password =  $_POST['password'];
  
    if (empty($username)) {
        $errors[] = "Username is required";
    }
    if (empty($password)) {
        $errors[] = "Password is required";
    }
  
    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($results);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['is_admin'] = $row['is_admin'];
          $_SESSION['success'] = "You are now logged in";
          if($row['is_admin'] == 1){
            header("location: /dowi/admin.php");
          }else{
            header("location: /dowi/login/login.php");
          }
        }else {
            $errors[] = "Wrong username/password combination";
        }
    }
  }
  