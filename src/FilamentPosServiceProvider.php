<?php

namespace IbrhimBougaoua\FilamentPos;

use IbrhimBougaoua\FilamentPos\Commands\FilamentPosCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPosServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filamentpos')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filamentpos_table')
            ->hasCommand(FilamentPosCommand::class);
    }
}
