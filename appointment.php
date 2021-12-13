<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include "constants.php";
include 'models/dbConnection.php';

include "library/utils/loginCheck.php";
include "library/utils/sendMail.php";
isLoggedOut();

//var_dump($_SESSION['user']);
if(isset($_POST['submit']))
  {
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $user_id=$_SESSION['user']['id'];


    $query=mysqli_query($conn,"insert into appointments(user_id,apt_date,apt_time,service) value($user_id,'$adate','$atime','$services')");
    if ($query) {
        $mailDetails['subject']="Confirmation of Appointment-Natura Salon!";
        $mailDetails['message']="You have taken appointment on $adate at $atime for $services";
        $f=sendMail($_SESSION['user']['email'] , $mailDetails); 
        $msg = $f?"Confirmation-Mail sent.":"Unable to sent confirmation-mail";
        echo "<script>alert('appointment taken.$msg');</script>"; 
   
    }
  else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>"; 
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>natura salon || Appointments Form</title>
    <!-- Bootstrap -->
    <link href="assets3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="assets3/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include_once('templates/header.php');?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Book Appointment</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Appointment Form</h1>
                            <p> Book your appointment to save salon rush.</p>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="Subject">Services</label>
                                        <select name="services" id="services" required="true" class="form-control">
                                <option value="">Select Services</option>
                                <?php $query=mysqli_query($conn,"select * from services");
              while($row=mysqli_fetch_array($query))
              {
              ?>
                               <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
                               <?php } ?> 
                              </select>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Appointment Date</label>
                                            <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Appointment Time</label>
                                            <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" id="submit" name="submit" class="btn btn-default">Book</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('templates/footer.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets3/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets3/js/bootstrap.min.js"></script>
    <script src="assets3/js/menumaker.js"></script>
    <script src="assets3/js/jquery.sticky.js"></script>
    <script src="assets3/js/sticky-header.js"></script>
</body>

</html>
