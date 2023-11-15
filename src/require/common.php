<?php
session_start();
require_once dirname(__DIR__) . '/../config/system.php';

if (ENVIRONMENT === 'developpement') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

try {
    $bdLink = new PDO('mysql:host=' . $_bdd['server'] . ';port=' . $_bdd['port'] . ';dbname=' . $_bdd['database'] . ';charset=utf8', $_bdd['username'], $_bdd['password']);
    $bdLink->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $bdLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error ! database connection error<br/>";
    die();
}
?>