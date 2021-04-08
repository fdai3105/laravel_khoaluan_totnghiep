<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable {
    use Queueable, SerializesModels;

    private $order;

    /**
     * Create a new message instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order) {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): OrderMail {
        return $this->from(env('MAIL_FROM_ADDRESS'))
            ->view('emails.order_success')
            ->with([
                'order' => $this->order
            ]);
    }
}
