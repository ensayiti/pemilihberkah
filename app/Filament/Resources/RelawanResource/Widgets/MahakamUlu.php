<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MahakamUlu extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "MAHAKAM ULU";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('LONG PAHANGAI', Relawan::where('kecamatan', 'LONG PAHANGAI')->count()),
            Stat::make('LONG PAHANGAI [Terverifikasi]', Relawan::where('kecamatan', 'LONG PAHANGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG PAHANGAI [Proses]', Relawan::where('kecamatan', 'LONG PAHANGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG HUBUNG', Relawan::where('kecamatan', 'LONG HUBUNG')->count()),
            Stat::make('LONG HUBUNG [Terverifikasi]', Relawan::where('kecamatan', 'LONG HUBUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG HUBUNG [Proses]', Relawan::where('kecamatan', 'LONG HUBUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG BAGUN', Relawan::where('kecamatan', 'LONG BAGUN')->count()),
            Stat::make('LONG BAGUN [Terverifikasi]', Relawan::where('kecamatan', 'LONG BAGUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG BAGUN [Proses]', Relawan::where('kecamatan', 'LONG BAGUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG APARI', Relawan::where('kecamatan', 'LONG APARI')->count()),
            Stat::make('LONG APARI [Terverifikasi]', Relawan::where('kecamatan', 'LONG APARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG APARI [Proses]', Relawan::where('kecamatan', 'LONG APARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LAHAM', Relawan::where('kecamatan', 'LAHAM')->count()),
            Stat::make('LAHAM [Terverifikasi]', Relawan::where('kecamatan', 'LAHAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LAHAM [Proses]', Relawan::where('kecamatan', 'LAHAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
