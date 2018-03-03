<html>
 <body>
  <form action="" method="get">
   
    <input type="submit" name="Subscription Limits API [BETA]?" value="Subscription Limits API [BETA]?"/>
  </form>
 </body>
</html>

<?php

$key="d9f09b241a024009ad5e5feb7ae297e0";
$url="http://api.weatherbit.io/v2.0/subscription/usage?key=$key";
$json=file_get_contents($url);
$result=json_decode($json,true);
echo($json);
print_r($result);
echo"<br><br>";
echo($result["data"][0]["weather"]["icon"]);
?>
