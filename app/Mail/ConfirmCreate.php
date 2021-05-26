<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// siguiendo https://laravel.com/docs/8.x/mail

class ConfirmCreate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance. Esto hace (definirlo público) que desde la view se pueda acceder a todos los datos del user
     * 
     * Once the data has been set to a public property, it will automatically be available in your view, so you may access it like you would access any other data in your Blade templates:
     *
     * @var \App\Models\User
     */
    public $user;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->order = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('piccara@gmail.com')
                ->view('mails.register');
        
    }
}
