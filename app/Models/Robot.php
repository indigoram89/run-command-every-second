<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Robot extends Model
{
    use HasFactory;

    public function run()
    {
        info("run robot {$this->id}");

        sleep(1);

        // if ($this->id === 5) {
        //     throw new Exception('Test');
        // }
    }
}
