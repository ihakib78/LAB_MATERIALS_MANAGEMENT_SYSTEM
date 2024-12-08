<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> edit_lab </title>

    </head>

    <body>
        <?php
          
           if(isset($_GET['id']))
             {
                   $getid=$_GET['id'];
                   $sql = "SELECT * FROM LAB WHERE Serial = $getid";
                   $query = $conn->query($sql);

                   $data = mysqli_fetch_assoc($query);

                   $Serial = $data['Serial'];
                   $Room_no = $data['Room_no'];
                   $Name = $data['Name'];
                   $Floor = $data['Floor'];

             }
             
             if(isset($_GET['Serial']))

             {
               
               
               $new_room   =  $_GET['Room_no'];
               $new_name   =  $_GET['Name'];
               $new_floor  =  $_GET['Floor'];
               $new_serial =   $_GET['Serial'];

              $sql1 =  "UPDATE LAB SET 
                        Room_no=  '$new_room' , Name= '$new_name ', Floor= '$new_floor' 
                        WHERE Serial =  $new_serial";
               
               if( $conn->query($sql1)==TRUE)
               {
                      echo'Update Successful';
               }
               else
               {
                echo'Update failed';
               }
             }

        ?>
        <form action = "edit_lab.php" method = "GET">
            ROOM : <br>
            <input type = "text" name = "Room_no"   value = "<?php  echo $Room_no ?>"  ><br><br>  
           LAB NAME : <br>
            <input type = "text" name = "Name" value = "<?php  echo $Name ?>"><br><br> 
            FLOOR : <br>
            <input type = "text" name = "Floor"  value = "<?php  echo $Floor ?>"><br><br> 
            <input type = "text" name = "Serial"  value = "<?php  echo $Serial ?>" hidden>
            <input type = "submit" value = "Update" ><br><br> 
        </form>


    </body>

</html>
