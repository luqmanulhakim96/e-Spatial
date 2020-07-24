<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifikasiUserPermohonanBaru extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;

    public function __construct($user)
    {
        //
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->to($this->user->email , $this->user->name)
              // ->from(env('MAIL_FROM_ADDRESS'))
              ->from('system@espatial.com')
              ->subject('Permohonan Diterima')
              ->view('senarai-email.templates.notifikasiUserPermohonanBaru');
    }
}
