<?php


function chargementAuto($nomClass) {

require_once ($nomClass . '.php');

} spl_autoload_register('chargementAuto');



