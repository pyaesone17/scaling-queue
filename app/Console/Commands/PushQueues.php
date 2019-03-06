<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendBdWish;

class PushQueues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:queues';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Push queues command';

    /**
     * Create a new command instance.
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
        for ($i = 0; $i < 100; ++$i) {
            SendBdWish::dispatch();
        }
    }
}
