<?php


namespace App\Console\Commands;


use App\Traits\GetProperties;
use Illuminate\Console\Command;

class LoadProperties extends Command
{
    use GetProperties;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'properties:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get properties from API and save them to DB';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->handleProperties()){
            echo "Properties successfully added.\n";
        }
        else{
            echo "Error adding properties.\n";
        }
    }
}
