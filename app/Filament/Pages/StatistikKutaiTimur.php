<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\KutaiTimur;
use App\Filament\Resources\RelawanResource\Widgets\KutaiTimurKel;
use Filament\Pages\Page;

class StatistikKutaiTimur extends Page
{
    protected static string $view = 'filament.pages.statistik-kutai-timur';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 4;

    protected static ?string $title = 'KUTAI TIMUR';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'KUTAI TIMUR';

    protected ?string $heading = 'KUTAI TIMUR';

    protected function getHeaderWidgets(): array
    {
        return [
            KutaiTimur::class,
            KutaiTimurKel::class,
        ];
    }
}
