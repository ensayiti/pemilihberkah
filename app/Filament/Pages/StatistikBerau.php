<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\Berau;
use App\Filament\Resources\RelawanResource\Widgets\BerauKel;
use Filament\Pages\Page;

class StatistikBerau extends Page
{
    protected static string $view = 'filament.pages.statistik-berau';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 6;

    protected static ?string $title = 'BERAU';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'BERAU';

    protected ?string $heading = 'BERAU';

    protected function getHeaderWidgets(): array
    {
        return [
            Berau::class,
            BerauKel::class,
        ];
    }
}
