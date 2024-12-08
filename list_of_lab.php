<?php
 require('connection.php')
?>

<DOCTYPE html>

<html>
    
    <head>
          <title>list_of_lab </title>

    </head>

    <body>
        <?php
            
            $sql = "SELECT * FROM LAB ORDER BY Name ASC ";
            
            $query = $conn->query($sql);

            echo"<table border = '1' ><tr>  <th> Name </th> <th> Action </th> </tr>";
            while($data = mysqli_fetch_assoc(  $query ))
            {
                $name = $data['Name'];
                $id = $data['Serial'];

                echo "<tr>
                    
                      <td>$name</td> 
                     
                      <td><a href ='edit_lab.php?id=$id'>Edit</td>
                      </tr>";
            }
            
            echo"</table>";
        ?>
        

    </body>

</html>