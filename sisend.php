<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["sisend"];
    file_put_contents("sisendid.txt", $text . PHP_EOL, FILE_APPEND);
    echo "Sisend salvestatud!";
}
?>
<form method="post">
  Sisesta tekst: <input type="text" name="sisend">
  <input type="submit" value="Salvesta">
</form>
