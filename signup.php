
<?php include 'include/signup.inc.php'; ?>

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
    <link rel="stylesheet"  type="text/css" href="css/signup.css">
    <title>register </title>
</head>
<body>
    
    <div class="singnup-form">
            <form action="" method="post">
                <div class="form-header">
                        <h2>Sign Up</h2>
                        <p>Fill out this form </p>
                </div>
                <div class="form-group">
                        <label>User Name</label><br>
                        <input type="text" class="form-control" name="name" placeholder ="Fast Name"
                         required>
                </div>
                
                <div class="form-group">
                        <label >Gender</label>
                        <select class="form-control" name="gender" required>
                                <option disable value='' >Select your gender</option>
                                <option value="Male" >Male</option>
                                <option value="Female">Female</option>
                                <option value="other" >other</option>
                        </select>
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

                <div class="form-group">
                        <label>Confirm password</label><br>
                        <input type="password" class="form-control" name="confirm" placeholder="confirm password"
                        autocomplet="off" required>
                </div>
                
                <div class="form-group">
                        <label>Security reset</label><br>
                        <input type="text" class="form-control" name="secAnswer" placeholder="secret::"
                        autocomplet="off" required>
                </div>
               <div class="form-group">
                   <label class="checkbox-inline"><input type="checkbox" required>I accept <a href="#">Terms of use</a>&amp;
                <a href="#">Privacy policy</a></label>
               </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up"> Sign Up </button>
                </div>
                

                    <div class="text-center small" style="color: #674288;"> Already have an account? <a href="signin.php">Sign In</a> </div>
            </form> 

                
    </div>


</body>
</html>