<html>
<head><title>Visual Device</title></head>
<style>

  body {
  background-image: url('visual.jpg');
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
<header><h1 align="center">AudioVizzion</h1></header>
<img src="logo.jpg" alt="logo" width="150" height="100">
<p class="p1"><strong>Visual Device</strong></p>

<form class="fr" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

device catalog ID <input type="text" id="a" name="deviceCatalogID"><br><br>

device catalog name <input type="text2" id="b" name="deviceCatalogName"><br><br>

device discription <input type="text2" id="d" name="deviceDescrip"><br><br>

<label>device availability status</label>
<input type="radio" name="availabilityStatus" value="In stock">In stock
<input type="radio" name="availabilityStatus" value="Out of stock">Out of stock
<input type="radio" name="availabilityStatus" value="currently being ordered">Currently being ordered<br><br>


<label>device frame flag</label>
<input type="radio" name="frameFlage" value="1">Yes
<input type="radio" name="frameFlage" value="0">No<br><br>

device frame brand <input type="text" id="d" name="frBrand"><br><br>

device frame model <input type="text" id="e" name="frModel"><br><br>

<label>device lense flage</label>
<input type="radio" name="lenseFlage" value="1">Yes
<input type="radio" name="lenseFlage" value="0">No<br><br>

device lense serial no. <input type="text" id="g" name="lenceSerialNb"><br><br>

device lense vison type <input type="text" id="h" name="lensevisionType"><br><br>

device lense tint <input type="text" id="i" name="lenseTint"><br><br>

device lense thickness level <input type="text" id="j" name="lensThinnessLevel"><br><br>


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
$w1742232_frFlag=$_POST["frameFlage"];
$w1742232_frBrand = $_POST["frBrand"];
$w1742232_frModel = $_POST["frModel"];
$w1742232_lensFlag = $_POST["lenseFlage"];
$w1742232_lensSerialNb = $_POST["lenceSerialNb"];
$w1742232_lensVisionType = $_POST["lensevisionType"];
$w1742232_lensTint = $_POST["lenseTint"];
$w1742232_lensThinnessLevel = $_POST["lensThinnessLevel"];
$servername='';
$username='root';
$password = '';
$dbname = 'w1742232';


  if(!empty($_POST['deviceCatalogID']) ){
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($conn->query("INSERT INTO w1742232_device (w1742232_deviceCatalogId, w1742232_deviceCatalogName,w1742232_deviceDescrip, w1742232_availabilityStatus )
VALUES ('".$w1742232_deviceCatalogId."', '".$w1742232_deviceCatalogName."', '".$w1742232_deviceDescrip."', '".$w1742232_availabilityStatus."')") === TRUE) {
    echo "New record created successfully";
}

if ($conn->query("INSERT INTO w1742232_visual_device(w1742232_deviceCatalogId,w1742232_frFlag,w1742232_frBrand,w1742232_frModel,
 w1742232_lensFlag, w1742232_lensSerialNb, w1742232_lensVisionType, w1742232_lensTint, w1742232_lensThinnessLevel )
VALUES ('".$w1742232_deviceCatalogId."','".$w1742232_frFlag."', '".$w1742232_frBrand."', '".$w1742232_frModel."',
 '".$w1742232_lensFlag."', '".$w1742232_lensSerialNb."', '".$w1742232_lensVisionType."', '".$w1742232_lensTint."',
 '".$w1742232_lensThinnessLevel."')") === TRUE) {
    echo "New record created successfully";
}



$conn->close();
}
?>

</body>
</html>
