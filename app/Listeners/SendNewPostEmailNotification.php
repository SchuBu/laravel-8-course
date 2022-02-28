<?php

namespace App\Listeners;

use App\Events\NewPostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        dump($event->post);
        // send mail
    }
}
