<?php
$pdo = NEW PDO('mysql:host=localhost;port=3306;dbname=misc', 'name', 'password');
// see 'errors' folder for details
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
