<?php

require 'vendor/autoload.php';

use Admin\UnderhoodTestLocal\Commands\SeedCommand;
use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

$capsule = new Capsule;
$config = require __DIR__ . '/config/database.php';
$capsule->addConnection($config['mysql']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

SeedCommand::execute();
