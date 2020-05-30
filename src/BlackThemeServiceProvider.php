<?php

namespace Emptynick\BlackTheme;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class BlackThemeServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\BlackTheme\BlackTheme::class);
    }

    public function register()
    {
        //
    }
}