<div class="regisztralcontainer">
    <div class="card shadow-sm p-4">
        <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <a id="ujra" href="index.php?oldal=belepes">Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
    </div>   
</div>