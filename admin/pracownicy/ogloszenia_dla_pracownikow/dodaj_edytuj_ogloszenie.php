<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj ogłoszenie</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj ogłoszenie nr 123</span>
        <div class="inputBox">
            Tytuł:
            <input type="text" id="noweOgloszenieTytul">
        </div>
        <div class="inputBox">
            Treść ogłoszenia:
            <textarea id="noweOgloszenieTresc" rows="5"></textarea>
        </div>

        <button id="zapiszOgloszenie" class="actionButton">Zapisz ogłoszenie</button>
    </div>
</body>

</html>