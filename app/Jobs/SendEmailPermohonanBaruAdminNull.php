<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\User\EmailNotifikasiAdminNull;
use Illuminate\Support\Facades\Mail;

class SendEmailPermohonanBaruAdminNull implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $admin;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      // $email = new EmailForQueuing();
      // Mail::to($this->details['email'])->send($email);
      Mail::send(new EmailNotifikasiAdminNull($this->admin));
    }
}
