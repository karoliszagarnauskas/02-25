<?php

$m = [
  "vardas" => "Tom",
  "amzius" => 21,
  "miestas" => "KNS"
];
$m[5] = 370666666;
$m["AK"] = 38008088888;

foreach ($m as $key => $value) {
  echo "$key    $value   <br>";
  // code...
}
 ?>
