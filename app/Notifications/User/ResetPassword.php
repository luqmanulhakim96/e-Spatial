<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Mail\User\EmailNotifikasiLupaKataLaluan as Mailable;
use Illuminate\Support\Facades\Mail;

class ResetPassword extends Notification
{
      use Queueable;

      protected $token;
      protected $email;
      /**
       * Create a new notification instance.
       *
       * @return void
       */
      public function __construct($token, $email)
      {
          //
          $this->token = $token;
          $this->email = $email;

      }

      /**
       * Get the notification's delivery channels.
       *
       * @param  mixed  $notifiable
       * @return array
       */
      public function via($notifiable)
      {
          return ['mail'];
      }

      /**
       * Get the mail representation of the notification.
       *
       * @param  mixed  $notifiable
       * @return \Illuminate\Notifications\Messages\MailMessage
       */
      public function toMail($notifiable)
      {
        $token = $this->token;
        $user = $notifiable;
        // dd($admin);
        // return Mail::send(new EmailNotifikasiLupaKataLaluan($user, $token));
       return (new Mailable($user, $token))->to($user->email, $user->name);

        // return (new MailMessage)
        // ->subject('Tetapan Semula Katalaluan')
        //             ->line('Anda menerima emel ini kerana sistem telah menerima permohonan untuk menetap semula kata laluan bagi akaun yang berdaftar dengan alamat emel ini.')
        //             ->action('Tetapan Katalaluan', url('password/reset', $this->token))
        //             ->line('Sekiranya anda tidak membuat permohonan ini, sila abaikan emel ini.');
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
