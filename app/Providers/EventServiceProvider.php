<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\ContactQueryEvent' => [
            'App\Listeners\ContactQueryListener',
        ],
        'App\Events\QuoteQueryEvent' => [
            'App\Listeners\QuoteQueryListener',
        ],'App\Events\BookingEvent' => [
            'App\Listeners\BookingListener',
        ],'App\Events\ThankyouEvent' => [
            'App\Listeners\ThankyouListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
