<?php

$columns=['id','user_id','name','category_id','tags','ribbon_tag_id','profile_image','overview','video','address','state','city','country','pincode','phone','email','license_number','website','map','status','step','review_count','created_by','is_approved','created_at','updated_at','deleted_at'];

// id
// admin_id
// name
// email
// email_verified_at
// password
// phone
// facebook
// instagram
// twitter
// profile_image
// rol
// superadmin
// remember_token
// crm
// crm_added_on
// created_at
// updated_at



class SuperAdminUsers{

    function __construct(){}

    function user_display($conn) {

        if($_REQUEST['subadmin']==0){

            $query = "SELECT * FROM users";
        
        }else if($_REQUEST['subadmin']>=1){
            $id=$_REQUEST['subadmin'];
            $query = "SELECT * FROM users where admin_id=$id";        
        }

        $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                $users = array();
                while($row = mysqli_fetch_assoc($result)) {
                    $users[] = $row;
                }
                http_response_code(200);
                echo json_encode($users);
            } else {
                http_response_code(404);
                echo json_encode(array("message" => "empty"));
            }

    }


    function user_insert($conn) {
        $variables = array('id','admin_id','name','email','email_verified_at','password','phone','facebook','instagram','twitter','profile_image','rol','superadmin','remember_token','crm','crm_added_on','created_at','updated_at');
        
        $values = array();
        
        foreach($variables as $var) {
          $val = mysqli_real_escape_string($conn, $_REQUEST[$var]);
          array_push($values, "'$val'");
        }
      
        $sql = "INSERT INTO users (". implode(',', $variables) .") VALUES (". implode(',', $values) .")";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing added successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }


    function user_update($conn) {
        $variables = array('admin_id','name','email','email_verified_at','password','phone','facebook','instagram','twitter','profile_image','rol','superadmin','remember_token','crm','crm_added_on','created_at','updated_at');
        
        $set_values = array();
        $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
      
        foreach($variables as $var) {
          $val = mysqli_real_escape_string($conn, $_REQUEST[$var]);
          array_push($set_values, "$var='$val'");
        }
      
        $sql = "UPDATE users SET ". implode(',', $set_values) ." WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing updated successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }
    

    function user_activate($conn) {        
        $set_values = array();
        $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
      
        $sql = "UPDATE users SET is_active=1 WHERE id='$id'";

        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing updated successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }
    

    function user_deactivate($conn) {        
        $set_values = array();
        $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
      
        $sql = "UPDATE users SET is_active=0 WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing updated successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }
    

    function user_delete($conn) {        
        $set_values = array();
        $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
      
        foreach($variables as $var) {
          $val = mysqli_real_escape_string($conn, $_REQUEST[$var]);
          array_push($set_values, "$var='$val'");
        }
      
        $sql = "UPDATE from users WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing Deleted successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }
    





}

?>