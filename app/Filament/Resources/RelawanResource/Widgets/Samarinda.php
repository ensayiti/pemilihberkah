<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Samarinda extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "SAMARINDA";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('SAMARINDA KOTA', Relawan::where('kecamatan', 'SAMARINDA KOTA')->count()),
            Stat::make('SAMARINDA KOTA [Terverifikasi]', Relawan::where('kecamatan', 'SAMARINDA KOTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMARINDA KOTA [Proses]', Relawan::where('kecamatan', 'SAMARINDA KOTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMARINDA UTARA', Relawan::where('kecamatan', 'SAMARINDA UTARA')->count()),
            Stat::make('SAMARINDA UTARA [Terverifikasi]', Relawan::where('kecamatan', 'SAMARINDA UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMARINDA UTARA [Proses]', Relawan::where('kecamatan', 'SAMARINDA UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMARINDA ULU', Relawan::where('kecamatan', 'SAMARINDA ULU')->count()),
            Stat::make('SAMARINDA ULU [Terverifikasi]', Relawan::where('kecamatan', 'SAMARINDA ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMARINDA ULU [Proses]', Relawan::where('kecamatan', 'SAMARINDA ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMARINDA ILIR', Relawan::where('kecamatan', 'SAMARINDA ILIR')->count()),
            Stat::make('SAMARINDA ILIR [Terverifikasi]', Relawan::where('kecamatan', 'SAMARINDA ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMARINDA ILIR [Proses]', Relawan::where('kecamatan', 'SAMARINDA ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMARINDA SEBERANG', Relawan::where('kecamatan', 'SAMARINDA SEBERANG')->count()),
            Stat::make('SAMARINDA SEBERANG [Terverifikasi]', Relawan::where('kecamatan', 'SAMARINDA SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMARINDA SEBERANG [Proses]', Relawan::where('kecamatan', 'SAMARINDA SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PINANG', Relawan::where('kecamatan', 'PINANG')->count()),
            Stat::make('PINANG [Terverifikasi]', Relawan::where('kecamatan', 'PINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PINANG [Proses]', Relawan::where('kecamatan', 'PINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KUNJANG', Relawan::where('kecamatan', 'KUNJANG')->count()),
            Stat::make('KUNJANG [Terverifikasi]', Relawan::where('kecamatan', 'KUNJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KUNJANG [Proses]', Relawan::where('kecamatan', 'KUNJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMBUTAN', Relawan::where('kecamatan', 'SAMBUTAN')->count()),
            Stat::make('SAMBUTAN [Terverifikasi]', Relawan::where('kecamatan', 'SAMBUTAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMBUTAN [Proses]', Relawan::where('kecamatan', 'SAMBUTAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PALARAN', Relawan::where('kecamatan', 'PALARAN')->count()),
            Stat::make('PALARAN [Terverifikasi]', Relawan::where('kecamatan', 'PALARAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PALARAN [Proses]', Relawan::where('kecamatan', 'PALARAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LOA JANAN', Relawan::where('kecamatan', 'LOA JANAN')->count()),
            Stat::make('LOA JANAN [Terverifikasi]', Relawan::where('kecamatan', 'LOA JANAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LOA JANAN [Proses]', Relawan::where('kecamatan', 'LOA JANAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
