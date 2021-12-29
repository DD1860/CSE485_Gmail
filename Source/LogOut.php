<?php
    session_start();

    if(isset($_SESSION['isSignUpOK'])){
        unset($_SESSION['isSignUpOK']);
        header("location:SignUp.php");
    }

?>