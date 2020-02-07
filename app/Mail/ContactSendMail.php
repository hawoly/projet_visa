<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
       // dd($data);
        $this->data = $data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $dat=$this->data;
      // dd($dat['email']);
        return $this->from($dat['email'],$dat['name'])
        ->ReplyTo($dat['email'],$dat['name'])
        ->subject('New Customer Equiry')
        ->view('contactemail')
        ->with('data', $this->data);
    }
}
