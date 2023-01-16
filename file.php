<?php
 $email = filter_var(trim($_POST['email']));
 $pass = filter_var(trim($_POST['pass']));

 if(mb_strlen($email)<13 || mb_strlen($email) >50) {
    echo"Недопустима довжина email";
    exit();
 } else if(mb_strlen($pass)<4 || mb_strlen($pass) >10) {
    echo"Недопустима довжина password";
    exit();
 }
  
 $pass = md5($pass."fks33jd8djx");
 
 $mysql = new mysqli('localhost','root','root','register');
 
 $mysql->query("INSERT INTO `user1` (`email`,`pass`)
 VALUES('$email','$pass')");
 $mysql->close();

 header('Location:/site/index.html');

?>