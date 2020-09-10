<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifikasiUserGagalNull extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $admin;
    public $permohonan;

    public function __construct($admin, $permohonan)
    {
        //
        $this->permohonan = $permohonan;
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $permohonan =  $this->permohonan;

      return $this->to($this->admin->email , $this->admin->name)
              ->from(env('MAIL_FROM_ADDRESS'))
              // ->from('system@espatial.com')
              ->subject('Permohonan Gagal')
              ->view('senarai-email.templates.notifikasiUserPermohonanGagalNull', compact('permohonan'));
    }
}
