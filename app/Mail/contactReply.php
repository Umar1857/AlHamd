<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Config;

class contactReply extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataMail)
    {
        $this->mailData = $dataMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mailData = $this->mailData;
        return $this->view($mailData['view'])
            ->from(Config::get('constants.sender.email'), Config::get('constants.sender.name'))
            ->subject($mailData['subject'])
            ->with([
                'contact' => $mailData['contact'],
                'subject' => $mailData['subject'],
                'msg'     => $mailData['msg']
            ]);
    }
}
