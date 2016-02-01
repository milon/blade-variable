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

        $blade->extend( function($value, $compiler)
		{
			return preg_replace("/@var\('(.*?)'\,(.*)\)/", '<?php $$1 = $2; ?>', $value);
		});
    }

}
