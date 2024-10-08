<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Balikpapan extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "BALIKPAPAN";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('BALIKPAPAN KOTA', Relawan::where('kecamatan', 'BALIKPAPAN KOTA')->count()),
            Stat::make('BALIKPAPAN KOTA [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN KOTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN KOTA [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN KOTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BALIKPAPAN TIMUR', Relawan::where('kecamatan', 'BALIKPAPAN TIMUR')->count()),
            Stat::make('BALIKPAPAN TIMUR [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN TIMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN TIMUR [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN TIMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BALIKPAPAN BARAT', Relawan::where('kecamatan', 'BALIKPAPAN BARAT')->count()),
            Stat::make('BALIKPAPAN BARAT [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN BARAT [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BALIKPAPAN SELATAN', Relawan::where('kecamatan', 'BALIKPAPAN SELATAN')->count()),
            Stat::make('BALIKPAPAN SELATAN [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN SELATAN [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BALIKPAPAN UTARA', Relawan::where('kecamatan', 'BALIKPAPAN UTARA')->count()),
            Stat::make('BALIKPAPAN UTARA [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN UTARA [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BALIKPAPAN TENGAH', Relawan::where('kecamatan', 'BALIKPAPAN TENGAH')->count()),
            Stat::make('BALIKPAPAN TENGAH [Terverifikasi]', Relawan::where('kecamatan', 'BALIKPAPAN TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BALIKPAPAN TENGAH [Proses]', Relawan::where('kecamatan', 'BALIKPAPAN TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
