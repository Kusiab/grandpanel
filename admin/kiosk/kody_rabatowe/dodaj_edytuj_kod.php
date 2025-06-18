<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj kod rabatowy</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj kod rabatowy nr 123</span>
        <div style="display: flex; gap: 1em; justify-content: space-between;">
            <div class="inputBox">
                Kod:
                <input type="text" id="nowyKodRabatowy"></input>
            </div>
            <div class="inputBox">
                Typ kodu:
                <select id="nowyProduktWyborJezykDoTlumaczenia">
                    <option value="procentowy">Procentowy</option>
                    <option value="kwotowy">Kwotowy</option>
                </select>
            </div>
            <div class="inputBox">
                Wartość obnizki:
                <input type="number" id="nowyKodWartoscObnizki">
            </div>

        </div>
        <div style="display: flex; gap: 1em;">
            <button id="wybierzProduktyKodRabatowy" class="actionButton">Wybierz produkty na które działa kod</button>
        </div>

        <div style="display: flex; gap: 1em; align-items: center; justify-content: space-between;">
            <div class="inputBox">
                Czy ograniczony czasowo
                <select id="czyKodRabatowyOgraniczonyCzasowo">
                    <option value="tak">TAK</option>
                    <option value="nie">NIE</option>
                </select>
            </div>
            <div class="inputBox">
                Czas rozpoczęcia
                <input type="datetime" id="nowyKodRabatowyStart">
            </div>
            <div class="inputBox">
                Czas zakończenia
                <input type="datetime" id="nowyKodRabatowyStop">
            </div>
            <div class="inputBox">
                Czy ograniczona liczba uzyc:
                <select id="czyKodRabatowyOgraniczonyCzasowo">
                    <option value="tak">TAK</option>
                    <option value="nie">NIE</option>
                </select>
            </div>
            <div class="inputBox">
                Liczba uzyc
                <input type="number" id="nowyKodRabatowyLiczbaUzyc">
            </div>
            <div class="inputBox">
                Status
                <select id="czyKodRabatowyOgraniczonyCzasowo">
                    <option value="aktywny">AKTYWNY</option>
                    <option value="nieaktywny">NIEAKTYWNY</option>
                </select>
            </div>
        </div>


        <button id="zapiszKod" class="actionButton">Zapisz kod</button>
    </div>
</body>

</html>