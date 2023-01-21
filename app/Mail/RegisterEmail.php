<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $random)
    {
        //

        $this->subject('ASSUNTO');
        $this->from('mathsuzart@outlook.com');
        $this->replyTo('noreply@outlook.com');
        
        $this->name = $random;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->view('Mail.registerMail',[
            'nome' =>$this->user->name
        ])->attach('C:/',[
            'as'=>'imag.png'
        ]);//_DIR_'/../../public/anexo.pgn
    }
}
