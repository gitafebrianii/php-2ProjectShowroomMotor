<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $merk=$_POST['merk'];
    $cc=$_POST['cc'];
    $harga=$_POST['harga'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE dt_motor SET merk='$merk',cc='$cc',harga='$harga' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM dt_motor WHERE id=$id");
 
while($dt_motor = mysqli_fetch_array($result))
{
    $merk = $dt_motor['merk'];
    $cc = $dt_motor['cc'];
    $harga = $dt_motor['harga'];
}
?>
<html>
<head>	
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_data" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Merk</td>
                <td><input type="text" name="merk" value=<?php echo $merk;?>></td>
            </tr>
            <tr> 
                <td>CC</td>
                <td><input type="text" name="cc" value=<?php echo $cc;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>