<?php if ($recept): ?>
    <div class="container mt-5 mb-5" style="max-width: 800px;">
        <a href="." class="btn btn-outline-secondary mb-4">
            &larr; Vissza a főoldalra
        </a>

        <div class="card shadow-sm p-4">
            <h1 class="mb-4"><?= $recept['nev'] ?></h1>

            <img src="./images/<?= $recept['kep'] ?>" alt="<?= $recept['nev'] ?>"
                 class="img-fluid rounded mb-4" style="max-height: 400px; object-fit: cover;">

            <h4 class="mt-4">Hozzávalók:</h4>
            <ul class="list-group list-group-flush mb-4">
                <?php foreach ($recept['hozzavalok'] as $hozzavalo): ?>
                    <li class="list-group-item"><?= $hozzavalo ?></li>
                <?php endforeach; ?>
            </ul>

            <h4 class="mt-4">Elkészítés:</h4>
            <p style="white-space: pre-line;"><?= $recept['leiras'] ?></p>
        </div>
    </div>
<?php else: ?>
    <div class="container mt-5">
        <p class="text-danger">A recept nem található.</p>
    </div>
<?php endif; ?>