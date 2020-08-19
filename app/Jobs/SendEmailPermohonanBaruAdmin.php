<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\User\EmailNotifikasiAdmin;
use Illuminate\Support\Facades\Mail;

class SendEmailPermohonanBaruAdmin implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $admin;
    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($admin,$email)
    {
        $this->admin = $admin;
        $this->email = $email;

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
      Mail::send(new EmailNotifikasiAdmin($this->admin, $this->email));
    }
}
