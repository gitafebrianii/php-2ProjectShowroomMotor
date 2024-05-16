<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM dt_motor ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Merk</th> <th>CC</th> <th>Harga</th> <th>Update</th>
    </tr>
    <?php  
    while($dt_motor = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$dt_motor['merk']."</td>";
        echo "<td>".$dt_motor['cc']."</td>";
        echo "<td>".$dt_motor['harga']."</td>";    
        echo "<td><a href='edit.php?id=$dt_motor[id]'>Edit</a> | <a href='delete.php?id=$dt_motor[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>