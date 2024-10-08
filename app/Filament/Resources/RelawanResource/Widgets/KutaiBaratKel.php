<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiBaratKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Barong Tongkok
            BaseWidget\Card::make('Kecamatan', 'BARONG TONGKOK')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JUAQ ASA', Relawan::where('kelurahan', 'JUAQ ASA')->count()),
            Stat::make('JUAQ ASA [Terverifikasi]', Relawan::where('kelurahan', 'JUAQ ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JUAQ ASA [Proses]', Relawan::where('kelurahan', 'JUAQ ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('REJO BASUKI', Relawan::where('kelurahan', 'REJO BASUKI')->count()),
            Stat::make('REJO BASUKI [Terverifikasi]', Relawan::where('kelurahan', 'REJO BASUKI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('REJO BASUKI [Proses]', Relawan::where('kelurahan', 'REJO BASUKI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NGENYAN ASA', Relawan::where('kelurahan', 'NGENYAN ASA')->count()),
            Stat::make('NGENYAN ASA [Terverifikasi]', Relawan::where('kelurahan', 'NGENYAN ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NGENYAN ASA [Proses]', Relawan::where('kelurahan', 'NGENYAN ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENDAWAR', Relawan::where('kelurahan', 'SENDAWAR')->count()),
            Stat::make('SENDAWAR [Terverifikasi]', Relawan::where('kelurahan', 'SENDAWAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENDAWAR [Proses]', Relawan::where('kelurahan', 'SENDAWAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GEMUHAN ASA', Relawan::where('kelurahan', 'GEMUHAN ASA')->count()),
            Stat::make('GEMUHAN ASA [Terverifikasi]', Relawan::where('kelurahan', 'GEMUHAN ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GEMUHAN ASA [Proses]', Relawan::where('kelurahan', 'GEMUHAN ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GELEO ASA', Relawan::where('kelurahan', 'GELEO ASA')->count()),
            Stat::make('GELEO ASA [Terverifikasi]', Relawan::where('kelurahan', 'GELEO ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GELEO ASA [Proses]', Relawan::where('kelurahan', 'GELEO ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEPES ASA', Relawan::where('kelurahan', 'PEPES ASA')->count()),
            Stat::make('PEPES ASA [Terverifikasi]', Relawan::where('kelurahan', 'PEPES ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEPES ASA [Proses]', Relawan::where('kelurahan', 'PEPES ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JUHAN ASA', Relawan::where('kelurahan', 'JUHAN ASA')->count()),
            Stat::make('JUHAN ASA [Terverifikasi]', Relawan::where('kelurahan', 'JUHAN ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JUHAN ASA [Proses]', Relawan::where('kelurahan', 'JUHAN ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GELEO BARU', Relawan::where('kelurahan', 'GELEO BARU')->count()),
            Stat::make('GELEO BARU [Terverifikasi]', Relawan::where('kelurahan', 'GELEO BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GELEO BARU [Proses]', Relawan::where('kelurahan', 'GELEO BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ASA', Relawan::where('kelurahan', 'MUARA ASA')->count()),
            Stat::make('MUARA ASA [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ASA [Proses]', Relawan::where('kelurahan', 'MUARA ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('OMBAU ASA', Relawan::where('kelurahan', 'OMBAU ASA')->count()),
            Stat::make('OMBAU ASA [Terverifikasi]', Relawan::where('kelurahan', 'OMBAU ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('OMBAU ASA [Proses]', Relawan::where('kelurahan', 'OMBAU ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENCIMAI', Relawan::where('kelurahan', 'MENCIMAI')->count()),
            Stat::make('MENCIMAI [Terverifikasi]', Relawan::where('kelurahan', 'MENCIMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENCIMAI [Proses]', Relawan::where('kelurahan', 'MENCIMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BALOK ASA', Relawan::where('kelurahan', 'BALOK ASA')->count()),
            Stat::make('BALOK ASA [Terverifikasi]', Relawan::where('kelurahan', 'BALOK ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BALOK ASA [Proses]', Relawan::where('kelurahan', 'BALOK ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ASA', Relawan::where('kelurahan', 'ASA')->count()),
            Stat::make('ASA [Terverifikasi]', Relawan::where('kelurahan', 'ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ASA [Proses]', Relawan::where('kelurahan', 'ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEPAS EHENG', Relawan::where('kelurahan', 'PEPAS EHENG')->count()),
            Stat::make('PEPAS EHENG [Terverifikasi]', Relawan::where('kelurahan', 'PEPAS EHENG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEPAS EHENG [Proses]', Relawan::where('kelurahan', 'PEPAS EHENG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BELEMPUNG ULAQ', Relawan::where('kelurahan', 'BELEMPUNG ULAQ')->count()),
            Stat::make('BELEMPUNG ULAQ [Terverifikasi]', Relawan::where('kelurahan', 'BELEMPUNG ULAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BELEMPUNG ULAQ [Proses]', Relawan::where('kelurahan', 'BELEMPUNG ULAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ENGKUNI PASEK', Relawan::where('kelurahan', 'ENGKUNI PASEK')->count()),
            Stat::make('ENGKUNI PASEK [Terverifikasi]', Relawan::where('kelurahan', 'ENGKUNI PASEK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ENGKUNI PASEK [Proses]', Relawan::where('kelurahan', 'ENGKUNI PASEK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ONGKO ASA', Relawan::where('kelurahan', 'ONGKO ASA')->count()),
            Stat::make('ONGKO ASA [Terverifikasi]', Relawan::where('kelurahan', 'ONGKO ASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ONGKO ASA [Proses]', Relawan::where('kelurahan', 'ONGKO ASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Bentian Besar
            BaseWidget\Card::make('Kecamatan', 'BENTIAN BESAR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('DILANG PUTI', Relawan::where('kelurahan', 'DILANG PUTI')->count()),
            Stat::make('DILANG PUTI [Terverifikasi]', Relawan::where('kelurahan', 'DILANG PUTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DILANG PUTI [Proses]', Relawan::where('kelurahan', 'DILANG PUTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUKUQ', Relawan::where('kelurahan', 'TUKUQ')->count()),
            Stat::make('TUKUQ [Terverifikasi]', Relawan::where('kelurahan', 'TUKUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUKUQ [Proses]', Relawan::where('kelurahan', 'TUKUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUAKONG', Relawan::where('kelurahan', 'SUAKONG')->count()),
            Stat::make('SUAKONG [Terverifikasi]', Relawan::where('kelurahan', 'SUAKONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUAKONG [Proses]', Relawan::where('kelurahan', 'SUAKONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENARUNG', Relawan::where('kelurahan', 'PENARUNG')->count()),
            Stat::make('PENARUNG [Terverifikasi]', Relawan::where('kelurahan', 'PENARUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENARUNG [Proses]', Relawan::where('kelurahan', 'PENARUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBUNG', Relawan::where('kelurahan', 'SAMBUNG')->count()),
            Stat::make('SAMBUNG [Terverifikasi]', Relawan::where('kelurahan', 'SAMBUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBUNG [Proses]', Relawan::where('kelurahan', 'SAMBUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TENDE', Relawan::where('kelurahan', 'TENDE')->count()),
            Stat::make('TENDE [Terverifikasi]', Relawan::where('kelurahan', 'TENDE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TENDE [Proses]', Relawan::where('kelurahan', 'TENDE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JELMU SIBAK', Relawan::where('kelurahan', 'JELMU SIBAK')->count()),
            Stat::make('JELMU SIBAK [Terverifikasi]', Relawan::where('kelurahan', 'JELMU SIBAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JELMU SIBAK [Proses]', Relawan::where('kelurahan', 'JELMU SIBAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANDA EMPAS', Relawan::where('kelurahan', 'RANDA EMPAS')->count()),
            Stat::make('RANDA EMPAS [Terverifikasi]', Relawan::where('kelurahan', 'RANDA EMPAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANDA EMPAS [Proses]', Relawan::where('kelurahan', 'RANDA EMPAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ANAN JAYA', Relawan::where('kelurahan', 'ANAN JAYA')->count()),
            Stat::make('ANAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'ANAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ANAN JAYA [Proses]', Relawan::where('kelurahan', 'ANAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Bongan
            BaseWidget\Card::make('Kecamatan', 'BONGAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('PENAWAI', Relawan::where('kelurahan', 'PENAWAI')->count()),
            Stat::make('PENAWAI [Terverifikasi]', Relawan::where('kelurahan', 'PENAWAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENAWAI [Proses]', Relawan::where('kelurahan', 'PENAWAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KEDANG', Relawan::where('kelurahan', 'MUARA KEDANG')->count()),
            Stat::make('MUARA KEDANG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KEDANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KEDANG [Proses]', Relawan::where('kelurahan', 'MUARA KEDANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JAMBUK MAKMUR', Relawan::where('kelurahan', 'JAMBUK MAKMUR')->count()),
            Stat::make('JAMBUK MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'JAMBUK MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAMBUK MAKMUR [Proses]', Relawan::where('kelurahan', 'JAMBUK MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA GUSIK', Relawan::where('kelurahan', 'MUARA GUSIK')->count()),
            Stat::make('MUARA GUSIK [Terverifikasi]', Relawan::where('kelurahan', 'MUARA GUSIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA GUSIK [Proses]', Relawan::where('kelurahan', 'MUARA GUSIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JAMBUK', Relawan::where('kelurahan', 'JAMBUK')->count()),
            Stat::make('JAMBUK [Terverifikasi]', Relawan::where('kelurahan', 'JAMBUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAMBUK [Proses]', Relawan::where('kelurahan', 'JAMBUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG SARI', Relawan::where('kelurahan', 'TANJUNG SARI')->count()),
            Stat::make('TANJUNG SARI [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG SARI [Proses]', Relawan::where('kelurahan', 'TANJUNG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT HARAPAN', Relawan::where('kelurahan', 'BUKIT HARAPAN')->count()),
            Stat::make('BUKIT HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT HARAPAN [Proses]', Relawan::where('kelurahan', 'BUKIT HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RESAK', Relawan::where('kelurahan', 'RESAK')->count()),
            Stat::make('RESAK [Terverifikasi]', Relawan::where('kelurahan', 'RESAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RESAK [Proses]', Relawan::where('kelurahan', 'RESAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIRAM JAYA', Relawan::where('kelurahan', 'SIRAM JAYA')->count()),
            Stat::make('SIRAM JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SIRAM JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIRAM JAYA [Proses]', Relawan::where('kelurahan', 'SIRAM JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIRAM MAKMUR', Relawan::where('kelurahan', 'SIRAM MAKMUR')->count()),
            Stat::make('SIRAM MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'SIRAM MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIRAM MAKMUR [Proses]', Relawan::where('kelurahan', 'SIRAM MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG SOKE', Relawan::where('kelurahan', 'TANJUNG SOKE')->count()),
            Stat::make('TANJUNG SOKE [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG SOKE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG SOKE [Proses]', Relawan::where('kelurahan', 'TANJUNG SOKE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERENG TALIQ', Relawan::where('kelurahan', 'PERENG TALIQ')->count()),
            Stat::make('PERENG TALIQ [Terverifikasi]', Relawan::where('kelurahan', 'PERENG TALIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERENG TALIQ [Proses]', Relawan::where('kelurahan', 'PERENG TALIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA SIRAM', Relawan::where('kelurahan', 'MUARA SIRAM')->count()),
            Stat::make('MUARA SIRAM [Terverifikasi]', Relawan::where('kelurahan', 'MUARA SIRAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA SIRAM [Proses]', Relawan::where('kelurahan', 'MUARA SIRAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEMPER', Relawan::where('kelurahan', 'LEMPER')->count()),
            Stat::make('LEMPER [Terverifikasi]', Relawan::where('kelurahan', 'LEMPER')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEMPER [Proses]', Relawan::where('kelurahan', 'LEMPER')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DERAYA', Relawan::where('kelurahan', 'DERAYA')->count()),
            Stat::make('DERAYA [Terverifikasi]', Relawan::where('kelurahan', 'DERAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DERAYA [Proses]', Relawan::where('kelurahan', 'DERAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GERUNGUNG', Relawan::where('kelurahan', 'GERUNGUNG')->count()),
            Stat::make('GERUNGUNG [Terverifikasi]', Relawan::where('kelurahan', 'GERUNGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GERUNGUNG [Proses]', Relawan::where('kelurahan', 'GERUNGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Damai
            BaseWidget\Card::make('Kecamatan', 'DAMAI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('JENGANG DANUM', Relawan::where('kelurahan', 'JENGANG DANUM')->count()),
            Stat::make('JENGANG DANUM [Terverifikasi]', Relawan::where('kelurahan', 'JENGANG DANUM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JENGANG DANUM [Proses]', Relawan::where('kelurahan', 'JENGANG DANUM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KEAY', Relawan::where('kelurahan', 'KEAY')->count()),
            Stat::make('KEAY [Terverifikasi]', Relawan::where('kelurahan', 'KEAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEAY [Proses]', Relawan::where('kelurahan', 'KEAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DAMAI KOTA', Relawan::where('kelurahan', 'DAMAI KOTA')->count()),
            Stat::make('DAMAI KOTA [Terverifikasi]', Relawan::where('kelurahan', 'DAMAI KOTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMAI KOTA [Proses]', Relawan::where('kelurahan', 'DAMAI KOTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDIKA', Relawan::where('kelurahan', 'MENDIKA')->count()),
            Stat::make('MENDIKA [Terverifikasi]', Relawan::where('kelurahan', 'MENDIKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENDIKA [Proses]', Relawan::where('kelurahan', 'MENDIKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BOMBOY', Relawan::where('kelurahan', 'MUARA BOMBOY')->count()),
            Stat::make('MUARA BOMBOY [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BOMBOY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BOMBOY [Proses]', Relawan::where('kelurahan', 'MUARA BOMBOY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENUNG', Relawan::where('kelurahan', 'BENUNG')->count()),
            Stat::make('BENUNG [Terverifikasi]', Relawan::where('kelurahan', 'BENUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUNG [Proses]', Relawan::where('kelurahan', 'BENUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAPULANG', Relawan::where('kelurahan', 'TAPULANG')->count()),
            Stat::make('TAPULANG [Terverifikasi]', Relawan::where('kelurahan', 'TAPULANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAPULANG [Proses]', Relawan::where('kelurahan', 'TAPULANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DAMAI SEBERANG', Relawan::where('kelurahan', 'DAMAI SEBERANG')->count()),
            Stat::make('DAMAI SEBERANG [Terverifikasi]', Relawan::where('kelurahan', 'DAMAI SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMAI SEBERANG [Proses]', Relawan::where('kelurahan', 'DAMAI SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPATN', Relawan::where('kelurahan', 'SEMPATN')->count()),
            Stat::make('SEMPATN [Terverifikasi]', Relawan::where('kelurahan', 'SEMPATN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPATN [Proses]', Relawan::where('kelurahan', 'SEMPATN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANTAR', Relawan::where('kelurahan', 'MANTAR')->count()),
            Stat::make('MANTAR [Terverifikasi]', Relawan::where('kelurahan', 'MANTAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANTAR [Proses]', Relawan::where('kelurahan', 'MANTAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA NYAHING', Relawan::where('kelurahan', 'MUARA NYAHING')->count()),
            Stat::make('MUARA NYAHING [Terverifikasi]', Relawan::where('kelurahan', 'MUARA NYAHING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA NYAHING [Proses]', Relawan::where('kelurahan', 'MUARA NYAHING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA NILIQ', Relawan::where('kelurahan', 'MUARA NILIQ')->count()),
            Stat::make('MUARA NILIQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA NILIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA NILIQ [Proses]', Relawan::where('kelurahan', 'MUARA NILIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TOKONG', Relawan::where('kelurahan', 'MUARA TOKONG')->count()),
            Stat::make('MUARA TOKONG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TOKONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TOKONG [Proses]', Relawan::where('kelurahan', 'MUARA TOKONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BESIQ', Relawan::where('kelurahan', 'BESIQ')->count()),
            Stat::make('BESIQ [Terverifikasi]', Relawan::where('kelurahan', 'BESIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BESIQ [Proses]', Relawan::where('kelurahan', 'BESIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUMPAT DAHUQ', Relawan::where('kelurahan', 'LUMPAT DAHUQ')->count()),
            Stat::make('LUMPAT DAHUQ [Terverifikasi]', Relawan::where('kelurahan', 'LUMPAT DAHUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUMPAT DAHUQ [Proses]', Relawan::where('kelurahan', 'LUMPAT DAHUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELIAN', Relawan::where('kelurahan', 'KELIAN')->count()),
            Stat::make('KELIAN [Terverifikasi]', Relawan::where('kelurahan', 'KELIAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELIAN [Proses]', Relawan::where('kelurahan', 'KELIAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BERMAI', Relawan::where('kelurahan', 'BERMAI')->count()),
            Stat::make('BERMAI [Terverifikasi]', Relawan::where('kelurahan', 'BERMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BERMAI [Proses]', Relawan::where('kelurahan', 'BERMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Jempang
            BaseWidget\Card::make('Kecamatan', 'JEMPANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TANJUNG ISUY', Relawan::where('kelurahan', 'TANJUNG ISUY')->count()),
            Stat::make('TANJUNG ISUY [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG ISUY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG ISUY [Proses]', Relawan::where('kelurahan', 'TANJUNG ISUY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TAE', Relawan::where('kelurahan', 'MUARA TAE')->count()),
            Stat::make('MUARA TAE [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TAE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TAE [Proses]', Relawan::where('kelurahan', 'MUARA TAE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU LANTING', Relawan::where('kelurahan', 'PULAU LANTING')->count()),
            Stat::make('PULAU LANTING [Terverifikasi]', Relawan::where('kelurahan', 'PULAU LANTING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU LANTING [Proses]', Relawan::where('kelurahan', 'PULAU LANTING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG JAN', Relawan::where('kelurahan', 'TANJUNG JAN')->count()),
            Stat::make('TANJUNG JAN [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG JAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG JAN [Proses]', Relawan::where('kelurahan', 'TANJUNG JAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BEKOKONG MAKMUR', Relawan::where('kelurahan', 'BEKOKONG MAKMUR')->count()),
            Stat::make('BEKOKONG MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'BEKOKONG MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BEKOKONG MAKMUR [Proses]', Relawan::where('kelurahan', 'BEKOKONG MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANCONG', Relawan::where('kelurahan', 'MANCONG')->count()),
            Stat::make('MANCONG [Terverifikasi]', Relawan::where('kelurahan', 'MANCONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANCONG [Proses]', Relawan::where('kelurahan', 'MANCONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA NAYAN', Relawan::where('kelurahan', 'MUARA NAYAN')->count()),
            Stat::make('MUARA NAYAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA NAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA NAYAN [Proses]', Relawan::where('kelurahan', 'MUARA NAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG JONE', Relawan::where('kelurahan', 'TANJUNG JONE')->count()),
            Stat::make('TANJUNG JONE [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG JONE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG JONE [Proses]', Relawan::where('kelurahan', 'TANJUNG JONE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA OHONG', Relawan::where('kelurahan', 'MUARA OHONG')->count()),
            Stat::make('MUARA OHONG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA OHONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA OHONG [Proses]', Relawan::where('kelurahan', 'MUARA OHONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENTAT', Relawan::where('kelurahan', 'PENTAT')->count()),
            Stat::make('PENTAT [Terverifikasi]', Relawan::where('kelurahan', 'PENTAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENTAT [Proses]', Relawan::where('kelurahan', 'PENTAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEMBONAH', Relawan::where('kelurahan', 'LEMBONAH')->count()),
            Stat::make('LEMBONAH [Terverifikasi]', Relawan::where('kelurahan', 'LEMBONAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEMBONAH [Proses]', Relawan::where('kelurahan', 'LEMBONAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERIGIQ', Relawan::where('kelurahan', 'PERIGIQ')->count()),
            Stat::make('PERIGIQ [Terverifikasi]', Relawan::where('kelurahan', 'PERIGIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERIGIQ [Proses]', Relawan::where('kelurahan', 'PERIGIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Linggang Bigung
            BaseWidget\Card::make('Kecamatan', 'LINGGANG BIGUNG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LINGGANG BIGUNG', Relawan::where('kelurahan', 'LINGGANG BIGUNG')->count()),
            Stat::make('LINGGANG BIGUNG [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG BIGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG BIGUNG [Proses]', Relawan::where('kelurahan', 'LINGGANG BIGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MELAPEH', Relawan::where('kelurahan', 'LINGGANG MELAPEH')->count()),
            Stat::make('LINGGANG MELAPEH [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MELAPEH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MELAPEH [Proses]', Relawan::where('kelurahan', 'LINGGANG MELAPEH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MAPAN', Relawan::where('kelurahan', 'LINGGANG MAPAN')->count()),
            Stat::make('LINGGANG MAPAN [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MAPAN [Proses]', Relawan::where('kelurahan', 'LINGGANG MAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG BANGUNSARI', Relawan::where('kelurahan', 'LINGGANG BANGUNSARI')->count()),
            Stat::make('LINGGANG BANGUNSARI [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG BANGUNSARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG BANGUNSARI [Proses]', Relawan::where('kelurahan', 'LINGGANG BANGUNSARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG PURWODADI', Relawan::where('kelurahan', 'LINGGANG PURWODADI')->count()),
            Stat::make('LINGGANG PURWODADI [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG PURWODADI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG PURWODADI [Proses]', Relawan::where('kelurahan', 'LINGGANG PURWODADI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MENCELEW', Relawan::where('kelurahan', 'LINGGANG MENCELEW')->count()),
            Stat::make('LINGGANG MENCELEW [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MENCELEW')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MENCELEW [Proses]', Relawan::where('kelurahan', 'LINGGANG MENCELEW')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG KEBUT', Relawan::where('kelurahan', 'LINGGANG KEBUT')->count()),
            Stat::make('LINGGANG KEBUT [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG KEBUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG KEBUT [Proses]', Relawan::where('kelurahan', 'LINGGANG KEBUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MELAPEH BARU', Relawan::where('kelurahan', 'LINGGANG MELAPEH BARU')->count()),
            Stat::make('LINGGANG MELAPEH BARU [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MELAPEH BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MELAPEH BARU [Proses]', Relawan::where('kelurahan', 'LINGGANG MELAPEH BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG BIGUNG BARU', Relawan::where('kelurahan', 'LINGGANG BIGUNG BARU')->count()),
            Stat::make('LINGGANG BIGUNG BARU [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG BIGUNG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG BIGUNG BARU [Proses]', Relawan::where('kelurahan', 'LINGGANG BIGUNG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG AMER', Relawan::where('kelurahan', 'LINGGANG AMER')->count()),
            Stat::make('LINGGANG AMER [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG AMER')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG AMER [Proses]', Relawan::where('kelurahan', 'LINGGANG AMER')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG TUTUNG', Relawan::where('kelurahan', 'LINGGANG TUTUNG')->count()),
            Stat::make('LINGGANG TUTUNG [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG TUTUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG TUTUNG [Proses]', Relawan::where('kelurahan', 'LINGGANG TUTUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Iram
            BaseWidget\Card::make('Kecamatan', 'LONG IRAM')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LONG IRAM KOTA', Relawan::where('kelurahan', 'LONG IRAM KOTA')->count()),
            Stat::make('LONG IRAM KOTA [Terverifikasi]', Relawan::where('kelurahan', 'LONG IRAM KOTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG IRAM KOTA [Proses]', Relawan::where('kelurahan', 'LONG IRAM KOTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKOMULYO', Relawan::where('kelurahan', 'SUKOMULYO')->count()),
            Stat::make('SUKOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SUKOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKOMULYO [Proses]', Relawan::where('kelurahan', 'SUKOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG IRAM SEBERANG', Relawan::where('kelurahan', 'LONG IRAM SEBERANG')->count()),
            Stat::make('LONG IRAM SEBERANG [Terverifikasi]', Relawan::where('kelurahan', 'LONG IRAM SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG IRAM SEBERANG [Proses]', Relawan::where('kelurahan', 'LONG IRAM SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG IRAM BAYAN', Relawan::where('kelurahan', 'LONG IRAM BAYAN')->count()),
            Stat::make('LONG IRAM BAYAN [Terverifikasi]', Relawan::where('kelurahan', 'LONG IRAM BAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG IRAM BAYAN [Proses]', Relawan::where('kelurahan', 'LONG IRAM BAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ANAH', Relawan::where('kelurahan', 'ANAH')->count()),
            Stat::make('ANAH [Terverifikasi]', Relawan::where('kelurahan', 'ANAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ANAH [Proses]', Relawan::where('kelurahan', 'ANAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG IRAM ILIR', Relawan::where('kelurahan', 'LONG IRAM ILIR')->count()),
            Stat::make('LONG IRAM ILIR [Terverifikasi]', Relawan::where('kelurahan', 'LONG IRAM ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG IRAM ILIR [Proses]', Relawan::where('kelurahan', 'LONG IRAM ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELIWAI', Relawan::where('kelurahan', 'KELIWAI')->count()),
            Stat::make('KELIWAI [Terverifikasi]', Relawan::where('kelurahan', 'KELIWAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELIWAI [Proses]', Relawan::where('kelurahan', 'KELIWAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MUARA LEBAN', Relawan::where('kelurahan', 'LINGGANG MUARA LEBAN')->count()),
            Stat::make('LINGGANG MUARA LEBAN [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MUARA LEBAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MUARA LEBAN [Proses]', Relawan::where('kelurahan', 'LINGGANG MUARA LEBAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELIAN LUAR', Relawan::where('kelurahan', 'KELIAN LUAR')->count()),
            Stat::make('KELIAN LUAR [Terverifikasi]', Relawan::where('kelurahan', 'KELIAN LUAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELIAN LUAR [Proses]', Relawan::where('kelurahan', 'KELIAN LUAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UJOH HALANG', Relawan::where('kelurahan', 'UJOH HALANG')->count()),
            Stat::make('UJOH HALANG [Terverifikasi]', Relawan::where('kelurahan', 'UJOH HALANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UJOH HALANG [Proses]', Relawan::where('kelurahan', 'UJOH HALANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG DALIQ', Relawan::where('kelurahan', 'LONG DALIQ')->count()),
            Stat::make('LONG DALIQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG DALIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG DALIQ [Proses]', Relawan::where('kelurahan', 'LONG DALIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Melak
            BaseWidget\Card::make('Kecamatan', 'MELAK')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('EMPAKUQ', Relawan::where('kelurahan', 'EMPAKUQ')->count()),
            Stat::make('EMPAKUQ [Terverifikasi]', Relawan::where('kelurahan', 'EMPAKUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('EMPAKUQ [Proses]', Relawan::where('kelurahan', 'EMPAKUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BENANGAQ', Relawan::where('kelurahan', 'MUARA BENANGAQ')->count()),
            Stat::make('MUARA BENANGAQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BENANGAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BENANGAQ [Proses]', Relawan::where('kelurahan', 'MUARA BENANGAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BUNYUT', Relawan::where('kelurahan', 'MUARA BUNYUT')->count()),
            Stat::make('MUARA BUNYUT [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BUNYUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BUNYUT [Proses]', Relawan::where('kelurahan', 'MUARA BUNYUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('EMPAS', Relawan::where('kelurahan', 'EMPAS')->count()),
            Stat::make('EMPAS [Terverifikasi]', Relawan::where('kelurahan', 'EMPAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('EMPAS [Proses]', Relawan::where('kelurahan', 'EMPAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MELAK ILIR', Relawan::where('kelurahan', 'MELAK ILIR')->count()),
            Stat::make('MELAK ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MELAK ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELAK ILIR [Proses]', Relawan::where('kelurahan', 'MELAK ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MELAK ULU', Relawan::where('kelurahan', 'MELAK ULU')->count()),
            Stat::make('MELAK ULU [Terverifikasi]', Relawan::where('kelurahan', 'MELAK ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELAK ULU [Proses]', Relawan::where('kelurahan', 'MELAK ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Mook Manaar Bulatn
            BaseWidget\Card::make('Kecamatan', 'MOOK MANAAR BULATN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KARANGAN', Relawan::where('kelurahan', 'KARANGAN')->count()),
            Stat::make('KARANGAN [Terverifikasi]', Relawan::where('kelurahan', 'KARANGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANGAN [Proses]', Relawan::where('kelurahan', 'KARANGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG RAMPAH', Relawan::where('kelurahan', 'GUNUNG RAMPAH')->count()),
            Stat::make('GUNUNG RAMPAH [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG RAMPAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG RAMPAH [Proses]', Relawan::where('kelurahan', 'GUNUNG RAMPAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELUMPANG', Relawan::where('kelurahan', 'KELUMPANG')->count()),
            Stat::make('KELUMPANG [Terverifikasi]', Relawan::where('kelurahan', 'KELUMPANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELUMPANG [Proses]', Relawan::where('kelurahan', 'KELUMPANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAKAQ TADA', Relawan::where('kelurahan', 'SAKAQ TADA')->count()),
            Stat::make('SAKAQ TADA [Terverifikasi]', Relawan::where('kelurahan', 'SAKAQ TADA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAKAQ TADA [Proses]', Relawan::where('kelurahan', 'SAKAQ TADA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GEMURUH', Relawan::where('kelurahan', 'GEMURUH')->count()),
            Stat::make('GEMURUH [Terverifikasi]', Relawan::where('kelurahan', 'GEMURUH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GEMURUH [Proses]', Relawan::where('kelurahan', 'GEMURUH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MARIMUN', Relawan::where('kelurahan', 'LINGGANG MARIMUN')->count()),
            Stat::make('LINGGANG MARIMUN [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MARIMUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MARIMUN [Proses]', Relawan::where('kelurahan', 'LINGGANG MARIMUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JENGAN', Relawan::where('kelurahan', 'JENGAN')->count()),
            Stat::make('JENGAN [Terverifikasi]', Relawan::where('kelurahan', 'JENGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JENGAN [Proses]', Relawan::where('kelurahan', 'JENGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KALAQ', Relawan::where('kelurahan', 'MUARA KALAQ')->count()),
            Stat::make('MUARA KALAQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KALAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KALAQ [Proses]', Relawan::where('kelurahan', 'MUARA KALAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAKAQ LOTOQ', Relawan::where('kelurahan', 'SAKAQ LOTOQ')->count()),
            Stat::make('SAKAQ LOTOQ [Terverifikasi]', Relawan::where('kelurahan', 'SAKAQ LOTOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAKAQ LOTOQ [Proses]', Relawan::where('kelurahan', 'SAKAQ LOTOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GADUR', Relawan::where('kelurahan', 'GADUR')->count()),
            Stat::make('GADUR [Terverifikasi]', Relawan::where('kelurahan', 'GADUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GADUR [Proses]', Relawan::where('kelurahan', 'GADUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ABIT', Relawan::where('kelurahan', 'ABIT')->count()),
            Stat::make('ABIT [Terverifikasi]', Relawan::where('kelurahan', 'ABIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ABIT [Proses]', Relawan::where('kelurahan', 'ABIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA JAWAQ', Relawan::where('kelurahan', 'MUARA JAWAQ')->count()),
            Stat::make('MUARA JAWAQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA JAWAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA JAWAQ [Proses]', Relawan::where('kelurahan', 'MUARA JAWAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LINGGANG MUARA BATUQ', Relawan::where('kelurahan', 'LINGGANG MUARA BATUQ')->count()),
            Stat::make('LINGGANG MUARA BATUQ [Terverifikasi]', Relawan::where('kelurahan', 'LINGGANG MUARA BATUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LINGGANG MUARA BATUQ [Proses]', Relawan::where('kelurahan', 'LINGGANG MUARA BATUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TONDOH', Relawan::where('kelurahan', 'TONDOH')->count()),
            Stat::make('TONDOH [Terverifikasi]', Relawan::where('kelurahan', 'TONDOH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TONDOH [Proses]', Relawan::where('kelurahan', 'TONDOH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('REMBAYAN', Relawan::where('kelurahan', 'REMBAYAN')->count()),
            Stat::make('REMBAYAN [Terverifikasi]', Relawan::where('kelurahan', 'REMBAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('REMBAYAN [Proses]', Relawan::where('kelurahan', 'REMBAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MERAYAQ', Relawan::where('kelurahan', 'MERAYAQ')->count()),
            Stat::make('MERAYAQ [Terverifikasi]', Relawan::where('kelurahan', 'MERAYAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERAYAQ [Proses]', Relawan::where('kelurahan', 'MERAYAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Lawa
            BaseWidget\Card::make('Kecamatan', 'MUARA LAWA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MUARA LAWA', Relawan::where('kelurahan', 'MUARA LAWA')->count()),
            Stat::make('MUARA LAWA [Terverifikasi]', Relawan::where('kelurahan', 'MUARA LAWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA LAWA [Proses]', Relawan::where('kelurahan', 'MUARA LAWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CEMPEDES', Relawan::where('kelurahan', 'CEMPEDES')->count()),
            Stat::make('CEMPEDES [Terverifikasi]', Relawan::where('kelurahan', 'CEMPEDES')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CEMPEDES [Proses]', Relawan::where('kelurahan', 'CEMPEDES')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LAMBING', Relawan::where('kelurahan', 'LAMBING')->count()),
            Stat::make('LAMBING [Terverifikasi]', Relawan::where('kelurahan', 'LAMBING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAMBING [Proses]', Relawan::where('kelurahan', 'LAMBING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PAYANG', Relawan::where('kelurahan', 'PAYANG')->count()),
            Stat::make('PAYANG [Terverifikasi]', Relawan::where('kelurahan', 'PAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PAYANG [Proses]', Relawan::where('kelurahan', 'PAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DINGIN', Relawan::where('kelurahan', 'DINGIN')->count()),
            Stat::make('DINGIN [Terverifikasi]', Relawan::where('kelurahan', 'DINGIN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DINGIN [Proses]', Relawan::where('kelurahan', 'DINGIN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENGGERIS', Relawan::where('kelurahan', 'BENGGERIS')->count()),
            Stat::make('BENGGERIS [Terverifikasi]', Relawan::where('kelurahan', 'BENGGERIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENGGERIS [Proses]', Relawan::where('kelurahan', 'BENGGERIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOTAQ', Relawan::where('kelurahan', 'LOTAQ')->count()),
            Stat::make('LOTAQ [Terverifikasi]', Relawan::where('kelurahan', 'LOTAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOTAQ [Proses]', Relawan::where('kelurahan', 'LOTAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BEGAI', Relawan::where('kelurahan', 'MUARA BEGAI')->count()),
            Stat::make('MUARA BEGAI [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BEGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BEGAI [Proses]', Relawan::where('kelurahan', 'MUARA BEGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Pahu
            BaseWidget\Card::make('Kecamatan', 'MAURA PAHU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TANJUNG LAONG', Relawan::where('kelurahan', 'TANJUNG LAONG')->count()),
            Stat::make('TANJUNG LAONG [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG LAONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG LAONG [Proses]', Relawan::where('kelurahan', 'TANJUNG LAONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BAROH', Relawan::where('kelurahan', 'MUARA BAROH')->count()),
            Stat::make('MUARA BAROH [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BAROH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BAROH [Proses]', Relawan::where('kelurahan', 'MUARA BAROH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK TEMPUDAU', Relawan::where('kelurahan', 'TELUK TEMPUDAU')->count()),
            Stat::make('TELUK TEMPUDAU [Terverifikasi]', Relawan::where('kelurahan', 'TELUK TEMPUDAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK TEMPUDAU [Proses]', Relawan::where('kelurahan', 'TELUK TEMPUDAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN ULAQ', Relawan::where('kelurahan', 'TEPIAN ULAQ')->count()),
            Stat::make('TEPIAN ULAQ [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN ULAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN ULAQ [Proses]', Relawan::where('kelurahan', 'TEPIAN ULAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBELANG', Relawan::where('kelurahan', 'SEBELANG')->count()),
            Stat::make('SEBELANG [Terverifikasi]', Relawan::where('kelurahan', 'SEBELANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBELANG [Proses]', Relawan::where('kelurahan', 'SEBELANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG PAGAR', Relawan::where('kelurahan', 'TANJUNG PAGAR')->count()),
            Stat::make('TANJUNG PAGAR [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG PAGAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG PAGAR [Proses]', Relawan::where('kelurahan', 'TANJUNG PAGAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JERANG MELAYU', Relawan::where('kelurahan', 'JERANG MELAYU')->count()),
            Stat::make('JERANG MELAYU [Terverifikasi]', Relawan::where('kelurahan', 'JERANG MELAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JERANG MELAYU [Proses]', Relawan::where('kelurahan', 'JERANG MELAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BELOAN', Relawan::where('kelurahan', 'MUARA BELOAN')->count()),
            Stat::make('MUARA BELOAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BELOAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BELOAN [Proses]', Relawan::where('kelurahan', 'MUARA BELOAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG BAYAN', Relawan::where('kelurahan', 'GUNUNG BAYAN')->count()),
            Stat::make('GUNUNG BAYAN [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG BAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG BAYAN [Proses]', Relawan::where('kelurahan', 'GUNUNG BAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DASAQ', Relawan::where('kelurahan', 'DASAQ')->count()),
            Stat::make('DASAQ [Terverifikasi]', Relawan::where('kelurahan', 'DASAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DASAQ [Proses]', Relawan::where('kelurahan', 'DASAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDUNG', Relawan::where('kelurahan', 'MENDUNG')->count()),
            Stat::make('MENDUNG [Terverifikasi]', Relawan::where('kelurahan', 'MENDUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENDUNG [Proses]', Relawan::where('kelurahan', 'MENDUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JERANG DAYAK', Relawan::where('kelurahan', 'JERANG DAYAK')->count()),
            Stat::make('JERANG DAYAK [Terverifikasi]', Relawan::where('kelurahan', 'JERANG DAYAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JERANG DAYAK [Proses]', Relawan::where('kelurahan', 'JERANG DAYAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Nyuatan
            BaseWidget\Card::make('Kecamatan', 'NYUATAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TERAJUK', Relawan::where('kelurahan', 'TERAJUK')->count()),
            Stat::make('TERAJUK [Terverifikasi]', Relawan::where('kelurahan', 'TERAJUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERAJUK [Proses]', Relawan::where('kelurahan', 'TERAJUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DEMPAR', Relawan::where('kelurahan', 'DEMPAR')->count()),
            Stat::make('DEMPAR [Terverifikasi]', Relawan::where('kelurahan', 'DEMPAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DEMPAR [Proses]', Relawan::where('kelurahan', 'DEMPAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMBUAN', Relawan::where('kelurahan', 'SEMBUAN')->count()),
            Stat::make('SEMBUAN [Terverifikasi]', Relawan::where('kelurahan', 'SEMBUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMBUAN [Proses]', Relawan::where('kelurahan', 'SEMBUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEMULA', Relawan::where('kelurahan', 'TEMULA')->count()),
            Stat::make('TEMULA [Terverifikasi]', Relawan::where('kelurahan', 'TEMULA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEMULA [Proses]', Relawan::where('kelurahan', 'TEMULA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MU\'UT', Relawan::where('kelurahan', 'MU\'UT')->count()),
            Stat::make('MU\'UT [Terverifikasi]', Relawan::where('kelurahan', 'MU\'UT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MU\'UT [Proses]', Relawan::where('kelurahan', 'MU\'UT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('AWAI', Relawan::where('kelurahan', 'AWAI')->count()),
            Stat::make('AWAI [Terverifikasi]', Relawan::where('kelurahan', 'AWAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AWAI [Proses]', Relawan::where('kelurahan', 'AWAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('INTU LINGAU', Relawan::where('kelurahan', 'INTU LINGAU')->count()),
            Stat::make('INTU LINGAU [Terverifikasi]', Relawan::where('kelurahan', 'INTU LINGAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('INTU LINGAU [Proses]', Relawan::where('kelurahan', 'INTU LINGAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JONTAI', Relawan::where('kelurahan', 'JONTAI')->count()),
            Stat::make('JONTAI [Terverifikasi]', Relawan::where('kelurahan', 'JONTAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JONTAI [Proses]', Relawan::where('kelurahan', 'JONTAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LAKAN BILEM', Relawan::where('kelurahan', 'LAKAN BILEM')->count()),
            Stat::make('LAKAN BILEM [Terverifikasi]', Relawan::where('kelurahan', 'LAKAN BILEM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAKAN BILEM [Proses]', Relawan::where('kelurahan', 'LAKAN BILEM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENTALAR', Relawan::where('kelurahan', 'SENTALAR')->count()),
            Stat::make('SENTALAR [Terverifikasi]', Relawan::where('kelurahan', 'SENTALAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENTALAR [Proses]', Relawan::where('kelurahan', 'SENTALAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENYINGGAHAN ULU', Relawan::where('kelurahan', 'PENYINGGAHAN ULU')->count()),
            Stat::make('PENYINGGAHAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'PENYINGGAHAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENYINGGAHAN ULU [Proses]', Relawan::where('kelurahan', 'PENYINGGAHAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA DERAS', Relawan::where('kelurahan', 'LOA DERAS')->count()),
            Stat::make('LOA DERAS [Terverifikasi]', Relawan::where('kelurahan', 'LOA DERAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA DERAS [Proses]', Relawan::where('kelurahan', 'LOA DERAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENYINGGAHAN ILIR', Relawan::where('kelurahan', 'PENYINGGAHAN ILIR')->count()),
            Stat::make('PENYINGGAHAN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'PENYINGGAHAN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENYINGGAHAN ILIR [Proses]', Relawan::where('kelurahan', 'PENYINGGAHAN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG HAUR', Relawan::where('kelurahan', 'TANJUNG HAUR')->count()),
            Stat::make('TANJUNG HAUR [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG HAUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG HAUR [Proses]', Relawan::where('kelurahan', 'TANJUNG HAUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MINTA', Relawan::where('kelurahan', 'MINTA')->count()),
            Stat::make('MINTA [Terverifikasi]', Relawan::where('kelurahan', 'MINTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MINTA [Proses]', Relawan::where('kelurahan', 'MINTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BAKUNG', Relawan::where('kelurahan', 'BAKUNG')->count()),
            Stat::make('BAKUNG [Terverifikasi]', Relawan::where('kelurahan', 'BAKUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BAKUNG [Proses]', Relawan::where('kelurahan', 'BAKUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Sekolaq Darat
            BaseWidget\Card::make('Kecamatan', 'SEKOLAQ DARAT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SEKOLAQ DARAT', Relawan::where('kelurahan', 'SEKOLAQ DARAT')->count()),
            Stat::make('SEKOLAQ DARAT [Terverifikasi]', Relawan::where('kelurahan', 'SEKOLAQ DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKOLAQ DARAT [Proses]', Relawan::where('kelurahan', 'SEKOLAQ DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER BANGUN', Relawan::where('kelurahan', 'SUMBER BANGUN')->count()),
            Stat::make('SUMBER BANGUN [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER BANGUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER BANGUN [Proses]', Relawan::where('kelurahan', 'SUMBER BANGUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKOLAQ JOLEQ', Relawan::where('kelurahan', 'SEKOLAQ JOLEQ')->count()),
            Stat::make('SEKOLAQ JOLEQ [Terverifikasi]', Relawan::where('kelurahan', 'SEKOLAQ JOLEQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKOLAQ JOLEQ [Proses]', Relawan::where('kelurahan', 'SEKOLAQ JOLEQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER REJO', Relawan::where('kelurahan', 'SUMBER REJO')->count()),
            Stat::make('SUMBER REJO [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER REJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER REJO [Proses]', Relawan::where('kelurahan', 'SUMBER REJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SRIMULYO', Relawan::where('kelurahan', 'SRIMULYO')->count()),
            Stat::make('SRIMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SRIMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SRIMULYO [Proses]', Relawan::where('kelurahan', 'SRIMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKOLAQ ODAY', Relawan::where('kelurahan', 'SEKOLAQ ODAY')->count()),
            Stat::make('SEKOLAQ ODAY [Terverifikasi]', Relawan::where('kelurahan', 'SEKOLAQ ODAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKOLAQ ODAY [Proses]', Relawan::where('kelurahan', 'SEKOLAQ ODAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LELENG', Relawan::where('kelurahan', 'LELENG')->count()),
            Stat::make('LELENG [Terverifikasi]', Relawan::where('kelurahan', 'LELENG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LELENG [Proses]', Relawan::where('kelurahan', 'LELENG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKOLAQ MULIAQ', Relawan::where('kelurahan', 'SEKOLAQ MULIAQ')->count()),
            Stat::make('SEKOLAQ MULIAQ [Terverifikasi]', Relawan::where('kelurahan', 'SEKOLAQ MULIAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKOLAQ MULIAQ [Proses]', Relawan::where('kelurahan', 'SEKOLAQ MULIAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Siluq Ngurai
            BaseWidget\Card::make('Kecamatan', 'SILUQ NGURAI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MUHUR', Relawan::where('kelurahan', 'MUHUR')->count()),
            Stat::make('MUHUR [Terverifikasi]', Relawan::where('kelurahan', 'MUHUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUHUR [Proses]', Relawan::where('kelurahan', 'MUHUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANG-SANG', Relawan::where('kelurahan', 'SANG-SANG')->count()),
            Stat::make('SANG-SANG [Terverifikasi]', Relawan::where('kelurahan', 'SANG-SANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANG-SANG [Proses]', Relawan::where('kelurahan', 'SANG-SANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KELAWIT', Relawan::where('kelurahan', 'MUARA KELAWIT')->count()),
            Stat::make('MUARA KELAWIT [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KELAWIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KELAWIT [Proses]', Relawan::where('kelurahan', 'MUARA KELAWIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEBISAQ', Relawan::where('kelurahan', 'TEBISAQ')->count()),
            Stat::make('TEBISAQ [Terverifikasi]', Relawan::where('kelurahan', 'TEBISAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEBISAQ [Proses]', Relawan::where('kelurahan', 'TEBISAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KALIQ', Relawan::where('kelurahan', 'KALIQ')->count()),
            Stat::make('KALIQ [Terverifikasi]', Relawan::where('kelurahan', 'KALIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KALIQ [Proses]', Relawan::where('kelurahan', 'KALIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH MEA', Relawan::where('kelurahan', 'TANAH MEA')->count()),
            Stat::make('TANAH MEA [Terverifikasi]', Relawan::where('kelurahan', 'TANAH MEA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH MEA [Proses]', Relawan::where('kelurahan', 'TANAH MEA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LENDIAN LIANG NAYUQ', Relawan::where('kelurahan', 'LENDIAN LIANG NAYUQ')->count()),
            Stat::make('LENDIAN LIANG NAYUQ [Terverifikasi]', Relawan::where('kelurahan', 'LENDIAN LIANG NAYUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LENDIAN LIANG NAYUQ [Proses]', Relawan::where('kelurahan', 'LENDIAN LIANG NAYUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENTAS', Relawan::where('kelurahan', 'BENTAS')->count()),
            Stat::make('BENTAS [Terverifikasi]', Relawan::where('kelurahan', 'BENTAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENTAS [Proses]', Relawan::where('kelurahan', 'BENTAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RIKONG', Relawan::where('kelurahan', 'RIKONG')->count()),
            Stat::make('RIKONG [Terverifikasi]', Relawan::where('kelurahan', 'RIKONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RIKONG [Proses]', Relawan::where('kelurahan', 'RIKONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PONAQ', Relawan::where('kelurahan', 'MUARA PONAQ')->count()),
            Stat::make('MUARA PONAQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PONAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PONAQ [Proses]', Relawan::where('kelurahan', 'MUARA PONAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KENDISIQ', Relawan::where('kelurahan', 'KENDISIQ')->count()),
            Stat::make('KENDISIQ [Terverifikasi]', Relawan::where('kelurahan', 'KENDISIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KENDISIQ [Proses]', Relawan::where('kelurahan', 'KENDISIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENAWANG', Relawan::where('kelurahan', 'PENAWANG')->count()),
            Stat::make('PENAWANG [Terverifikasi]', Relawan::where('kelurahan', 'PENAWANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENAWANG [Proses]', Relawan::where('kelurahan', 'PENAWANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KIAQ', Relawan::where('kelurahan', 'KIAQ')->count()),
            Stat::make('KIAQ [Terverifikasi]', Relawan::where('kelurahan', 'KIAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KIAQ [Proses]', Relawan::where('kelurahan', 'KIAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KENYANYAN', Relawan::where('kelurahan', 'KENYANYAN')->count()),
            Stat::make('KENYANYAN [Terverifikasi]', Relawan::where('kelurahan', 'KENYANYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KENYANYAN [Proses]', Relawan::where('kelurahan', 'KENYANYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TENDIQ', Relawan::where('kelurahan', 'TENDIQ')->count()),
            Stat::make('TENDIQ [Terverifikasi]', Relawan::where('kelurahan', 'TENDIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TENDIQ [Proses]', Relawan::where('kelurahan', 'TENDIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BETUNG', Relawan::where('kelurahan', 'BETUNG')->count()),
            Stat::make('BETUNG [Terverifikasi]', Relawan::where('kelurahan', 'BETUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BETUNG [Proses]', Relawan::where('kelurahan', 'BETUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Tering
            BaseWidget\Card::make('Kecamatan', 'TERING')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TERING SEBERANG', Relawan::where('kelurahan', 'TERING SEBERANG')->count()),
            Stat::make('TERING SEBERANG [Terverifikasi]', Relawan::where('kelurahan', 'TERING SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERING SEBERANG [Proses]', Relawan::where('kelurahan', 'TERING SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PURWOREJO', Relawan::where('kelurahan', 'PURWOREJO')->count()),
            Stat::make('PURWOREJO [Terverifikasi]', Relawan::where('kelurahan', 'PURWOREJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PURWOREJO [Proses]', Relawan::where('kelurahan', 'PURWOREJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUYUB AKET', Relawan::where('kelurahan', 'MUYUB AKET')->count()),
            Stat::make('MUYUB AKET [Terverifikasi]', Relawan::where('kelurahan', 'MUYUB AKET')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUYUB AKET [Proses]', Relawan::where('kelurahan', 'MUYUB AKET')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA MUJAN', Relawan::where('kelurahan', 'MUARA MUJAN')->count()),
            Stat::make('MUARA MUJAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA MUJAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA MUJAN [Proses]', Relawan::where('kelurahan', 'MUARA MUJAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TERING LAMA ULU', Relawan::where('kelurahan', 'TERING LAMA ULU')->count()),
            Stat::make('TERING LAMA ULU [Terverifikasi]', Relawan::where('kelurahan', 'TERING LAMA ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERING LAMA ULU [Proses]', Relawan::where('kelurahan', 'TERING LAMA ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BANJAREJO', Relawan::where('kelurahan', 'BANJAREJO')->count()),
            Stat::make('BANJAREJO [Terverifikasi]', Relawan::where('kelurahan', 'BANJAREJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANJAREJO [Proses]', Relawan::where('kelurahan', 'BANJAREJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TERING LAMA', Relawan::where('kelurahan', 'TERING LAMA')->count()),
            Stat::make('TERING LAMA [Terverifikasi]', Relawan::where('kelurahan', 'TERING LAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERING LAMA [Proses]', Relawan::where('kelurahan', 'TERING LAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELUBAQ', Relawan::where('kelurahan', 'KELUBAQ')->count()),
            Stat::make('KELUBAQ [Terverifikasi]', Relawan::where('kelurahan', 'KELUBAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELUBAQ [Proses]', Relawan::where('kelurahan', 'KELUBAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TERING BARU', Relawan::where('kelurahan', 'TERING BARU')->count()),
            Stat::make('TERING BARU [Terverifikasi]', Relawan::where('kelurahan', 'TERING BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERING BARU [Proses]', Relawan::where('kelurahan', 'TERING BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELIAN DALAM', Relawan::where('kelurahan', 'KELIAN DALAM')->count()),
            Stat::make('KELIAN DALAM [Terverifikasi]', Relawan::where('kelurahan', 'KELIAN DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELIAN DALAM [Proses]', Relawan::where('kelurahan', 'KELIAN DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JELEMUQ', Relawan::where('kelurahan', 'JELEMUQ')->count()),
            Stat::make('JELEMUQ [Terverifikasi]', Relawan::where('kelurahan', 'JELEMUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JELEMUQ [Proses]', Relawan::where('kelurahan', 'JELEMUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GABUNG BARU', Relawan::where('kelurahan', 'GABUNG BARU')->count()),
            Stat::make('GABUNG BARU [Terverifikasi]', Relawan::where('kelurahan', 'GABUNG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GABUNG BARU [Proses]', Relawan::where('kelurahan', 'GABUNG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUYUB ULU', Relawan::where('kelurahan', 'MUYUB ULU')->count()),
            Stat::make('MUYUB ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUYUB ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUYUB ULU [Proses]', Relawan::where('kelurahan', 'MUYUB ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUKUL', Relawan::where('kelurahan', 'TUKUL')->count()),
            Stat::make('TUKUL [Terverifikasi]', Relawan::where('kelurahan', 'TUKUL')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUKUL [Proses]', Relawan::where('kelurahan', 'TUKUL')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUYUB ILIR', Relawan::where('kelurahan', 'MUYUB ILIR')->count()),
            Stat::make('MUYUB ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUYUB ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUYUB ILIR [Proses]', Relawan::where('kelurahan', 'MUYUB ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
