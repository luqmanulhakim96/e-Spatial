<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\User\EmailNotifikasiRegisterUser;
use Illuminate\Support\Facades\Mail;


class SendEmailRegistration implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $random;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data,$random)
    {
        $this->data = $data;
        $this->random = $random;

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
      Mail::send(new EmailNotifikasiRegisterUser($this->data, $this->random));
    }
}
