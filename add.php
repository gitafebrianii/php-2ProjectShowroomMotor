<html>
<head>
    <title>Add</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk"></td>
            </tr>
            <tr> 
                <td>CC</td>
                <td><input type="text" name="cc"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $merk = $_POST['merk'];
        $cc = $_POST['cc'];
        $harga = $_POST['harga'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO dt_motor(merk,cc,harga) VALUES('$merk','$cc','$harga')");
        
        // Show message when user added
        echo "Added successfully. <a href='index.php'>View</a>";
    }
    ?>
</body>
</html>