<?php

namespace Rvzug\FilamentSpatieOpeningHours\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Rvzug\FilamentSpatieOpeningHours\FilamentSpatieOpeningHoursServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Rvzug\\FilamentSpatieOpeningHours\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentSpatieOpeningHoursServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-spatie-opening-hours_table.php.stub';
        $migration->up();
        */
    }
}
