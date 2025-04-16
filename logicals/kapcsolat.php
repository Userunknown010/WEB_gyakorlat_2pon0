<?php 
    include('session_init.php');
    //csak akkor ellenőrizzen, ha a formot elküldték
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!isset($_POST['nev']) || strlen($_POST['nev']) < 5) {
            exit("Hiányzó vagy hibás név.");
        } elseif (strlen($_POST['nev']) < 5) {
            exit("Hibás név: " . htmlspecialchars($_POST['nev']));
        }

        $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
        if (!isset($_POST['email']) || !preg_match($re, $_POST['email'])) {
            exit("Hiányzó vagy hibás email.");
        }

        if (!isset($_POST['szoveg']) || empty($_POST['szoveg'])) {
            exit("Hiányzó üzenet.");
        }

        //ha an felhasználó, akkor annak a felhasználóneve
        $kuldo = isset($_SESSION['login']) ? $_SESSION['login'] : "Vendég"; //$_SESSION-ben tárolt felhasználónév, különben "Vendég"

        // Kapcsolódás az adatbázishoz
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            // Üzenet beszúrása az adatbázisba
            $sqlInsert = "INSERT INTO uzenetek (nev, email, szoveg, kuldo) VALUES (:nev, :email, :szoveg, :kuldo)";
            $sth = $dbh->prepare($sqlInsert);
            $sth->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], ':szoveg' => $_POST['szoveg'], ':kuldo' => $kuldo));

            echo "Sikeres Küldés!";
            exit();
        } catch (PDOException $e) {
            echo "Hiba: " . $e->getMessage();
        }
    }
?>