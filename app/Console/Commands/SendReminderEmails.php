<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Permohonan;
use App\Jobs\SendReminderEmail;
use Queue;
use Carbon\Carbon;

use App\Mail\User\EmailNotifikasiPeringatanPembayaran;
use Illuminate\Support\Facades\Mail;

class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'artanis:reminder-emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send User a reminder to pay for their application.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Get the users where they haven't activated or w/e
        $permohonan_lulus = Permohonan::where('status_permohonan', 'Lulus')->where('attachment_penerimaan_data', '!=', null)->where('attachment_surat_bayaran', '!=', null)->where('attachment_penerimaan_data_user', null)->whereDate('updated_at', '<=', Carbon::now()->subDays(30))->get();
        // dd($permohonan_lulus);
        foreach ($permohonan_lulus as $lulus) {
            $data = [
                'permohonan_id' => $lulus->getPermohonanID(),
                'user_name' => $lulus->user->name,
                'user_email' =>  $lulus->user->email,
                'subject' => 'Peringatan Notis Pembayaran bagi Permohonan ',
                'user_id' => $lulus->user->id,
                // 'token' => $activate_token, // if you need a token or link, just add it and use in the email view
            ];
            // Queue::push(new SendReminderEmails($data));
            // dd($data);
            $emailJob = (new SendReminderEmail($data))->delay(Carbon::now()->addSeconds(15));
            dispatch($emailJob);
            // Mail::queue(new EmailNotifikasiPeringatanPembayaran($lulus));
        }
    }
}
