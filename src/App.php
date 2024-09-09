<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$capsule = new Capsule;
$config = require __DIR__ . '/../config/database.php';

$capsule->addConnection($config['mysql']);

$capsule->setAsGlobal();
$capsule->bootEloquent();


$sql = "
    SELECT 
        p.date,
        SUM(p.quantity * COALESCE(pl.price, (
            SELECT price
            FROM price_logs pl2
            WHERE pl2.product_id = p.product_id
            AND pl2.date <= p.date
            ORDER BY pl2.date DESC
            LIMIT 1
        ))) AS total_value
    FROM products p
    LEFT JOIN price_logs pl ON p.product_id = pl.product_id 
        AND pl.date = p.date
    GROUP BY p.date
    ORDER BY p.date;
";

$results = Capsule::select($sql);

foreach ($results as $row) {
    echo "Date: {$row->date}, Total Value: {$row->total_value}\n";
}