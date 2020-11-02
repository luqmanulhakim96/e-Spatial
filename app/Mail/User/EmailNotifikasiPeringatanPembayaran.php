<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifikasiPeringatanPembayaran extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        //
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        // dd($this->data);
        return $this->to($this->data['user_email'], $this->data['user_name'])
                ->from(env('MAIL_FROM_ADDRESS'))
                // ->from('espatial@forestry.gov.my')
                ->subject($this->data['subject']." ".$this->data['permohonan_id'])
                ->view('senarai-email.templates.notifikasiUserPeringatan');
    }
}
