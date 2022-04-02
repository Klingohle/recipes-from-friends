<?php
require_once 'inc/functions.inc.php';
require_once 'inc/config.inc.php';

spl_autoload_register('autoload');
?>

<article>
    <h3>Rezeptname: <?= ucfirst(cleanUp($entry['title'])) ?></h3>
    <p>Kategorie: <?= cleanUp($entry['category']) ?></p>
    <p>Zutaten: <?= cleanUp($entry['ingredients']) ?></p>
    <p>Beschreibung: <?= cleanUp($entry['description']) ?><p>
    <p>Getränkeempfehlung: <?= cleanUp($entry['drink']) ?><p>
    <p>Tipps & Tricks: <?= cleanUp($entry['tips']) ?> <p>
    <p>Autor: <?= cleanUp($entry['author']) ?><p>
    <p>eingetragen 
        <time datetime="<?= strftime('%Y-%m-%d', $entry['created'])?> "> 
        <?= strftime('am %d.%m.%Y', $entry['created']) ?> </time>
    </p>
    <hr style='border-top: 2px double #8c8c8c;'>
</article>