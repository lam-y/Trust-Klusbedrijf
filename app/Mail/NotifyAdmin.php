<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to("lamisyat@gmail.com", $this->contact->name)
                    ->subject('رسالة جديدة ')
                    ->markdown('emails.message');         // غيرناها وقت استعملنا الـ laravel default email template
                    // ->view('emails.message')->with($this->contact);

        // return $this->view('view.name');
    }
}
