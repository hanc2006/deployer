<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * The repository service provider, binds interfaces to
 * concrete classes for dependency injection.
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\DeploymentRepositoryInterface',
            'App\Repositories\EloquentDeploymentRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\GroupRepositoryInterface',
            'App\Repositories\EloquentGroupRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProjectRepositoryInterface',
            'App\Repositories\EloquentProjectRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ServerRepositoryInterface',
            'App\Repositories\EloquentServerRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\TemplateRepositoryInterface',
            'App\Repositories\EloquentTemplateRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\UserRepositoryInterface',
            'App\Repositories\EloquentUserRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\NotificationRepositoryInterface',
            'App\Repositories\EloquentNotificationRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\NotifyEmailRepositoryInterface',
            'App\Repositories\EloquentNotifyEmailRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\SharedFileRepositoryInterface',
            'App\Repositories\EloquentSharedFileRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProjectFileRepositoryInterface',
            'App\Repositories\EloquentProjectFileRepository'
        );

        $this->app->bind(
            'App\Repositories\Contracts\HeartbeatRepositoryInterface',
            'App\Repositories\EloquentHeartbeatRepository'
        );
    }
}
