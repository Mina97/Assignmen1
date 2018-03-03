html>
 <body>
  <form action="" method="get">
    city: <input type="text" name="city" id="city"/>
    start_date: <input type="text" name="start_date" id="start_date"/>
    end_date: <input type="text" name="end_date" id="end_date"/>
    <input type="submit" name=" Historical Weather API (hourly)?" value="Historical Weather API (hourly)"/>
  </form>
 </body>
</html>

<?php
$city=false;
if(isset($_GET['city'])){
$city=$_GET['city'];}
$start_date=false;
if(isset($_GET['start_date'])){
$start_date=$_GET['start_date'];}
$end_date=false;
if(isset($_GET['end_date'])){
$end_date=$_GET['end_date'];}
	

$key="d9f09b241a024009ad5e5feb7ae297e0";
$url="http://api.weatherbit.io/v2.0/history/hourly?key=$key&city=$city&start_date=$start_date&end_date=$end_date";
$json=file_get_contents($url);
$result=json_decode($json,true);
echo($json);
print_r($result);
echo"<br><br>";
echo($result["data"][0]["weather"]["icon"]);
?>
