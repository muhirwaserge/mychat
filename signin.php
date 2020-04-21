<?php include 'include/signin.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleleapis.com/css?family=Robot|courgette|pacifico:400,700" rel="stylesheet" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min,js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootsrap.min,js"></script>
    <link rel="stylesheet"  type="text/css" href="css/signin.css">
    <title>log in to your account</title>
</head>
<body>
    
    <div class="singnin-form">
            <form action="" method="post">
                <div class="form-header">
                        <h2>Sign In</h2>
                        <p>login to your chat</p>
                        <?php if(!empty($_GET['error']) || isset($_GET['error'])){  ?>
                         
                          <p>You need to login</p>

                     <?php   }  ?>
                </div>
                <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" class="form-control" name="email" placeholder ="example@gmail.com"
                        autocomplet="off" required>
                </div>

                <div class="form-group">
                        <label>password</label><br>
                        <input type="password" class="form-control" name="password" placeholder="password"
                        autocomplet="off" required>
                </div>

                <div class="small"> Forgot password <a href="forgot_pass.php"> Click Here </a></div><br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in"> Sign In </button>
                </div>
                  <div class="text-center small" style="color: #674288;"> Don'have an account? <a href="signup.php">Create one</a> </div>
            </form> 

                
    </div>


</body>
</html>