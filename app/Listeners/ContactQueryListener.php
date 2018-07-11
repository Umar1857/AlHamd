<?php

namespace App\Listeners;

use App\Admin;
use App\Events\ContactQueryEvent;
use App\Notifications\ContactQuery;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class ContactQueryListener
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
     * @param  ContactQueryEvent  $event
     * @return void
     */
    public function handle(ContactQueryEvent $event)
    {
        // Send Notification to all Registered Admins
        $admins = Admin::all();
        $contact = $event->contact;
        Notification::send($admins, new ContactQuery($contact));
    }
}
