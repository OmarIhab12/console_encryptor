<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class ReverseEncrypt extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'reverseEncrypt {string}';

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
      $client = new \GuzzleHttp\Client();
      $res = $client->post('http://backendtask.robustastudio.com/encode', [
        'headers' => [
          'Content-Type' => 'application/json',
        ],
        'json' => [
          'string' => $this->argument('string'),
        ]
      ]);

      $result = json_decode($res->getBody()->getContents(),true);
      $this -> info($result["string"]);
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
