<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiTimur extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "KUTAI TIMUR";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('TELUK PANDAN', Relawan::where('kecamatan', 'TELUK PANDAN')->count()),
            Stat::make('TELUK PANDAN [Terverifikasi]', Relawan::where('kecamatan', 'TELUK PANDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TELUK PANDAN [Proses]', Relawan::where('kecamatan', 'TELUK PANDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TELEN', Relawan::where('kecamatan', 'TELEN')->count()),
            Stat::make('TELEN [Terverifikasi]', Relawan::where('kecamatan', 'TELEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TELEN [Proses]', Relawan::where('kecamatan', 'TELEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SANGKULIRANG', Relawan::where('kecamatan', 'SANGKULIRANG')->count()),
            Stat::make('SANGKULIRANG [Terverifikasi]', Relawan::where('kecamatan', 'SANGKULIRANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SANGKULIRANG [Proses]', Relawan::where('kecamatan', 'SANGKULIRANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('RANTAU PULUNG', Relawan::where('kecamatan', 'RANTAU PULUNG')->count()),
            Stat::make('RANTAU PULUNG [Terverifikasi]', Relawan::where('kecamatan', 'RANTAU PULUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('RANTAU PULUNG [Proses]', Relawan::where('kecamatan', 'RANTAU PULUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KOMBENG', Relawan::where('kecamatan', 'KOMBENG')->count()),
            Stat::make('KOMBENG [Terverifikasi]', Relawan::where('kecamatan', 'KOMBENG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KOMBENG [Proses]', Relawan::where('kecamatan', 'KOMBENG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KAUBUN', Relawan::where('kecamatan', 'KAUBUN')->count()),
            Stat::make('KAUBUN [Terverifikasi]', Relawan::where('kecamatan', 'KAUBUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KAUBUN [Proses]', Relawan::where('kecamatan', 'KAUBUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KARANGAN', Relawan::where('kecamatan', 'KARANGAN')->count()),
            Stat::make('KARANGAN [Terverifikasi]', Relawan::where('kecamatan', 'KARANGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KARANGAN [Proses]', Relawan::where('kecamatan', 'KARANGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KALIORANG', Relawan::where('kecamatan', 'KALIORANG')->count()),
            Stat::make('KALIORANG [Terverifikasi]', Relawan::where('kecamatan', 'KALIORANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KALIORANG [Proses]', Relawan::where('kecamatan', 'KALIORANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BUSANG', Relawan::where('kecamatan', 'BUSANG')->count()),
            Stat::make('BUSANG [Terverifikasi]', Relawan::where('kecamatan', 'BUSANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BUSANG [Proses]', Relawan::where('kecamatan', 'BUSANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BENGALON', Relawan::where('kecamatan', 'BENGALON')->count()),
            Stat::make('BENGALON [Terverifikasi]', Relawan::where('kecamatan', 'BENGALON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BENGALON [Proses]', Relawan::where('kecamatan', 'BENGALON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BATU AMPAR', Relawan::where('kecamatan', 'BATU AMPAR')->count()),
            Stat::make('BATU AMPAR [Terverifikasi]', Relawan::where('kecamatan', 'BATU AMPAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BATU AMPAR [Proses]', Relawan::where('kecamatan', 'BATU AMPAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SANGATTA UTARA', Relawan::where('kecamatan', 'SANGATTA UTARA')->count()),
            Stat::make('SANGATTA UTARA [Terverifikasi]', Relawan::where('kecamatan', 'SANGATTA UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SANGATTA UTARA [Proses]', Relawan::where('kecamatan', 'SANGATTA UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SANGATTA SELATAN', Relawan::where('kecamatan', 'SANGATTA SELATAN')->count()),
            Stat::make('SANGATTA SELATAN [Terverifikasi]', Relawan::where('kecamatan', 'SANGATTA SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SANGATTA SELATAN [Proses]', Relawan::where('kecamatan', 'SANGATTA SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SANDARAN', Relawan::where('kecamatan', 'SANDARAN')->count()),
            Stat::make('SANDARAN [Terverifikasi]', Relawan::where('kecamatan', 'SANDARAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SANDARAN [Proses]', Relawan::where('kecamatan', 'SANDARAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA WAHAU', Relawan::where('kecamatan', 'MUARA WAHAU')->count()),
            Stat::make('MUARA WAHAU [Terverifikasi]', Relawan::where('kecamatan', 'MUARA WAHAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA WAHAU [Proses]', Relawan::where('kecamatan', 'MUARA WAHAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA ANCALONG', Relawan::where('kecamatan', 'MUARA ANCALONG')->count()),
            Stat::make('MUARA ANCALONG [Terverifikasi]', Relawan::where('kecamatan', 'MUARA ANCALONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA ANCALONG [Proses]', Relawan::where('kecamatan', 'MUARA ANCALONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LONG MESANGAT', Relawan::where('kecamatan', 'LONG MESANGAT')->count()),
            Stat::make('LONG MESANGAT [Terverifikasi]', Relawan::where('kecamatan', 'LONG MESANGAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LONG MESANGAT [Proses]', Relawan::where('kecamatan', 'LONG MESANGAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BENGKAL', Relawan::where('kecamatan', 'BENGKAL')->count()),
            Stat::make('BENGKAL [Terverifikasi]', Relawan::where('kecamatan', 'BENGKAL')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BENGKAL [Proses]', Relawan::where('kecamatan', 'BENGKAL')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
