<?php

namespace App\Mail;

use App\Http\Controllers\FeedbacksController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\FeedbacksModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $feedbacks_models;

    // /
    //  * Create a new message instance.
    //  *
    //  * @return void
    //  */
    public function __construct(FeedbacksModels $feedbacks_models)
    {
        $this->feedbacks_models = $feedbacks_models;
    }

    // /
    //  * Build the message.
    //  *
    //  * @return $this
    //  */
    public function build()
    {
        return $this->subject('Добрейший вечерочек '. $this->feedbacks_models->name)->view('emails.TestMail');
    }
    
}