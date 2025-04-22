<div class="belepcontainer">
    <div class="card shadow-sm p-4">
        <?php if(isset($row)) { ?>
            <?php if($row) { ?>
                <h1>Bejelentkezett:</h1>
                <p>Azonosító: <strong><?= $row['id'] ?></strong></p><br>
                <p>Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong></p>
            <?php } else { ?>
                <h1>A bejelentkezés nem sikerült!</h1>
                <a href="?oldal=belepes" >Próbálja újra!</a>
            <?php } ?>
        <?php } ?>
        <?php if(isset($errormessage)) { ?>
            <h2><?= $errormessage ?></h2>
        <?php } ?>
    </div>
</div>