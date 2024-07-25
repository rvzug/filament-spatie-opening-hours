<?php

namespace Rvzug\FilamentSpatieOpeningHours\Commands;

use Illuminate\Console\Command;

class FilamentSpatieOpeningHoursCommand extends Command
{
    public $signature = 'filament-spatie-opening-hours';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
