<?php

include "database.php";
include "superadmin/listing.php";
include "superadmin/userlist.php";


// if(isset($_REQUEST['action'])){
    $choice=$_REQUEST['action'];
//   }else{
//     $choice=null;
// }


// Login Class For All Users

class login{

    function signup($conn){
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $hash = hash('sha256', mysqli_real_escape_string($conn, $_POST['password']));
            $role = mysqli_real_escape_string($conn, $_POST['role']);
        
            
        
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                echo json_encode(array("status" => false, "message" => "Email Already Exists"));
                exit;
            } else {
                $query = "INSERT INTO users (email, password,role) VALUES ('$email', '$hash',$role)";
                if (mysqli_query($conn, $query)) {
                    http_response_code(201);
                    echo json_encode(array("status" => true, "message" => true));
                } else {
                    http_response_code(500);
                    echo json_encode(array("status" => false, "message" => "Failed to create user"));
                }
            }
            mysqli_close($conn);
        

        }
    
    }
    
    function login($conn){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            if (isset($_SESSION['email'])) {
                http_response_code(200);
                // exit;
                // echo json_encode(array("user" => "already logedin"));
            }
        
            $email = mysqli_real_escape_string($conn, $_POST['email']);
        
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {

                if(isset($_REQUEST['password'])){
                        $password = mysqli_real_escape_string($conn, $_POST['password']);
                        $row = mysqli_fetch_assoc($result);
                        $hash = hash('sha256', $password);

                    if ($hash == $row['password'] && $row['role'] == 1) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/superadmin"));
                        exit;

                    }else if ($hash == $row['password'] && $row['role'] == 2) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/admin"));
                        exit;
                        
                    }else if ($hash == $row['password'] && $row['role'] == 3) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/subadmin"));
                        exit;
                        
                    }else if ($hash == $row['password'] && $row['role'] == 4) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"https://fc-new.netlify.app/"));
                        exit;
                        
                    } else {
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => "No Wrong Password For This UserID"));
                    }

                }else{
                    echo json_encode(array("status" => true, "message" => "Enter Password"));
                }

            } else {
                http_response_code(200);
                echo json_encode(array("status" => false, "message" => "No UserID Found"));
            }
            mysqli_close($conn);
        }
        
    }
    
    
    function googlelogin($conn){
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            if (isset($_SESSION['email'])) {
                http_response_code(200);
                // exit;
                // echo json_encode(array("user" => "already logedin"));
            }
        
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
        
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {

                    $row = mysqli_fetch_assoc($result);

                    if ($row['role'] == 1) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/superadmin"));
                        exit;

                    }else if ($row['role'] == 2) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/admin"));
                        exit;
                        
                    }else if ($row['role'] == 3) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"../FIND/subadmin"));
                        exit;
                        
                    }else if ($row['role'] == 4) {
                        $_SESSION['email'] = $email;
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true,"link"=>"https://fc-new.netlify.app/"));
                        exit;
                        
                    } else {
                        http_response_code(200);
                        echo json_encode(array("status" => true, "message" => true));
                    }

            } else {
                echo json_encode(array("status" => false, "message" => "new"));
            }
            mysqli_close($conn);
        }
        
    }
    
    
}

$login=new Login();

function getuser_role($email,$conn){
    $query = "SELECT role FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
        if ($row['role'] == 1) {
            return 1;
        }else if ($row['role'] == 2) {
            return 2;
        }else if ($row['role'] == 3) {
            return 3;
        }else if ($row['role'] == 4) {
            return 4;
        }
    mysqli_close($conn);    
}
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    session_start();
    if (isset($_SESSION['email'])) {
        http_response_code(200);
        $role=getuser_role($_SESSION['email'] , $conn);

        if($role==1){

            $listing=new SuperAdminListing($conn);
            $user=new SuperAdminUsers($conn);

            switch($choice){

                case 'listings_display':$listing->listings_display($conn);break;
                case 'listings_insert':$listing->listings_insert($conn);break;
                case 'listings_update':$listing->listings_update($conn);break;

                case 'user_display':$user->user_display($conn);break;
                case 'user_insert':$user->user_insert($conn);break;
                case 'user_update':$user->user_update($conn);break;
                case 'user_delete':$user->user_delete($conn);break;

            }
            
            

        }

        if($role==2){
            
            // echo json_encode(array("message" => "Already logged in  Admin"));
        }

        if($role==3){
            
            // echo json_encode(array("message" => "Already logged in Subadmin"));
        
        }

        if($role==4){
        
            // echo json_encode(array("message" => "Already logged in Customer"));
        
        }
    }else{
        // echo json_encode(array("message" => "Session Expired"));
    }

}

switch($choice){
    case 'login':$login->login($conn);break;
    case 'signup':$login->signup($conn);break;
    case 'googlelogin':$login->googlelogin($conn);break;
}


?>
