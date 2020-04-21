<?php
session_start();
if(isset($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="javascript/jquery-1.11.2.js" ></script> 
     <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet"  type="text/css" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css">
    <style>
    
    .message-form{
    display:flex;
}
    </style>
</head>

<body class="container">

    <div class=" main-section ">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 left-siderbar">
                <div class="input-group searchbox">
                     <div class="input-group-btn">
                        <center> <a href="" > <button class="btn btn-default search-icon" name="search_user"  type="submit">Add new friend</button> </a> </center>
                        </div>
                </div>

                <div class="left-chat">
                    <ul>
                       <?php include 'include/user_info.php'; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 right-sidebar ">
                <div class="row">
                     <div class="col-md-12 right-header ">
                        <div class="right-header-img">
                            <img src="images/<?php echo $_SESSION['profilePicture'] ?>" alt="" srcset="">
                        
                        </div>
                    <div class="right-header-detail">
                        <form action="" method="post">
                            
                            <button type="submit" class="btn btn-info" name="logout" >Logout</button>
                        </form>
                       
                    </div> <i>

                    </i>      

                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-12 right-header-contentChat" id="scrolling_to_bottom">
                         
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 right-chat-textbox">
                        <form action="" method="post" class="message-form">
                            <input type="text" name="msg_content" class="form-control" placeholder="Text " id="">
                            <button type="submit" name="submit" class="btn btn-outline-info"><i class="	fas fa-angle-double-right" aria-hidden="true"><i>Send</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  

    </div>   

   


</body>
<script>
$('#scrolling_to_bottom').animate({
    scrollTop:$('#scrolling_to_bottom').get(0).scrollHeight
},1000); 
$(document).ready(()=>{
    var ht = $(window).height();
    $('left-chat').css({height:ht-92 +'px'})
    $('.right-header-contentChat').css({height:ht-126 +'px'})
})
  
</script>
<?php

}else{
    header('location:signin.php');
    session_start();
    session_distroy();
}
?>
</html>
