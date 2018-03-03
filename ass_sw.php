<html>
 <body>
  <form action="" method="get">
    Country: <input type="text" name="country" id="country"/>
    City: <input type="text" name="city" id="city"/>
    <input type="submit" name="current weather?" value="current weather?"/>
  </form>
 </body>
</html>

<?php
$country=false;
if(isset($_GET['country'])){
$country=$_GET['country'];}
$city=false;
if(isset($_GET['city'])){
$city=$_GET['city'];}
	

$key="d9f09b241a024009ad5e5feb7ae297e0";
$url="http://api.weatherbit.io/v2.0/current?key=$key&country=$country&city=$city";
$json=file_get_contents($url);
$result=json_decode($json,true);
echo($json);
print_r($result);
echo"<br><br>";
echo($result["data"][0]["weather"]["icon"]);
?>
