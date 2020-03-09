<?php


$auto1 = [ "audi", 250000, 4000, " KNS"];
$auto2 = [ "bmw", 30000, 4200, " VLN"];
$auto3 = [ "opel", 150000, 5000, " KNS"];


//           0       1       2
$autos = [$auto1, $auto2, $auto3];  //matrica - masyvas masyve

// 1) isvesti i ekrana $autos
print_r($autos);   //isvedimas test
echo "<hr>";

for ($i=0; $i <count($autos); $i++) {
      print_r($autos[$i]);
      echo "<br>";
}

for ($i=0; $i < count($autos); $i++) {
  echo $autos[$i][1] .$autos[$i][3] . " <br>";
}
// 2) pakeisti audi rida
$autos[0][1] = 29999999;
//3) pakeisti bmw miesta
$autos[1][3] = "KNS";
echo "<br>";

print_r($autos);
 ?>
