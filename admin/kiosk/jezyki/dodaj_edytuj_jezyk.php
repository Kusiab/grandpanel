<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj język</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj język nr 123</span>

        <div style="display: flex; gap: 1em;">
            <div class="inputBox">
                Polski:
                <input type="text" id="nowyJezykNazwaPolska" placeholder="Nazwa języka">
                <input type="text" id="nowyJezykOdmiana1Polska" placeholder="Odmiana 1">
                <input type="text" id="nowyJezykOdmiana2Polska" placeholder="Odmiana 2">
                <input type="text" id="nowyJezykOdmiana3Polska" placeholder="Odmiana 3">
                <input type="text" id="nowyJezykPanstwoPolski" placeholder="Państwo">
                <input type="text" id="nowyJezykObywatelPolski" placeholder="Obywatel">
            </div>
            <div class="inputBox">
                Ojczysty:
                <input type="text" id="nowyJezykNazwaOjczysta" placeholder="Nazwa języka">
                <input type="text" id="nowyJezykOdmiana1Ojczysta" placeholder="Odmiana 1">
                <input type="text" id="nowyJezykOdmiana2Ojczysta" placeholder="Odmiana 2">
                <input type="text" id="nowyJezykOdmiana3Ojczysta" placeholder="Odmiana 3">
                <input type="text" id="nowyJezykPanstwoOjczysty" placeholder="Państwo">
                <input type="text" id="nowyJezykObywatelOjczysty" placeholder="Obywatel">
            </div>
            <div class="inputBox">
                Angielski:
                <input type="text" id="nowyJezykNazwaAngielska" placeholder="Nazwa języka">
                <input type="text" id="nowyJezykOdmiana1Angielska" placeholder="Odmiana 1">
                <input type="text" id="nowyJezykOdmiana2Angielska" placeholder="Odmiana 2">
                <input type="text" id="nowyJezykOdmiana3Angielska" placeholder="Odmiana 3">
                <input type="text" id="nowyJezykPanstwoAngielski" placeholder="Państwo">
                <input type="text" id="nowyJezykObywatelAngielski" placeholder="Obywatel">
            </div>
            <div class="inputBox">
                Niemiecki:
                <input type="text" id="nowyJezykNazwaNiemiecka" placeholder="Nazwa języka">
                <input type="text" id="nowyJezykOdmiana1Niemiecka" placeholder="Odmiana 1">
                <input type="text" id="nowyJezykOdmiana2Niemiecka" placeholder="Odmiana 2">
                <input type="text" id="nowyJezykOdmiana3Niemiecka" placeholder="Odmiana 3">
                <input type="text" id="nowyJezykPanstwoNiemiecki" placeholder="Państwo">
                <input type="text" id="nowyJezykObywatelNiemiecki" placeholder="Obywatel">
            </div>
            <div class="inputBox">
                Ukraiński:
                <input type="text" id="nowyJezykNazwaUkrainska" placeholder="Nazwa języka">
                <input type="text" id="nowyJezykOdmiana1Ukrainska" placeholder="Odmiana 1">
                <input type="text" id="nowyJezykOdmiana2Ukrainska" placeholder="Odmiana 2">
                <input type="text" id="nowyJezykOdmiana3Ukrainska" placeholder="Odmiana 3">
                <input type="text" id="nowyJezykPanstwoUkrainski" placeholder="Państwo">
                <input type="text" id="nowyJezykObywatelUkrainski" placeholder="Obywatel">
            </div>
        </div>

        <div style="display: flex; gap: 1em; align-items: center; justify-content: space-between;">
            <div class="inputBox">
                Flaga:
                <input type="file" id="nowyJezykFlaga">
            </div>
            <div class="inputBox">
                Status
                <select id="nowyJezykStatus">
                    <option value="tak">Aktywny</option>
                    <option value="nie">Nieaktywny</option>
                </select>
            </div>

            <button id="zapiszJezyk" class="actionButton">Zapisz język</button>
        </div>
</body>

</html>