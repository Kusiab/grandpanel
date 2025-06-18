<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Kody rabatowe</title>
</head>
<body>
<?php
require '../../menu.php'
?>
<div id="main">
<div style="display: flex; gap: 1em;">
        <span class="h1">Kody rabatowe</span>
        <a href="/panel/admin/kiosk/kody_rabatowe/dodaj_edytuj_kod.php" class="actionButton" id="dodajNowyKodRabatowy">
  Dodaj nowy kod rabatowy
</a>
    </div>
    <div id="listaKodowRabatowych"></div>
</div>
</body>
</html>