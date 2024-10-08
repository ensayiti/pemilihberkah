<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BalikpapanKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Balikpapan Timur
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN TIMUR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LAMARU', Relawan::where('kelurahan', 'LAMARU')->count()),
            Stat::make('LAMARU [Terverifikasi]', Relawan::where('kelurahan', 'LAMARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAMARU [Proses]', Relawan::where('kelurahan', 'LAMARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANGGAR', Relawan::where('kelurahan', 'MANGGAR')->count()),
            Stat::make('MANGGAR [Terverifikasi]', Relawan::where('kelurahan', 'MANGGAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANGGAR [Proses]', Relawan::where('kelurahan', 'MANGGAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANGGAR BARU', Relawan::where('kelurahan', 'MANGGAR BARU')->count()),
            Stat::make('MANGGAR BARU [Terverifikasi]', Relawan::where('kelurahan', 'MANGGAR BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANGGAR BARU [Proses]', Relawan::where('kelurahan', 'MANGGAR BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TERITIP', Relawan::where('kelurahan', 'TERITIP')->count()),
            Stat::make('TERITIP [Terverifikasi]', Relawan::where('kelurahan', 'TERITIP')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERITIP [Proses]', Relawan::where('kelurahan', 'TERITIP')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Balikpapan Barat
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN BARAT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BARU ILIR', Relawan::where('kelurahan', 'BARU ILIR')->count()),
            Stat::make('BARU ILIR [Terverifikasi]', Relawan::where('kelurahan', 'BARU ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BARU ILIR [Proses]', Relawan::where('kelurahan', 'BARU ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BARU TENGAH', Relawan::where('kelurahan', 'BARU TENGAH')->count()),
            Stat::make('BARU TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'BARU TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BARU TENGAH [Proses]', Relawan::where('kelurahan', 'BARU TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BARU ULU', Relawan::where('kelurahan', 'BARU ULU')->count()),
            Stat::make('BARU ULU [Terverifikasi]', Relawan::where('kelurahan', 'BARU ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BARU ULU [Proses]', Relawan::where('kelurahan', 'BARU ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARIANGAU', Relawan::where('kelurahan', 'KARIANGAU')->count()),
            Stat::make('KARIANGAU [Terverifikasi]', Relawan::where('kelurahan', 'KARIANGAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARIANGAU [Proses]', Relawan::where('kelurahan', 'KARIANGAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGASARI', Relawan::where('kelurahan', 'MARGASARI')->count()),
            Stat::make('MARGASARI [Terverifikasi]', Relawan::where('kelurahan', 'MARGASARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGASARI [Proses]', Relawan::where('kelurahan', 'MARGASARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGO MULYO', Relawan::where('kelurahan', 'MARGO MULYO')->count()),
            Stat::make('MARGO MULYO [Terverifikasi]', Relawan::where('kelurahan', 'MARGO MULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGO MULYO [Proses]', Relawan::where('kelurahan', 'MARGO MULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Balikpapan Utara
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN UTARA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BATU AMPAR', Relawan::where('kelurahan', 'BATU AMPAR')->count()),
            Stat::make('BATU AMPAR [Terverifikasi]', Relawan::where('kelurahan', 'BATU AMPAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU AMPAR [Proses]', Relawan::where('kelurahan', 'BATU AMPAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GRAHA INDAH', Relawan::where('kelurahan', 'GRAHA INDAH')->count()),
            Stat::make('GRAHA INDAH [Terverifikasi]', Relawan::where('kelurahan', 'GRAHA INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GRAHA INDAH [Proses]', Relawan::where('kelurahan', 'GRAHA INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SAMARINDA', Relawan::where('kelurahan', 'GUNUNGSAMARINDA')->count()),
            Stat::make('GUNUNG SAMARINDA [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNGSAMARINDA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SAMARINDA [Proses]', Relawan::where('kelurahan', 'GUNUNGSAMARINDA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SAMARINDA BARU', Relawan::where('kelurahan', 'GUNUNGSAMARINDA BARU')->count()),
            Stat::make('GUNUNG SAMARINDA BARU [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNGSAMARINDA BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SAMARINDA BARU [Proses]', Relawan::where('kelurahan', 'GUNUNGSAMARINDA BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG JOANG', Relawan::where('kelurahan', 'KARANG JOANG')->count()),
            Stat::make('KARANG JOANG [Terverifikasi]', Relawan::where('kelurahan', 'KARANG JOANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG JOANG [Proses]', Relawan::where('kelurahan', 'KARANG JOANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA RAPAK', Relawan::where('kelurahan', 'MUARARAPAK')->count()),
            Stat::make('MUARA RAPAK [Terverifikasi]', Relawan::where('kelurahan', 'MUARARAPAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA RAPAK [Proses]', Relawan::where('kelurahan', 'MUARARAPAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Balikpapan Tengah
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN TENGAH')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('GUNUNG SARI ILIR', Relawan::where('kelurahan', 'GUNUNGSARI ILIR')->count()),
            Stat::make('GUNUNG SARI ILIR [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNGSARI ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SARI ILIR [Proses]', Relawan::where('kelurahan', 'GUNUNGSARI ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SARI ULU', Relawan::where('kelurahan', 'GUNUNGSARI ULU')->count()),
            Stat::make('GUNUNG SARI ULU [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNGSARI ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SARI ULU [Proses]', Relawan::where('kelurahan', 'GUNUNGSARI ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG JATI', Relawan::where('kelurahan', 'KARANG JATI')->count()),
            Stat::make('KARANG JATI [Terverifikasi]', Relawan::where('kelurahan', 'KARANG JATI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG JATI [Proses]', Relawan::where('kelurahan', 'KARANG JATI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG REJO', Relawan::where('kelurahan', 'KARANG REJO')->count()),
            Stat::make('KARANG REJO [Terverifikasi]', Relawan::where('kelurahan', 'KARANG REJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG REJO [Proses]', Relawan::where('kelurahan', 'KARANG REJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEKAR SARI', Relawan::where('kelurahan', 'MEKAR SARI')->count()),
            Stat::make('MEKAR SARI [Terverifikasi]', Relawan::where('kelurahan', 'MEKAR SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEKAR SARI [Proses]', Relawan::where('kelurahan', 'MEKAR SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER REJO', Relawan::where('kelurahan', 'SUMBER REJO')->count()),
            Stat::make('SUMBER REJO [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER REJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER REJO [Proses]', Relawan::where('kelurahan', 'SUMBER REJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Balikpapan Selatan
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN SELATAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('DAMAI BAHAGIA', Relawan::where('kelurahan', 'DAMAI BAHAGIA')->count()),
            Stat::make('DAMAI BAHAGIA [Terverifikasi]', Relawan::where('kelurahan', 'DAMAI BAHAGIA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMAI BAHAGIA [Proses]', Relawan::where('kelurahan', 'DAMAI BAHAGIA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DAMAI BARU', Relawan::where('kelurahan', 'DAMAI BARU')->count()),
            Stat::make('DAMAI BARU [Terverifikasi]', Relawan::where('kelurahan', 'DAMAI BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMAI BARU [Proses]', Relawan::where('kelurahan', 'DAMAI BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG BAHAGIA', Relawan::where('kelurahan', 'GUNUNGBAHAGIA')->count()),
            Stat::make('GUNUNG BAHAGIA [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNGBAHAGIA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG BAHAGIA [Proses]', Relawan::where('kelurahan', 'GUNUNGBAHAGIA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPINGGAN', Relawan::where('kelurahan', 'SEPINGGAN')->count()),
            Stat::make('SEPINGGAN [Terverifikasi]', Relawan::where('kelurahan', 'SEPINGGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPINGGAN [Proses]', Relawan::where('kelurahan', 'SEPINGGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPINGGAN BARU', Relawan::where('kelurahan', 'SEPINGGAN BARU')->count()),
            Stat::make('SEPINGGAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'SEPINGGAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPINGGAN BARU [Proses]', Relawan::where('kelurahan', 'SEPINGGAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPINGGAN RAYA', Relawan::where('kelurahan', 'SEPINGGAN RAYA')->count()),
            Stat::make('SEPINGGAN RAYA [Terverifikasi]', Relawan::where('kelurahan', 'SEPINGGAN RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPINGGAN RAYA [Proses]', Relawan::where('kelurahan', 'SEPINGGAN RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI NANGKA', Relawan::where('kelurahan', 'SUNGAINANGKA')->count()),
            Stat::make('SUNGAI NANGKA [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAINANGKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI NANGKA [Proses]', Relawan::where('kelurahan', 'SUNGAINANGKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Balikpapan Kota
            BaseWidget\Card::make('Kecamatan', 'BALIKPAPAN KOTA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('DAMAI', Relawan::where('kelurahan', 'DAMAI')->count()),
            Stat::make('DAMAI [Terverifikasi]', Relawan::where('kelurahan', 'DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMAI [Proses]', Relawan::where('kelurahan', 'DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KLANDASAN ILIR', Relawan::where('kelurahan', 'KLANDASAN ILIR')->count()),
            Stat::make('KLANDASAN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'KLANDASAN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KLANDASAN ILIR [Proses]', Relawan::where('kelurahan', 'KLANDASAN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KLANDASAN ULU', Relawan::where('kelurahan', 'KLANDASAN ULU')->count()),
            Stat::make('KLANDASAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'KLANDASAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KLANDASAN ULU [Proses]', Relawan::where('kelurahan', 'KLANDASAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PRAPATAN', Relawan::where('kelurahan', 'PRAPATAN')->count()),
            Stat::make('PRAPATAN [Terverifikasi]', Relawan::where('kelurahan', 'PRAPATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PRAPATAN [Proses]', Relawan::where('kelurahan', 'PRAPATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELAGA SARI', Relawan::where('kelurahan', 'TELAGA SARI')->count()),
            Stat::make('TELAGA SARI [Terverifikasi]', Relawan::where('kelurahan', 'TELAGA SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELAGA SARI [Proses]', Relawan::where('kelurahan', 'TELAGA SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
