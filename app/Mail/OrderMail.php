<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title = 'DOTA网站';
    protected $name = 'XXX';

    /**
     * OrderMail constructor.
     * @param $title
     * @param $name
     */
    public function __construct($title,$name)
    {
        $this->title = $title;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.email')->subject($this->title)->with(['name'=>$this->name]);
    }
}
