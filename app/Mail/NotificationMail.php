<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;


    private $objet;
    private $msgBody;
    private $attachedFilePath;
    private $attachedFileNameWithExt;
    private $fileExt;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $objet, $msgBody, $attachedFilePath = null, $attachedFileNameWithExt = null,$fileExt = null)
    {

        $this->objet = $objet;
        $this->msgBody = $msgBody;
        $this->attachedFilePath = $attachedFilePath;
        $this->attachedFileNameWithExt = $attachedFileNameWithExt;
        $this->fileExt = $fileExt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $_mailData = $this->from( env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME") )
			->subject($this->objet)
            ->view('myViews.mail.email')
            ->with([
                'sender' => env("MAIL_FROM_NAME"),
                'objet' => $this->objet,
                'msgBody' => $this->msgBody
            ]);

        if(isset($this->attachedFilePath))
        {
            $_mailData = $_mailData->attach($this->attachedFilePath,[
                            'as' => $this->attachedFileNameWithExt,
                            'mime' => "application/".$this->fileExt,
                        ]);
        }


        return $_mailData;

//        return $this->view('view.name');
    }
}
