<?php

namespace App\Filament\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PerKabupaten extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getStats(): array
    {
        return [
            Stat::make('KUTAI KARTANEGARA [TOTAL]', Relawan::where('kabupaten', 'KUTAI KERTANEGARA')->count()),
            Stat::make('SAMARINDA [TOTAL]', Relawan::where('kabupaten', 'SAMARINDA')->count()),
            Stat::make('BALIKPAPAN [TOTAL]', Relawan::where('kabupaten', 'BALIKPAPAN')->count()),
            Stat::make('KUTAI TIMUR [TOTAL]', Relawan::where('kabupaten', 'KUTAI TIMUR')->count()),
            Stat::make('PASER [TOTAL]', Relawan::where('kabupaten', 'PASER')->count()),
            Stat::make('BERAU [TOTAL]', Relawan::where('kabupaten', 'BERAU')->count()),
            Stat::make('KUTAI BARAT [TOTAL]', Relawan::where('kabupaten', 'KUTAI BARAT')->count()),
            Stat::make('PENAJAM PASER UTARA [TOTAL]', Relawan::where('kabupaten', 'PENAJAM PASER UTARA')->count()),
            Stat::make('BONTANG [TOTAL]', Relawan::where('kabupaten', 'BONTANG')->count()),
            Stat::make('MAHAKAM ULU [TOTAL]', Relawan::where('kabupaten', 'MAHAKAM ULU')->count()),
        ];
    }
}
