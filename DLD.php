<?php
 require('connection.php');
?>

<DOCTYPE html>

<html>
    
    <head>
          <title> Data Structure & Algorithm </title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            

            <style> 
        body { 
            font-family: Arial, Helvetica, sans-serif; 
        } 
  
        h1, 
        h3 { 
            text-align: center; 
            color: green; 
        } 
  
        table { 
            width: 100%; 
            border: 1px solid #100808; 
        } 
  
        th, 
        td { 
            border: 1px solid #eca0a0; 
            padding: 10px; 
            text-align: center; 
        } 
    </style> 

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

                    </div>

                </div><!-- end of left  fa-solid fa-plus fa-beat fa-2xl text-success-->
                      
             <div class = "col-sm-9 border-start border-success">
                <div class = "container-foulid border-bottom border-success">
                    <div class = "row p-4">
                                <div class = "col-sm-9">
                                      <h3><a href ="index.php" class="text-success text-decoration-none">Digital Logic Devices  </a> </h3>
                                </div>


                    </div> 
                 
               </div>
               
               <h3>Devices</h3>
               <?php
            
                  $sql = "SELECT * FROM dld  ";
            
                   $query = $conn->query($sql);

                   echo"<table border = '1' ><tr><th>Serial No </th>  <th> Item </th> <th Quantity</th><th>Manufacturers<th><th>Present Condition</th> </tr>";
                     while($data = mysqli_fetch_assoc(  $query ))
                  {
                $ser = $data['Serial_No'];
                $de = $data['Item'];
                $Q = $data['Quantity'];
                
                $mn = $data['Manufacturers'];
                $m = $data['Present_condition'];

                echo "<tr>
                    
                      <td>$ser</td> 
                      <td>$de</td> 
                      <td>$Q</td>
                      <td>$m</td>
                      <td>$mn</td>
                      
                      </tr>";
            }
            
            echo"</table>";
        </div>
            
</div>
               <div class ="container_foulid border-top border-success" >
               <?php 
                       include('bottom.php');
                         ?>
               </div>

          </div>  

    </body>

</html>
