<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Paser extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "PASER";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('TANJUNG HARAPAN', Relawan::where('kecamatan', 'TANJUNG HARAPAN')->count()),
            Stat::make('TANJUNG HARAPAN [Terverifikasi]', Relawan::where('kecamatan', 'TANJUNG HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TANJUNG HARAPAN [Proses]', Relawan::where('kecamatan', 'TANJUNG HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TANAH GROGOT', Relawan::where('kecamatan', 'TANAH GROGOT')->count()),
            Stat::make('TANAH GROGOT [Terverifikasi]', Relawan::where('kecamatan', 'TANAH GROGOT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TANAH GROGOT [Proses]', Relawan::where('kecamatan', 'TANAH GROGOT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PASER BELENGKONG', Relawan::where('kecamatan', 'PASER BELENGKONG')->count()),
            Stat::make('PASER BELENGKONG [Terverifikasi]', Relawan::where('kecamatan', 'PASER BELENGKONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PASER BELENGKONG [Proses]', Relawan::where('kecamatan', 'PASER BELENGKONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA SAMU', Relawan::where('kecamatan', 'MUARA SAMU')->count()),
            Stat::make('MUARA SAMU [Terverifikasi]', Relawan::where('kecamatan', 'MUARA SAMU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA SAMU [Proses]', Relawan::where('kecamatan', 'MUARA SAMU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA KOMAM', Relawan::where('kecamatan', 'MUARA KOMAM')->count()),
            Stat::make('MUARA KOMAM [Terverifikasi]', Relawan::where('kecamatan', 'MUARA KOMAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA KOMAM [Proses]', Relawan::where('kecamatan', 'MUARA KOMAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG KALI', Relawan::where('kecamatan', 'LONG KALI')->count()),
            Stat::make('LONG KALI [Terverifikasi]', Relawan::where('kecamatan', 'LONG KALI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG KALI [Proses]', Relawan::where('kecamatan', 'LONG KALI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG IKIS', Relawan::where('kecamatan', 'LONG IKIS')->count()),
            Stat::make('LONG IKIS [Terverifikasi]', Relawan::where('kecamatan', 'LONG IKIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG IKIS [Proses]', Relawan::where('kecamatan', 'LONG IKIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KUARO', Relawan::where('kecamatan', 'KUARO')->count()),
            Stat::make('KUARO [Terverifikasi]', Relawan::where('kecamatan', 'KUARO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KUARO [Proses]', Relawan::where('kecamatan', 'KUARO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BATU SOPANG', Relawan::where('kecamatan', 'BATU SOPANG')->count()),
            Stat::make('BATU SOPANG [Terverifikasi]', Relawan::where('kecamatan', 'BATU SOPANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BATU SOPANG [Proses]', Relawan::where('kecamatan', 'BATU SOPANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BATU ENGAU', Relawan::where('kecamatan', 'BATU ENGAU')->count()),
            Stat::make('BATU ENGAU [Terverifikasi]', Relawan::where('kecamatan', 'BATU ENGAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BATU ENGAU [Proses]', Relawan::where('kecamatan', 'BATU ENGAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
