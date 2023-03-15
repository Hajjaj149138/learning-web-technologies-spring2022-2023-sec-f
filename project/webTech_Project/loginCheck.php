<html>
<?php 
    session_start();

    if(isset($_REQUEST['submit'])){
        
        $Name = $_REQUEST['Name'];
        $Password = $_REQUEST['Password'];

        if($Name == "" && $Password == ""){
            echo"please enter information";

            
            
        }
        elseif($Name == 'Customer' && $Password == 12345)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: customer.php');
            }
            elseif($Name == 'Admin' && $Password == 12345)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: admin.php');
            }
            elseif($Name == 'Vendor' && $Password == 12345)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: vendor.php');
            }
            elseif($Name == 'DeliveryMan' && $Password == 12345)
           {
                $_SESSION['Name'] = $Name;
                setcookie('flag', 'true', time()+700, '/');

                header('location: deliveryMan.php');
            }else
            {
                echo "Error!!!!!!!!!!!!!!!!!!!";                
            }
        }
    
    else{
       
        header('location: login.php');
    }

?>
</html>