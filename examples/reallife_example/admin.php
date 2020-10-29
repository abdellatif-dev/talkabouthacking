<?php
    // See the password_hash() example to see where this came from.  
    if( $_REQUEST["password"] ) {
      if ( $_REQUEST["password"] == 'password123' ) {
          echo "<br><br> FLG{Y0u-H4cK3d-M3} ";
      } else {
          echo 'Invalid password.';
      }
      exit();
    }

?>
<html>
   <head>
      <title>home</title>
      <link rel="stylesheet" href="css/home.css">

   </head>
   <body>
      
      <form action = "<?php $_PHP_SELF ?>" method = "POST">    
          <div class="password">
            <p>password:</p>
            <input type = "password" name = "password" />
            <input type = "submit" />
          </div>
      </form>
      <img class="password" src="media/images.jpeg" alt="media/images.jpeg">
   </body>
</html>
