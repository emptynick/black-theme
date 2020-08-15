<?php

namespace Emptynick\BlackTheme;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class BlackTheme implements ThemePlugin
{
    public $name = 'Black Theme';
    public $description = 'An all-black theme for Voyager 2';
    public $repository = 'emptynick/black-theme';
    public $website = 'https://github.com/emptynick/black-theme';
    public $version = '1.0.0';

    public function providePublicRoutes(): void
    {
        Route::get('black-theme.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/black.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('black-theme');
    }

    public function provideCSS(): string
    {
        return route('voyager.black-theme');
    }
}
