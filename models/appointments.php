<?php
/**
 * gets search results of users by running sql query
 *
 *
 * @return object
 */
function getAllAppointmentsList()
{
    global $conn;

    $sql = "SELECT
    			ap.id,
    			u.name,
    			u.email,
				ap.service,
				ap.apt_date,
				ap.apt_time
    		FROM users u 
    		JOIN appointments ap
    		ON u.id=ap.user_id;";
    
    $result = $conn->query($sql);
    return $result;
}

/**
 * Deletes user from database.
 *
 * @param int $id user id
 *
 * @return boolean Returns true on successful user deletion otherwise returns false.
 */
function deleteAppointment($id = '') 
{
    global $conn;
	$id=$conn->real_escape_string($id);
    $sql = "DELETE FROM appointments WHERE id=".(int)$id;

	if ($conn->query($sql) === TRUE && $conn->affected_rows>0) { 
	   return "<mark style='background-color: green; color: white;''>User Successfully Deleted</mark>";
	  // return true;
	} else {
	    return "<mark>Something went wrong</mark>";
	    //return false;
	}
}


// /**
//  * Inserts user data into user table in the database.
//  *
//  * @param Array $userInfo  User details from the form.
//  *
//  * @return message
//  */
// function insertAppointment($appointmentInfo = []) 
// {
// 	global $conn;
// 	$sql = "INSERT INTO appointment (name, type, email, password) 
// 			VALUES ('"
// 			.$conn->real_escape_string($userInfo['name'])."','"
// 			.$conn->real_escape_string($userInfo['type'])."','" 
// 			.$conn->real_escape_string($userInfo['email'])."','"
// 			.$conn->real_escape_string($userInfo['password'])."');";

// 	if ($conn->query($sql) === TRUE) { 
// 	   return "<mark style='background-color: green; color: white;''>User Successfully created</mark>";
// 	  // return true;
// 	} else {
// 	    return "<mark>Error: " . $sql . "<br>" . $conn->error . "</mark>";
// 	    //return false;
// 	}
// }
