

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Strona Główna - Admin</title>
</head>
<body>
<?php
require '../menu.php'
?>
<div id="main">
<span class="h2">Witaj</span>
<span class="h1" id="adminNameSurname">Kacper Kasiubowski</span>
<div style="display: flex; justify-content: space-between; width: 70%">
<span class="h3" id="currentDate">Czwartek, 5 czerwca 2025</span>
<span class="h3" id="currentTimer">17:18:34</span>
</div>
<span class="h2">Twoje biuro</span>
<div id="twojeBiuroDiv" class="sectionRed">
    <div class="statsDiv">
        <div style="display: flex; gap: 0.2em;">
            <span class="statsText">Pracowników w pracy: </span><span class="statsValue" id="workersInOffice">10</span>
        </div>
        <div style="display: flex; gap: 0.2em;">
            <span class="statsText">Konsultantów online: </span><span class="statsValue" id="workersInOffice">10</span>
        </div>
    </div>
    <span class="h2">Aktualnie w pracy:</span>
    <div id="workersAtJobList">
    </div>
</div>


<div style="display: flex; justify-content: space-between; gap: 1em;">
<div id="statystykiDiv" class="sectionGrey">
<span class="h2" style="margin-top: 0;">Statystyki biura</span>
<div class="statystykiFlex">
    <div class="statystyka">
        <span class="h3">Zamówienia z kiosku</span>
    </div>
    <div class="statystyka">
        <span class="h3">Formularze wyceny</span>
    </div>
    <div class="statystyka">
        <span class="h3">Czaty z klientami</span>
    </div>
</div>
</div>

<div id="statystykiDiv" class="sectionGrey">

<span class="h2" style="margin-top: 0;">Kiosk</span>
<div class="statystykiFlex">
<div class="statystyka">
        <span class="h3">Zarobki</span>
</div>
<div class="statystyka">
        <span class="h3">Top 5 produktów</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>