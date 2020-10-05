<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Mail\User\EmailNotifikasiPeringatanPembayaran;
use Illuminate\Support\Facades\Mail;

class SendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $data = $this->data;
      // dd($data);
      Mail::queue(new EmailNotifikasiPeringatanPembayaran($data));

      // Mail::send('senarai-email.templates.notifikasiUserPeringatan', $data, function($message) use ($data)
      // {
      //   $message->to($data['email'], $data['name']);
      //   $message->subject($data['subject']." ".$data['permohonan_id']);
      // });
    }
}
