<?php

namespace RonAppleton\LaravelSimpleShopModule;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use RonAppleton\MenuBuilder\Traits\AddsMenu;

class ModuleServiceProvider extends ServiceProvider
{
    use AddsMenu;
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'RonAppleton\MenuBuilder\Http\Controllers';


    /**
     * Create a new service provider instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application $app
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);
        $this->app = $app;
    }

    public function boot(Dispatcher $events)
    {
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViews();
        $this->publishers();
        $this->menuListener($events);
    }

    public function register()
    {
    }

    protected function loadViewsFrom($path, $namespace)
    {
        if (is_array($this->app->config['view']['paths'])) {
            foreach ($this->app->config['view']['paths'] as $viewPath) {
                if (is_dir($appPath = $viewPath . '/vendor/' . $namespace)) {
                    $this->app['view']->addNamespace($namespace, $appPath);
                }
            }
        }

        $this->app['view']->addNamespace($namespace, $path);
    }

    private function loadViews()
    {
        $viewPath = __DIR__ . '/resources/views';

        $this->loadViewsFrom($viewPath, 'simple-shop');

        $this->publishes([
            $viewPath => base_path('resources/views/vendor/simple-shop'),
        ], 'views');
    }

    private function publishers()
    {
        $this->publishes([
            __DIR__ . '/config/simple-shop.php' => config_path('simple-shop.php'),
        ]);
    }



    public function menuSidebar()
    {
    }
}