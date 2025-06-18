<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Dostawa</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Metody dostawy</span>
            <a href="/panel/admin/kiosk/dostawa/dodaj_edytuj_dostawe.php" class="actionButton" id="dodajNowaDostawe">
                Dodaj nową metodę dostawy
            </a>
        </div>
        <div id="listaDostaw"></div>
    </div>
</body>

</html>