<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\ShiftEncryptor;

class ShiftEncrypt extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'shiftEncrypt {string}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'shift encrypt the input';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $encryptor = new ShiftEncryptor();
        $encrypted_string = $encryptor->encrypt($this->argument('string'));
        $this -> info($encrypted_string);
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
