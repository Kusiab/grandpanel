<?php
// Plik: db.php
declare(strict_types=1);

// --- KONFIGURACJA I POŁĄCZENIE Z BAZĄ DANYCH ---
// Zmień wartości stałych na swoje dane
const DB_HOST = 'mysql8';
const DB_NAME = '11310107_grandapp';
const DB_USER = '11310107_grandapp';
const DB_PASS = 'Kasiub19712137!';

try {
    $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', DB_HOST, DB_NAME);
    $pdo = new PDO(
        $dsn,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    error_log('DB Connection Error: ' . $e->getMessage());
    // Możesz przekierować na stronę błędu lub wyświetlić ogólny komunikat
    die('Błąd połączenia z bazą danych.');
}