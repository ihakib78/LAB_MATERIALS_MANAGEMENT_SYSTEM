<?php
 require('connection.php');

 $sql = "SELECT * FROM REPORT";


if(isset($_GET['id']))
          {
    $getid = $_GET['id'];
    $sql1 = "DELETE FROM REPORT WHERE  Report_id = $getid ";

   
    if( $conn->query($sql1))
        {
            echo"<script>
                       setTimeout(function(){window.location='http://localhost/lmms/delete_report.php';},1000)
                       </script>";
        }
        }
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
                    <h3 >List of Reports</h3> 
                    <hr  style="border-color: red;"></hr>
                    <!-- <h3 style="background-color:green ;" >Upcomming Classes</h3> -->
                    <br>
        <div class ="container">
            <div class ="row">
                <div class ="col">

                </div>
                <div class ="col">
                    
                <table class="table">
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
      <th scope="col">Report Id</th>
      <th scope="col">Room No</th>
      <th scope="col">Device Id</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while($row = $query->fetch_assoc()){
    ?>
    <tr>
      <td><?php echo $row['Report_id'];?></td>
      <td><?php echo $row['Room_No'];?></td>
      <td><?php echo $row['Device_id'];?></td>
      <td><?php echo $row['Description'];?></td>
      <td><?php echo $row['Date'];?></td>
      <td><?php echo $row['Time'];?></td>
      <td><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['Report_id'];?>">
   Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row['Report_id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Report</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        First Resolve Then delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href ="delete_report.php?id=<?php echo $row['Report_id'];?>" ><button type="button" class="btn btn-primary">Delete</button></a>
      </div>
    </div>
  </div>
</div>
      </td>
      
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