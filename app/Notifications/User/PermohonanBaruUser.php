<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Mail\User\EmailNotifikasiUserPermohonanBaru;
use App\Mail\User\EmailNotifikasiUser;

use Illuminate\Support\Facades\Mail;

class PermohonanBaruUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($user, $email, $language)
     {
         //
         $this->user = $user;
         $this->email = $email;
         $this->language = $language;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
      return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      if(is_null($this->email))
      {
        return Mail::queue(new EmailNotifikasiUserPermohonanBaru($this->user, $this->language));
      }
      else {
        return Mail::queue(new EmailNotifikasiUser($this->user, $this->email));
      }
    }
    public function toDatabase($notifiable)
    {
        // dd($this->language);
        if($this->language == "english"){
          return[
            'permohonan_id' => $notifiable->id,
            'tajuk' => 'The new application is in process.',
            'tarikh_dicipta' => $notifiable->created_at,
            'kepada_email' => $this->user->email,
            'kepada_id' => $this->user->id,
          ];
        }else{
          return[
            'permohonan_id' => $notifiable->id,
            'tajuk' => 'Permohonan baru sedang diproses',
            'tarikh_dicipta' => $notifiable->created_at,
            'kepada_email' => $this->user->email,
            'kepada_id' => $this->user->id,
          ];
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
