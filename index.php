<?php
// Plik: login.php
declare(strict_types=1);
session_start();

// --- POŁĄCZENIE Z BAZĄ DANYCH ---
require_once __DIR__ . '/db.php';

// --- FUNKCJA GENERUJĄCA TOKEN CSRF ---
function generateCsrfToken(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// --- FUNKCJA SPRAWDZAJĄCA TOKEN CSRF ---
function verifyCsrfToken(string $token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// --- PROCES LOGOWANIA ---
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Weryfikacja CSRF
    $token = $_POST['csrf_token'] ?? '';
    if (!verifyCsrfToken($token)) {
        $error = 'Błąd walidacji formularza. Spróbuj ponownie.';
    } else {
        // 2. Pobranie i sanitacja danych
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'] ?? '';
        if (!$email || empty($password)) {
            $error = 'Proszę podać poprawny e-mail i hasło.';
        } else {
            // 3. Zapytanie o użytkownika
            try {
                $stmt = $pdo->prepare('SELECT id, password_hash FROM users WHERE email = :email');
                $stmt->execute([':email' => $email]);
                $user = $stmt->fetch();

                if ($user && password_verify($password, $user['password_hash'])) {
                    // 4. Udało się – regeneracja sesji i przekierowanie
                    session_regenerate_id(true);
                    $_SESSION['user_id'] = $user['id'];
                    header('Location: dashboard.php');
                    exit;
                } else {
                    $error = 'Nieprawidłowy e-mail lub hasło.';
                }
            } catch (PDOException $e) {
                error_log('DB Error: ' . $e->getMessage());
                $error = 'Wewnętrzny błąd serwera. Spróbuj później.';
            }
        }
    }
}

// --- WYŚWIETLENIE FORMULARZA ---
$csrfToken = generateCsrfToken();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="style.css">
    <title>Panel zarządzania – Logowanie</title>
</head>

<body>
    <div class="login-container">
        <img src="logo.png" alt="Logo witryny">
        <h1>Panel zarządzania</h1>
        <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken) ?>">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required autofocus>
            <label for="password">Hasło</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Zaloguj</button>
        </form>
    </div>
</body>

</html>