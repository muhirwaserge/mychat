<?php 
include 'connection.php';

$sql ="SELECT * from users";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_assoc($result)){
echo'
    <li>
    <a href="home.php?username='.$row["user_name"].'">
      <div class="chat-left-img">
       <img src="images/'.$row["profile"].'" alt="" 
      </div>
      <div class="chat-left-detail" >
       <p>'.$row['user_name'].'</p>
       <span>'.$row['log_in'].'<span>
      </div>
      </a>
    </li>
';
}

?>