<?php
$receptek = [
    'lasagne' => [
        'nev' => 'Lasagne',
        'kep' => 'lasagne.jpg',
        'hozzavalok' => ['Tészta', 'Paradicsom', 'Darálthús', 'Besamel', 'Sajt'],
        'leiras' => 'Rétegezett olasz étel darált hússal, paradicsomszósszal és sajttal.'
    ],
    'husleves' => [
        'nev' => 'Húsleves',
        'kep' => 'husleves.jpg',
        'hozzavalok' => ['Marhahús', 'Répa', 'Petrezselyem', 'Zeller', 'Leveskocka'],
        'leiras' => 'Hagyományos magyar húsleves lassan főzött zöldségekkel.'
    ],
    'rantotta' => [
        'nev' => 'Rántotta',
        'kep' => 'rantotta.jpg',
        'hozzavalok' => ['Tojás', 'Tej', 'Fűszer'],
        'leiras' => 'Könnyel elkészíthető, közkedvelt reggeli.'
    ]
];

$recept = null;
if (isset($_GET['nev']) && array_key_exists($_GET['nev'], $receptek)) {
    $recept = $receptek[$_GET['nev']];
}?>