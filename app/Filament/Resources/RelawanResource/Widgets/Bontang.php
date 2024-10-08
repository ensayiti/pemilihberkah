<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Bontang extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "BONTANG";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('BONTANG SELATAN', Relawan::where('kecamatan', 'BONTANG SELATAN')->count()),
            Stat::make('BONTANG SELATAN [Terverifikasi]', Relawan::where('kecamatan', 'BONTANG SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BONTANG SELATAN [Proses]', Relawan::where('kecamatan', 'BONTANG SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BONTANG BARAT', Relawan::where('kecamatan', 'BONTANG BARAT')->count()),
            Stat::make('BONTANG BARAT [Terverifikasi]', Relawan::where('kecamatan', 'BONTANG BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BONTANG BARAT [Proses]', Relawan::where('kecamatan', 'BONTANG BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BONTANG UTARA', Relawan::where('kecamatan', 'BONTANG UTARA')->count()),
            Stat::make('BONTANG UTARA [Terverifikasi]', Relawan::where('kecamatan', 'BONTANG UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BONTANG UTARA [Proses]', Relawan::where('kecamatan', 'BONTANG UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
