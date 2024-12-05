<?php

namespace NotificationChannels\Webhook;

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;

class WebhookMessageServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        Notification::extend('webhook', static function (Container $app) {
            return $app->make(WebhookChannel::class);
        });
    }
}
