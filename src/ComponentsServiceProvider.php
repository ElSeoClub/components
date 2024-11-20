<?php

namespace Elseoclub\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class ComponentsServiceProvider extends ServiceProvider {
    public function boot() {
        $this->loadViewsFrom( __DIR__ . '/../resources/views', 'esc' );

        $this->registerBladeComponents();
    }

    protected function registerBladeComponents() {
        $componentNamespace = 'Elseoclub\\Components\\View\\Components';
        $componentPath      = __DIR__ . '/View/Components';

        foreach ( scandir( $componentPath ) as $file ) {
            if ( is_file( $componentPath . '/' . $file ) ) {
                $componentClass = $componentNamespace . '\\' . pathinfo( $file, PATHINFO_FILENAME );
                $componentAlias = Str::kebab( pathinfo( $file, PATHINFO_FILENAME ) );

                Blade::component( 'esc::components.' . $componentAlias, $componentClass );
            }
        }
    }
}
