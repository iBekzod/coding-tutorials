<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class api_generator_commands extends Command
{
    protected $signature = 'api_generator:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Api generator command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // exec('heroku run php artisan migrate:fresh --seed  --app napa-career ');
        // Artisan::call('migrate:refresh', ['--force' => true]);
        // Artisan::call('db:seed');
        // Artisan::call('optimize');

    }
}
