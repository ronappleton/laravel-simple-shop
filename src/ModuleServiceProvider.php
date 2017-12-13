<?php

namespace RonAppleton\LaravelSimpleShopModule;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class ModuleServiceProvider extends ServiceProvider
{
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
    protected $namespace = 'RonAppleton\LaravelUserManagementModule\Http\Controllers';


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
        $this->addMenu($events);
        $this->publishers();
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

        $this->loadViewsFrom($viewPath, 'laravel-simple-shop-module');

        $this->publishes([
            $viewPath => base_path('resources/views/vendor/laravel-simple-shop-module'),
        ], 'views');
    }

    private function publishers()
    {
        $this->publishes([
            __DIR__ . '/config/laravel-simple-shop-module.php' => config_path('laravel-simple-shop-module.php'),
        ]);
    }

    private function addMenu($events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('SHOP');
            $event->menu->add([
                'text' => 'Products',
                'url' => '#',
                'icon' => 'cart',
                'submenu' => [
                    [
                        'text' => 'Products',
                        'url' => 'product',
                        'icon' => 'motorcycle'
                    ],
                    [
                        'text' => 'Product Category',
                        'url' => 'product_category',
                        'icon' => 'list',
                    ]
                ]
            ]);
        });
    }
}