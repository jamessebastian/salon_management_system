<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'constants.php';
include 'models/dbConnection.php';
include 'models/users.php';
include "library/utils/sendMail.php";
//include 'controllers/userController.php';
include "templates/htmlHead.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $u = getUserInfo("regCustomer");
   $u['type']="customer";
   $message=insertUser($u);

   if(str_contains($message, 'Success')) {
      echo "<script>alert('Successfully Registered.');window.location.replace('loginPage.php');</script>"; 
 
   }
}

?>

<!DOCTYPE html>
<html>
   <?php htmlHead("Register","register.css"); ?>
   <body>
     
      <div id="fullWrapper">
         <nav class="p-4 navbar navbar-dark bg-dark justify-content-around">
            <span class="navbar-brand mb-0 h1">USER REGISTRATION</span>

         </nav>
         <div class="container">
            <div><?php echo $message??"";?></div>
            <?php include 'templates/RegForm.php'?>
         </div>
         <script src="assets/javascript/registerValidation.js"></script>
         <script src="assets/javascript/common.js"></script>

      </div>
   </body>
</html>

