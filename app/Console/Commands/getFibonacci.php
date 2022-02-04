<?php

namespace App\Console\Commands;

use App\Http\Controllers\FibonacciController;
use App\Http\Requests\FibonacciRequest;
use Illuminate\Console\Command;
use Validator;

class getFibonacci extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:fibonacci {fibonacci_size}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $validator = Validator::make($this->argument(), (new FibonacciRequest())->rules());
        if ($validator->fails())
        {
            foreach($validator->messages()->all() as $error) {
                echo $error."\r\n";
            }
            $this->error('Something went wrong!');
            return 1;
        }
        $list = FibonacciController::getFibonacci($this->argument('fibonacci_size'));
        foreach($list as $fibonacciNumber) {
            echo $fibonacciNumber."\r\n";
        }

        $this->info('The command was successful!');
        return 0;
    }
}
