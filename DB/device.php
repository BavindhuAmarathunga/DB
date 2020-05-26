<html>
<head><title>university registration</title></head>
<style>


</style>
<body background = "dark.jpg"">
<h1 style="color:yellow"><center>AudioVizzion</center></h1>
<center><h2 style="color:yellow">Device</h2></center>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<div>
device catalog ID <input type="text1" id="a"  name="deviceCatalogID" size="30"><br><br>

device catalog name <input type="text2" id="b" name="deviceCatalogName" size="30"><br><br>

device discription <input type="text2" id="d" name="deviceDescrip" size="30"><br><br>

device availability status <input type="text2" id="e" name="availabilityStatus" size="30"><br><br><br>
</div>

<input type="submit" style="background-color:yellow; border-color:orange; border-width:5px; border-radius:12px; padding:10px 15px; font-size:18px;" name="submit" value="submit"/>
<input type="reset" style="background-color:yellow; border-color:orange; border-width:5px; border-radius:12px; padding:10px 15px; font-size:18px;" name="submit2" value="reset"/><br><br><br>

<input type="submit" style="background-color:yellow; border-color:orange; border-width:5px; border-radius:12px; padding:10px 15px; font-size:18px;" formaction="visual_device.php"name="submit" value="visual device"/>
<input type="submit" style="background-color:yellow; border-color:orange; border-width:5px; border-radius:12px; padding:10px 15px; font-size:18px;" formaction="hearing_device.php" name="submit" value="hearing device"/>
</form>

<?php 

$w1742232_deviceCatalogId=$_POST["deviceCatalogID"];
$w1742232_deviceCatalogName=$_POST["deviceCatalogName"];
$w1742232_deviceDescrip = $_POST["deviceDescrip"];
$w1742232_availabilityStatus = $_POST["availabilityStatus"];
$servername='';
$username='root';
$password = '';
$dbname = 'w1742232';

if(!empty($_POST['deviceCatalogID']) ){
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    


if ($conn->query("INSERT INTO w1742232_device  (w1742232_deviceCatalogID, w1742232_deviceCatalogName,w1742232_deviceDescrip, w1742232_availabilityStatus )
VALUES ('".$w1742232_deviceCatalogId."', '".$w1742232_deviceCatalogName."', '".$w1742232_deviceDescrip."', '".$w1742232_availabilityStatus."')") === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

</body>
</html>