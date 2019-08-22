<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Php harj6 matikka</title>
    <!-- luodaan yhteys osoite-luokkaan: -->
    <?php include("matikka.php"); ?>
  </head>
  <body>
    <h1>PHP - Olio-ohjelmointiharjoitus</h1>
    <h3>Tehtävän kuvaus</h3>
<p>Koodaa luokka Matikka, joka tarjoaa metodit seuraavien toimintojen suorittamiseksi</p>
<ul>
<li>muuntaa kilokalorit jouleiksi ja toisin päin</li>
<li>laskea ympyrän pinta-ala</li>
<li>laskea suorakulmion pinta-ala</li>
<li>muuntaa Celsius-asteet Fahrenheit-asteiksi ja toisin päin.</li>
<li>muuntaa radiaanit asteiksi</li>
</ul>
Etsi kaavat netistä.
Koodaa sovellus matikkaTesti.php, jolla voit testata metodien toimintaa.
</p>
    <?php
    // Tehtävän voi tehdä kahdella tavalla. Ensimmäisessä tavassa alustetaan luokka niillä ominaisuuksilla, joita metodeissa tarvitaan:
    echo "<h2>Ekan tavan tulostukset:</h2>";
    $matikka1 = new Matikka(1200, 5000, 5, 20, 10, 21, 6, 343);

    echo "Suorakulmion pinta-ala: " . $matikka1->suorakulmionPintaala();
    echo "<br>";
    echo "Ympyrän pinta-ala: " . $matikka1->ympyranPintaala();
    echo "<br>";
    echo "Kilokalorit jouleiksi: " . $matikka1->kilokalori . " kaloria muuntuu " . $matikka1->kaloritJouleiksi() . " jouleksi.";
    echo "<br>";
    echo "Joulet kilokaloreiksi: " . $matikka1->jouletKaloreiksi();
    echo "<br>";
    echo $matikka1->celcius . " astetta Celciusta on " . $matikka1->celciusToFahrenheit() . " Fahrenheit-astetta.";
    echo "<br>";
    echo "Radiaanit asteiksi: " . $matikka1->radiaanitAsteiksi();
    echo "<br>";
    echo "Asteet radiaaneiksi: " . $matikka1->asteetRadiaaneiksi();
    echo "<br>";
    echo "<br>";

    // Toisessa tavassa (jonka kirjoitusmuoto on lyhyempi) luokan metodit luodaan sellaisiksi, jossa parametrit annetaan funktiokutsun yhteydessä.
    // Vaihdetaan samalla funktioon echo-komento, jottei autoTesti.php:ssa tarvitse erikseen pyytää tuloksen tulostamista. 
    echo "<h2>Toisen tavan tulostukset:</h2>";
    $matikka2 = new Matikka2();

    $matikka2->energiaMuunnin1(1200);
    $matikka2->energiaMuunnin2(5000);
    $matikka2->suorakulmio(10,20);
    $matikka2->ympyra(5);
    $matikka2->lampotila(21);
    $matikka2->asteiksi(6);
    $matikka2->radiaaneiksi(343);

    ?>
  </body>
</html>
