<?php

namespace Admin\UnderhoodTestLocal\Commands;

class MigrateCommand
{
    /**
     * Path to the migration directory.
     *
     * @var string
     */
    protected string $migrationsPath = __DIR__ . '/../database/migrations';

    /**
     * Execute the command.
     *
     * @return void
     */
    public function execute(): void
    {
        $migrations = $this->getMigrations();

        foreach ($migrations as $migration) {
            require_once $this->migrationsPath . '/' . $migration;
            $className = pathinfo($migration, PATHINFO_FILENAME);
            $fullClassName = 'Admin\\UnderhoodTestLocal\\database\\migrations\\' . $className;

            if (class_exists($fullClassName)) {
                $migrationInstance = new $fullClassName;
                $migrationInstance->up();
                echo "Migrated: $fullClassName\n";
            } else {
                echo "Class $fullClassName does not exist.\n";
            }
        }

        echo "All migrations completed!\n";
    }

    /**
     * Get all available migrations.
     *
     * @return array|false
     */
    protected function getMigrations(): bool|array
    {
        return array_diff(scandir($this->migrationsPath), ['.', '..']);
    }
}
