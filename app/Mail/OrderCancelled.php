<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderCancelled extends Mailable
{
    use Queueable, SerializesModels;
    public $customerName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('NRF Order Cancel')
                    ->view('orders.ordercancel');
    }
}
