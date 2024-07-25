<?php

namespace Rvzug\FilamentSpatieOpeningHours;

use Rvzug\FilamentSpatieOpeningHours\Commands\FilamentSpatieOpeningHoursCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSpatieOpeningHoursServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-spatie-opening-hours')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_spatie_opening_hours_table')
            ->hasCommand(FilamentSpatieOpeningHoursCommand::class);
    }
}
