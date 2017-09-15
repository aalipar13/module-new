<?php namespace NewResource;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class NewProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'new');
    }

    /**
     * Add the Cors middleware to the router.
     *
     */
    public function boot()
    {
        $this->publishes([$this->configPath() => config_path('new.php')]);
    }

    protected function configPath()
    {
        return __DIR__ . '/config/new.php';
    }
}
