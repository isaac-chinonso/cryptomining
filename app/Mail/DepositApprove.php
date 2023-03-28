<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositApprove extends Mailable
{
    use Queueable, SerializesModels;
    public $deposit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($deposit)
    {
        $this->deposit = $deposit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'hello@britishcapitalraise.com';
        $subject = 'Deposit has been Approved';
        return $this->view('email.DepositApprove')
            ->from($address)
            ->bcc($address)
            ->subject($subject);
    }
}
