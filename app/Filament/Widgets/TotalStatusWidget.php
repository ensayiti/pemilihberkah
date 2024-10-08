<?php

namespace App\Filament\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalStatusWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            BaseWidget\Card::make('Total Pemilih', Relawan::all()->count())
                ->label('Total Pemilih')
                ->extraAttributes([
                    'style' => 'background-color: #E7EEF9; color: white;',
                ]),
            Stat::make('Terverifikasi', Relawan::where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->description('Total Data Terverifikasi')
                ->color('success'),
            Stat::make('Proses', Relawan::where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->description('Total Data Dalam Proses')
                ->color('danger'),
        ];
    }
}
