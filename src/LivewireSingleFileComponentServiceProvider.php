<?php

namespace Lekeabiodun\LivewireSingleFileComponent;

use Lekeabiodun\LivewireSingleFileComponent\Commands\LivewireSingleFileComponentCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireSingleFileComponentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-single-file-component')
            // ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_livewire-single-file-component_table')
            ->hasCommand(LivewireSingleFileComponentCommand::class);
    }
}
