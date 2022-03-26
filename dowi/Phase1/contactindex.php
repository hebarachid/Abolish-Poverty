<?php 
  require_once "index.php";
  $email = $_POST['email'];$phone = $_POST['phone'];$name = $_POST['name'];$msg = $_POST['msg'];
        $flag = true;
        $e = '/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/';
        $p = '/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/';
        $m = array();
        if(!preg_match($e, $email)==false){
          $flag = false;
          $m[] = "Make sure you entered the email correctly";
        }
        if(preg_match($p, $phone)==false){
          $flag = false;
          $m[] = "Make sure you entered the phone number correctly";
        }
        if($flag){
          $stmt->execute(array(':name' => $name,':email' => $email,':phone' => $phone,':msg' => $msg));
            $ = true;
            $m[] = "Thank you";
        }
        echo json_encode(
          array(
              'flag' => $flag,
              'messages' => $m,
          )
      );


?>