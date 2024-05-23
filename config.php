<?php

// http://localhost/phpMyAdmin5/

// définition des constantes de connections
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'root');
define('MYSQL_BASE', 'b1dev');

// tester la connection
try {
    $BDD = new PDO(
        'mysql:dbname=' . MYSQL_BASE . ';host=' . MYSQL_HOST,
        MYSQL_USER,
        MYSQL_PASS
    );

    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $BDD->exec('SET names utf8');
    $BDD->exec('SET lc_time_names = "fr_FR"');
} catch (PDOException $ex) {
    print 'Erreur! ' . $ex->getMessage();
    exit;
}
