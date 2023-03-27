<?php 
    session_start();
    require_once '../models/userModel.php';
    
    if(isset($_REQUEST['submit'])){

     
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob'];
        $name = $_REQUEST['name'];
        $role = $_REQUEST['role'];
        $confirmpassword= $_REQUEST['confirmpassword'];
       

        if($username == "" || $password == "" ||empty($name)|| $email == "" || empty($gender)||empty($dob)||empty($role)) {
            echo "Null value ..";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password does not match........";
            
        }
        elseif( strlen(trim($_REQUEST['password'])) < 6) {
            echo "Password must have at least 6 characters";
            
        }
        else if(strtotime($dob) > time()){
            echo "Date of birth cannot be greater than today's date";
        }
        
        else{
            $file = fopen('user1.txt', 'a');
            $user = $username."|".$password."|".$name."|".$email."|".$gender."|".$dob."|".$role."\r\n";
            fwrite($file, $user);
            header('location: ../views/login.php');
        }
    }else{
        echo "invalid request...";
    }
?>