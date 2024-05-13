<?php

namespace App\Mail;

use App\Models\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMailClient extends Mailable {

    use Queueable, SerializesModels;

    public Client $client;
    public string $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Client $client, string $url) {
        $this->client = $client;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject('Подтвеждение почты: '.env('APP_URL'))
        ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
        ->view('emails.verify-email-client');
    }
}
