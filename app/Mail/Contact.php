<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Request;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $email;
    protected $phone;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->phone = $request->phone;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message
            ]);
    }
}
