<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj dostawę</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj dostawę nr 123</span>
        <div style="display: flex; gap: 1em; justify-content: space-between;">
            <div class="inputBox">
                Nazwa polska:
                <input type="text" id="nowaDostawaNazwaPolska">
            </div>
            <div class="inputBox">
                Nazwa angielska:
                <input type="text" id="nowaDostawaNazwaAngielska">
            </div>
            <div class="inputBox">
                Nazwa niemiecka:
                <input type="text" id="nowaDostawaNazwaAngielska">
            </div>
            <div class="inputBox">
                Nazwa ukraińska:
                <input type="text" id="nowaDostawaNazwaUkrainska">
            </div>
        </div>
        <div style="display: flex; gap: 1em;">
            <div class="inputBox">
                Cena:
                <input type="number" id="nowaDostawaCena">
            </div>
            <div class="inputBox">Czy promocja:
                <select id="nowaDostawaCzyPromocja">
                    <option value="tak">TAK</option>
                    <option value="nie">NIE</option>
                </select>
            </div>
            <div class="inputBox">
                Cena promocyjna:
                <input type="number" id="nowaDostawaCenaPromocyjna">
            </div>
            <div class="inputBox">Czy wysyłka za granicę?:
                <select id="nowaDostawaCzyZaGranice">
                    <option value="tak">TAK</option>
                    <option value="nie">NIE</option>
                </select>
            </div>
            <div class="inputBox">
                Koszt wysyłki za granicę:
                <input type="number" id="nowaDostawaCenaZaGranice">
            </div>
        </div>

        <button id="zapiszDostawe" class="actionButton">Zapisz dostawę</button>
    </div>
</body>

</html>