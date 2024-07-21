<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\ApplicationSubmitted;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
class SendApplicationNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $application;
    protected $recipientEmail;
    /**
     * Create a new job instance.
     */
    public function __construct(Application $application,$recipientEmail)
    {
        $this->application = $application;
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to($this->recipientEmail)->send(new ApplicationSubmitted($this->application));
    }
}
