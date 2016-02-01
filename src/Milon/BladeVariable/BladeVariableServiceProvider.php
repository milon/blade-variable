<?php

namespace Milon\BladeVariable;

use Illuminate\Support\ServiceProvider;

class BladeVariableServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $blade = $this->app['view']->getEngineResolver()->resolve('blade')->getCompiler();

        $blade->directive('var', function ($exp) {
            return preg_replace("/\('(.*?)'\,(.*)\)/", '<?php $$1 = $2; ?>', $exp);
        });
    }

}
