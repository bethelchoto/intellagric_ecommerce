<?php
// Start session
session_start(); 
// For header redirection
ob_start();
   
function isLogged(){
    if(isset($_SESSION['id'])){
        return true;
    } else {
        return false;
    }
}

function isAdmin(){
    if (isset($_SESSION['id']) && isset($_SESSION['role'])) {
        // List of admin roles
        $admin_roles = ["1", "2", "3", "4"];

        // Check if the user's role is one of the admin roles
        if (in_array($_SESSION['role'], $admin_roles)) {
            return true;
        }
    }else{
    return false;
    }
}

function getIPAddress() {  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

?>