<?php


// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// ========



     // UZDUOTIS 1.0
     // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
$darbuotojas1 = ["Jonas","Jonaitis",1980,"Inspektorius"];

     // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
    $darbuotojas2 = ["Ona","Onute",1980, "sekretore"];
     // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
     $darbuotojas3 = ["Kestas","Kerta", 2001, "pavaduotojas"];
     // D. sukurti masyva 'visiDarbuotojai'
     $visiDarbuotojai = [$darbuotojas1,$darbuotojas2,$darbuotojas3];
     // E.   i masyva 'visiDarbuotojai'  ideti visus dartuotoju masyvus
     // UZDUOTIS 1.1
     // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
     for ($i=0; $i <count($darbuotojas1) ; $i++) {
       print_r($darbuotojas1[$i]);
       echo "<br>";
     }
     // UZDUOTIS 1.2
     // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
     for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
       print_r($visiDarbuotojai[$i][0]);
       echo "<br>";
       echo "<hr>";
     }
     // UZDUOTIS 1.3
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
     for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
       print_r($visiDarbuotojai[$i]);
       echo "<br>";
       echo "<hr>";
       echo "<hr>";
       echo "<hr>";
       echo "<hr>";
     }
     // UZDUOTIS 1.4
     // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
     for ($i=0; $i < count($visiDarbuotojai); $i++) {
   for ($k=0; $k < count($visiDarbuotojai[$i]); $k++) {
   echo $visiDarbuotojai[$i][$k] . " ";
   }
   echo "<br>";
   }
   echo "<hr>";

     


    // UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
    // ir bootstrap dizaina
    // <article clas='col-...'>
    //     <h2> ...
    //     <img>
    //     <p>...
    //     <button> ...
    //     <a class="btn btn-lg  bg-info"> </a>
    // </article>


       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


 ?>
