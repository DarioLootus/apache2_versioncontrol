<?php
// Kui vorm on saadetud
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = trim($_POST['user_input']); // puhastame sisendi
    if (!empty($input)) {
        file_put_contents('sisendid.txt', $input . PHP_EOL, FILE_APPEND); // lisame faili
        $message = "Sisend salvestatud!";
    } else {
        $message = "Palun sisesta midagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Sisendi vorm</title>
</head>
<body>
    <h1>Sisesta oma andmed</h1>
    <?php if (!empty($message)) echo "<p>$message</p>"; ?>
    <form method="post">
        <input type="text" name="user_input" required>
        <button type="submit">Salvesta</button>
    </form>
</body>
</html>
