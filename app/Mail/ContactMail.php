<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactMail extends Mailable
{
    protected $id, $type;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($id,$type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $ConctactInfo = Contact::find($this->id);

        $Message = "Contact Request";
        $View = 'email.contactview';

        if($this->type == "contactuser") {
            $Message = "Thank you for Contacting Us!";
        } 
        else if($this->type == "admin") {
            $Message = "New Contact Request Received";
        }
        $type = $this->type;
        return $this->subject($Message)->view($View, compact('ConctactInfo','type'));
    }
}
