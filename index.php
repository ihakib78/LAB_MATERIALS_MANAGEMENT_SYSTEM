<?php
     session_start();
     //$user_name = $_SESSION['Username'];

     include("config.php");
     if(!isset($_SESSION['valid'])){
      header("Location: index.php");
     }

?>

<!DOCTYPE HTML>

<html>
     <head>
           <title> LAB MATERIAL MANAGEMENT SYSTEM </title>
           
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          </head>
     <body>
          <div class = "container bg-light">
               <div class = "container-foulid border-bottom border-success">
                      <div class = "row p-3">
                               <div class = "col-sm-9">
                                      <h1><a href ="index.php" class="text-success text-decoration-none">Lab Materials Management System</a> </h1>
                               </div>

                               <div class = "col-sm-3">
                                      <!--<p class="pt-3"><?php echo  $user_name ?>-->
                                      <a href="logout.php" class="btn btn-info btn-lg">
                                               <span class="glyphicon glyphicon-log-out"></span> Log out
                                      </a></p>
                               </div>
                      </div> 
                 
               </div><!-- end of topper -->

               <div class = " container">
                   <div class="row">
                       <div class = "col-sm-3 bg-light p-0 m-0">
                       
                          <h4 class="bg-success text-white px-2 py-1">Lab</h4><br>
                             <ul class= "list-group" >
                                <li class="list-group-item"> <a href = "add_new_lab.php" class=" text-dark text-decoration-none">Add Lab </a></li><br>
                                <li class="list-group-item" > <a href = "lab_list.php" class=" text-dark text-decoration-none">List of Lab </a></li>
                             </ul>

                              <br>
                             <h4 class="bg-success text-white px-2 py-1">Class Schedule</h4><br>
                             <ul class= "list-group" >
                                <li class="list-group-item" > <a href = "class.php" class="text-dark text-decoration-none">Insert Class's Time & Date</a></li><br>
                                <li class="list-group-item" > <a href = "ongoing.php" class="text-dark text-decoration-none">Ongoing Classes</a></li><br>
                                <li class="list-group-item" > <a href = "upcomming.php" class="text-dark text-decoration-none">Upcomming Classes </a></li><br>
            
                             </ul>

                             <h4 class="bg-success text-white px-2 py-1">Report</h4><br>
                             <ul class= "list-group" >
                                <li class="list-group-item" > <a href = "report.php" class="text-decoration-none">Make Report</a></li><br>
                                <li class="list-group-item" > <a href = "delete_report.php" class="text-dark text-decoration-none">Show Report </a></li><br>
                                <br>
                             </ul>


                       </div><!-- end of left  fa-solid fa-plus fa-beat fa-2xl text-success-->

                       <div class = "col-sm-9">
                         <div class = "row p-5 pt-4">
                              <div class ="col-sm-4">
                              <a href ="add_new_lab.php" > <i class=" fa-solid fa-plus fa-beat fa-2xl text-success"></i></a><br><br>
                              <p> Add Lab</p>
                              </div> 

                              <div class ="col-sm-4">
                              <a href = "lab_list.php"><i class="fa-solid fa-list fa-2xl text-success"></i></a><br><br>
                              <p> List of Lab </p>
                              </div> 
                        </div><!-- end of right -->
                       <br>
                        <hr/>

                        <div class = "row p-5 pt-4">

                              <div class ="col-sm-4">
                              <a href ="class.php" ><i class="fa-solid fa-list-check fa-2xl" style="color: #217f1a;"></i></a><br><br>
                              <p> Insert Class's Time & Date </p>
                              </div> 
                              <div class ="col-sm-4">
                              <a href ="ongoing.php" > <i class="fa-solid fa-person-chalkboard fa-2xl" style="color: #2c814d;"></i></a><br><br>
                              <p> Ongoing Classes </p>
                              </div> 

                              <div class ="col-sm-4">
                              <a href ="upcomming.php" ><i class="fa-solid fa-chalkboard fa-2xl text-success"></i></a><br><br>
                              <p> Upcoming Classes</p>
                              </div> 
                        </div><!-- end of right -->
                         <br><br>
                         <br>
                        <hr/> 

                         <div class = "row p-5 pt-4">
                              <div class ="col-sm-4">
                              <a href ="report.php" ><i class=" fa-solid fa-pen-to-square fa-2xl text-success"></i></a><br><br>
                              <p> Make Report</p>
                              </div> 
                              
                              <div class ="col-sm-4">
                              <a href = "delete_report.php"><i class="fa-solid fa-book fa-2xl text-success"></i></a><br><br>
                              <p> Show Report</p>
                              </div> 
                        </div><!-- end of right -->

                   </div> <!--end of row-->
               </div>

               <div class ="container_foulid border-top border-success" >
                        <p class ="text-center p-2">Copyright : Group 05</p>
               </div>

          </div>  
          
     </body>

</html>
     
<?php
     
//else{header('location:upcomming.php');}

?>