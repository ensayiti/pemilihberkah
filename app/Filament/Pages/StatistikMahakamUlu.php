<?php

namespace App\Filament\Pages;

use App\Filament\Resources\RelawanResource\Widgets\MahakamUlu;
use App\Filament\Resources\RelawanResource\Widgets\MahakamUluKel;
use Filament\Pages\Page;

class StatistikMahakamUlu extends Page
{
    protected static string $view = 'filament.pages.statistik-mahakam-ulu';

    protected static ?string $navigationIcon = null;

    protected static ?int $navigationSort = 10;

    protected static ?string $title = 'MAHAKAM ULU';

    protected static ?string $navigationGroup = 'Statistik';

    protected static ?string $navigationLabel = 'MAHAKAM ULU';

    protected ?string $heading = 'MAHAKAM ULU';

    protected function getHeaderWidgets(): array
    {
        return [
            MahakamUlu::class,
            MahakamUluKel::class,
        ];
    }
}
