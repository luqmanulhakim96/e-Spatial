<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Mail\Admin\EmailNotifikasiAdminNull;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;
use DateTime;

use App\Jobs\SendEmailPermohonanBaruAdminNull;

class PermohonanBaruAdminNull extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
        //
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
      return Mail::queue(new EmailNotifikasiAdminNull($this->admin));
    //   $emailJob = (new SendEmailPermohonanBaruAdminNull($this->admin))->delay(Carbon::now()->addSeconds(30));
    //   return dispatch($emailJob);
    }
    public function toDatabase($notifiable)
    {
        // dd($notifiable);
        return[
          'permohonan_id' => $notifiable->id,
          'tajuk' => 'Permohonan baru yang perlu disemak',
          'tarikh_dicipta' => $notifiable->created_at,
          'kepada_email' => $this->admin->email,
          'kepada_id' =>$this->admin->id,
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
