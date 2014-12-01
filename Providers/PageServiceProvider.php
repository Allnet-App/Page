<?php namespace Modules\Page\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Page\Entities\Page;
use Modules\Page\Repositories\Eloquent\EloquentPageRepository;

class PageServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Page\Repositories\PageRepository',
            function() {
                return new EloquentPageRepository(new Page);
            }
        );
    }

}
