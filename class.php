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
                    <h3 >Insert Class Time & Date</h3>
                    <hr  style="border-color: red;"></hr>
                    <!-- <h3 style="background-color:green ;" >Upcomming Classes</h3> -->
  
        <?php
             if(isset($_GET['Room']))
             {
                $id = $_GET['id'];
                $room =  $_GET['Room'];
                $Course =  $_GET['Course'];
                
                $btime = $_GET['btime'];
                $etime = $_GET['etime'];
                $date = $_GET['date'];
                
                $sql = "INSERT INTO class (Room ,Course,Begin_time,End_time , date )
                       VALUES('$room','$Course','$btime','$etime','$date' )";

                if($conn->query($sql)==true){
                    echo"<script>
                    setTimeout(function(){window.location='http://localhost/lmms/index.php';},1000)
                    </script>";
                }
                      
             }
        ?>


   <div class="container">
  <form>
      <input type = "text" name = "id" hidden ><br><br>  
            Room : <br>
            <input type = "text" name = "Room" ><br><br> 
            Course : <br>
            <input type = "text" name = "Course" ><br><br> 
             Date: <br>
            <input type = "date" name = "date" ><br><br> 
            Begining Time : <br>
            <input type = "time" name = "btime" ><br><br> 
            Ending Time :<br>
            <input type = "time" name = "etime" ><br><br> 
            <input type = "text" name = "status" hidden >

            <input type = "submit" value = "Submit" class="btn btn-success" ><br><br> 
  </form>
</div>
</div>
                <div class ="col">
                    
                </div>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
   

  
 
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
