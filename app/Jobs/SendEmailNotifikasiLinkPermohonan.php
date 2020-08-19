<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\User\EmailNotifikasiLinkPermohonan;
use Illuminate\Support\Facades\Mail;

class SendEmailNotifikasiLinkPermohonan implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $permohonan;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($permohonan,$user)
    {
        $this->permohonan = $permohonan;
        $this->user = $user;

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
      Mail::send(new EmailNotifikasiLinkPermohonan($this->permohonan, $this->user));
    }
}
