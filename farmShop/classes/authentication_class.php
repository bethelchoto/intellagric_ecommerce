<?php
//connect to database class
require("../../settings/db_class.php");

/**
*Authentication class to handle all auth functions 
*/
/**
 *@author Bethel Panashe Choto
 *
 */

class authentication_class extends db_connection
{
    public function signUp($name, $email,$country, $city, $contact, $pass, $image, $role)
    {
        $ndb = new db_connection();	
        $sql = "INSERT INTO `user` (`user_name`, `user_email`, `user_pass`,`user_country`, `user_city`, `user_contact`, `user_image`, `user_role` ) VALUES ('$name', '$email', '$pass', '$country', '$city', '$contact', '$image', '$role')";
        return $this->db_query($sql);
    }

    // this is me testing the new keyboard

    function checkDuplicateInfor($email, $contact){
        $ndb = new db_connection();	
        $sql = "SELECT * FROM `user` WHERE user_email = '$email' or user_contact = '$contact' ";
        $result_query = $this->db_query($sql);
        $num_rows = $this ->db_count($result_query);
        return $num_rows;
    }

    public function signIn($username) {
        $sql = "SELECT * FROM `user` WHERE `user_email` = '$username'";
        $user = $this->db_fetch_one($sql);
        return $user;
    }

}

?>