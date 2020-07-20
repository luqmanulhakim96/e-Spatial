<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Mail\User\EmailNotifikasiUserPermohonanBaru;
use Illuminate\Support\Facades\Mail;

class PermohonanBaruUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     public function __construct($user)
     {
         //
         $this->user = $user;
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
      // dd($this->admin);
      // return Mail::queue(new EmailNotifikasiAdmin($this->admin));
      // dd($this->admin);
      return Mail::queue(new EmailNotifikasiUserPermohonanBaru($this->user));

      // return (new EmailNotifikasiAdmin($this->admin));
      // return (new MailMessage)
      //             ->line('Permohonan baru telah dipohon.')
      //             ->action('Klik di sini', url('/'))
      //             ->line('Terima Kasih');
    }
    public function toDatabase($notifiable)
    {
        // dd($notifiable);
        return[
          'permohonan_id' => $notifiable->id,
          'tajuk' => 'Permohonan baru sedang diproses',
          'tarikh_dicipta' => $notifiable->created_at,
          'kepada_email' => $this->user->email,
          'kepada_id' => $this->user->id,
        ];
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
