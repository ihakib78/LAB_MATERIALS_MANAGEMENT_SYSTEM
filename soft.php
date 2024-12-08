<?php
 require('connection.php')
?>

<DOCTYPE html>

<html>
    
    <head>
          <title>Software</title>

    </head>

    <body>
        <?php
            
            $sql = "SELECT * FROM software ";
            
            $query = $conn->query($sql);

            echo"<table border = '1' ><tr><th>Serial No </th><th> Name </th> <th> Publisher</th> <th>Installed_On</th><th>Size</th> <th>Version<th> </tr>";
            while($data = mysqli_fetch_assoc(  $query ))
            {
                $ser = $data['Serial_No'];
                $ne = $data['Name'];
                $p = $data['Publisher'];
                $i = $data['Installed_On'];
                $s = $data['Size'];
                $v = $data['Version'];

                echo "<tr>
                    
                      <td>$ser</td> 
                      <td>$ne</td> 
                      <td>$p</td>
                      <td>$i</td>
                      <td>$s</td>
                      <td>$v</td>
                      
                      </tr>";
            }
            
            echo"</table>";
        ?>
        

    </body>

</html>