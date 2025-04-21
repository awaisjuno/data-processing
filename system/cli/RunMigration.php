<?php

namespace System\Cli;

class RunMigration
{
    public function execute()
    {
        $migrationDir = ROOT_DIR . 'app/migrations/';

        if (!is_dir($migrationDir)) {
            echo "❌ Error: Migrations directory does not exist.\n";
            return;
        }

        $migrationFiles = glob($migrationDir . '*.php');

        if (empty($migrationFiles)) {
            echo "⚠️ No migrations found.\n";
            return;
        }

        foreach ($migrationFiles as $migrationFile) {
            require_once $migrationFile;

            $className = pathinfo($migrationFile, PATHINFO_FILENAME);

            if (class_exists($className)) {
                $instance = new $className();

                if (method_exists($instance, 'up')) {
                    echo "Running migration: {$className}...\n";
                    $instance->up();
                    echo "Migrated: {$className}\n\n";
                } else {
                    echo "Skipped: {$className} has no 'up' method.\n";
                }
            } else {
                echo "Class {$className} not found.\n";
            }
        }

        echo "🎉 All migrations executed.\n";
    }
}
