<?php
    include "connection.php";
    if(isset($_POST["sign_in"])){
        $email = $_POST['email'];
        $password =$_POST['password'];
        if(empty($email)){
            echo"<script>alert('Email fild is empty')</script>";
            
        }
        elseif(empty($password)){
            echo"<script>alert('Password is empty')</script>";
            
        }
        else{
           $userInf ="select * from users where email = '$email'";
           $result  = mysqli_query($connect,$userInf);
           $isExist = mysqli_num_rows($result);
            if($isExist){
                $row = mysqli_fetch_assoc($result);
                $passwordFromDb = $row['user_password'];
                $passIsequal = password_verify($password,$passwordFromDb);

                if($passIsequal){
                  session_start();
                  $_SESSION['username'] = $row['user_name']; 
                  $_SESSION['profilePicture']  = $row['profile'];
                  $_SESSION['email']   = $row['email'];
                  $_SESSION['userId']  = $row['user_id'];
                  header('location:home.php');
                       
                }else{
                    
                    echo"<script>alert('wrong password ')</script>";
                    

                }

            }else{
              echo'<script>alert("User does not exist  ")</script>';
              
            }
        
        }
    }else{
        
    }

?>