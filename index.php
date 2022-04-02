<?php
require_once 'inc/functions.inc.php';
require_once 'inc/config.inc.php';
spl_autoload_register('autoload');

$entries = fetchEntries(true);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Landing</title>
</head>
<body>
    <h1>Rezepte von Freunden</h1>
    <a href='entry_form.php'>Rezept eintragen</a>

    <h2>Hier die bereits eingegebenen Rezepte</h2>

    <section>
        <?php foreach ($entries as $entry): ?>  
            <?php require 'inc/entry.inc.php'; ?>
        <?php endforeach; ?>
    </section>
</body>
</html>


