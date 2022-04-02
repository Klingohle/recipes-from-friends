<?php
require_once 'inc/functions.inc.php';
require_once 'inc/config.inc.php';
spl_autoload_register('autoload');

if ($_POST['make'] === 'honda'){
    $car = new Honda($_POST);
} elseif  ($_POST['make'] === 'audi'){
    $car = new Audi($_POST);
} 

$recipe = new Recipe($_POST);

$entry = [
    'title' => trim($recipe->getTitle()),
    'category' => trim($recipe->getCategory()),
    'ingredients' => trim($recipe->getIngredients()),
    'description' => trim($recipe->getDescription()),
    'drink' => trim($recipe->getDrink()),
    'tips' => trim($recipe->getTips()),
    'author' => trim($recipe->getAuthor()),
 ];

 $entries = fetchEntries();
 $entries[] = $entry;

file_put_contents(DATA, serialize($entries));
header('Location: entry_thanx.php');
exit;

