<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Mail\User\EmailNotifikasiUserGagalNull;
use App\Mail\User\EmailNotifikasiUserGagal;
use Illuminate\Support\Facades\Mail;

class PermohonanGagalUser extends Notification
{
    use Queueable;

    protected $admin;
    protected $email;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin, $email, $permohonan)
    {
        //
        $this->admin = $admin;
        $this->email = $email;
        $this->permohonan = $permohonan;
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
        return Mail::queue(new EmailNotifikasiUserGagalNull($this->admin, $this->permohonan));
      }
      else {
        return Mail::queue(new EmailNotifikasiUserGagal($this->admin, $this->email, $this->permohonan));
      }
    }

    public function toDatabase($notifiable)
    {
        // dd($notifiable);
        return[
          'permohonan_id' => $notifiable->id,
          'tajuk' => 'Permohonan Gagal',
          'tarikh_dicipta' => $notifiable->created_at,
          'kepada_email' => $this->admin->email,
          'kepada_id' => $this->admin->id,
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
