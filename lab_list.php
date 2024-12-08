<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title>List of Lab </title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
             <?php
          
          $sql = "SELECT * FROM Lab 
                  ORDER BY Name ASC";
                  
         $query =  $conn->query($sql);
        ?>
        <form action = "lab_list.php" method = "GET">

           LAB NAME : <br>
            <select onChange = "window.location.href=this.value">
                <option value = "Select Lab">Select Lab</option>
               <?php
                     while( $data = mysqli_fetch_array( $query)){

                        $id = $data['Serial'];
                      
                        $lname = $data['Name'];
                        $x = ".php";
                        $word = preg_split('/\s+/', $lname);
                        $liname = implode('',$word);
                        
                         $z = $liname . $x;
                     echo"<option value='$z'>$lname</option>";
                    
                      
                     }

                ?>
                
            </select>
            <br><br>
         
        
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
