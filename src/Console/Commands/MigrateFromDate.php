<?php 
namespace Truncgil\MigrateFromDate\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class MigrateFromDate extends Command
{
    protected $signature = 'migrate:from-date {date}';
    protected $description = 'Migrate migrations from a specific date';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $date = $this->argument('date');
        $migrationsPath = database_path('migrations');
        $migrations = File::files($migrationsPath);

        foreach ($migrations as $migration) {
            $migrationDate = substr($migration->getFilename(), 0, 10); // YYYY_MM_DD kısmını alır

            if ($migrationDate > $date) {
                Artisan::call('migrate', ['--path' => 'database/migrations/' . $migration->getFilename()]);
                $this->info('Migrated: ' . $migration->getFilename());
            }
        }
    }
}
