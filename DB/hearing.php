<html>
<head><title>Hearing Device</title></head>
<style>
  body {
  background-image: url('hearing.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}

  h1{
  color: #ffffff;
  font-size: 60px;
}

img{
  border-radius: 10px;
  position: absolute;
  top: 5%;
  left: 5%;
}

.p1{
  position: absolute;
  font-size: 50px;
  color: #ffffff;
  text-align: center;
  padding-left: 40%;
}

.fr{
  position: absolute;
  padding-top: 10%;
  color: #ffffff;
  padding-left: 35%;
  font-size: 20px;
}
.div{
  position: absolute;
  padding-bottom: 1%;
}

.b1 {
  position: absolute;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #66ff33;
  color: black;
  font-size: 12px;
  padding: 8px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.b1:hover {

  background-color: black;
  color: white;
}

.b2 {
  position: absolute;
  margin-left: 40%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #66ff33;
  color: black;
  font-size: 12px;
  padding: 8px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;

}

.b2:hover {

  background-color: black;
  color: white;
}

.b3 {
  position: absolute;
  margin-left: 20%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #66ff33;
  color: black;
  font-size: 12px;
  padding: 8px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  font-weight: bold;

}

.b3:hover {

  background-color: black;
  color: white;
}


a {
  text-decoration: none;
  color: black;
}

</style>
<body>
<header><h1 align="center">AudioVizzion</h1></header>
<img src="logo.jpg" alt="logo" width="150" height="100">
<p class="p1"><strong>Hearing Device</strong></p>

<form class="fr" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
device catalog ID <input type="text" id="a" name="deviceCatalogID" ><br><br>

device catalog name <input type="text" id="b" name="deviceCatalogName"><br><br>

device discription <input type="text" id="d" name="deviceDescrip"><br><br>

<label>device availability status</label>
<input type="radio" name="availabilityStatus" value="In stock">In stock
<input type="radio" name="availabilityStatus" value="Out of stock">Out of stock
<input type="radio" name="availabilityStatus" value="currently being ordered">Currently being ordered<br><br>

Hearing device Maker <input type="text2" id="b" name="hdMaker"><br><br>

hearing device made <input type="text2" id="d" name="Modle" ><br><br><br>
</div>

<br><button class="b1" type="Submit"><strong>Submit</strong></button>
<button class="b2" type="reset"><strong>Reset</strong></button>
<input type="submit" class="b3" formaction="log.html" name="submit" value="Select category"/>

</form>

<?php 

error_reporting(E_ALL^ E_NOTICE );


$w1742232_deviceCatalogId=$_POST["deviceCatalogID"];
$w1742232_deviceCatalogName=$_POST["deviceCatalogName"];
$w1742232_deviceDescrip = $_POST["deviceDescrip"];
$w1742232_availabilityStatus = $_POST["availabilityStatus"];
$w1742232_hdMake=$_POST["hdMaker"];
$w1742232_hdModel = $_POST["Modle"];

$servername='';
$username='root';
$password = '';
$dbname = 'w1742232';

if(!empty($_POST['deviceCatalogID'])){
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
if ($conn->query("INSERT INTO w1742232_device  (w1742232_deviceCatalogId, w1742232_deviceCatalogName,w1742232_deviceDescrip, w1742232_availabilityStatus )
VALUES ('".$w1742232_deviceCatalogId."', '".$w1742232_deviceCatalogName."', '".$w1742232_deviceDescrip."', '".$w1742232_availabilityStatus."')") === TRUE) {
    echo "New record created successfully";
}

if ($conn->query("INSERT INTO  w1742232_hearing_device(w1742232_deviceCatalogId,w1742232_hdMake,w1742232_hdModel )
VALUES ('".$w1742232_deviceCatalogId."','".$w1742232_hdMake."', '".$w1742232_hdModel."')") === TRUE) {
    echo "New record created successfully";
}


$conn->close();
}
?>

</body>
</html>
