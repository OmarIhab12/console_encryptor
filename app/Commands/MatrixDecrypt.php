<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\MatrixEncryptor;

class MatrixDecrypt extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'matrixDecrypt {string}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $encryptor = new MatrixEncryptor();
      $decrypted_string = $encryptor->decrypt($this->argument('string'));
      $this -> info($decrypted_string);
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
