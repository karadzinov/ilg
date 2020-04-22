<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
//use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**s->
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($this->data);
        $mail = $this->view('emails.contact-form')->with([
            'data' => $this->data,
        ])->from($this->data['email'], 'Contact Form')
            ->subject($this->data['title']);

        return $mail;
    }
}
