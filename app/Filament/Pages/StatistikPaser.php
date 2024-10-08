<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\Paser;
use App\Filament\Resources\RelawanResource\Widgets\PaserKel;
use Filament\Pages\Page;

class StatistikPaser extends Page
{
    protected static string $view = 'filament.pages.statistik-paser';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 5;

    protected static ?string $title = 'PASER';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'PASER';

    protected ?string $heading = 'PASER';

    protected function getHeaderWidgets(): array
    {
        return [
            Paser::class,
            PaserKel::class,
        ];
    }
}
