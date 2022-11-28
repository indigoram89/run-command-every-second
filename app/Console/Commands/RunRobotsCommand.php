<?php

namespace App\Console\Commands;

use App\Models\Robot;
use App\Jobs\RunRobotJob;
use Illuminate\Console\Command;

class RunRobotsCommand extends Command
{
    protected $signature = 'robots:run';

    public function handle()
    {
        $this->runRobots();

        $this->info('Completed');

        return Command::SUCCESS;
    }

    private function runRobots()
    {
        $robots = Robot::query()->get();

        /** @var Robot $robot */
        foreach ($robots as $robot) {
            dispatch(new RunRobotJob($robot));
        }
    }
}
