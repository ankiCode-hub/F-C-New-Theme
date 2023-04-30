<?php

include "database.php";

session_start();
$name="";
$ProfileImage="";



  

if (!isset($_SESSION['email'])) {
    header('Location: ../FC/');
    // echo "not";
}else{
    $email=$_SESSION['email'];
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
            $name=$row['name'];
            $ProfileImage=$row['profile_image'];
            if($row['password']==null){
                
            }
    }


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
    
    $user=getuser_role($_SESSION['email'],$conn);
}


?>