<?php

namespace App\Listeners;

use App\Admin;
use App\Events\BookingEvent;
use App\Notifications\Booking;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class BookingListener
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
     * @param  BookingEvent  $event
     * @return void
     */
    public function handle(BookingEvent $event)
    {
        // Send Notification to all Registered Admins
        $admins = Admin::all();
        $booking = $event->booking;
        Notification::send($admins, new Booking($booking));
    }
}
