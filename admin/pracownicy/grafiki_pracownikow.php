<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Grafiki pracowników</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <div style="display: flex; gap: 1em;">
            <span class="h1">Grafiki pracowników</span>
            <a href="/panel/admin/pracownicy/grafiki_pracownikow/edytuj_grafiki.php" class="actionButton"
                id="edytujGrafiki">
                Edytuj grafiki
            </a>
        </div>
        <div style="display: flex; gap: 1em;">
            <span class="h2">Przejdź do tygodnia</span>
            <input type="date"></input>
        </div>
        <div id="listaGrafikow"></div>
        <span class="h2">Lista obecności</span>
        <div id="listaObecnosci"></div>
    </div>
</body>

</html>