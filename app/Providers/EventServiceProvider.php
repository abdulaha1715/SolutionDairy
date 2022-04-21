<?php

namespace App\Providers;

use App\Events\ActivityEvent;
use App\Listeners\ActivityListener;
use App\Models\Category;
use App\Models\Problem;
use App\Models\Tag;
use App\Observers\CategoryObserver;
use App\Observers\ProblemObserver;
use App\Observers\TagObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ActivityEvent::class => [
            ActivityListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        // ProblemObserver
        Problem::observe(ProblemObserver::class);
        // CategoryObserver
        Category::observe(CategoryObserver::class);
        // TagObserver
        Tag::observe(TagObserver::class);
    }
}
