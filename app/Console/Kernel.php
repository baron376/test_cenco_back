<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\GenerarFaldones;
use App\Jobs\ActualizarEstados;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->job(new GenerarFaldones)->everyFiveMinutes();
        //$schedule->job(new GenerarFaldones)->everyFifteenMinutes()->withoutOverlapping();
        $schedule->job(new ActualizarEstados)->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('command:actualizarEstado')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('CrearFaldones')->everyThirtyMinutes()->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
