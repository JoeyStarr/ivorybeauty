<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ivorymail extends Mailable
{
    use Queueable, SerializesModels;

    private $_emailuser;
    private $_usercontenu;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $emailuser,String $usercontenu)
    {
        $this->_emailuser = $emailuser;
        $this->_usercontenu = $usercontenu;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->_emailuser)
                    ->subject($this->_usercontenu)
                    ->view('pages/contact');
    }
}
