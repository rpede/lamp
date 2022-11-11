<?php
echo '<p>PHP version:'. phpversion() . '</p>';
$pdo = new PDO('mysql:dbname=app;host=mysql', 'root', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo '<p>MySQL version:' . $row['Value'] . '</p>';
