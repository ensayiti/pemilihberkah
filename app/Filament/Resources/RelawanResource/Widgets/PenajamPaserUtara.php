<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PenajamPaserUtara extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "PENAJAM PASER UTARA";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('WARU', Relawan::where('kecamatan', 'WARU')->count()),
            Stat::make('WARU [Terverifikasi]', Relawan::where('kecamatan', 'WARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('WARU [Proses]', Relawan::where('kecamatan', 'WARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SEPAKU', Relawan::where('kecamatan', 'SEPAKU')->count()),
            Stat::make('SEPAKU [Terverifikasi]', Relawan::where('kecamatan', 'SEPAKU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SEPAKU [Proses]', Relawan::where('kecamatan', 'SEPAKU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PENAJAM', Relawan::where('kecamatan', 'PENAJAM')->count()),
            Stat::make('PENAJAM [Terverifikasi]', Relawan::where('kecamatan', 'PENAJAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PENAJAM [Proses]', Relawan::where('kecamatan', 'PENAJAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BABULU', Relawan::where('kecamatan', 'BABULU')->count()),
            Stat::make('BABULU [Terverifikasi]', Relawan::where('kecamatan', 'BABULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BABULU [Proses]', Relawan::where('kecamatan', 'BABULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
