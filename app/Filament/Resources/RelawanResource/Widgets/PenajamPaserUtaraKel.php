<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PenajamPaserUtaraKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            BaseWidget\Card::make('Kecamatan', 'BABULU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BABULU DARAT', Relawan::where('kelurahan', 'BABULU DARAT')->count()),
            Stat::make('BABULU DARAT [Terverifikasi]', Relawan::where('kelurahan', 'BABULU DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BABULU DARAT [Proses]', Relawan::where('kelurahan', 'BABULU DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG MULIA', Relawan::where('kelurahan', 'GUNUNG MULIA')->count()),
            Stat::make('GUNUNG MULIA [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG MULIA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG MULIA [Proses]', Relawan::where('kelurahan', 'GUNUNG MULIA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABANGKA BARAT', Relawan::where('kelurahan', 'LABANGKA BARAT')->count()),
            Stat::make('LABANGKA BARAT [Terverifikasi]', Relawan::where('kelurahan', 'LABANGKA BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABANGKA BARAT [Proses]', Relawan::where('kelurahan', 'LABANGKA BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SRI RAHARJA', Relawan::where('kelurahan', 'SRI RAHARJA')->count()),
            Stat::make('SRI RAHARJA [Terverifikasi]', Relawan::where('kelurahan', 'SRI RAHARJA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SRI RAHARJA [Proses]', Relawan::where('kelurahan', 'SRI RAHARJA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABANGKA', Relawan::where('kelurahan', 'LABANGKA')->count()),
            Stat::make('LABANGKA [Terverifikasi]', Relawan::where('kelurahan', 'LABANGKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABANGKA [Proses]', Relawan::where('kelurahan', 'LABANGKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RAWA MULIA', Relawan::where('kelurahan', 'RAWA MULIA')->count()),
            Stat::make('RAWA MULIA [Terverifikasi]', Relawan::where('kelurahan', 'RAWA MULIA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RAWA MULIA [Proses]', Relawan::where('kelurahan', 'RAWA MULIA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG MAKMUR', Relawan::where('kelurahan', 'GUNUNG MAKMUR')->count()),
            Stat::make('GUNUNG MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG MAKMUR [Proses]', Relawan::where('kelurahan', 'GUNUNG MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG INTAN', Relawan::where('kelurahan', 'GUNUNG INTAN')->count()),
            Stat::make('GUNUNG INTAN [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG INTAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG INTAN [Proses]', Relawan::where('kelurahan', 'GUNUNG INTAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBAKUNG JAYA', Relawan::where('kelurahan', 'SEBAKUNG JAYA')->count()),
            Stat::make('SEBAKUNG JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SEBAKUNG JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBAKUNG JAYA [Proses]', Relawan::where('kelurahan', 'SEBAKUNG JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RINTIK', Relawan::where('kelurahan', 'RINTIK')->count()),
            Stat::make('RINTIK [Terverifikasi]', Relawan::where('kelurahan', 'RINTIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RINTIK [Proses]', Relawan::where('kelurahan', 'RINTIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BABULU LAUT', Relawan::where('kelurahan', 'BABULU LAUT')->count()),
            Stat::make('BABULU LAUT [Terverifikasi]', Relawan::where('kelurahan', 'BABULU LAUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BABULU LAUT [Proses]', Relawan::where('kelurahan', 'BABULU LAUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'PENAJAM')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('GIRI MUKTI', Relawan::where('kelurahan', 'GIRI MUKTI')->count()),
            Stat::make('GIRI MUKTI [Terverifikasi]', Relawan::where('kelurahan', 'GIRI MUKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GIRI MUKTI [Proses]', Relawan::where('kelurahan', 'GIRI MUKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOREJO', Relawan::where('kelurahan', 'SIDOREJO')->count()),
            Stat::make('SIDOREJO [Terverifikasi]', Relawan::where('kelurahan', 'SIDOREJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOREJO [Proses]', Relawan::where('kelurahan', 'SIDOREJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GIRI PURWA', Relawan::where('kelurahan', 'GIRI PURWA')->count()),
            Stat::make('GIRI PURWA [Terverifikasi]', Relawan::where('kelurahan', 'GIRI PURWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GIRI PURWA [Proses]', Relawan::where('kelurahan', 'GIRI PURWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT SUBUR', Relawan::where('kelurahan', 'BUKIT SUBUR')->count()),
            Stat::make('BUKIT SUBUR [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT SUBUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT SUBUR [Proses]', Relawan::where('kelurahan', 'BUKIT SUBUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BULUMINUNG', Relawan::where('kelurahan', 'BULUMINUNG')->count()),
            Stat::make('BULUMINUNG [Terverifikasi]', Relawan::where('kelurahan', 'BULUMINUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BULUMINUNG [Proses]', Relawan::where('kelurahan', 'BULUMINUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GERSIK', Relawan::where('kelurahan', 'GERSIK')->count()),
            Stat::make('GERSIK [Terverifikasi]', Relawan::where('kelurahan', 'GERSIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GERSIK [Proses]', Relawan::where('kelurahan', 'GERSIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SETELEN', Relawan::where('kelurahan', 'GUNUNG SETELEN')->count()),
            Stat::make('GUNUNG SETELEN [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG SETELEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SETELEN [Proses]', Relawan::where('kelurahan', 'GUNUNG SETELEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JENEBORA', Relawan::where('kelurahan', 'JENEBORA')->count()),
            Stat::make('JENEBORA [Terverifikasi]', Relawan::where('kelurahan', 'JENEBORA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JENEBORA [Proses]', Relawan::where('kelurahan', 'JENEBORA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAMPUNG BARU', Relawan::where('kelurahan', 'KAMPUNG BARU')->count()),
            Stat::make('KAMPUNG BARU [Terverifikasi]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAMPUNG BARU [Proses]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LAWE-LAWE', Relawan::where('kelurahan', 'LAWE-LAWE')->count()),
            Stat::make('LAWE-LAWE [Terverifikasi]', Relawan::where('kelurahan', 'LAWE-LAWE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAWE-LAWE [Proses]', Relawan::where('kelurahan', 'LAWE-LAWE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NENANG', Relawan::where('kelurahan', 'NENANG')->count()),
            Stat::make('NENANG [Terverifikasi]', Relawan::where('kelurahan', 'NENANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NENANG [Proses]', Relawan::where('kelurahan', 'NENANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NIPAH-NIPAH', Relawan::where('kelurahan', 'NIPAH-NIPAH')->count()),
            Stat::make('NIPAH-NIPAH [Terverifikasi]', Relawan::where('kelurahan', 'NIPAH-NIPAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NIPAH-NIPAH [Proses]', Relawan::where('kelurahan', 'NIPAH-NIPAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PANTAI LANGO', Relawan::where('kelurahan', 'PANTAI LANGO')->count()),
            Stat::make('PANTAI LANGO [Terverifikasi]', Relawan::where('kelurahan', 'PANTAI LANGO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANTAI LANGO [Proses]', Relawan::where('kelurahan', 'PANTAI LANGO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEJALA', Relawan::where('kelurahan', 'PEJALA')->count()),
            Stat::make('PEJALA [Terverifikasi]', Relawan::where('kelurahan', 'PEJALA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEJALA [Proses]', Relawan::where('kelurahan', 'PEJALA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENAJAM', Relawan::where('kelurahan', 'PENAJAM')->count()),
            Stat::make('PENAJAM [Terverifikasi]', Relawan::where('kelurahan', 'PENAJAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENAJAM [Proses]', Relawan::where('kelurahan', 'PENAJAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PETUNG', Relawan::where('kelurahan', 'PETUNG')->count()),
            Stat::make('PETUNG [Terverifikasi]', Relawan::where('kelurahan', 'PETUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PETUNG [Proses]', Relawan::where('kelurahan', 'PETUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RIKO', Relawan::where('kelurahan', 'RIKO')->count()),
            Stat::make('RIKO [Terverifikasi]', Relawan::where('kelurahan', 'RIKO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RIKO [Proses]', Relawan::where('kelurahan', 'RIKO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALO LOANG', Relawan::where('kelurahan', 'SALO LOANG')->count()),
            Stat::make('SALO LOANG [Terverifikasi]', Relawan::where('kelurahan', 'SALO LOANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALO LOANG [Proses]', Relawan::where('kelurahan', 'SALO LOANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPAN', Relawan::where('kelurahan', 'SEPAN')->count()),
            Stat::make('SEPAN [Terverifikasi]', Relawan::where('kelurahan', 'SEPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPAN [Proses]', Relawan::where('kelurahan', 'SEPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SESUMPU', Relawan::where('kelurahan', 'SESUMPU')->count()),
            Stat::make('SESUMPU [Terverifikasi]', Relawan::where('kelurahan', 'SESUMPU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SESUMPU [Proses]', Relawan::where('kelurahan', 'SESUMPU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SOTEK', Relawan::where('kelurahan', 'SOTEK')->count()),
            Stat::make('SOTEK [Terverifikasi]', Relawan::where('kelurahan', 'SOTEK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SOTEK [Proses]', Relawan::where('kelurahan', 'SOTEK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI PARIT', Relawan::where('kelurahan', 'SUNGAI PARIT')->count()),
            Stat::make('SUNGAI PARIT [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI PARIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI PARIT [Proses]', Relawan::where('kelurahan', 'SUNGAI PARIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG TENGAH', Relawan::where('kelurahan', 'TANJUNG TENGAH')->count()),
            Stat::make('TANJUNG TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG TENGAH [Proses]', Relawan::where('kelurahan', 'TANJUNG TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SEPAKU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('SUKA RAJA', Relawan::where('kelurahan', 'SUKA RAJA')->count()),
            Stat::make('SUKA RAJA [Terverifikasi]', Relawan::where('kelurahan', 'SUKA RAJA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA RAJA [Proses]', Relawan::where('kelurahan', 'SUKA RAJA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMOI DUA', Relawan::where('kelurahan', 'SEMOI DUA')->count()),
            Stat::make('SEMOI DUA [Terverifikasi]', Relawan::where('kelurahan', 'SEMOI DUA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMOI DUA [Proses]', Relawan::where('kelurahan', 'SEMOI DUA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TENGIN BARU', Relawan::where('kelurahan', 'TENGIN BARU')->count()),
            Stat::make('TENGIN BARU [Terverifikasi]', Relawan::where('kelurahan', 'TENGIN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TENGIN BARU [Proses]', Relawan::where('kelurahan', 'TENGIN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ARGO MULYO', Relawan::where('kelurahan', 'ARGO MULYO')->count()),
            Stat::make('ARGO MULYO [Terverifikasi]', Relawan::where('kelurahan', 'ARGO MULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ARGO MULYO [Proses]', Relawan::where('kelurahan', 'ARGO MULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKO MULYO', Relawan::where('kelurahan', 'SUKO MULYO')->count()),
            Stat::make('SUKO MULYO [Terverifikasi]', Relawan::where('kelurahan', 'SUKO MULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKO MULYO [Proses]', Relawan::where('kelurahan', 'SUKO MULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELEMOW', Relawan::where('kelurahan', 'TELEMOW')->count()),
            Stat::make('TELEMOW [Terverifikasi]', Relawan::where('kelurahan', 'TELEMOW')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELEMOW [Proses]', Relawan::where('kelurahan', 'TELEMOW')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT RAYA', Relawan::where('kelurahan', 'BUKIT RAYA')->count()),
            Stat::make('BUKIT RAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT RAYA [Proses]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WONO SARI', Relawan::where('kelurahan', 'WONO SARI')->count()),
            Stat::make('WONO SARI [Terverifikasi]', Relawan::where('kelurahan', 'WONO SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WONO SARI [Proses]', Relawan::where('kelurahan', 'WONO SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BINUANG', Relawan::where('kelurahan', 'BINUANG')->count()),
            Stat::make('BINUANG [Terverifikasi]', Relawan::where('kelurahan', 'BINUANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BINUANG [Proses]', Relawan::where('kelurahan', 'BINUANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI HARAPAN', Relawan::where('kelurahan', 'BUMI HARAPAN')->count()),
            Stat::make('BUMI HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'BUMI HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI HARAPAN [Proses]', Relawan::where('kelurahan', 'BUMI HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG JINAWI', Relawan::where('kelurahan', 'KARANG JINAWI')->count()),
            Stat::make('KARANG JINAWI [Terverifikasi]', Relawan::where('kelurahan', 'KARANG JINAWI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG JINAWI [Proses]', Relawan::where('kelurahan', 'KARANG JINAWI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARIDAN', Relawan::where('kelurahan', 'MARIDAN')->count()),
            Stat::make('MARIDAN [Terverifikasi]', Relawan::where('kelurahan', 'MARIDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARIDAN [Proses]', Relawan::where('kelurahan', 'MARIDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENTAWIR', Relawan::where('kelurahan', 'MENTAWIR')->count()),
            Stat::make('MENTAWIR [Terverifikasi]', Relawan::where('kelurahan', 'MENTAWIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENTAWIR [Proses]', Relawan::where('kelurahan', 'MENTAWIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEMALUAN', Relawan::where('kelurahan', 'PEMALUAN')->count()),
            Stat::make('PEMALUAN [Terverifikasi]', Relawan::where('kelurahan', 'PEMALUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEMALUAN [Proses]', Relawan::where('kelurahan', 'PEMALUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPAKU', Relawan::where('kelurahan', 'SEPAKU')->count()),
            Stat::make('SEPAKU [Terverifikasi]', Relawan::where('kelurahan', 'SEPAKU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPAKU [Proses]', Relawan::where('kelurahan', 'SEPAKU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'WARU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('BANGUN MULYA', Relawan::where('kelurahan', 'BANGUN MULYA')->count()),
            Stat::make('BANGUN MULYA [Terverifikasi]', Relawan::where('kelurahan', 'BANGUN MULYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANGUN MULYA [Proses]', Relawan::where('kelurahan', 'BANGUN MULYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SESULU', Relawan::where('kelurahan', 'SESULU')->count()),
            Stat::make('SESULU [Terverifikasi]', Relawan::where('kelurahan', 'SESULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SESULU [Proses]', Relawan::where('kelurahan', 'SESULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('API-API', Relawan::where('kelurahan', 'API-API')->count()),
            Stat::make('API-API [Terverifikasi]', Relawan::where('kelurahan', 'API-API')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('API-API [Proses]', Relawan::where('kelurahan', 'API-API')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WARU', Relawan::where('kelurahan', 'WARU')->count()),
            Stat::make('WARU [Terverifikasi]', Relawan::where('kelurahan', 'WARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WARU [Proses]', Relawan::where('kelurahan', 'WARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
