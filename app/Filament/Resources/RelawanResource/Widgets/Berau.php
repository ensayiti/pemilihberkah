<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Berau extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "BERAU";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('BIDUK-BIDUK', Relawan::where('kecamatan', 'BIDUK-BIDUK')->count()),
            Stat::make('BIDUK-BIDUK [Terverifikasi]', Relawan::where('kecamatan', 'BIDUK-BIDUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BIDUK-BIDUK [Proses]', Relawan::where('kecamatan', 'BIDUK-BIDUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('GUNUNG TABUR', Relawan::where('kecamatan', 'GUNUNG TABUR')->count()),
            Stat::make('GUNUNG TABUR [Terverifikasi]', Relawan::where('kecamatan', 'GUNUNG TABUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('GUNUNG TABUR [Proses]', Relawan::where('kecamatan', 'GUNUNG TABUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KELAY', Relawan::where('kecamatan', 'KELAY')->count()),
            Stat::make('KELAY [Terverifikasi]', Relawan::where('kecamatan', 'KELAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KELAY [Proses]', Relawan::where('kecamatan', 'KELAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MARATUA', Relawan::where('kecamatan', 'MARATUA')->count()),
            Stat::make('MARATUA [Terverifikasi]', Relawan::where('kecamatan', 'MARATUA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MARATUA [Proses]', Relawan::where('kecamatan', 'MARATUA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMBALIUNG', Relawan::where('kecamatan', 'SAMBALIUNG')->count()),
            Stat::make('SAMBALIUNG [Terverifikasi]', Relawan::where('kecamatan', 'SAMBALIUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMBALIUNG [Proses]', Relawan::where('kecamatan', 'SAMBALIUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SEGAH', Relawan::where('kecamatan', 'SEGAH')->count()),
            Stat::make('SEGAH [Terverifikasi]', Relawan::where('kecamatan', 'SEGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SEGAH [Proses]', Relawan::where('kecamatan', 'SEGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TABALAR', Relawan::where('kecamatan', 'TABALAR')->count()),
            Stat::make('TABALAR [Terverifikasi]', Relawan::where('kecamatan', 'TABALAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TABALAR [Proses]', Relawan::where('kecamatan', 'TABALAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BATU PUTIH', Relawan::where('kecamatan', 'BATU PUTIH')->count()),
            Stat::make('BATU PUTIH [Terverifikasi]', Relawan::where('kecamatan', 'BATU PUTIH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BATU PUTIH [Proses]', Relawan::where('kecamatan', 'BATU PUTIH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('BIATAN', Relawan::where('kecamatan', 'BIATAN')->count()),
            Stat::make('BIATAN [Terverifikasi]', Relawan::where('kecamatan', 'BIATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('BIATAN [Proses]', Relawan::where('kecamatan', 'BIATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('PULAU DERAWAN', Relawan::where('kecamatan', 'PULAU DERAWAN')->count()),
            Stat::make('PULAU DERAWAN [Terverifikasi]', Relawan::where('kecamatan', 'PULAU DERAWAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('PULAU DERAWAN [Proses]', Relawan::where('kecamatan', 'PULAU DERAWAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TALISAYAN', Relawan::where('kecamatan', 'TALISAYAN')->count()),
            Stat::make('TALISAYAN [Terverifikasi]', Relawan::where('kecamatan', 'TALISAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TALISAYAN [Proses]', Relawan::where('kecamatan', 'TALISAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TANJUNG REDEB', Relawan::where('kecamatan', 'TANJUNG REDEB')->count()),
            Stat::make('TANJUNG REDEB [Terverifikasi]', Relawan::where('kecamatan', 'TANJUNG REDEB')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TANJUNG REDEB [Proses]', Relawan::where('kecamatan', 'TANJUNG REDEB')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TELUK BAYUR', Relawan::where('kecamatan', 'TELUK BAYUR')->count()),
            Stat::make('TELUK BAYUR [Terverifikasi]', Relawan::where('kecamatan', 'TELUK BAYUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TELUK BAYUR [Proses]', Relawan::where('kecamatan', 'TELUK BAYUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
