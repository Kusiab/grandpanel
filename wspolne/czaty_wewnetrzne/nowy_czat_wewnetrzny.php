<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Nowy czat wewnętrzny</title>
</head>
<body>
<?php
require '../../menu.php'
?>
<div id="main">
<a href="../czaty_wewnetrzne.php" class="returnButton" id="powrotDoListyCzatowWewnetrznych">
  Powró† do listy czatów wewnętrznych
</a>

<span class="h1">Nowy czat wewnętrzny</span>
<div style="display: flex; gap: 1em">
    <button class="actionButton" id="wybierzNadawcow">Wybierz nadawców</button>
    <span id="listaNadawcow"></span>
</div>
<div id="czatInput">
    <span class="h2">Twoja wiadomość</span>
    <textarea id="wiadomoscWewnetrzna" rows="10"></textarea>
    <div style="display: flex; justify-content: space-between">
    <button class="addToMessageButton" id="wgrajPlik">Wgraj Plik</button>
    <button class="addToMessageButton" id="usunPlik">Usuń Plik</button>
    <button id="wyslijWiadomoscWewnetrzna" class="sendButton">Wyślij</button>
</div>
</body>
</html>