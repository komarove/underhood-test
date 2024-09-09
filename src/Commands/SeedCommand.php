<?php

namespace Admin\UnderhoodTestLocal\Commands;

use Admin\UnderhoodTestLocal\database\seeds\SeedDatabase;

class SeedCommand
{
    /**
     * Execute the command.
     *
     * @return void
     */
    public static function execute(): void
    {
        SeedDatabase::run();
        echo "Database seeding completed!\n";
    }
}