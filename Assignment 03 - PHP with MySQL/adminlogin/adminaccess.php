<?php

    $conn = new mysqli('localhost','root','','test');
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $mailid = $_POST['mailid'];
        $password = $_POST['password'];
        if(!empty($mailid) && !empty($password) && !is_numeric($mailid)){
            $query ="select * from adminregister where mailid ='$mailid' limit 1";
            $result = mysqli_query($conn, $query);
    
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password']== $password){
                        header("location:adminhome.php");
                        die;
    
                    }
                }
            }
            echo '<script>alert("Wrong username or password");</script>';

        }
        else{
            echo '<script>alert("Wrong username or password");</script>';

        }
    }
?>  