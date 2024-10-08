<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\KutaiKartanegara;
use App\Filament\Resources\RelawanResource\Widgets\KutaiKartanegaraKel;
use App\Filament\Widgets\TotalStatusWidget;
use Filament\Pages\Page;

class StatistikKutaiKartanegara extends Page
{
    protected static string $view = 'filament.pages.statistik-kutai-kartanegara';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 1;

    protected static ?string $title = 'KUTAI KARTANEGARA';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'KUTAI KARTANEGARA';

    protected ?string $heading = 'KUTAI KARTANEGARA';

    protected function getHeaderWidgets(): array
    {
        return [
            KutaiKartanegara::class,
            KutaiKartanegaraKel::class,
        ];
    }
}
