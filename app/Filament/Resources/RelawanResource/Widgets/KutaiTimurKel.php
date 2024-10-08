<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiTimurKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Batu Ampar
            BaseWidget\Card::make('Kecamatan', 'BATU AMPAR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BATU TIMBAU', Relawan::where('kelurahan', 'BATU TIMBAU')->count()),
            Stat::make('BATU TIMBAU [Terverifikasi]', Relawan::where('kelurahan', 'BATU TIMBAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU TIMBAU [Proses]', Relawan::where('kelurahan', 'BATU TIMBAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU TIMBAU ULU', Relawan::where('kelurahan', 'BATU TIMBAU ULU')->count()),
            Stat::make('BATU TIMBAU ULU [Terverifikasi]', Relawan::where('kelurahan', 'BATU TIMBAU ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU TIMBAU ULU [Proses]', Relawan::where('kelurahan', 'BATU TIMBAU ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENO HARAPAN', Relawan::where('kelurahan', 'BENO HARAPAN')->count()),
            Stat::make('BENO HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'BENO HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENO HARAPAN [Proses]', Relawan::where('kelurahan', 'BENO HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HIMBA LESTARI', Relawan::where('kelurahan', 'HIMBA LESTARI')->count()),
            Stat::make('HIMBA LESTARI [Terverifikasi]', Relawan::where('kelurahan', 'HIMBA LESTARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HIMBA LESTARI [Proses]', Relawan::where('kelurahan', 'HIMBA LESTARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MAWAI INDAH', Relawan::where('kelurahan', 'MAWAI INDAH')->count()),
            Stat::make('MAWAI INDAH [Terverifikasi]', Relawan::where('kelurahan', 'MAWAI INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MAWAI INDAH [Proses]', Relawan::where('kelurahan', 'MAWAI INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUGI RAHAYU', Relawan::where('kelurahan', 'MUGI RAHAYU')->count()),
            Stat::make('MUGI RAHAYU [Terverifikasi]', Relawan::where('kelurahan', 'MUGI RAHAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUGI RAHAYU [Proses]', Relawan::where('kelurahan', 'MUGI RAHAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELAGA', Relawan::where('kelurahan', 'TELAGA')->count()),
            Stat::make('TELAGA [Terverifikasi]', Relawan::where('kelurahan', 'TELAGA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELAGA [Proses]', Relawan::where('kelurahan', 'TELAGA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Bengalon
            BaseWidget\Card::make('Kecamatan', 'BENGALON')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KERAITAN', Relawan::where('kelurahan', 'KERAITAN')->count()),
            Stat::make('KERAITAN [Terverifikasi]', Relawan::where('kelurahan', 'KERAITAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERAITAN [Proses]', Relawan::where('kelurahan', 'KERAITAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BENGALON', Relawan::where('kelurahan', 'MUARA BENGALON')->count()),
            Stat::make('MUARA BENGALON [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BENGALON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BENGALON [Proses]', Relawan::where('kelurahan', 'MUARA BENGALON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKERAT', Relawan::where('kelurahan', 'SEKERAT')->count()),
            Stat::make('SEKERAT [Terverifikasi]', Relawan::where('kelurahan', 'SEKERAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKERAT [Proses]', Relawan::where('kelurahan', 'SEKERAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPASO', Relawan::where('kelurahan', 'SEPASO')->count()),
            Stat::make('SEPASO [Terverifikasi]', Relawan::where('kelurahan', 'SEPASO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPASO [Proses]', Relawan::where('kelurahan', 'SEPASO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPASO BARAT', Relawan::where('kelurahan', 'SEPASO BARAT')->count()),
            Stat::make('SEPASO BARAT [Terverifikasi]', Relawan::where('kelurahan', 'SEPASO BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPASO BARAT [Proses]', Relawan::where('kelurahan', 'SEPASO BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPASO INDUK', Relawan::where('kelurahan', 'SEPASO INDUK')->count()),
            Stat::make('SEPASO INDUK [Terverifikasi]', Relawan::where('kelurahan', 'SEPASO INDUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPASO INDUK [Proses]', Relawan::where('kelurahan', 'SEPASO INDUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPASO SELATAN', Relawan::where('kelurahan', 'SEPASO SELATAN')->count()),
            Stat::make('SEPASO SELATAN [Terverifikasi]', Relawan::where('kelurahan', 'SEPASO SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPASO SELATAN [Proses]', Relawan::where('kelurahan', 'SEPASO SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPASO TIMUR', Relawan::where('kelurahan', 'SEPASO TIMUR')->count()),
            Stat::make('SEPASO TIMUR [Terverifikasi]', Relawan::where('kelurahan', 'SEPASO TIMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPASO TIMUR [Proses]', Relawan::where('kelurahan', 'SEPASO TIMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEBANGAN LEMBAK', Relawan::where('kelurahan', 'TEBANGAN LEMBAK')->count()),
            Stat::make('TEBANGAN LEMBAK [Terverifikasi]', Relawan::where('kelurahan', 'TEBANGAN LEMBAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEBANGAN LEMBAK [Proses]', Relawan::where('kelurahan', 'TEBANGAN LEMBAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN BARU', Relawan::where('kelurahan', 'TEPIAN BARU')->count()),
            Stat::make('TEPIAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN BARU [Proses]', Relawan::where('kelurahan', 'TEPIAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN BUDAYA', Relawan::where('kelurahan', 'TEPIAN BUDAYA')->count()),
            Stat::make('TEPIAN BUDAYA [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN BUDAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN BUDAYA [Proses]', Relawan::where('kelurahan', 'TEPIAN BUDAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN INDAH', Relawan::where('kelurahan', 'TEPIAN INDAH')->count()),
            Stat::make('TEPIAN INDAH [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN INDAH [Proses]', Relawan::where('kelurahan', 'TEPIAN INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN LANGSAT', Relawan::where('kelurahan', 'TEPIAN LANGSAT')->count()),
            Stat::make('TEPIAN LANGSAT [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN LANGSAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN LANGSAT [Proses]', Relawan::where('kelurahan', 'TEPIAN LANGSAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN MADANI', Relawan::where('kelurahan', 'TEPIAN MADANI')->count()),
            Stat::make('TEPIAN MADANI [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN MADANI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN MADANI [Proses]', Relawan::where('kelurahan', 'TEPIAN MADANI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN RAYA', Relawan::where('kelurahan', 'TEPIAN RAYA')->count()),
            Stat::make('TEPIAN RAYA [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN RAYA [Proses]', Relawan::where('kelurahan', 'TEPIAN RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Busang
            BaseWidget\Card::make('Kecamatan', 'BUSANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LONG BENTUQ', Relawan::where('kelurahan', 'LONG BENTUQ')->count()),
            Stat::make('LONG BENTUQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG BENTUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BENTUQ [Proses]', Relawan::where('kelurahan', 'LONG BENTUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LEES', Relawan::where('kelurahan', 'LONG LEES')->count()),
            Stat::make('LONG LEES [Terverifikasi]', Relawan::where('kelurahan', 'LONG LEES')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),

            Stat::make('LONG LEES [Proses]', Relawan::where('kelurahan', 'LONG LEES')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG NYELONG', Relawan::where('kelurahan', 'LONG NYELONG')->count()),
            Stat::make('LONG NYELONG [Terverifikasi]', Relawan::where('kelurahan', 'LONG NYELONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG NYELONG [Proses]', Relawan::where('kelurahan', 'LONG NYELONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PEJENG', Relawan::where('kelurahan', 'LONG PEJENG')->count()),
            Stat::make('LONG PEJENG [Terverifikasi]', Relawan::where('kelurahan', 'LONG PEJENG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PEJENG [Proses]', Relawan::where('kelurahan', 'LONG PEJENG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEKAR BARU', Relawan::where('kelurahan', 'MEKAR BARU')->count()),
            Stat::make('MEKAR BARU [Terverifikasi]', Relawan::where('kelurahan', 'MEKAR BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEKAR BARU [Proses]', Relawan::where('kelurahan', 'MEKAR BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU SENTOSA', Relawan::where('kelurahan', 'RANTAU SENTOSA')->count()),
            Stat::make('RANTAU SENTOSA [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU SENTOSA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU SENTOSA [Proses]', Relawan::where('kelurahan', 'RANTAU SENTOSA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kaliorang
            BaseWidget\Card::make('Kecamatan', 'KALIORANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BANGUN JAYA', Relawan::where('kelurahan', 'BANGUN JAYA')->count()),
            Stat::make('BANGUN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BANGUN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANGUN JAYA [Proses]', Relawan::where('kelurahan', 'BANGUN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT HARAPAN', Relawan::where('kelurahan', 'BUKIT HARAPAN')->count()),
            Stat::make('BUKIT HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT HARAPAN [Proses]', Relawan::where('kelurahan', 'BUKIT HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT MAKMUR', Relawan::where('kelurahan', 'BUKIT MAKMUR')->count()),
            Stat::make('BUKIT MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT MAKMUR [Proses]', Relawan::where('kelurahan', 'BUKIT MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI SEJAHTERA', Relawan::where('kelurahan', 'BUMI SEJAHTERA')->count()),
            Stat::make('BUMI SEJAHTERA [Terverifikasi]', Relawan::where('kelurahan', 'BUMI SEJAHTERA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI SEJAHTERA [Proses]', Relawan::where('kelurahan', 'BUMI SEJAHTERA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CITRA MANUNGGAL JAYA', Relawan::where('kelurahan', 'CITRA MANUNGGAL JAYA')->count()),
            Stat::make('CITRA MANUNGGAL JAYA [Terverifikasi]', Relawan::where('kelurahan', 'CITRA MANUNGGAL JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CITRA MANUNGGAL JAYA [Proses]', Relawan::where('kelurahan', 'CITRA MANUNGGAL JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KALIORANG', Relawan::where('kelurahan', 'KALIORANG')->count()),
            Stat::make('KALIORANG [Terverifikasi]', Relawan::where('kelurahan', 'KALIORANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KALIORANG [Proses]', Relawan::where('kelurahan', 'KALIORANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SELANGKAU', Relawan::where('kelurahan', 'SELANGKAU')->count()),
            Stat::make('SELANGKAU [Terverifikasi]', Relawan::where('kelurahan', 'SELANGKAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SELANGKAU [Proses]', Relawan::where('kelurahan', 'SELANGKAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Karangan
            BaseWidget\Card::make('Kecamatan', 'KARANGAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BAAY', Relawan::where('kelurahan', 'BAAY')->count()),
            Stat::make('BAAY [Terverifikasi]', Relawan::where('kelurahan', 'BAAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BAAY [Proses]', Relawan::where('kelurahan', 'BAAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU LEPOQ', Relawan::where('kelurahan', 'BATU LEPOQ')->count()),
            Stat::make('BATU LEPOQ [Terverifikasi]', Relawan::where('kelurahan', 'BATU LEPOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU LEPOQ [Proses]', Relawan::where('kelurahan', 'BATU LEPOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANGAN DALAM', Relawan::where('kelurahan', 'KARANGAN DALAM')->count()),
            Stat::make('KARANGAN DALAM [Terverifikasi]', Relawan::where('kelurahan', 'KARANGAN DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANGAN DALAM [Proses]', Relawan::where('kelurahan', 'KARANGAN DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANGAN HILIR', Relawan::where('kelurahan', 'KARANGAN HILIR')->count()),
            Stat::make('KARANGAN HILIR [Terverifikasi]', Relawan::where('kelurahan', 'KARANGAN HILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANGAN HILIR [Proses]', Relawan::where('kelurahan', 'KARANGAN HILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANGAN SEBERANG', Relawan::where('kelurahan', 'KARANGAN SEBERANG')->count()),
            Stat::make('KARANGAN SEBERANG [Terverifikasi]', Relawan::where('kelurahan', 'KARANGAN SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANGAN SEBERANG [Proses]', Relawan::where('kelurahan', 'KARANGAN SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUKTI LESTARI', Relawan::where('kelurahan', 'MUKTI LESTARI')->count()),
            Stat::make('MUKTI LESTARI [Terverifikasi]', Relawan::where('kelurahan', 'MUKTI LESTARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUKTI LESTARI [Proses]', Relawan::where('kelurahan', 'MUKTI LESTARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENGADAN', Relawan::where('kelurahan', 'PENGADAN')->count()),
            Stat::make('PENGADAN [Terverifikasi]', Relawan::where('kelurahan', 'PENGADAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENGADAN [Proses]', Relawan::where('kelurahan', 'PENGADAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kaubun
            BaseWidget\Card::make('Kecamatan', 'KAUBUN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BUKIT PERMATA', Relawan::where('kelurahan', 'BUKIT PERMATA')->count()),
            Stat::make('BUKIT PERMATA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT PERMATA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT PERMATA [Proses]', Relawan::where('kelurahan', 'BUKIT PERMATA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI ETAM', Relawan::where('kelurahan', 'BUMI ETAM')->count()),
            Stat::make('BUMI ETAM [Terverifikasi]', Relawan::where('kelurahan', 'BUMI ETAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI ETAM [Proses]', Relawan::where('kelurahan', 'BUMI ETAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI JAYA', Relawan::where('kelurahan', 'BUMI JAYA')->count()),
            Stat::make('BUMI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUMI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI JAYA [Proses]', Relawan::where('kelurahan', 'BUMI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI RAPAK', Relawan::where('kelurahan', 'BUMI RAPAK')->count()),
            Stat::make('BUMI RAPAK [Terverifikasi]', Relawan::where('kelurahan', 'BUMI RAPAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI RAPAK [Proses]', Relawan::where('kelurahan', 'BUMI RAPAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CIPTA GRAHA', Relawan::where('kelurahan', 'CIPTA GRAHA')->count()),
            Stat::make('CIPTA GRAHA [Terverifikasi]', Relawan::where('kelurahan', 'CIPTA GRAHA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CIPTA GRAHA [Proses]', Relawan::where('kelurahan', 'CIPTA GRAHA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KADUNGAN JAYA', Relawan::where('kelurahan', 'KADUNGAN JAYA')->count()),
            Stat::make('KADUNGAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'KADUNGAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KADUNGAN JAYA [Proses]', Relawan::where('kelurahan', 'KADUNGAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MATA AIR', Relawan::where('kelurahan', 'MATA AIR')->count()),
            Stat::make('MATA AIR [Terverifikasi]', Relawan::where('kelurahan', 'MATA AIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MATA AIR [Proses]', Relawan::where('kelurahan', 'MATA AIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENGADAN BARU', Relawan::where('kelurahan', 'PENGADAN BARU')->count()),
            Stat::make('PENGADAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'PENGADAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENGADAN BARU [Proses]', Relawan::where('kelurahan', 'PENGADAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kombeng
            BaseWidget\Card::make('Kecamatan', 'KOMBENG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KOMBENG INDAH', Relawan::where('kelurahan', 'KOMBENG INDAH')->count()),
            Stat::make('KOMBENG INDAH [Terverifikasi]', Relawan::where('kelurahan', 'KOMBENG INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOMBENG INDAH [Proses]', Relawan::where('kelurahan', 'KOMBENG INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MAKMUR JAYA', Relawan::where('kelurahan', 'MAKMUR JAYA')->count()),
            Stat::make('MAKMUR JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MAKMUR JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MAKMUR JAYA [Proses]', Relawan::where('kelurahan', 'MAKMUR JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGA MULYA', Relawan::where('kelurahan', 'MARGA MULYA')->count()),
            Stat::make('MARGA MULYA [Terverifikasi]', Relawan::where('kelurahan', 'MARGA MULYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGA MULYA [Proses]', Relawan::where('kelurahan', 'MARGA MULYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MIAU BARU', Relawan::where('kelurahan', 'MIAU BARU')->count()),
            Stat::make('MIAU BARU [Terverifikasi]', Relawan::where('kelurahan', 'MIAU BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MIAU BARU [Proses]', Relawan::where('kelurahan', 'MIAU BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MIAU BARU UTARA', Relawan::where('kelurahan', 'MIAU BARU UTARA')->count()),
            Stat::make('MIAU BARU UTARA [Terverifikasi]', Relawan::where('kelurahan', 'MIAU BARU UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MIAU BARU UTARA [Proses]', Relawan::where('kelurahan', 'MIAU BARU UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOMULYO', Relawan::where('kelurahan', 'SIDOMULYO')->count()),
            Stat::make('SIDOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOMULYO [Proses]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SRI PANTUN', Relawan::where('kelurahan', 'SRI PANTUN')->count()),
            Stat::make('SRI PANTUN [Terverifikasi]', Relawan::where('kelurahan', 'SRI PANTUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SRI PANTUN [Proses]', Relawan::where('kelurahan', 'SRI PANTUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKAMAJU', Relawan::where('kelurahan', 'SUKAMAJU')->count()),
            Stat::make('SUKAMAJU [Terverifikasi]', Relawan::where('kelurahan', 'SUKAMAJU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKAMAJU [Proses]', Relawan::where('kelurahan', 'SUKAMAJU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Mesangat
            BaseWidget\Card::make('Kecamatan', 'LONG MESANGAT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MELAN', Relawan::where('kelurahan', 'MELAN')->count()),
            Stat::make('MELAN [Terverifikasi]', Relawan::where('kelurahan', 'MELAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELAN [Proses]', Relawan::where('kelurahan', 'MELAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUKTI UTAMA', Relawan::where('kelurahan', 'MUKTI UTAMA')->count()),
            Stat::make('MUKTI UTAMA [Terverifikasi]', Relawan::where('kelurahan', 'MUKTI UTAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUKTI UTAMA [Proses]', Relawan::where('kelurahan', 'MUKTI UTAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEGOY MAKMUR', Relawan::where('kelurahan', 'SEGOY MAKMUR')->count()),
            Stat::make('SEGOY MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'SEGOY MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEGOY MAKMUR [Proses]', Relawan::where('kelurahan', 'SEGOY MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIKA MAKMUR', Relawan::where('kelurahan', 'SIKA MAKMUR')->count()),
            Stat::make('SIKA MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'SIKA MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIKA MAKMUR [Proses]', Relawan::where('kelurahan', 'SIKA MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER AGUNG', Relawan::where('kelurahan', 'SUMBER AGUNG')->count()),
            Stat::make('SUMBER AGUNG [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER AGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER AGUNG [Proses]', Relawan::where('kelurahan', 'SUMBER AGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH ABANG', Relawan::where('kelurahan', 'TANAH ABANG')->count()),
            Stat::make('TANAH ABANG [Terverifikasi]', Relawan::where('kelurahan', 'TANAH ABANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH ABANG [Proses]', Relawan::where('kelurahan', 'TANAH ABANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Ancalong
            BaseWidget\Card::make('Kecamatan', 'MUARA ANCALONG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('GEMAR BARU', Relawan::where('kelurahan', 'GEMAR BARU')->count()),
            Stat::make('GEMAR BARU [Terverifikasi]', Relawan::where('kelurahan', 'GEMAR BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GEMAR BARU [Proses]', Relawan::where('kelurahan', 'GEMAR BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELINJAU ILIR', Relawan::where('kelurahan', 'KELINJAU ILIR')->count()),
            Stat::make('KELINJAU ILIR [Terverifikasi]', Relawan::where('kelurahan', 'KELINJAU ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELINJAU ILIR [Proses]', Relawan::where('kelurahan', 'KELINJAU ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELINJAU ULU', Relawan::where('kelurahan', 'KELINJAU ULU')->count()),
            Stat::make('KELINJAU ULU [Terverifikasi]', Relawan::where('kelurahan', 'KELINJAU ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELINJAU ULU [Proses]', Relawan::where('kelurahan', 'KELINJAU ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG NAH', Relawan::where('kelurahan', 'LONG NAH')->count()),
            Stat::make('LONG NAH [Terverifikasi]', Relawan::where('kelurahan', 'LONG NAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG NAH [Proses]', Relawan::where('kelurahan', 'LONG NAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG POQ BARU', Relawan::where('kelurahan', 'LONG POQ BARU')->count()),
            Stat::make('LONG POQ BARU [Terverifikasi]', Relawan::where('kelurahan', 'LONG POQ BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG POQ BARU [Proses]', Relawan::where('kelurahan', 'LONG POQ BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG TESAK', Relawan::where('kelurahan', 'LONG TESAK')->count()),
            Stat::make('LONG TESAK [Terverifikasi]', Relawan::where('kelurahan', 'LONG TESAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG TESAK [Proses]', Relawan::where('kelurahan', 'LONG TESAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA DUN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA DUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA DUN [Proses]', Relawan::where('kelurahan', 'MUARA DUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENYIUR', Relawan::where('kelurahan', 'SENYIUR')->count()),
            Stat::make('SENYIUR [Terverifikasi]', Relawan::where('kelurahan', 'SENYIUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENYIUR [Proses]', Relawan::where('kelurahan', 'SENYIUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK BARU', Relawan::where('kelurahan', 'TELUK BARU')->count()),
            Stat::make('TELUK BARU [Terverifikasi]', Relawan::where('kelurahan', 'TELUK BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK BARU [Proses]', Relawan::where('kelurahan', 'TELUK BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Bengkal
            BaseWidget\Card::make('Kecamatan', 'Muara Bengkal')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BATU BALAI', Relawan::where('kelurahan', 'BATU BALAI')->count()),
            Stat::make('BATU BALAI [Terverifikasi]', Relawan::where('kelurahan', 'BATU BALAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU BALAI [Proses]', Relawan::where('kelurahan', 'BATU BALAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENUA BARU', Relawan::where('kelurahan', 'BENUA BARU')->count()),
            Stat::make('BENUA BARU [Terverifikasi]', Relawan::where('kelurahan', 'BENUA BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUA BARU [Proses]', Relawan::where('kelurahan', 'BENUA BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BENGKAL ILIR', Relawan::where('kelurahan', 'MUARA BENGKAL ILIR')->count()),
            Stat::make('MUARA BENGKAL ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BENGKAL ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BENGKAL ILIR [Proses]', Relawan::where('kelurahan', 'MUARA BENGKAL ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BENGKAL ULU', Relawan::where('kelurahan', 'MUARA BENGKAL ULU')->count()),
            Stat::make('MUARA BENGKAL ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BENGKAL ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BENGKAL ULU [Proses]', Relawan::where('kelurahan', 'MUARA BENGKAL ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MULUPAN', Relawan::where('kelurahan', 'MULUPAN')->count()),
            Stat::make('MULUPAN [Terverifikasi]', Relawan::where('kelurahan', 'MULUPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MULUPAN [Proses]', Relawan::where('kelurahan', 'MULUPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NGAYAU', Relawan::where('kelurahan', 'NGAYAU')->count()),
            Stat::make('NGAYAU [Terverifikasi]', Relawan::where('kelurahan', 'NGAYAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NGAYAU [Proses]', Relawan::where('kelurahan', 'NGAYAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PARIANUM', Relawan::where('kelurahan', 'PARIANUM')->count()),
            Stat::make('PARIANUM [Terverifikasi]', Relawan::where('kelurahan', 'PARIANUM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PARIANUM [Proses]', Relawan::where('kelurahan', 'PARIANUM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENAMBAH', Relawan::where('kelurahan', 'SENAMBAH')->count()),
            Stat::make('SENAMBAH [Terverifikasi]', Relawan::where('kelurahan', 'SENAMBAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENAMBAH [Proses]', Relawan::where('kelurahan', 'SENAMBAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Wahau
            BaseWidget\Card::make('Kecamatan', 'Muara Wahau')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BENHES', Relawan::where('kelurahan', 'BENHES')->count()),
            Stat::make('BENHES [Terverifikasi]', Relawan::where('kelurahan', 'BENHES')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENHES [Proses]', Relawan::where('kelurahan', 'BENHES')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DABEQ', Relawan::where('kelurahan', 'DABEQ')->count()),
            Stat::make('DABEQ [Terverifikasi]', Relawan::where('kelurahan', 'DABEQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DABEQ [Proses]', Relawan::where('kelurahan', 'DABEQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DIAQ LAY', Relawan::where('kelurahan', 'DIAQ LAY')->count()),
            Stat::make('DIAQ LAY [Terverifikasi]', Relawan::where('kelurahan', 'DIAQ LAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DIAQ LAY [Proses]', Relawan::where('kelurahan', 'DIAQ LAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JABDAN', Relawan::where('kelurahan', 'JABDAN')->count()),
            Stat::make('JABDAN [Terverifikasi]', Relawan::where('kelurahan', 'JABDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JABDAN [Proses]', Relawan::where('kelurahan', 'JABDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JAK LUAY', Relawan::where('kelurahan', 'JAK LUAY')->count()),
            Stat::make('JAK LUAY [Terverifikasi]', Relawan::where('kelurahan', 'JAK LUAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAK LUAY [Proses]', Relawan::where('kelurahan', 'JAK LUAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARYA BHAKTI', Relawan::where('kelurahan', 'KARYA BHAKTI')->count()),
            Stat::make('KARYA BHAKTI [Terverifikasi]', Relawan::where('kelurahan', 'KARYA BHAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARYA BHAKTI [Proses]', Relawan::where('kelurahan', 'KARYA BHAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG WEHEA', Relawan::where('kelurahan', 'LONG WEHEA')->count()),
            Stat::make('LONG WEHEA [Terverifikasi]', Relawan::where('kelurahan', 'LONG WEHEA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG WEHEA [Proses]', Relawan::where('kelurahan', 'LONG WEHEA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA WAHAU', Relawan::where('kelurahan', 'MUARA WAHAU')->count()),
            Stat::make('MUARA WAHAU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA WAHAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA WAHAU [Proses]', Relawan::where('kelurahan', 'MUARA WAHAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NEHES LIAH BING', Relawan::where('kelurahan', 'NEHES LIAH BING')->count()),
            Stat::make('NEHES LIAH BING [Terverifikasi]', Relawan::where('kelurahan', 'NEHES LIAH BING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NEHES LIAH BING [Proses]', Relawan::where('kelurahan', 'NEHES LIAH BING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WAHAU BARU', Relawan::where('kelurahan', 'WAHAU BARU')->count()),
            Stat::make('WAHAU BARU [Terverifikasi]', Relawan::where('kelurahan', 'WAHAU BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WAHAU BARU [Proses]', Relawan::where('kelurahan', 'WAHAU BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WANASARI', Relawan::where('kelurahan', 'WANASARI')->count()),
            Stat::make('WANASARI [Terverifikasi]', Relawan::where('kelurahan', 'WANASARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WANASARI [Proses]', Relawan::where('kelurahan', 'WANASARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Rantau Pulung
            BaseWidget\Card::make('Kecamatan', 'RANTAU PULUNG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KEBON AGUNG', Relawan::where('kelurahan', 'KEBON AGUNG')->count()),
            Stat::make('KEBON AGUNG [Terverifikasi]', Relawan::where('kelurahan', 'KEBON AGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEBON AGUNG [Proses]', Relawan::where('kelurahan', 'KEBON AGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANUNGGAL JAYA', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->count()),
            Stat::make('MANUNGGAL JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUNGGAL JAYA [Proses]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGO MULYO', Relawan::where('kelurahan', 'MARGO MULYO')->count()),
            Stat::make('MARGO MULYO [Terverifikasi]', Relawan::where('kelurahan', 'MARGO MULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGO MULYO [Proses]', Relawan::where('kelurahan', 'MARGO MULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MASALAP RAYA', Relawan::where('kelurahan', 'MASALAP RAYA')->count()),
            Stat::make('MASALAP RAYA [Terverifikasi]', Relawan::where('kelurahan', 'MASALAP RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MASALAP RAYA [Proses]', Relawan::where('kelurahan', 'MASALAP RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUKTI JAYA', Relawan::where('kelurahan', 'MUKTI JAYA')->count()),
            Stat::make('MUKTI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MUKTI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUKTI JAYA [Proses]', Relawan::where('kelurahan', 'MUKTI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULUNG SARI', Relawan::where('kelurahan', 'PULUNG SARI')->count()),
            Stat::make('PULUNG SARI [Terverifikasi]', Relawan::where('kelurahan', 'PULUNG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULUNG SARI [Proses]', Relawan::where('kelurahan', 'PULUNG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU MAKMUR', Relawan::where('kelurahan', 'RANTAU MAKMUR')->count()),
            Stat::make('RANTAU MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU MAKMUR [Proses]', Relawan::where('kelurahan', 'RANTAU MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG LABU', Relawan::where('kelurahan', 'TANJUNG LABU')->count()),
            Stat::make('TANJUNG LABU [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG LABU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG LABU [Proses]', Relawan::where('kelurahan', 'TANJUNG LABU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN MAKMUR', Relawan::where('kelurahan', 'TEPIAN MAKMUR')->count()),
            Stat::make('TEPIAN MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN MAKMUR [Proses]', Relawan::where('kelurahan', 'TEPIAN MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Sandaran
            BaseWidget\Card::make('Kecamatan', 'SANDARAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MANUBAR', Relawan::where('kelurahan', 'MANUBAR')->count()),
            Stat::make('MANUBAR [Terverifikasi]', Relawan::where('kelurahan', 'MANUBAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUBAR [Proses]', Relawan::where('kelurahan', 'MANUBAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANUBAR DALAM', Relawan::where('kelurahan', 'MANUBAR DALAM')->count()),
            Stat::make('MANUBAR DALAM [Terverifikasi]', Relawan::where('kelurahan', 'MANUBAR DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUBAR DALAM [Proses]', Relawan::where('kelurahan', 'MANUBAR DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARUKANGAN', Relawan::where('kelurahan', 'MARUKANGAN')->count()),
            Stat::make('MARUKANGAN [Terverifikasi]', Relawan::where('kelurahan', 'MARUKANGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARUKANGAN [Proses]', Relawan::where('kelurahan', 'MARUKANGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANDARAN', Relawan::where('kelurahan', 'SANDARAN')->count()),
            Stat::make('SANDARAN [Terverifikasi]', Relawan::where('kelurahan', 'SANDARAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANDARAN [Proses]', Relawan::where('kelurahan', 'SANDARAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUSUK DALAM', Relawan::where('kelurahan', 'SUSUK DALAM')->count()),
            Stat::make('SUSUK DALAM [Terverifikasi]', Relawan::where('kelurahan', 'SUSUK DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUSUK DALAM [Proses]', Relawan::where('kelurahan', 'SUSUK DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUSUK LUAR', Relawan::where('kelurahan', 'SUSUK LUAR')->count()),
            Stat::make('SUSUK LUAR [Terverifikasi]', Relawan::where('kelurahan', 'SUSUK LUAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUSUK LUAR [Proses]', Relawan::where('kelurahan', 'SUSUK LUAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUSUK TENGAH', Relawan::where('kelurahan', 'SUSUK TENGAH')->count()),
            Stat::make('SUSUK TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'SUSUK TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUSUK TENGAH [Proses]', Relawan::where('kelurahan', 'SUSUK TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TADOAN', Relawan::where('kelurahan', 'TADOAN')->count()),
            Stat::make('TADOAN [Terverifikasi]', Relawan::where('kelurahan', 'TADOAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TADOAN [Proses]', Relawan::where('kelurahan', 'TADOAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG MANGKALIAT', Relawan::where('kelurahan', 'TANJUNG MANGKALIAT')->count()),
            Stat::make('TANJUNG MANGKALIAT [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG MANGKALIAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG MANGKALIAT [Proses]', Relawan::where('kelurahan', 'TANJUNG MANGKALIAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Sangatta Selatan
            BaseWidget\Card::make('Kecamatan', 'SANGATTA SELATAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SANGATTA SELATAN', Relawan::where('kelurahan', 'SANGATTA SELATAN')->count()),
            Stat::make('SANGATTA SELATAN [Terverifikasi]', Relawan::where('kelurahan', 'SANGATTA SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGATTA SELATAN [Proses]', Relawan::where('kelurahan', 'SANGATTA SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGKIMA', Relawan::where('kelurahan', 'SANGKIMA')->count()),
            Stat::make('SANGKIMA [Terverifikasi]', Relawan::where('kelurahan', 'SANGKIMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGKIMA [Proses]', Relawan::where('kelurahan', 'SANGKIMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGKIMA LAMA (TELUK SINGKAMA)', Relawan::where('kelurahan', 'SANGKIMA LAMA (TELUK SINGKAMA)')->count()),
            Stat::make('SANGKIMA LAMA (TELUK SINGKAMA) [Terverifikasi]', Relawan::where('kelurahan', 'SANGKIMA LAMA (TELUK SINGKAMA)')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGKIMA LAMA (TELUK SINGKAMA) [Proses]', Relawan::where('kelurahan', 'SANGKIMA LAMA (TELUK SINGKAMA)')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SINGA GEWEH', Relawan::where('kelurahan', 'SINGA GEWEH')->count()),
            Stat::make('SINGA GEWEH [Terverifikasi]', Relawan::where('kelurahan', 'SINGA GEWEH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SINGA GEWEH [Proses]', Relawan::where('kelurahan', 'SINGA GEWEH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Sangatta Utara
            BaseWidget\Card::make('Kecamatan', 'SANGATTA UTARA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SANGATTA UTARA', Relawan::where('kelurahan', 'SANGATTA UTARA')->count()),
            Stat::make('SANGATTA UTARA [Terverifikasi]', Relawan::where('kelurahan', 'SANGATTA UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGATTA UTARA [Proses]', Relawan::where('kelurahan', 'SANGATTA UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SINGA GEMBARA', Relawan::where('kelurahan', 'SINGA GEMBARA')->count()),
            Stat::make('SINGA GEMBARA [Terverifikasi]', Relawan::where('kelurahan', 'SINGA GEMBARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SINGA GEMBARA [Proses]', Relawan::where('kelurahan', 'SINGA GEMBARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SWARGA BARA', Relawan::where('kelurahan', 'SWARGA BARA')->count()),
            Stat::make('SWARGA BARA [Terverifikasi]', Relawan::where('kelurahan', 'SWARGA BARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SWARGA BARA [Proses]', Relawan::where('kelurahan', 'SWARGA BARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK LINGGA', Relawan::where('kelurahan', 'TELUK LINGGA')->count()),
            Stat::make('TELUK LINGGA [Terverifikasi]', Relawan::where('kelurahan', 'TELUK LINGGA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK LINGGA [Proses]', Relawan::where('kelurahan', 'TELUK LINGGA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Sangkulirang
            BaseWidget\Card::make('Kecamatan', 'SANGKULIRANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BENUA BARU ILIR', Relawan::where('kelurahan', 'BENUA BARU ILIR')->count()),
            Stat::make('BENUA BARU ILIR [Terverifikasi]', Relawan::where('kelurahan', 'BENUA BARU ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUA BARU ILIR [Proses]', Relawan::where('kelurahan', 'BENUA BARU ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENUA BARU ULU', Relawan::where('kelurahan', 'BENUA BARU ULU')->count()),
            Stat::make('BENUA BARU ULU [Terverifikasi]', Relawan::where('kelurahan', 'BENUA BARU ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUA BARU ULU [Proses]', Relawan::where('kelurahan', 'BENUA BARU ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERAYAAN', Relawan::where('kelurahan', 'KERAYAAN')->count()),
            Stat::make('KERAYAAN [Terverifikasi]', Relawan::where('kelurahan', 'KERAYAAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERAYAAN [Proses]', Relawan::where('kelurahan', 'KERAYAAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOLEK', Relawan::where('kelurahan', 'KOLEK')->count()),
            Stat::make('KOLEK [Terverifikasi]', Relawan::where('kelurahan', 'KOLEK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOLEK [Proses]', Relawan::where('kelurahan', 'KOLEK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MALOY', Relawan::where('kelurahan', 'MALOY')->count()),
            Stat::make('MALOY [Terverifikasi]', Relawan::where('kelurahan', 'MALOY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MALOY [Proses]', Relawan::where('kelurahan', 'MALOY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANDU DALAM', Relawan::where('kelurahan', 'MANDU DALAM')->count()),
            Stat::make('MANDU DALAM [Terverifikasi]', Relawan::where('kelurahan', 'MANDU DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANDU DALAM [Proses]', Relawan::where('kelurahan', 'MANDU DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANDU PANTAI SEJAHTERA', Relawan::where('kelurahan', 'MANDU PANTAI SEJAHTERA')->count()),
            Stat::make('MANDU PANTAI SEJAHTERA [Terverifikasi]', Relawan::where('kelurahan', 'MANDU PANTAI SEJAHTERA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANDU PANTAI SEJAHTERA [Proses]', Relawan::where('kelurahan', 'MANDU PANTAI SEJAHTERA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PELAWAN', Relawan::where('kelurahan', 'PELAWAN')->count()),
            Stat::make('PELAWAN [Terverifikasi]', Relawan::where('kelurahan', 'PELAWAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PELAWAN [Proses]', Relawan::where('kelurahan', 'PELAWAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERIDAN', Relawan::where('kelurahan', 'PERIDAN')->count()),
            Stat::make('PERIDAN [Terverifikasi]', Relawan::where('kelurahan', 'PERIDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERIDAN [Proses]', Relawan::where('kelurahan', 'PERIDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERUPUK', Relawan::where('kelurahan', 'PERUPUK')->count()),
            Stat::make('PERUPUK [Terverifikasi]', Relawan::where('kelurahan', 'PERUPUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERUPUK [Proses]', Relawan::where('kelurahan', 'PERUPUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU MIANG', Relawan::where('kelurahan', 'PULAU MIANG')->count()),
            Stat::make('PULAU MIANG [Terverifikasi]', Relawan::where('kelurahan', 'PULAU MIANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU MIANG [Proses]', Relawan::where('kelurahan', 'PULAU MIANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAKA', Relawan::where('kelurahan', 'SAKA')->count()),
            Stat::make('SAKA [Terverifikasi]', Relawan::where('kelurahan', 'SAKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAKA [Proses]', Relawan::where('kelurahan', 'SAKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPAYAU', Relawan::where('kelurahan', 'SEMPAYAU')->count()),
            Stat::make('SEMPAYAU [Terverifikasi]', Relawan::where('kelurahan', 'SEMPAYAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPAYAU [Proses]', Relawan::where('kelurahan', 'SEMPAYAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG MANIS', Relawan::where('kelurahan', 'TANJUNG MANIS')->count()),
            Stat::make('TANJUNG MANIS [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG MANIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG MANIS [Proses]', Relawan::where('kelurahan', 'TANJUNG MANIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN TERAP', Relawan::where('kelurahan', 'TEPIAN TERAP')->count()),
            Stat::make('TEPIAN TERAP [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN TERAP')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN TERAP [Proses]', Relawan::where('kelurahan', 'TEPIAN TERAP')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Telen
            BaseWidget\Card::make('Kecamatan', 'TELEN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('JUK AYAQ', Relawan::where('kelurahan', 'JUK AYAQ')->count()),
            Stat::make('JUK AYAQ [Terverifikasi]', Relawan::where('kelurahan', 'JUK AYAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JUK AYAQ [Proses]', Relawan::where('kelurahan', 'JUK AYAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERNYANYAN', Relawan::where('kelurahan', 'KERNYANYAN')->count()),
            Stat::make('KERNYANYAN [Terverifikasi]', Relawan::where('kelurahan', 'KERNYANYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERNYANYAN [Proses]', Relawan::where('kelurahan', 'KERNYANYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG NORAN', Relawan::where('kelurahan', 'LONG NORAN')->count()),
            Stat::make('LONG NORAN [Terverifikasi]', Relawan::where('kelurahan', 'LONG NORAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG NORAN [Proses]', Relawan::where('kelurahan', 'LONG NORAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG SEGAR', Relawan::where('kelurahan', 'LONG SEGAR')->count()),
            Stat::make('LONG SEGAR [Terverifikasi]', Relawan::where('kelurahan', 'LONG SEGAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG SEGAR [Proses]', Relawan::where('kelurahan', 'LONG SEGAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUNG MELAH', Relawan::where('kelurahan', 'LUNG MELAH')->count()),
            Stat::make('LUNG MELAH [Terverifikasi]', Relawan::where('kelurahan', 'LUNG MELAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUNG MELAH [Proses]', Relawan::where('kelurahan', 'LUNG MELAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARAH HALOQ', Relawan::where('kelurahan', 'MARAH HALOQ')->count()),
            Stat::make('MARAH HALOQ [Terverifikasi]', Relawan::where('kelurahan', 'MARAH HALOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARAH HALOQ [Proses]', Relawan::where('kelurahan', 'MARAH HALOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PANTUN', Relawan::where('kelurahan', 'MUARA PANTUN')->count()),
            Stat::make('MUARA PANTUN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PANTUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PANTUN [Proses]', Relawan::where('kelurahan', 'MUARA PANTUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU PANJANG', Relawan::where('kelurahan', 'RANTAU PANJANG')->count()),
            Stat::make('RANTAU PANJANG [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU PANJANG [Proses]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Teluk Pandan
            BaseWidget\Card::make('Kecamatan', 'TELUK PANDAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BUKIT PANDAN JAYA', Relawan::where('kelurahan', 'BUKIT PANDAN JAYA')->count()),
            Stat::make('BUKIT PANDAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT PANDAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT PANDAN JAYA [Proses]', Relawan::where('kelurahan', 'BUKIT PANDAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DANAU REDAN', Relawan::where('kelurahan', 'DANAU REDAN')->count()),
            Stat::make('DANAU REDAN [Terverifikasi]', Relawan::where('kelurahan', 'DANAU REDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DANAU REDAN [Proses]', Relawan::where('kelurahan', 'DANAU REDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KANDOLO', Relawan::where('kelurahan', 'KANDOLO')->count()),
            Stat::make('KANDOLO [Terverifikasi]', Relawan::where('kelurahan', 'KANDOLO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KANDOLO [Proses]', Relawan::where('kelurahan', 'KANDOLO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARTADINATA', Relawan::where('kelurahan', 'MARTADINATA')->count()),
            Stat::make('MARTADINATA [Terverifikasi]', Relawan::where('kelurahan', 'MARTADINATA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARTADINATA [Proses]', Relawan::where('kelurahan', 'MARTADINATA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA DAMAI', Relawan::where('kelurahan', 'SUKA DAMAI')->count()),
            Stat::make('SUKA DAMAI [Terverifikasi]', Relawan::where('kelurahan', 'SUKA DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA DAMAI [Proses]', Relawan::where('kelurahan', 'SUKA DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA RAHMAT', Relawan::where('kelurahan', 'SUKA RAHMAT')->count()),
            Stat::make('SUKA RAHMAT [Terverifikasi]', Relawan::where('kelurahan', 'SUKA RAHMAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA RAHMAT [Proses]', Relawan::where('kelurahan', 'SUKA RAHMAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK PANDAN', Relawan::where('kelurahan', 'TELUK PANDAN')->count()),
            Stat::make('TELUK PANDAN [Terverifikasi]', Relawan::where('kelurahan', 'TELUK PANDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK PANDAN [Proses]', Relawan::where('kelurahan', 'TELUK PANDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
