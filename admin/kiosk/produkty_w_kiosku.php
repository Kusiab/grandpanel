<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Produkty w kiosku</title>
</head>
<body>
<?php
require '../../menu.php'
?>
<div id="main">
    <div style="display: flex; gap: 1em;">
        <span class="h1">Produkty w kiosku</span>
        <a href="/panel/admin/kiosk/produkty_w_kiosku/dodaj_edytuj_produkt.php" class="actionButton" id="dodajNowyProdukt">
  Dodaj nowy produkt
</a>
    </div>
    <div id="listaProduktow"></div>
</div>
</body>
</html>