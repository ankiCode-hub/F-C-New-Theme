<?php

$columns=['id','user_id','name','category_id','tags','ribbon_tag_id','profile_image','overview','video','address','state','city','country','pincode','phone','email','license_number','website','map','status','step','review_count','created_by','is_approved','created_at','updated_at','deleted_at'];

// id
// user_id
// name
// category_id
// tags
// ribbon_tag_id
// profile_image
// overview
// video
// address
// state
// city
// country
// pincode
// phone
// email
// license_number
// website
// map
// status
// step
// review_count
// created_by
// is_approved
// created_at
// updated_at
// deleted_a


class SuperAdminListing{

    function __construct(){}

    function listings_display($conn) {

        if($_REQUEST['type']==0){

            $query = "SELECT * FROM listings";
        
        }else if($_REQUEST['type']==1){
            
            $query = "SELECT * FROM listings where is_approved=1";
        
        }else{
            
            $query = "SELECT * FROM listings where is_approved=2";
            
        }
        $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                $listings = array();
                while($row = mysqli_fetch_assoc($result)) {
                    $listings[] = $row;
                }
                http_response_code(200);
                echo json_encode($listings);
            } else {
                http_response_code(404);
                echo json_encode(array("message" => "empty"));
            }

    }


    function listings_insert($conn) {
        $variables = array('user_id', 'name', 'category_id', 'tags', 'ribbon_tag_id', 'profile_image', 'overview', 'video', 'address', 'state', 'city', 'country', 'pincode', 'phone', 'email', 'license_number', 'website', 'map', 'status', 'step', 'review_count', 'created_by', 'is_approved', 'created_at', 'updated_at', 'deleted_at');
        $values = array();
        
        foreach($variables as $var) {
          $val = mysqli_real_escape_string($conn, $_REQUEST[$var]);
          array_push($values, "'$val'");
        }
      
        $sql = "INSERT INTO listings (". implode(',', $variables) .") VALUES (". implode(',', $values) .")";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing added successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }


    function user_update($conn) {
        $variables = array('user_id', 'name', 'category_id', 'tags', 'ribbon_tag_id', 'profile_image', 'overview', 'video', 'address', 'state', 'city', 'country', 'pincode', 'phone', 'email', 'license_number', 'website', 'map', 'status', 'step', 'review_count', 'created_by', 'is_approved', 'created_at', 'updated_at', 'deleted_at');
        $set_values = array();
        $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
      
        foreach($variables as $var) {
          $val = mysqli_real_escape_string($conn, $_REQUEST[$var]);
          array_push($set_values, "$var='$val'");
        }
      
        $sql = "UPDATE listings SET ". implode(',', $set_values) ." WHERE id='$id'";
        
        if (mysqli_query($conn, $sql)) {
          echo '{"message":"Listing updated successfully"}';
        } else {
          echo '{"message":"Error: ' . mysqli_error($conn) . '"}';
        }
    }
    


}

?>