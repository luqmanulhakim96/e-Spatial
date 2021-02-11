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
    public $language;

    public function __construct($user, $language)
    {
        //
        $this->user = $user;
        $this->language = $language;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      if($this->language == "english"){
        return $this->to($this->user->email , $this->user->name)
                // ->from(env('MAIL_FROM_ADDRESS'))
                ->from('espatial@forestry.gov.my' ,'E-mel Sistem eSpatial')
                ->subject('Permohonan Diterima')
                ->view('senarai-email.templates.notifikasiUserPermohonanBaruEnglish');
      }
      else{
        return $this->to($this->user->email , $this->user->name)
                // ->from(env('MAIL_FROM_ADDRESS'))
                ->from('espatial@forestry.gov.my' ,'E-mel Sistem eSpatial')
                ->subject('Permohonan Diterima')
                ->view('senarai-email.templates.notifikasiUserPermohonanBaru');
      }
    }
}
