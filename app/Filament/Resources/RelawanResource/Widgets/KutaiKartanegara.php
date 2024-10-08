<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiKartanegara extends BaseWidget
{
    public function getDisplayName(): string
    {
        return "KUTAI KARTANEGARA";
    }

    protected function getStats(): array
    {
        return [
            Stat::make('TENGGARONG', Relawan::where('kecamatan', 'TENGGARONG')->count()),
            Stat::make('TENGGARONG [Terverifikasi]', Relawan::where('kecamatan', 'TENGGARONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TENGGARONG [Proses]', Relawan::where('kecamatan', 'TENGGARONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TENGGARONG SEBERANG', Relawan::where('kecamatan', 'TENGGARONG SEBERANG')->count()),
            Stat::make('TENGGARONG SEBERANG [Terverifikasi]', Relawan::where('kecamatan', 'TENGGARONG SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TENGGARONG SEBERANG [Proses]', Relawan::where('kecamatan', 'TENGGARONG SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('TABANG', Relawan::where('kecamatan', 'TABANG')->count()),
            Stat::make('TABANG [Terverifikasi]', Relawan::where('kecamatan', 'TABANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('TABANG [Proses]', Relawan::where('kecamatan', 'TABANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SEBULU', Relawan::where('kecamatan', 'SEBULU')->count()),
            Stat::make('SEBULU [Terverifikasi]', Relawan::where('kecamatan', 'SEBULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SEBULU [Proses]', Relawan::where('kecamatan', 'SEBULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SANGA SANGA', Relawan::where('kecamatan', 'SANGA SANGA')->count()),
            Stat::make('SANGA SANGA [Terverifikasi]', Relawan::where('kecamatan', 'SANGA SANGA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SANGA SANGA [Proses]', Relawan::where('kecamatan', 'SANGA SANGA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMBOJA', Relawan::where('kecamatan', 'SAMBOJA')->count()),
            Stat::make('SAMBOJA [Terverifikasi]', Relawan::where('kecamatan', 'SAMBOJA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMBOJA [Proses]', Relawan::where('kecamatan', 'SAMBOJA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('SAMBOJA BARAT', Relawan::where('kecamatan', 'SAMBOJA BARAT')->count()),
            Stat::make('SAMBOJA BARAT [Terverifikasi]', Relawan::where('kecamatan', 'SAMBOJA BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('SAMBOJA BARAT [Proses]', Relawan::where('kecamatan', 'SAMBOJA BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA WIS', Relawan::where('kecamatan', 'MUARA WIS')->count()),
            Stat::make('MUARA WIS [Terverifikasi]', Relawan::where('kecamatan', 'MUARA WIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA WIS [Proses]', Relawan::where('kecamatan', 'MUARA WIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA MUNTAI', Relawan::where('kecamatan', 'MUARA MUNTAI')->count()),
            Stat::make('MUARA MUNTAI [Terverifikasi]', Relawan::where('kecamatan', 'MUARA MUNTAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA MUNTAI [Proses]', Relawan::where('kecamatan', 'MUARA MUNTAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA KAMAN', Relawan::where('kecamatan', 'MUARA KAMAN')->count()),
            Stat::make('MUARA KAMAN [Terverifikasi]', Relawan::where('kecamatan', 'MUARA KAMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA KAMAN [Proses]', Relawan::where('kecamatan', 'MUARA KAMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA JAWA', Relawan::where('kecamatan', 'MUARA JAWA')->count()),
            Stat::make('MUARA JAWA [Terverifikasi]', Relawan::where('kecamatan', 'MUARA JAWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA JAWA [Proses]', Relawan::where('kecamatan', 'MUARA JAWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MUARA BADAK', Relawan::where('kecamatan', 'MUARA BADAK')->count()),
            Stat::make('MUARA BADAK [Terverifikasi]', Relawan::where('kecamatan', 'MUARA BADAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MUARA BADAK [Proses]', Relawan::where('kecamatan', 'MUARA BADAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('MARANG KAYU', Relawan::where('kecamatan', 'MARANG KAYU')->count()),
            Stat::make('MARANG KAYU [Terverifikasi]', Relawan::where('kecamatan', 'MARANG KAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('MARANG KAYU [Proses]', Relawan::where('kecamatan', 'MARANG KAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LOA JANAN', Relawan::where('kecamatan', 'LOA JANAN')->count()),
            Stat::make('LOA JANAN [Terverifikasi]', Relawan::where('kecamatan', 'LOA JANAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LOA JANAN [Proses]', Relawan::where('kecamatan', 'LOA JANAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KOTA BANGUN', Relawan::where('kecamatan', 'KOTA BANGUN')->count()),
            Stat::make('KOTA BANGUN [Terverifikasi]', Relawan::where('kecamatan', 'KOTA BANGUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KOTA BANGUN [Proses]', Relawan::where('kecamatan', 'KOTA BANGUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KOTA BANGUN DARAT', Relawan::where('kecamatan', 'KOTA BANGUN DARAT')->count()),
            Stat::make('KOTA BANGUN DARAT [Terverifikasi]', Relawan::where('kecamatan', 'KOTA BANGUN DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KOTA BANGUN DARAT [Proses]', Relawan::where('kecamatan', 'KOTA BANGUN DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KENOHAN', Relawan::where('kecamatan', 'KENOHAN')->count()),
            Stat::make('KENOHAN [Terverifikasi]', Relawan::where('kecamatan', 'KENOHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KENOHAN [Proses]', Relawan::where('kecamatan', 'KENOHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('KEMBAT JANGGUT', Relawan::where('kecamatan', 'KEMBAT JANGGUT')->count()),
            Stat::make('KEMBAT JANGGUT [Terverifikasi]', Relawan::where('kecamatan', 'KEMBAT JANGGUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('KEMBAT JANGGUT [Proses]', Relawan::where('kecamatan', 'KEMBAT JANGGUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('ANGGANA', Relawan::where('kecamatan', 'ANGGANA')->count()),
            Stat::make('ANGGANA [Terverifikasi]', Relawan::where('kecamatan', 'ANGGANA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('ANGGANA [Proses]', Relawan::where('kecamatan', 'ANGGANA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),

            Stat::make('LOA KULU', Relawan::where('kecamatan', 'LOA KULU')->count()),
            Stat::make('LOA KULU [Terverifikasi]', Relawan::where('kecamatan', 'LOA KULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('LOA KULU [Proses]', Relawan::where('kecamatan', 'LOA KULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle')
                ->color('danger'),
        ];
    }
}
