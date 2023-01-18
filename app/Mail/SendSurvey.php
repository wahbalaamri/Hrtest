<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSurvey extends Mailable
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
        $this->data = $data;

        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        print($this->data['subject']);
        return $this->subject($this->data['subject'])->view('Emails.sendSurvey');
    }
}
