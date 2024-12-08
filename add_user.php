<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> Add User </title>

    </head>

    <body>
        <?php
             if(isset($_GET['Name']))
             {
               
                $lname = $_GET['Name'];
                $email = $_GET['email'];
                $password = $_GET['password'];
                
                
                $sql = "INSERT INTO user (User_name , User_email,password )
                       VALUES('$lname','$email','$password' )";

                if($conn->query($sql)==true){
                   echo 'Data Inserted'; 
                }
                else
                {
                    echo 'Not inserted';
                }      
             }
        ?>
        <form action = "add_user.php" method = "GET">

           User NAME : <br>
            <input type = "text" name = "Name" ><br><br> 
            User Email : <br>
            <input type = "email" name = "email" ><br><br> 
            Password : <br>
            <input type = "password" name = "password" ><br><br> 
            <input type = "submit" value = "Submit" ><br><br> 
        </form>


    </body>

</html>
