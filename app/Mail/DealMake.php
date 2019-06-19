<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DealMake extends Mailable
{
    use Queueable, SerializesModels;

    public $deal;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($deal)
    {
        $this->deal = $deal;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.dealMake');
    }
}
