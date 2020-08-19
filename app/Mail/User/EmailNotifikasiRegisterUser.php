<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifikasiRegisterUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $password)
    {
        //
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $user = $this->user;
      $password = $this->password;
      return $this->to($this->user['email'] , $this->user['nama'])
              // ->from(env('MAIL_FROM_ADDRESS'))
              ->from('system@espatial.com')
              ->subject('Pendaftaran Berjaya')
              ->view('senarai-email.templates.notifikasiUserPendaftaranBaru', compact('user','password'));
    }
}
