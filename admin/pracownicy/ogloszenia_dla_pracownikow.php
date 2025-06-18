<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Ogłoszenia dla pracowników</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Ogłoszenia dla pracowników</span>

            <a href="/panel/admin/pracownicy/ogloszenia_dla_pracownikow/dodaj_edytuj_ogloszenie.php"
                class="actionButton" id="dodajNowyJezyk">
                Dodaj nowe ogłoszenie
            </a>
        </div>
        <div id="listaOgloszen"></div>
    </div>
</body>

</html>