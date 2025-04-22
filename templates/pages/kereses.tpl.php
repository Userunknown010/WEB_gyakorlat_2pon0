<div class="keresescontainer">
    <div class="card shadow-sm p-4">
        <h2>Keresési eredmények:</h2>
        <?php if (!empty($talalatok)) { ?>
            <div class="food">
                <ul>
                    <?php foreach ($talalatok as $kulcs => $nev): ?>
                        <li><a href="?oldal=recept&nev=<?= $kulcs ?>"><?= $nev ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php } else { ?>
            <p>Nincs találat a keresett szóra.</p>
        <?php } ?>
        <a href="." class="btn btn-secondary mt-3">Vissza a főoldalra</a> 
    </div>   
</div>