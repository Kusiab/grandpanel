<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj pracownika</title>
</head>

<body>
    <?php
require '../../../menu.php';
?>
    <div id="main">
        <span class="h1">Dodaj/edytuj pracownika nr 123</span>
        <div style="display: flex; gap: 1em; justify-content: space-between;">
            <div class="inputBox">
                Imię
                <input type="text" id="nowyPracownikImie">
            </div>
            <div class="inputBox">
                Nazwisko:
                <input type="text" id="nowyPracownikNazwisko">
            </div>
            <div class="inputBox">
                Telefon prywatny:
                <input type="text" id="nowyPracownikTelefonPrywatny">
            </div>
            <div class="inputBox">
                Telefon słuzbowy:
                <input type="text" id="nowyPracownikTelefonSlzubowy">
            </div>

        </div>
        <div style="display: flex; gap: 1em;">
            <div class="inputBox">
                E-mail prywatny:
                <input type="text" id="nowyPracownikEmailPrywatny">
            </div>
            <div class="inputBox">
                Email słuzbowy:
                <input type="text" id="nowyPracownikEmailSluzbowy">
            </div>
            <div class="inputBox">
                Biuro:
                <select id="nowyPracownikBiuro">
                </select>
            </div>
        </div>
        <div style="display: flex; gap: 1em;">
            <div class="inputBox">
                Zdjęcie:
                <input type="file" id="nowyPracownikZdjecie">
            </div>
            <div class="inputBox">
                Czy moze być konsultantem?
                <select id="nowyPracownikCzyKonsultant">
                    <option value="tak">TAK</option>
                    <option value="nie">NIE</option>
                </select>
            </div>
            <button id="zapiszPracownika" class="actionButton">Zapisz pracownika</button>
        </div>
    </div>
</body>

</html>