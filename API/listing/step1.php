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


    function listing_update($conn) {
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