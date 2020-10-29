<?php
   if( $_REQUEST["name"] ) {
      echo "hi ". $_REQUEST['name']. "<br />";
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
         
         <div class="name">
            <p>your name:</p>
            <input type = "text" name = "name" />
            <input type = "submit" />
          </div>
      </form>
      
   </body>
</html>
