<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\Samarinda;
use App\Filament\Resources\RelawanResource\Widgets\SamarindaKel;
use Filament\Pages\Page;

class StatistikSamarinda extends Page
{
    protected static string $view = 'filament.pages.statistik-samarinda';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 2;

    protected static ?string $title = 'SAMARINDA KOTA';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'SAMARINDA KOTA';

    protected ?string $heading = 'SAMARINDA KOTA';

    protected function getHeaderWidgets(): array
    {
        return [
            Samarinda::class,
            SamarindaKel::class,
        ];
    }
}
