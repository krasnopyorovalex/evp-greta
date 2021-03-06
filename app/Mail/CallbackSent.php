<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class CallbackSent
 * @package App\Mail
 */
class CallbackSent extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * OrderServiceSent constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return CallbackSent
     */
    public function build(): CallbackSent
    {
        return $this->subject('Форма: Напишите нам')
            ->view('emails.callback', [
                'data' => $this->data
            ]);
    }
}
