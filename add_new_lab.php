<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> Add New LAB </title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          </head>
    </head>

    <body>
    <div class = "container bg-light">
               <div class = "container-foulid border-bottom border-success">
                    <?php 
                       include('top.php');
                    ?>
                 
               </div><!-- end of topper -->

               <div class = " container-foulid">
                   <div class="row">
                       <div class = "col-sm-3 bg-light p-0 m-0">
                       <?php 
                       include('left.php');
                         ?>

                       </div><!-- end of left  fa-solid fa-plus fa-beat fa-2xl text-success-->
                      
             <div class = "col-sm-9 border-start border-success">
                       <div class="container p-3 m-3">
                       <?php         
             if(isset($_GET['Name']))
             {
               
                $lname = $_GET['Name'];
                $room = $_GET['Room'];
                
                $sql = "INSERT INTO lab ( Name , Room_no )
                       VALUES('$lname' ,'$room')";

                if($conn->query($sql)==true){
                    echo"<script>
                    setTimeout(function(){window.location='http://localhost/lmms/index.php';},1000)
                    </script>";
                }
                    
             }
        ?>
        <form action = "add_new_lab.php" method = "GET">

           LAB NAME : <br>
            <input type = "text" name = "Name" ><br><br> 
           Room No : <br>
            <input type = "text" name = "Room" ><br><br> 

            <input type = "submit" value = "Submit" class="btn btn-success" ><br><br> 
        </form>
                        </div>

                       <div class = "col-sm-9 border-start border-success">
                        

                        </div><!-- end of right -->

                   </div> <!--end of row-->
               </div>

               <div class ="container_foulid border-top border-success" >
               <?php 
                       include('bottom.php');
                         ?>
               </div>

          </div>  





    </body>

</html>
