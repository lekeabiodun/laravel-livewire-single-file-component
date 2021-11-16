<?php

namespace Lekeabiodun\LivewireSingleFileComponent\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lekeabiodun\LivewireSingleFileComponent\LivewireSingleFileComponentServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lekeabiodun\\LivewireSingleFileComponent\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireSingleFileComponentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_livewire-single-file-component_table.php.stub';
        $migration->up();
        */
    }
}
