<?php
   require("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $login_user = mysqli_real_escape_string($conn,$_POST['uname']);
      $Password = mysqli_real_escape_string($conn,$_POST['upassword']); 
      
      $sql = "SELECT * FROM login WHERE uname = '$login_user' and upassword = '$Password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         $_SESSION['login_user'] = $login_user;
         echo "Sign in successful";
          header("location: home.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "
         <script>
         alert('Your Login Name or Password is invalid');
         window.location.href='index.html';
         </script>
         ";
      }
   }
?>