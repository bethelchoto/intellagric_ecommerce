<?php

/**
 * 
 *@author Bethel Panashe Choto
 *
**/

include(__DIR__ . "../../../classes/authentication_class.php");

function sign_up($name, $email,$country, $city, $contact, $pass, $image, $role){
    $authentication_class = new authentication_class();
    $signup_successful = $authentication_class->signUp($name, $email,$country, $city, $contact, $pass, $image, $role);
    return $signup_successful;
}

function check_duplicate_infor($email, $contact){
    $authentication_class = new authentication_class();
    $num_rows = $authentication_class->checkDuplicateInfor($email, $contact);
    return $num_rows;
}

function sign_in($username) {
    $authentication_class = new authentication_class();
    $user = $authentication_class->signIn($username);
    return $user;
}


?>