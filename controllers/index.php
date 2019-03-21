<?php

function loadClass($classname)
{
    if (file_exists('../models/'.$classname.'.php')) {
        require '../models/'.$classname.'.php';
    } else {
        require '../entities/'.$classname.'.php';
    }
}

spl_autoload_register('loadClass');
$db = Database::DB();

$ProductionManager = new ProductionManager($db);

$productions = $ProductionManager->getProductions();
include "../views/indexVue.php";
