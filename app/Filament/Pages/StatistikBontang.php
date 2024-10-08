<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\Bontang;
use App\Filament\Resources\RelawanResource\Widgets\BontangKel;
use Filament\Pages\Page;

class StatistikBontang extends Page
{
    protected static string $view = 'filament.pages.statistik-bontang';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 9;

    protected static ?string $title = 'BONTANG KOTA';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'BONTANG KOTA';

    protected ?string $heading = 'BONTANG KOTA';

    protected function getHeaderWidgets(): array
    {
        return [
            Bontang::class,
            BontangKel::class,
        ];
    }
}
