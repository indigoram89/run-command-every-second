<?php

namespace App\Jobs;

use App\Models\Robot;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class RunRobotJob implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        private Robot $robot,
    ) {
    }

    public function uniqueId()
    {
        return $this->robot->id;
    }

    public function handle()
    {
        $this->robot->run();
    }
}
