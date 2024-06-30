<?php
require_once("../../controllers/admin_controllers/authentication_controller.php");
require_once("../../settings/core.php");

// To Do: Sign_Up User Action
if(isset($_POST['sign_up'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $errors = array();

        $name = $_POST['username'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $cpass = $_POST['confirm_password'];
        $role = '2';

        echo "Debug: Received POST request\n";
        echo "Debug: Username: $name, Email: $email, Country: $country, City: $city, Contact: $contact\n";

        if($_FILES["file"]["error"] == 4){
            $errors[] = 'Image Does Not Exist';
        } else {
            $fileName = $_FILES["file"]["name"];
            $fileSize = $_FILES["file"]["size"];
            $tmpName = $_FILES["file"]["tmp_name"];
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if (!in_array($imageExtension, $validImageExtension)) {
                $errors[] = 'Invalid Image Extension';
            } else if ($fileSize > 1000000) {
                $errors[] = 'Image Size Is Too Large';
            } else {
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                move_uploaded_file($tmpName, '../../upload/user/' . $newImageName);

                if(check_duplicate_infor($email, $contact) > 0) {
                    $errors[] = 'Invalid User';
                } else {
                    if ($password != $cpass) {
                        $errors[] = 'Passwords do not match';
                    } else {
                        // hashed password
                        $pass = password_hash($password, PASSWORD_DEFAULT);
                        sign_up($name, $email, $country, $city, $contact, $pass, $newImageName, $role);
                        $_SESSION['success'] = 'User Successfully Registered';
                        header('Location: ../../view/apps/e-commerce/landing/index.php');
                        exit;
                    }
                }
            }
        }

        if(!empty($errors)) {
            $_SESSION['errors'] = $errors;
            header('Location: ../../view/apps/e-commerce/landing/index.php');
            exit;
        }
    }
}

// To Do: make sure the user is directed to the correct path based on role 
if(isset($_POST['sign_in'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = sign_in($username);
    
    if($user == null) {
        $_SESSION['error'] = 'Invalid user details!';
        header('Location: ../../view/pages/authentication/simple/sign-up.php');
        exit;

    } else {
       
        if($user){
        
            if (password_verify($password, $user['user_pass'])) {
                // session_start();
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $user['user_role'];
                $_SESSION['id'] = $user['user_id'];
                $_SESSION['user_image'] = $user['user_image'];
    
                if($user['user_role'] ===  "1"){
                    header('Location: ../../view/apps/e-commerce/landing/index.php');
                    exit;

                } elseif($user['user_role'] == "2"){
                    header('Location:../../view/apps/e-commerce/landing/index.php');
                    exit;
                }
    
            } else {
                $_SESSION['error'] = 'Invalid login details!';
                header('Location: ../../view/pages/authentication/simple/sign-in.php');
                exit;
            }
        }
    }
}

// To Do: Sign_Out User Action
// To make Change the GET link 
if(isset($_GET['sign_out'])) {
    // remove all session variables
    session_unset();

    session_destroy();

    header('Location:../../view/apps/e-commerce/landing/index.php');
    exit;
}

?>