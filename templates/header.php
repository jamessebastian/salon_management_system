<?php
/**
 * checks whether current link or not.Returns 'active' if the link is current link
 *
 * @param string $link link
 *
 * @return string 
 */
function whetherCurrentLink($link = '') 
{
   return (strpos($_SERVER['REQUEST_URI'],$link) !== false) ? 'active':'';
}
?>

<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h1>Natura Salon</h1>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul style="width: 800px;">
                                <li class="<?php echo whetherCurrentLink('index.php');?>"><a href="index.php" title="Home">Home</a></li>

                                <li class="<?php echo whetherCurrentLink('service-list.php');?>"><a href="service-list.php" title="Service List">Service List</a></li>               
                             
                                <li class="<?php echo whetherCurrentLink('appointment.php');?>"><a href="appointment.php" title="Styleguide">Book Appointment</a> </li>

                                 <li class="<?php echo whetherCurrentLink('your-appointments.php');?>"><a href="your-appointments.php" title="your-appointments">Your Appointments</a></li>

                                <?php if(isAdmin()){ ?>
                                    <li><a href="admin-dashboard.php" title="admin">Admin</a> </li>
                                <?php } ?> 
                                <li><a href="logout.php" title="logout">Logout</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>