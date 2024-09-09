<?php

require_once __DIR__ . '/vendor/autoload.php';

use Admin\UnderhoodTestLocal\Commands\MigrateCommand;
use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$capsule = new Capsule;
$config = require __DIR__ . '/config/database.php';
$capsule->addConnection($config['mysql']);

$capsule->setAsGlobal();
$capsule->bootEloquent();


$command = new MigrateCommand();
$command->execute();
