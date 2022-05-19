<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\DatabaseSeeder;

class Databasereset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call("migrate:rollback");
        $this->call("migrate");
        $this->call(DatabaseSeeder::class);

    }
}
