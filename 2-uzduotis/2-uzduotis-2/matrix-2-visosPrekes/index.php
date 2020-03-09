<?php
// UZDUOTIS 2 --------------
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
// B. i masyva visosPrekes, ideti "preke" masyva
$preke1 = ["virtuvesIrankiai","foto1.jpg","kombainas","daug nm viska mala",100];
$preke2 = ["valgomasis","foto2.jpg","kede"," baisiai tvirta",200];
$preke3 = ["sklepas","foto3.jpg","kibiras","nerudyjancio plieno",300];
// C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
$visosPrekes = [$preke1,$preke2,$preke3];

//2 budas isvedimo

// ir bootstrap dizaina
for ($i=0; $i <count($visosPrekes) ; $i++) {

  for ($i=0; $i <count($visosPrekes); $i++) {
      echo "<article   width ='30%' style='float:left' >
      <h2> {$visosPrekes[$i][0]  }</h2>
          <img src='img/1.jpg'. {$visosPrekes[$i][1]}' height = '400px'>
              <p> {$visosPrekes[$i][3]} </p>
          <button>mygtukas</button>

      </article>";
  }
}

//3 budas isvedimo

for ($i=0; $i <count($visosPrekes) ; $i++) {   ?>
</article> width = '30%'  <style ="float:left">
  <h2>       <?php echo $visosPrekes[$i][0] ?>       </h2>
  <img src = "img/<?php echo $visosPrekes[$i][3]; ?> " alt= " ">
  <p>     <?php echo visosPrekes[$i][3]; ?>     </p>
  </article>

  <?php } ?>
<?php
