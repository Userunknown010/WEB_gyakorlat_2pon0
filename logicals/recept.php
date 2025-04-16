<?php
$receptek = [
    'lasagne' => [
        'nev' => 'Lasagne',
        'kep' => 'lasagne.jpg',
        'hozzavalok' => ['Tészta', 'Paradicsom', 'Darálthús', 'Besamel', 'Sajt'],
        'leiras' => 'Egy serpenyőben hagymát pirítunk, hozzáadjuk a darált húst, majd paradicsomszószt és fűszereket (só, bors, oregánó, bazsalikom). Elkészítjük a besamelmártást: vajat olvasztunk, liszttel rántást készítünk, majd tejjel simára főzzük, sózzuk. Egy tepsibe rétegezzük: lasagne lap – húsos szósz – besamel – reszelt sajt, és ismételjük. 180°C-ra előmelegített sütőben kb. 35-40 percig sütjük, amíg a teteje aranybarna lesz. Kicsit hűlni hagyjuk, majd szeleteljük.'
    ],
    'husleves' => [
        'nev' => 'Húsleves',
        'kep' => 'husleves.jpg',
        'hozzavalok' => ['Marhahús', 'Répa', 'Petrezselyem', 'Zeller', 'Leveskocka'],
        'leiras' => 'A csirkét (pl. egész vagy comb) megtisztítjuk, hideg vízben feltesszük főni. Amikor felforr, lehabozzuk, majd alacsony lángon főzzük tovább. Hozzáadjuk a megtisztított zöldségeket (sárgarépa, fehérrépa, zeller, karalábé, hagyma). Ízesítjük sóval, borssal, egész borssal, esetleg egy kis zellerzölddel. Lassú tűzön főzzük 2-3 órán át, míg az ízek összeérnek. Leszűrjük, és cérnametélttel tálaljuk.'
    ],
    'rantotta' => [
        'nev' => 'Rántotta',
        'kep' => 'rantotta.jpg',
        'hozzavalok' => ['Tojás', 'Tej', 'Fűszer'],
        'leiras' => 'Felverünk 2-3 tojást egy csipet sóval. Egy serpenyőben kevés zsiradékot (vaj vagy olaj) melegítünk.Ráöntjük a tojást, és közepes lángon kevergetve sütjük. Amikor még egy picit krémes, levesszük a tűzről (a hő tovább sűríti).Ízlés szerint adhatunk hozzá sajtot, zöldségeket vagy sonkát.'
    ]
];

$recept = null;
if (isset($_GET['nev']) && array_key_exists($_GET['nev'], $receptek)) {
    $recept = $receptek[$_GET['nev']];
}?>