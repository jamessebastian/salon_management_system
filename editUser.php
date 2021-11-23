<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'constants.php';
include 'models/dbConnection.php';
include 'models/users.php';


/**
* gets field value from the form
*
* @param string   $fieldKey  field name
*
* @return string 
*/ 
function getFieldValue($fieldKey = '') 
{
    return isset($_POST[$fieldKey]) ? htmlspecialchars($_POST[$fieldKey]) : '';
}


if (empty($_GET['id'])) {
   header("Location:invalidUrl.php"); 
   exit();
} else {
   $userInfo = getUserDetailsForForm($_GET['id']);
   if ($userInfo==NULL) {
      header("Location:invalidUrl.php"); 
      exit();
   }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userDetails = getUserInfo();
  if(isset($_GET['id'])) {
    $message=editUser($userDetails,$_GET['id']);
  }
}
    


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<?php include 'templates/adminHeader.php'?>

<div class="container-fluid">
  <div class="row">
    <?php include 'templates/sidebar.php'?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
<!--         <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>



      <h3>EDIT USER, <?php echo $userInfo['name'];?></h3>
      <h3><?php echo $message??"";?></h3>

      <?php include 'templates/editUserForm.php'?>
    </main>
  </div>
</div>


    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
