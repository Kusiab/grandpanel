<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Ustawienia ogólne</title>
</head>

<body>
    <?php
require '../../menu.php'
?>
    <div id="main">
        <span class="h1">Ustawienia ogólne</span>

        Przerwa techniczna:
        <div id="inputBox">

            <select id="czyPrzerwaTechniczna">
                <option value="off">Wyłączona</option>
                <option value="on">Włączona</option>
            </select>
        </div>
        Komunikat przerwy technicznej:
        <div id="inputBox">

            <textarea id="komunikatPrzerwyTechnicznej"></textarea>
        </div>
        <button id="zapiszUstawienia" class="actionButton">Zapisz ustawienia</button>
    </div>
</body>

</html>