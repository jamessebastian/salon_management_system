<?php

/**
 * Checks login details.
 *
 * @param string $email entered email
 *
 * @return array Returns user details, only if the user credentials are correct 
 */
function checkUserCredentials($email = '')
{
    global $conn;
    $sql    = sprintf("SELECT id,name,type,email,password FROM users WHERE email='%s'", $conn->real_escape_string($email));
    $result = $conn->query($sql);
    $row    = $result->fetch_assoc();
    
    if (password_verify($_POST['password'], $row['password'])) {
        return $row;
    }
    return NULL;
}

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

/**
* gets user details from the form 
*
* mode modes
* values regCustomer-for registering customer
* 
* @return array
*/ 
function getUserInfo($mode="")
{
    $userDetails['name']                       = getFieldValue("name");
    if(!$mode="regCustomer"){
        $userDetails['type']                       = getFieldValue("type");
    }
    $userDetails['email']                      = getFieldValue("email");
   // $userDetails['password']                   = getFieldValue("password");
    $userDetails['password']                   = password_hash(getFieldValue("password"), PASSWORD_DEFAULT);
    return $userDetails;
}


/**
 * Inserts user data into user table in the database.
 *
 * @param Array $userInfo  User details from the form.
 *
 * @return message
 */
function insertUser($userInfo = []) 
{
	global $conn;
    // var_dump($conn);
	$sql = "INSERT INTO users (name, type, email, password) 
			VALUES ('"
			.$conn->real_escape_string($userInfo['name'])."','"
			.$conn->real_escape_string($userInfo['type'])."','" 
			.$conn->real_escape_string($userInfo['email'])."','"
			.$conn->real_escape_string($userInfo['password'])."');";

	if ($conn->query($sql) === TRUE) { 
	   return "<mark style='background-color: green; color: white;''>User Successfully created</mark>";
	  // return true;
	} else {
	    return "<mark>Error: " . $sql . "<br>" . $conn->error . "</mark>";
	    //return false;
	}
}



/**
 * Updates user data
 *
 * @param Array $userInfo  User details from the form.
 * @param int $id  User id
 *
 * @return message
 */
function editUser($userInfo = [], $id = '') 
{
    global $conn;

    $sql = "UPDATE users 
            SET  name='".$conn->real_escape_string($userInfo['name'])."' ,
                 email='".$conn->real_escape_string($userInfo['email'])."' ,
                 type='".$conn->real_escape_string($userInfo['type'])."' ,
                 password='".$conn->real_escape_string($userInfo['password'])."'
            WHERE id = ".(int)$id.";";     

	if ($conn->query($sql) === TRUE) { 
	   return "<mark style='background-color: green; color: white;''>User(". $userInfo['name'] .") Successfully Updated</mark>";
	  // return true;
	} else {
	    return "<mark>Error: " . $sql . "<br>" . $conn->error . "</mark>";
	    //return false;
	}
}


/**
 * gets search results of users by running sql query
 *
 *
 * @return object
 */
function getUsersList()
{
    global $conn;

    $sql = "SELECT
                id,
    			name,
    			type,
    			email,
    			password   			
    		FROM users ";
    
    $result = $conn->query($sql);
    return $result;
}



/**
 * gets details of a particular user, given id for form default values
 *
 * @param int $id user id
 *
 * @return arraay
 */
function getUserDetailsForForm($id = '')
{
    global $conn;
    $sql = "SELECT
                id,
    			name,
    			type,
    			email,
    			password   			
    		FROM users 
            WHERE id = ".(int)$id;
    $result = $conn->query($sql);
    return $result->fetch_assoc();            
}


/**
 * Deletes user from database.
 *
 * @param int $id user id
 *
 * @return boolean Returns true on successful user deletion otherwise returns false.
 */
function deleteUser($id = '') 
{
    global $conn;
	$id=$conn->real_escape_string($id);
    $sql = "DELETE FROM users WHERE id=".(int)$id;

	if ($conn->query($sql) === TRUE && $conn->affected_rows>0) { 
	   return "<mark style='background-color: green; color: white;''>User Successfully Deleted</mark>";
	  // return true;
	} else {
	    return "<mark>Something went wrong</mark>";
	    //return false;
	}
}
