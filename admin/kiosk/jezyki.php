<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Języki</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Języki</span>

            <a href="/panel/admin/kiosk/jezyki/dodaj_edytuj_jezyk.php" class="actionButton" id="dodajNowyJezyk">
                Dodaj nowy język
            </a>
        </div>
        <div id="listaJezykow"></div>
    </div>
</body>

</html>