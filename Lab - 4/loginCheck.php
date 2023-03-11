<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 

        if($username == "" && $password == "") {
            
            header('location: login.php');
        }
        else{
            if($username == $password){
                
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            }else{
                echo "Invalid User or wrong User Name/ Password!";
            }
        }
    }
    else{
        echo "Invalid Request !!!!!";
    }
?>