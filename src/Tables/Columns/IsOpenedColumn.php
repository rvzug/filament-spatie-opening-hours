<?php

namespace Rvzug\FilamentSpatieOpeningHours\Tables\Columns;

use DateTime;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use Spatie\OpeningHours\OpeningHours;

class IsOpenedColumn extends TextColumn
{
    protected static $checkAgainst = null;

    public static function make(string $name): static
    {
        static::$checkAgainst = now();

        $static = parent::make($name)
            ->state(fn($record, Column $column) => self::isOpen($record, $column->getName()));

        $static
            ->formatStateUsing(function($state) { return $state ? 'opened' : 'closed'; })
            ->color(function($state) { return $state ? 'success' : 'danger'; });

        $static
            ->badge();

        return $static;
    }

    public function checkAgainst(?DateTime $dateTime = null): static
    {
        static::$checkAgainst = $dateTime ? $dateTime : now();

        return $this;
    }

    protected static function isOpen($record, $name): bool
    {
        $openingHours = OpeningHours::create(json_decode($record->{$name}, true));

        return $openingHours->isOpenAt(self::$checkAgainst);
    }
}