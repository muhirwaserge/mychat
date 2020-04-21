<?php 

include "connection.php";

if(isset($_POST["sign_up"])){
   $username = strtolower(trim($_POST['name']));
   $email    = strtolower(trim($_POST['email']));
   $gander   = strtolower($_POST['gender']);
   $password = $_POST['password'];
   $cpass    = $_POST['confirm'];
   $forgotton_unswer = $_POST['secAnswer'];

  if(empty($username) || empty($email) || empty($password) || empty($gander) || empty($cpass)){
      echo"<script>alert('you have empty field ')</script>";
      echo"<script>window.open('signup.php?error=empty','_self')</script>";
      
  }
  elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo"<script>alert('you invalid email')</script>";
    echo"<script>window.open('signup.php?error=empty','_self')</script>";
  }
  
  elseif(strlen($password) < 8){
    echo"<script>alert('your password is not too low')</script>";
    echo"<script>window.open('signup.php?error=empty','_self')</script>";
  }

  elseif($password !== $cpass){
    echo"<script>alert('your password is not equal to confirm')</script>";
    echo"<script>window.open('signup.php?error=empty','_self')</script>";
  }
  elseif(strlen($username) < 8){
    echo"<script>alert('your username is  too low')</script>";
    echo"<script>window.open('signup.php?error=empty','_self')</script>";
  }
  else{
   $query  = "select * from users where user_name = '$username' or email = '$email'";
   $result = mysqli_query($connect,$query); 
   $row    = mysqli_fetch_array($result);
   $userExist = mysqli_num_rows($result);
   //if user exist
    if($userExist){
                     //if username exist and email
            if($row['user_name'] == $username && $row['email'] == $email){
                    echo"<script>alert('your username and email exist')</script>";
                    echo"<script>window.open('signup.php?error=user%20exist','_self')</script>";
                  
                  }
                    // if user name exist
            elseif($row['user_name'] == $username){
                    echo"<script>alert('Username already exist')</script>";
                    echo"<script>window.open('signup.php?error=username%20exist','_self')</script>";
                }
            
                 //if email is there 
            else{
                    echo"<script>alert('Email already exist')</script>";
                    echo"<script>window.open('signup.php?error=empty','_self')</script>";
                }

   }   
   //if a user is not exist
   else{
    $log_in = 'offline';
    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    $answerHash     = password_hash($forgotton_unswer,PASSWORD_DEFAULT);  
    $profile  = '';
    $rand = rand(1,2);
    if($gander == 'male'){
      $profile = 'male'.$rand.'.jpg';
    }
    else{
      $profile ='female'.$rand.'.jpg';
    } 

    $isInserted = mysqli_query($connect,"insert into users (user_id,user_name,user_password,gender,email,forgotton_unswer,log_in,profile) values ('','$username','$hashedPassword','$gander','$email','$answerHash','$log_in','$profile')");
    if($isInserted){
        echo"<script>alert('your have been registered')</script>";
        echo"<script>window.open('signin.php','_self')</script>";
        echo'<img src="/images/">';
    }else{
        echo"<script>alert('your have not been registered')</script>";
        echo"<script>window.open('signup.php','_self')</script>";
    }
   }
  

  }
   


}else{
  header('location:signup.php');
  exit();
}






?>