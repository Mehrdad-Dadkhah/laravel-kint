<?php
file_put_contents(__DIR__ . ".env", "KINT_DIR='" . __DIR__ . "'");

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$dotenv->required('KINT_DIR')->notEmpty();
