<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Lista pracowników</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Lista pracowników</span>
            <a href="/panel/admin/pracownicy/lista_pracownikow/dodaj_edytuj_pracownika.php" class="actionButton"
                id="dodajNowegoPracownika">
                Dodaj nowego pracownika
            </a>
        </div>
        <div id="listaPracownikow"></div>
    </div>
</body>

</html>