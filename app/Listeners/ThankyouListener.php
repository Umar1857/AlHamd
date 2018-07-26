<?php

namespace App\Listeners;

use App\Events\ThankyouEvent;
use App\Notifications\Thankyou;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThankyouListener
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
     * @param  ThankyouEvent  $event
     * @return void
     */
    public function handle(ThankyouEvent $event)
    {
        $booking = $event->booking;
        $booking->notify(new Thankyou($booking));
//        Notification::send($booking->email, new Thankyou($booking));

    }
}
