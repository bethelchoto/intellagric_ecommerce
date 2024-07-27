<?php
// Start session
session_start(); 
// For header redirection
ob_start();

// function verifyUser($username, $password, $user){

//     if($user){

//         if (password_verify($password, $user['user_pass'])) {
//             $_SESSION['username'] = $username;
//             $_SESSION['role'] = $user['user_role'];
//             $_SESSION['id'] = $user['user_id'];
//             $_SESSION['user_image'] = $user['user_image'];

//             if($user['user_role'] == "1"){
//                 echo
//                 "
//                 <script>
//                   alert('Admin Logged In');
//                   window.location.href = '../../view/apps/e-commerce/landing/index.php'
//                 </script>
//                 "; 
//                 exit;

//             } elseif($user['user_role'] == "5"){
//                 echo
//                 "
//                 <script>
//                   alert(' here user Welcome');
//                   window.location.href = '../../view/apps/e-commerce/landing/index.php'
//                 </script>
//                 "; 
//                 exit;
//             }

//         } else {
//             echo
//             "
//             <script>
//               alert('Wrong Login Details...Failed Try Again!');
//               window.location.href ='../view/frontend/index.php';
//             </script>
//             "; 
//             exit;
//         }
//     }
// }

     
function isLogged(){
    if(isset($_SESSION['id'])){
        return true;
    } else {
        return false;
    }
}

// function isAdmin(){
//     if(isset($_SESSION['id']) && $_SESSION['role'] === "1"){
//         return true;
//     } else {
//         return false;
//     }
// }

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