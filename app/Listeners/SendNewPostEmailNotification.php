<?php

namespace App\Listeners;

use App\Events\NewPostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendNewPostEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewPostCreated  $event
     * @return void
     */
    public function handle(NewPostCreated $event)
    {
        Mail::to('peter@schu-bu.de')->send(new \App\Mail\NewPost($event->post));
    }
}
