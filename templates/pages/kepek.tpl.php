<?php
    // Alkalmazás logika:
    include('includes/kepconfig.inc.php');
    include('logicals/session_init.php');
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
    
    // Megjelenítés logika:
?>
<div class="container my-4">
    <h1 class="text-center mb-4">Galéria</h1>
        <div class="row">
            <?php
            arsort($kepek);
            foreach($kepek as $fajl => $datum)
            {
            ?>
                <div class="col-sm-3 kep">
                    <a href="<?php echo $MAPPA.$fajl ?>" target="_blank">
                        <img src="<?php echo $MAPPA.$fajl ?>" class="img-fluid shadow-sm">
                    </a>
                    <p class="mt-2 mb-0"><strong>Név:</strong> <?php echo $fajl; ?></p>
                    <p class="mb-0"><strong>Dátum:</strong> <?php echo date($DATUMFORMA, $datum); ?></p>
                </div>
            <?php
            }
            ?>
        </div>
        <?php if (isset($_SESSION['login'])) { ?>
			<div>
                <a id="kepfellink" href="?oldal=kepfel">Tölts fel te is egy képet!</a>
            </div>
		<?php } ?>
</div>
