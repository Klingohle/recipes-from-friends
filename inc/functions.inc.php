<?php
require_once 'inc/config.inc.php';
// autoloader
function autoload($name)
{
    $file = 'src/' . $name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

function fetchEntries($reverse = false) { 
    $eintraege = []; 
    if (file_exists(DATA)){ 
        $unserialized = unserialize(file_get_contents(DATA)); 
    } if ($unserialized) { 
        $eintraege = $reverse ? array_reverse($unserialized) : $unserialized; 
    } return $eintraege; 
}

function cleanUp($enteredDataset, $encoding = 'UTF-8')
{
    return htmlspecialchars(strip_tags($enteredDataset), ENT_QUOTES | ENT_HTML5, $encoding);
}
