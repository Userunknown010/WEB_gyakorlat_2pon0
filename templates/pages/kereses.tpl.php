<div class="container mt-4">
    <h2>Keresési eredmények:</h2>
    <?php if (!empty($talalatok)) { ?>
        <ul>
            <?php foreach ($talalatok as $kulcs => $nev): ?>
                <li><a href="?oldal=recept&nev=<?= $kulcs ?>"><?= $nev ?></a></li>
            <?php endforeach; ?>
        </ul>
    <?php } else { ?>
        <p>Nincs találat a keresett szóra.</p>
    <?php } ?>
    <a href="." class="btn btn-secondary mt-3">Vissza a főoldalra</a>
</div>