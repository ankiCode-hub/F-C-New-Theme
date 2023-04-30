<?php

include "database.php";

session_start();
$name="";
$ProfileImage="";

if (!isset($_SESSION['email'])) {
    // header('Location: index.php');
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




}


?>