

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Czaty z klientami</title>
</head>
<body>
<?php
require '../menu.php'
?>
<div id="main">
<span class="h1">Czaty z klientami</span>
<span class="h2">Twoje czaty z klientami</span>
<div style="display: flex; gap: 1em">
    <button class="filterButton" id="otwarteCzaty">Otwarte</button>
    <button class="filterButton" id="zamknieteCzaty">Zamknięte</button>
</div>
<div id="lista_twoich_czatow"  class="sectionGrey">
</div>
<span class="h2">Giełda czatów z klientami</span>
<div id="gielda_czatow"  class="sectionRed">
</div>
</div>
</body>
</html>