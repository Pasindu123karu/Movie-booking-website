<?php

function check_login($conn) {

    if(isset($_SESSION['admin_name']))
    {
        $id = $_SESSION['admin_name'];
        $query = "select * from user_db where name = '$id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header('location:./login_form.php');
    die;
}




?>