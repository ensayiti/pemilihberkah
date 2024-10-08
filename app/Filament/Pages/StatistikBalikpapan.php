<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\Balikpapan;
use App\Filament\Resources\RelawanResource\Widgets\BalikpapanKel;
use Filament\Pages\Page;

class StatistikBalikpapan extends Page
{
    protected static string $view = 'filament.pages.statistik-balikpapan';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 3;

    protected static ?string $title = 'BALIKPAPAN KOTA';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'BALIKPAPAN KOTA';

    protected ?string $heading = 'BALIKPAPAN KOTA';

    protected function getHeaderWidgets(): array
    {
        return [
            Balikpapan::class,
            BalikpapanKel::class,
        ];
    }
}
