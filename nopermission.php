<?php
include 'constants.php';
include "templates/htmlHead.php";
?>
<!DOCTYPE html>
<html>
   <?php htmlHead("Invalid url","invalidUrl.css"); ?>
   <body>
      <nav class="p-4 navbar navbar-dark bg-dark justify-content-around">
         <span class="navbar-brand mb-0 h1">you dont have permission</span>
      </nav>
      <br>
      <br>
      <div class="container">
         <div class="row">
            <p><h2><strong>details:not admin</strong></h2></p>

         </div>
         <div class="row">
                         <p><h2><strong><a href="index.php">Return to home page</a></strong></h2></p>

         </div>
      </div>
 
   </body>
</html>
