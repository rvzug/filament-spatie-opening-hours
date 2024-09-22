<?php

namespace Rvzug\FilamentSpatieOpeningHours;
 
use DanHarrin\FilamentBlog\Pages\Settings;
use DanHarrin\FilamentBlog\Resources\CategoryResource;
use DanHarrin\FilamentBlog\Resources\PostResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentSpatieOpeningHoursPlugin implements Plugin
{
    public function getId(): string
    {
        return 'spatie-opening-hours';
    }
 
    public function register(Panel $panel): void
    {
        //
    }
 
    public function boot(Panel $panel): void
    {
        //
    }
}