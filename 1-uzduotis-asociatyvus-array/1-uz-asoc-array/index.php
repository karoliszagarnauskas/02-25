<?php


// 0 ) sukurti asociatyvu masyva uzpildyta duomenimis apie darbuotoja:
// vardas, asmens kodas, gimData, pardavimuKiekis
// 1)  isvesti visus duomenis apie darbuotoja
// 2) pakeisti darbuotojo pardavimu skaiciu i 180
// 3) i stalciu/index 0 ideti  darbuotojo adresa:
//  "Siaures pr. 131"
// 4) ismeginti koda:
$darbuotojas = [
  "vardas" => "Tadas",
  "asmensKodas" => "38008088888",
  "gimData" => "2020-02-26",
  "pardavimuKiekis" => "50"
];




foreach ($darbuotojas as $darbuotojoStalcius ) {
    echo "$darbuotojoStalcius <br>" ;
}

$darbuotojas["pardavimuKiekis"] = 180;



print_r($darbuotojas["pardavimuKiekis"]);
echo "<br>";

$darbuotojas[0] = "Siaures pr.131";

foreach ($darbuotojas as $darbuotojoStalcius) {
  echo "$darbuotojoStalcius <br>";
}


// print_r($darbuotojas); // masyvo arba objekto isvedimas
// var_dump($darbuotojas); // detalus kintamojo arba  masyvo  isvedimas
