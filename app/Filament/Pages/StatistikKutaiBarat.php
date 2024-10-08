<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\KutaiBarat;
use App\Filament\Resources\RelawanResource\Widgets\KutaiBaratKel;
use Filament\Pages\Page;

class StatistikKutaiBarat extends Page
{
    protected static string $view = 'filament.pages.statistik-kutai-barat';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 7;

    protected static ?string $title = 'KUTAI BARAT';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'KUTAI BARAT';

    protected ?string $heading = 'KUTAI BARAT';

    protected function getHeaderWidgets(): array
    {
        return [
            KutaiBarat::class,
            KutaiBaratKel::class,
        ];
    }
}
