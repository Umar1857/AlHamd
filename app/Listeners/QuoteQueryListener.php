<?php

namespace App\Listeners;

use App\Admin;
use App\Events\QuoteQueryEvent;
use App\Notifications\QuoteQuery;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class QuoteQueryListener
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
     * @param  QuoteQueryEvent  $event
     * @return void
     */
    public function handle(QuoteQueryEvent $event)
    {
        // Send Notification to all Registered Admins
        $admins = Admin::all();
        $quote = $event->quote;
        Notification::send($admins, new QuoteQuery($quote));
    }
}
