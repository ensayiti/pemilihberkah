<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiBarat extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "KUTAI BARAT";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('JEMPANG', Relawan::where('kecamatan', 'JEMPANG')->count()),
            Stat::make('JEMPANG [Terverifikasi]', Relawan::where('kecamatan', 'JEMPANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('JEMPANG [Proses]', Relawan::where('kecamatan', 'JEMPANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MELAK', Relawan::where('kecamatan', 'MELAK')->count()),
            Stat::make('MELAK [Terverifikasi]', Relawan::where('kecamatan', 'MELAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MELAK [Proses]', Relawan::where('kecamatan', 'MELAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MOOK MANAAR BULATN', Relawan::where('kecamatan', 'MOOK MANAAR BULATN')->count()),
            Stat::make('MOOK MANAAR BULATN [Terverifikasi]', Relawan::where('kecamatan', 'MOOK MANAAR BULATN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MOOK MANAAR BULATN [Proses]', Relawan::where('kecamatan', 'MOOK MANAAR BULATN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TERING', Relawan::where('kecamatan', 'TERING')->count()),
            Stat::make('TERING [Terverifikasi]', Relawan::where('kecamatan', 'TERING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TERING [Proses]', Relawan::where('kecamatan', 'TERING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SEKOLAQ DARAT', Relawan::where('kecamatan', 'SEKOLAQ DARAT')->count()),
            Stat::make('SEKOLAQ DARAT [Terverifikasi]', Relawan::where('kecamatan', 'SEKOLAQ DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SEKOLAQ DARAT [Proses]', Relawan::where('kecamatan', 'SEKOLAQ DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('NYUATAN', Relawan::where('kecamatan', 'NYUATAN')->count()),
            Stat::make('NYUATAN [Terverifikasi]', Relawan::where('kecamatan', 'NYUATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('NYUATAN [Proses]', Relawan::where('kecamatan', 'NYUATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA PAHU', Relawan::where('kecamatan', 'MUARA PAHU')->count()),
            Stat::make('MUARA PAHU [Terverifikasi]', Relawan::where('kecamatan', 'MUARA PAHU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA PAHU [Proses]', Relawan::where('kecamatan', 'MUARA PAHU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA LAWA', Relawan::where('kecamatan', 'MUARA LAWA')->count()),
            Stat::make('MUARA LAWA [Terverifikasi]', Relawan::where('kecamatan', 'MUARA LAWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA LAWA [Proses]', Relawan::where('kecamatan', 'MUARA LAWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG IRAM', Relawan::where('kecamatan', 'LONG IRAM')->count()),
            Stat::make('LONG IRAM [Terverifikasi]', Relawan::where('kecamatan', 'LONG IRAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG IRAM [Proses]', Relawan::where('kecamatan', 'LONG IRAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LINGGANG BIGUNG', Relawan::where('kecamatan', 'LINGGANG BIGUNG')->count()),
            Stat::make('LINGGANG BIGUNG [Terverifikasi]', Relawan::where('kecamatan', 'LINGGANG BIGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LINGGANG BIGUNG [Proses]', Relawan::where('kecamatan', 'LINGGANG BIGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('DAMAI', Relawan::where('kecamatan', 'DAMAI')->count()),
            Stat::make('DAMAI [Terverifikasi]', Relawan::where('kecamatan', 'DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('DAMAI [Proses]', Relawan::where('kecamatan', 'DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BONGAN', Relawan::where('kecamatan', 'BONGAN')->count()),
            Stat::make('BONGAN [Terverifikasi]', Relawan::where('kecamatan', 'BONGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BONGAN [Proses]', Relawan::where('kecamatan', 'BONGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BENTIAN BESAR', Relawan::where('kecamatan', 'BENTIAN BESAR')->count()),
            Stat::make('BENTIAN BESAR [Terverifikasi]', Relawan::where('kecamatan', 'BENTIAN BESAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BENTIAN BESAR [Proses]', Relawan::where('kecamatan', 'BENTIAN BESAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BARONG TONGKOK', Relawan::where('kecamatan', 'BARONG TONGKOK')->count()),
            Stat::make('BARONG TONGKOK [Terverifikasi]', Relawan::where('kecamatan', 'BARONG TONGKOK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BARONG TONGKOK [Proses]', Relawan::where('kecamatan', 'BARONG TONGKOK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('AILUQ NGURAI', Relawan::where('kecamatan', 'AILUQ NGURAI')->count()),
            Stat::make('AILUQ NGURAI [Terverifikasi]', Relawan::where('kecamatan', 'AILUQ NGURAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('AILUQ NGURAI [Proses]', Relawan::where('kecamatan', 'AILUQ NGURAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PENYINGGAHAN', Relawan::where('kecamatan', 'PENYINGGAHAN')->count()),
            Stat::make('PENYINGGAHAN [Terverifikasi]', Relawan::where('kecamatan', 'PENYINGGAHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PENYINGGAHAN [Proses]', Relawan::where('kecamatan', 'PENYINGGAHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
