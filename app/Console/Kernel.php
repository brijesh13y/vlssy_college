<?php

namespace App\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
    ];

    protected function commands()
    {
        $this->load(app_path('Console/Commands'));
    }

    protected function schedule($schedule)
    {
    }
}
