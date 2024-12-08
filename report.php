<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                      
      <div class = "container p-4 m-4">

        <div class ="container">
            <div class ="row">
                <div class ="col">

                </div>
                <div class ="col">
                    <h3 >Make A Report</h3>
                    <hr  style="border-color: red;"></hr>
                    <!-- <h3 style="background-color:green ;" >Upcomming Classes</h3> -->
          
                    <br>

        <?php
             if(isset($_GET['Room_No']))
             {
                $id = $_GET['Report_id'];
                $room =  $_GET['Room_No'];
                $device_id =  $_GET['Device_id'];
                $desc = $_GET['Description'];
                $time = $_GET['Time'];
                $date = $_GET['Date'];
                
                $sql = "INSERT INTO report (Room_No , Device_id ,Description, Time , Date )
                       VALUES('$room','$device_id','$desc','$time','$date' )";

                 if($conn->query($sql)==true){
                   echo"<script>
                 setTimeout(function(){window.location='http://localhost/lmms/index.php';},2000)
                 </script>";
                 }
                
                     
             }
        ?>
   <div class="container">
  <form action ="report.php" method = "GET" >
      <input type = "text" name = "Report_id" hidden ><br><br>  
            Room No : <br>
            <input type = "text" name = "Room_No" ><br><br> 
            Device Id : <br>
            <input type = "text" name = "Device_id" ><br><br> 
           Description : <br>
            <input type = "text" name = "Description" ><br><br> 
             Time: <br>
            <input type = "time" name = "Time" ><br><br> 
             Date : <br>
            <input type = "date" name = "Date" ><br><br> 

            <input type = "submit" value = "Submit" class="btn btn-success" ><br><br> 
  </form>
</div>
 
<!-- <style>
  .container {
    width: 50%; /* adjust to desired width */
    margin: 0 auto; /* center the container */
  }
</style> -->
</div>
                <div class ="col">
                    
                </div>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
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
