<?php
 require('connection.php');

 $sql = "SELECT * FROM class WHERE Begin_time > CURRENT_TIME()";

 $query = $conn->query($sql);
 $row = $query->fetch_assoc();

?>

<!doctype html>
<html lang="en">
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
                    <h3 class="text-blue text-decoration-none">Upcomming Classes</h3>
                    <hr  style="border-color: red;"></hr>
                    <!-- <h3 style="background-color:green ;" >Upcomming Classes</h3> -->
                    <br>
                    <br>
                <table class="table">
                <!-- <style>
    td {
        padding: 100px 0; /* Optional: Add padding to the cell content */
        margin-right: 50px; /* Adjust the margin as needed */
    }
    td:last-child {
        margin-right: 0; /* Remove margin from the last column */
    }
</style> -->
<style>
    table {
        border-collapse: separate;
        border-spacing: 15px 0; /* Adjust the value as needed */
    }
    td {
        padding: 10px 0; /* Optional: Add padding to the cell content */
    }
</style>
  <thead>
    <tr>
     
      <th scope="col">Room No</th>
      <th scope="col">Course</th>
      <th scope="col">Date</th>
      <th scope="col">Begining Time</th>
      <th scope="col">Ending Time</th>
   
    </tr>
  </thead>
  <tbody>
    <?php
      while($row = $query->fetch_assoc()){
    ?>
    <tr>
     
      <td><?php echo $row['Room'];?></td>
      <td><?php echo $row['Course'];?></td>
      <td><?php echo $row['date'];?></td>
      <td><?php echo $row['Begin_time'];?></td>
      <td><?php echo $row['End_time'];?></td>
      
    </tr>

    <?php }?>
  </tbody>
</table>
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