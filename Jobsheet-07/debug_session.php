<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Debug Session</title>
    <style>
        body { font-family: monospace; padding: 20px; background: #f4f4f4; }
        pre { background: #fff; padding: 15px; border: 1px solid #ccc; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Isi $_SESSION Saat Ini:</h2>
    <pre><?php print_r($_SESSION); ?></pre>
    <br>
    <a href="index.php">&laquo; Kembali ke Beranda</a>
</body>
</html>