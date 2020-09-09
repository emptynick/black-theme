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

    public function provideCSS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/resources/dist/black.css'));
    }
}
