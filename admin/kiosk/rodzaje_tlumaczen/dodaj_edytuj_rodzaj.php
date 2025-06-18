<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj rodzaj tłumaczenia</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj rodzaj tłumaczenia nr 123</span>

        <div style="display: flex; gap: 1em;">
            <div class="inputBox">
                Polski:
                <input type="text" id="nowyRodzajNazwaPolska" placeholder="Nazwa rodzaju">
                <input type="text" id="nowyRodzajOdmiana1Polska" placeholder="Odmiana 1">
                <input type="text" id="nowyRodzajOdmiana2Polska" placeholder="Odmiana 2">
            </div>
            <div class="inputBox">
                Angielski:
                <input type="text" id="nowyRodzajNazwaAngielska" placeholder="Nazwa języka">
                <input type="text" id="nowyRodzajOdmiana1Angielska" placeholder="Odmiana 1">
                <input type="text" id="nowyRodzajOdmiana2Angielska" placeholder="Odmiana 2">
            </div>
            <div class="inputBox">
                Niemiecki:
                <input type="text" id="nowyRodzajNazwaNiemiecka" placeholder="Nazwa języka">
                <input type="text" id="nowyRodzajOdmiana1Niemiecka" placeholder="Odmiana 1">
                <input type="text" id="nowyRodzajOdmiana2Niemiecka" placeholder="Odmiana 2">
            </div>
            <div class="inputBox">
                Ukraiński:
                <input type="text" id="nowyRodzajNazwaUkrainska" placeholder="Nazwa języka">
                <input type="text" id="nowyRodzajOdmiana1Ukrainska" placeholder="Odmiana 1">
                <input type="text" id="nowyRodzajOdmiana2Ukrainska" placeholder="Odmiana 2">
            </div>
        </div>

        <div style="display: flex; gap: 1em; align-items: center; justify-content: space-between;">
            <div class="inputBox">
                Miniaturka:
                <input type="file" id="nowyRodzajMiniaturka">
            </div>
            <div class="inputBox">
                Status
                <select id="nowyRodzajStatus">
                    <option value="tak">Aktywny</option>
                    <option value="nie">Nieaktywny</option>
                </select>
            </div>

            <button id="zapiszRodzaj" class="actionButton">Zapisz rodzaj</button>
        </div>
</body>

</html>