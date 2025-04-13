<?php if ($recept): ?>
    <div class="container mt-4">
        <a href="." class="btn btn-secondary mb-3">Vissza a főoldalra</a>
        <h2><?= $recept['nev'] ?></h2>
        <img src="./images/<?= $recept['kep'] ?>" alt="<?= $recept['nev'] ?>" class="img-fluid mb-3" style="max-width: 400px;">
        <h4>Hozzávalók:</h4>
        <ul>
            <?php foreach ($recept['hozzavalok'] as $hozzavalo): ?>
                <li><?= $hozzavalo ?></li>
            <?php endforeach; ?>
        </ul>
        <h4>Elkészítés:</h4>
        <p><?= $recept['leiras'] ?></p>
    </div>
<?php else: ?>
    <p>A recept nem található.</p>
<?php endif; ?>