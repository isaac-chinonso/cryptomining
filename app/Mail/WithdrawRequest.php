<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $withdraw;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($withdraw)
    {
        $this->withdraw = $withdraw;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'hello@britishcapitalraise.com';
        $subject = 'Withdrawal Request';
        return $this->view('email.WithdrawalRequest')
            ->from($address)
            ->bcc($address)
            ->subject($subject);
    }
}
