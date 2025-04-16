<?php
// Kapcsolódás az adatbázishoz
try {
    $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    // Üzenetek lekérése
    $sqlSelect = "SELECT * FROM uzenetek ORDER BY id DESC";  // Az újabb üzenetek kerüljenek felülre
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    $messages = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Hiba: " . $e->getMessage();
}
?>