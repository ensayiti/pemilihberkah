<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BontangKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Bontang Barat
            BaseWidget\Card::make('Kecamatan', 'BONTANG BARAT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('BELIMBING', Relawan::where('kelurahan', 'BELIMBING')->count()),
            Stat::make('BELIMBING [Terverifikasi]', Relawan::where('kelurahan', 'BELIMBING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BELIMBING [Proses]', Relawan::where('kelurahan', 'BELIMBING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KANAAN', Relawan::where('kelurahan', 'KANAAN')->count()),
            Stat::make('KANAAN [Terverifikasi]', Relawan::where('kelurahan', 'KANAAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KANAAN [Proses]', Relawan::where('kelurahan', 'KANAAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG TELIHAN', Relawan::where('kelurahan', 'GUNUNG TELIHAN')->count()),
            Stat::make('GUNUNG TELIHAN [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG TELIHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG TELIHAN [Proses]', Relawan::where('kelurahan', 'GUNUNG TELIHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Bontang Selatan
            BaseWidget\Card::make('Kecamatan', 'BONTANG SELATAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BERBAS PANTAI', Relawan::where('kelurahan', 'BERBAS PANTAI')->count()),
            Stat::make('BERBAS PANTAI [Terverifikasi]', Relawan::where('kelurahan', 'BERBAS PANTAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BERBAS PANTAI [Proses]', Relawan::where('kelurahan', 'BERBAS PANTAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BERBAS TENGAH', Relawan::where('kelurahan', 'BERBAS TENGAH')->count()),
            Stat::make('BERBAS TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'BERBAS TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BERBAS TENGAH [Proses]', Relawan::where('kelurahan', 'BERBAS TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BONTANG LESTARI', Relawan::where('kelurahan', 'BONTANG LESTARI')->count()),
            Stat::make('BONTANG LESTARI [Terverifikasi]', Relawan::where('kelurahan', 'BONTANG LESTARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BONTANG LESTARI [Proses]', Relawan::where('kelurahan', 'BONTANG LESTARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SATIMPO', Relawan::where('kelurahan', 'SATIMPO')->count()),
            Stat::make('SATIMPO [Terverifikasi]', Relawan::where('kelurahan', 'SATIMPO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SATIMPO [Proses]', Relawan::where('kelurahan', 'SATIMPO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG LAUT', Relawan::where('kelurahan', 'TANJUNG LAUT')->count()),
            Stat::make('TANJUNG LAUT [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG LAUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG LAUT [Proses]', Relawan::where('kelurahan', 'TANJUNG LAUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG LAUT INDAH', Relawan::where('kelurahan', 'TANJUNG LAUT INDAH')->count()),
            Stat::make('TANJUNG LAUT INDAH [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG LAUT INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG LAUT INDAH [Proses]', Relawan::where('kelurahan', 'TANJUNG LAUT INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Bontang Utara
            BaseWidget\Card::make('Kecamatan', 'BONTANG UTARA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('API-API', Relawan::where('kelurahan', 'API-API')->count()),
            Stat::make('API-API [Terverifikasi]', Relawan::where('kelurahan', 'API-API')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('API-API [Proses]', Relawan::where('kelurahan', 'API-API')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BONTANG BARU', Relawan::where('kelurahan', 'BONTANG BARU')->count()),
            Stat::make('BONTANG BARU [Terverifikasi]', Relawan::where('kelurahan', 'BONTANG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BONTANG BARU [Proses]', Relawan::where('kelurahan', 'BONTANG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BONTANG KUALA', Relawan::where('kelurahan', 'BONTANG KUALA')->count()),
            Stat::make('BONTANG KUALA [Terverifikasi]', Relawan::where('kelurahan', 'BONTANG KUALA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BONTANG KUALA [Proses]', Relawan::where('kelurahan', 'BONTANG KUALA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNTUNG', Relawan::where('kelurahan', 'GUNTUNG')->count()),
            Stat::make('GUNTUNG [Terverifikasi]', Relawan::where('kelurahan', 'GUNTUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNTUNG [Proses]', Relawan::where('kelurahan', 'GUNTUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG ELAI', Relawan::where('kelurahan', 'GUNUNG ELAI')->count()),
            Stat::make('GUNUNG ELAI [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG ELAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG ELAI [Proses]', Relawan::where('kelurahan', 'GUNUNG ELAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOK TUAN', Relawan::where('kelurahan', 'LOK TUAN')->count()),
            Stat::make('LOK TUAN [Terverifikasi]', Relawan::where('kelurahan', 'LOK TUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOK TUAN [Proses]', Relawan::where('kelurahan', 'LOK TUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
