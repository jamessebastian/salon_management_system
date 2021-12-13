<?php

/**
* If session is set then redirect to Home Page
*
*@return void
*/ 
function isLoggedIn() 
{
	if (isset($_SESSION['user'])) {
	    header("Location:index.php");
	    exit();
	}
}

/**
* checks whether admin
*
*@return void
*/ 
function isLoggedAdmin() 
{
	if ($_SESSION['user']['type']!='admin') {
		echo "<script>alert('sorry you dont have admin privilages');</script>"; 
	    header("Location:nopermission.php");
	    exit();
	}
}

/**
* returns bool on the basis of admin or not
*
*@return boolean
*/ 
function isAdmin() 
{
	return $_SESSION['user']['type']=='admin';
}




/**
* If session is not set then redirect to Login Page
*
*@return void
*/  
function isLoggedOut() 
{
	if (!isset($_SESSION['user'])) {               
	    header("Location:loginPage.php");
	    exit();
	}
}
