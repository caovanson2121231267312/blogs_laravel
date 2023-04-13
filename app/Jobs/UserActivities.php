<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Activate;

class UserActivities implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 5;
    public int $user_id;
    public string $message;
    public string $model_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $user_id, string $message, string $model_id)
    {
        $this->user_id = $user_id;
        $this->message = $message;
        $this->model_id = $model_id;
    }

    public function retryUntil()
    {
        return now()->addMinutes(1);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Activate::create([
            "user_id" => $this->user_id,
            "content" => $this->message,
            "model" => $this->model_id,
        ]);
    }
}