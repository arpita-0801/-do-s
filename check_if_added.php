<?php
    function check_if_added_to_cart($items_id){
        require 'common.php';
        
        $user_id = $_SESSION['user_id'];
        
        $query = "SELECT * FROM users_items WHERE pid='$items_id' AND user_id ='$user_id' and status='Added To Cart'";

         $query_result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($query_result) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>
    
    