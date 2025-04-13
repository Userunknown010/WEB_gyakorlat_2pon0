<?php
$receptek = [
    'lasagne' => 'Lasagne',
    'husleves' => 'Húsleves',
    'rantotta' => 'Rántotta'
];

$talalatok = [];

if (isset($_GET['kulcsszo'])) {
    $kulcsszo = strtolower(trim($_GET['kulcsszo']));
    
    foreach ($receptek as $kulcs => $nev) {
        if (strpos(strtolower($nev), $kulcsszo) !== false) {
            $talalatok[$kulcs] = $nev;
        }
    }
}?>