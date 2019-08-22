<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Php harj7 Auton ajaminen</title>
<!-- Tehtävän kuvaus: 
Lisää luokkaan Auto seuraavat yksityiset (private) ominaisuudet
* tankinTilavuus
* bensanMaara
Lisää luokkaan seuraavat omat metodit
* käynnisty-metodi, joka kertoo auton käynnistyneen ja näyttää käynnistyneen auton bensan määrän sekä auton tankin tilavuuden.
* tulostaAutonTiedot, joka tulostaa kaikki auton ominaisuudet.
* lisääBensaa($maara)-metodi, jolla voi lisätä autoon bensaa. Metodi näyttää lisäyksen tankissa olevan bensan määrän.
* aja-metodi, jolla autoa voi ajaa. Jokainen ajo vähentää bensaa yhdellä litralla.
* sammuta-metodi, joka kertoo auton sammuneen.-->

    <!-- luodaan yhteys osoite-luokkaan: -->
    <?php include("auto.php"); ?>
  </head>
  <body>
    <h1>Auto-luokan testaus</h1>
    <?php
$auto1 = new Auto(100, 50);
//echo "auton merkki on <br>" . $auto->merkki;
echo $auto1->tulostaTankki();
//echo "tankn tilavuus: " . $auto->tankinTilavuus;
echo $auto1->kaynnisty();
echo $auto1->aja();
echo $auto1->aja();
echo $auto1->aja();
echo $auto1->lisaaBensaa(23);
echo $auto1->sammuta();
echo $auto1->tulostaTiedot();
    ?>
  </body>
</html>
