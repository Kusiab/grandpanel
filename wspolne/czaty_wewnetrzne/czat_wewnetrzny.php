<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Czat wewnętrzny</title>
</head>
<body>
<?php
require '../../menu.php'
?>
<div id="main" style="display: flex; gap: 3em;">
<div id="czatLeft">
<button class="returnButton" id="powrotDoListyCzatowKlient">Powrót do listy czatów wewnętrznych</button>
<div style="display: grid;  margin-bottom: 1em;">
<span class="h1">Czat nr 100</span>
    <button class="actionButton" id="opuscCzat">Opuść czat</button>
</div>

<span class="h3">Autor: <span id="insideChatAuthor">Bartosz Kasiubowski</span></span>
<span class="h3">Uczestnicy: <span id="insideChatParticipants">Ty, Ania Kowalska</span></span>
<span class="h3">Utworzono: <span id="insideChatCreated">06-06-2025 17:45:21 (17 minut temu)</span></span>
<div id="czatInput">
    <span class="h2">Twoja wiadomość</span>
    <textarea id="wiadomoscWewnetrzna" rows="10"></textarea>
    <div style="display: flex; justify-content: space-between">
    <button class="addToMessageButton" id="wgrajPlik">Wgraj Plik</button>
    <button class="addToMessageButton" id="usunPlik">Usuń Plik</button>
    <button id="wyslijWiadomoscWewnetrzna" class="sendButton">Wyślij</button>
</div>
</div>
</div>
<div id="czat">
</div>

</div>
</body>
</html>