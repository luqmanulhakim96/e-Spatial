<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class EmailNotifikasiLinkPermohonan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($permohonan, $user)
    {
        $this->permohonan = $permohonan;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $permohonan = $this->permohonan;
        $attach = public_path() . '/' . $permohonan->attachment_penerimaan_data;
        //dd($permohonan);
        return $this->to($this->user['email'] , $this->user['nama'])
                // ->from(env('MAIL_FROM_ADDRESS'))
                ->from('espatial@forestry.gov.my')
                ->subject($permohonan->getPermohonanID().' '.'Penerimaan Data')
                ->attachFromStorage($permohonan->attachment_penerimaan_data)
                ->view('senarai-email.templates.notifikasiUserPenerimaanData', compact('permohonan'));
    }
}
