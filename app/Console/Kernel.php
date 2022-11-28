<?php

namespace App\Console;

use Spatie\ShortSchedule\ShortSchedule;
use App\Console\Commands\RunRobotsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    protected function shortSchedule(ShortSchedule $shortSchedule)
    {
        $shortSchedule->command(RunRobotsCommand::class)->everySecond();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
