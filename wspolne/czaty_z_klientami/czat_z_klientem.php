<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Czat z klientem</title>
</head>
<body>
<?php
require '../../menu.php'
?>
<div id="main" style="display: flex; gap: 3em;">
<div id="czatLeft">
<button class="returnButton" id="powrotDoListyCzatowKlient">Powrót do listy czatów z klientami</button>
<div style="display: flex; gap: 2em; margin-bottom: 1em;">
<span class="h1">Czat nr 100</span>
    <button class="actionButton" id="przekazCzat">Przekaz czat</button>
    <button class="actionButton" id="zakonczCzat">Zakończ czat</button>
</div>

<span class="h3">Status: <span id="clientChatStatus">Otwarty - Oczekuje na Twoją odpowiedź</span></span>
<span class="h3">Imię: <span id="clientChatName">Marek</span></span>
<span class="h3">Utworzono: <span id="clientChatCreated">06-06-2025 17:45:21 (17 minut temu)</span></span>
<div id="czatInput">
    <div style="display: flex; gap: 2em; align-items: center;">
    <span class="h2">Twoja wiadomość</span>
   
    </div>
    <textarea id="wiadomoscDoKlienta" rows="10"></textarea>
    <div style="display: flex; justify-content: space-between">
    <button class="addToMessageButton" id="odnosnikDoKiosku">Odnośnik do kiosku</button>
    <button class="addToMessageButton" id="odnosnikDoFormularza">Odnośnik do formularza</button>
    <button id="wyslijWiadomoscDoKlienta" class="sendButton">Wyślij</button>
</div>
</div>
</div>
<div id="czat">
</div>

</div>
</body>
</html>