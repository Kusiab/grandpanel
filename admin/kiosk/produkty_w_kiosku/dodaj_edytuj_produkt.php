<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../style.css">
    <title>Dodaj/edytuj produkt</title>
</head>
<body>
<?php
require '../../../menu.php';
?>
<div id="main">
    <span class="h1">Dodaj/edytuj produkt nr 123</span>
    <div style="display: flex; gap: 1em; justify-content: space-between;">
        <div class="inputBox">
            Język oryginału:
            <select id="nowyProduktWyborJezykOryginalu">
                <!-- opcje języków tutaj -->
            </select>
        </div>
        <div class="inputBox">
            Język do tłumaczenia:
            <select id="nowyProduktWyborJezykDoTlumaczenia">
                <!-- opcje języków tutaj -->
            </select>
        </div>
        <div class="inputBox">
            Nazwa ojczysta rodzaju tłumaczenia:
            <input type="text" id="nowyProduktNazwaOjczystaRodzaju">
        </div>
        <div class="inputBox">
            Nazwa do tłumaczenia rodzaju tłumaczenia:
            <input type="text" id="nowyProduktNazwaDoTlumaczeniaRodzaju">
        </div>
    </div>
    <div style="display: flex; gap: 1em;">
        Rodzaj:
        <select id="nowyProduktWyborRodzaj">
            <!-- opcje rodzaju tutaj -->
        </select>
    </div>
    <span class="h2">Opis krótki</span>
    <div style="display: flex; gap: 1em; align-items: center; justify-content: space-between;">
        <div class="inputBox">
            ojczysty
            <input type="text" id="nowyProduktKrotkiOjczysty">
        </div>
        <div class="inputBox">
            do tłumaczenia
            <input type="text" id="nowyProduktKrotkiDoTlumaczenia">
        </div>
        <div class="inputBox">
            angielski
            <input type="text" id="nowyProduktKrotkiAngielski">
        </div>
        <div class="inputBox">
            polski
            <input type="text" id="nowyProduktKrotkiPolski">
        </div>
        <div class="inputBox">
            ukraiński
            <input type="text" id="nowyProduktKrotkiUkrainski">
        </div>
        <div class="inputBox">
            niemiecki
            <input type="text" id="nowyProduktKrotkiNiemiecki">
        </div>
    </div>
    <span class="h2">Opis długi</span>
    <div style="display: flex; gap: 1em; align-items: center;">
        <button class="languageButton" id="opisDlugiOjczysty">Ojczysty</button>
        <button class="languageButton" id="opisDlugiDoTlumaczenia">Do tłumaczenia</button>
        <button class="languageButton" id="opisDlugiPolski">Polski</button>
        <button class="languageButton" id="opisDlugiAngielski">Angielski</button>
        <button class="languageButton" id="opisDlugiNiemiecki">Niemiecki</button>
        <button class="languageButton" id="opisDlugiUkrainski">Ukraiński</button>
    </div>
    <textarea id="nowyProduktEdycjaTresci" rows="20"></textarea>
    <div style="display: flex; gap: 4em; align-items: center;">
        <div style="display: flex; gap: 1em; align-items: center;width: 100%;">
        <div class="inputBox">
            Czas realizacji od:
            <input type="number" min="0" max="100" id="nowyProduktRealizacjaOd">
        </div>
        <div class="inputBox">
            Czas realizacji do:
            <input type="number" min="0" max="100" id="nowyProduktRealizacjaDo">
        </div>
        <div class="inputBox">
            Typ czasu realizacji:
            <select id="nowyProduktRealizacjaTyp">
                <option value="sekund">Sekund</option>
                <option value="minut">Minut</option>
                <option value="godzin">Godzin</option>
                <option value="dni">Dni</option>
                <option value="tygodni">Tygodni</option>
                <option value="miesiecy">Miesięcy</option>
            </select>
        </div>
</div>
<div style="display: flex; gap: 1em; align-items: center; width: 100%;">
        <div class="inputBox">
            Cena:
            <input type="number" min="0" max="1000000" id="nowyProduktCena">
        </div>
        <div class="inputBox">
            Cena promocyjna:
            <input type="number" min="0" max="1000000" id="nowyProduktCenaPromocyjna">
        </div>
        <div class="inputBox">
            Czy cena promocyjna:
            <div style="display: flex; justify-content: center;">
            <div style="display: flex">
            <input type="radio" name="czyCenaPromocyjna" id="nowyProduktCenaPromTak" value="tak">
            <label for="nowyProduktCenaPromTak">TAK</label>
</div>
<div style="display: flex">
            <input type="radio" name="czyCenaPromocyjna" id="nowyProduktCenaPromNie" value="nie">
            <label for="nowyProduktCenaPromNie">NIE</label>
            </div>
        </div>
</div>
    </div>
</div>
    <div style="display: flex; gap: 1em; align-items: center;">
        <div class="inputBox">
            Przykładowy dokument:
            <input type="file" id="nowyProduktPrzykladowyDokument">
        </div>
        <button id="pobierzPrzykladowyDokument" class="actionButton">Pobierz dokument</button>
        <button id="usunPrzykladowyDokument" class="actionButton">Usuń dokument</button>
    </div>
    <div style="display: flex; gap: 1em; align-items: center;">
       
    </div>
    <button id="zapiszProdukt" class="actionButton">Zapisz produkt</button>
</div>
</body>
</html>
