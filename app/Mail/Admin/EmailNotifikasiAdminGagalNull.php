<?php

namespace App\Mail\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifikasiAdminGagalNull extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $admin;

    public function __construct($admin)
    {
        //
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->to($this->admin->email , $this->admin->name)
              // ->from(env('MAIL_FROM_ADDRESS'))
              ->from('espatial@forestry.gov.my' ,'E-mel Sistem eSpatial')
              ->subject('Terdapat Permohonan Tidak Lulus')
              ->view('senarai-email.templates.notifikasiAdminPermohonanGagalNull');
    }
}
