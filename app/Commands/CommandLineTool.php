<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\ShiftEncryptor;
use App\MatrixEncryptor;

class CommandLineTool extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
     protected $signature = 'CommandLineTool {string} {type} {method}';

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
       if(strcasecmp($this->argument('type'), "Matrix") == 0){
         $encryptor = new MatrixEncryptor();
       }
       else {
         $encryptor = new ShiftEncryptor();
       }

       if(strcasecmp($this->argument('method'), "Decrypt") == 0){
         $result = $encryptor->decrypt($this->argument('string'));
       }
       else {
         $result = $encryptor->encrypt($this->argument('string'));
       }

       $this -> info($result);
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
