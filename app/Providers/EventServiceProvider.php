<?php

namespace App\Providers;

use App\Listeners\CartItemSavedListener;
use App\Listeners\CartItemSavingListener;

use App\Listeners\OrderCreatedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \App\Events\CartItemSaved::class => [
            CartItemSavedListener::class
        ],
        \App\Events\CartItemSaving::class => [
            CartItemSavingListener::class
        ],
        \App\Events\OrderCreated::class => [
            OrderCreatedListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
