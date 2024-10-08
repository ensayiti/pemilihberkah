<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\PenajamPaserUtara;
use App\Filament\Resources\RelawanResource\Widgets\PenajamPaserUtaraKel;
use Filament\Pages\Page;

class StatistikPenajamPaserUtara extends Page
{
    protected static string $view = 'filament.pages.statistik-penajam-paser-utara';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 8;

    protected static ?string $title = 'PENAJAM PASER UTARA';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'PENAJAM PASER UTARA';

    protected ?string $heading = 'PENAJAM PASER UTARA';

    protected function getHeaderWidgets(): array
    {
        return [
            PenajamPaserUtara::class,
            PenajamPaserUtaraKel::class,
        ];
    }
}
