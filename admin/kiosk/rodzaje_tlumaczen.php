<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Rodzaje tłumaczeń</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Rodzaje tłumaczeń</span>
            <a href="/panel/admin/kiosk/rodzaje_tlumaczen/dodaj_edytuj_rodzaj.php" class="actionButton"
                id="dodajNowyRodzaj">
                Dodaj nowy rodzaj tłumaczenia
            </a>
        </div>
        <div id="listaRodzajow"></div>
    </div>
</body>

</html>