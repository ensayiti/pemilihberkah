<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BerauKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Batu Putih
            BaseWidget\Card::make('Kecamatan', 'BATU PUTIH')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BATU PUTIH', Relawan::where('kelurahan', 'BATU PUTIH')->count()),
            Stat::make('BATU PUTIH [Terverifikasi]', Relawan::where('kelurahan', 'BATU PUTIH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU PUTIH [Proses]', Relawan::where('kelurahan', 'BATU PUTIH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEMBUDAN', Relawan::where('kelurahan', 'TEMBUDAN')->count()),
            Stat::make('TEMBUDAN [Terverifikasi]', Relawan::where('kelurahan', 'TEMBUDAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEMBUDAN [Proses]', Relawan::where('kelurahan', 'TEMBUDAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER AGUNG', Relawan::where('kelurahan', 'SUMBER AGUNG')->count()),
            Stat::make('SUMBER AGUNG [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER AGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER AGUNG [Proses]', Relawan::where('kelurahan', 'SUMBER AGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BALIKUKUP', Relawan::where('kelurahan', 'BALIKUKUP')->count()),
            Stat::make('BALIKUKUP [Terverifikasi]', Relawan::where('kelurahan', 'BALIKUKUP')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BALIKUKUP [Proses]', Relawan::where('kelurahan', 'BALIKUKUP')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOBANG KELATAK', Relawan::where('kelurahan', 'LOBANG KELATAK')->count()),
            Stat::make('LOBANG KELATAK [Terverifikasi]', Relawan::where('kelurahan', 'LOBANG KELATAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOBANG KELATAK [Proses]', Relawan::where('kelurahan', 'LOBANG KELATAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('AMPEN MEDANG', Relawan::where('kelurahan', 'AMPEN MEDANG')->count()),
            Stat::make('AMPEN MEDANG [Terverifikasi]', Relawan::where('kelurahan', 'AMPEN MEDANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AMPEN MEDANG [Proses]', Relawan::where('kelurahan', 'AMPEN MEDANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAYU INDAH', Relawan::where('kelurahan', 'KAYU INDAH')->count()),
            Stat::make('KAYU INDAH [Terverifikasi]', Relawan::where('kelurahan', 'KAYU INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAYU INDAH [Proses]', Relawan::where('kelurahan', 'KAYU INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Biatan
            BaseWidget\Card::make('Kecamatan', 'BIATAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BIATAN LEMPAKE', Relawan::where('kelurahan', 'BIATAN LEMPAKE')->count()),
            Stat::make('BIATAN LEMPAKE [Terverifikasi]', Relawan::where('kelurahan', 'BIATAN LEMPAKE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIATAN LEMPAKE [Proses]', Relawan::where('kelurahan', 'BIATAN LEMPAKE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIATAN ILIR', Relawan::where('kelurahan', 'BIATAN ILIR')->count()),
            Stat::make('BIATAN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'BIATAN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIATAN ILIR [Proses]', Relawan::where('kelurahan', 'BIATAN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIATAN BAPINANG', Relawan::where('kelurahan', 'BIATAN BAPINANG')->count()),
            Stat::make('BIATAN BAPINANG [Terverifikasi]', Relawan::where('kelurahan', 'BIATAN BAPINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIATAN BAPINANG [Proses]', Relawan::where('kelurahan', 'BIATAN BAPINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIATAN BARU', Relawan::where('kelurahan', 'BIATAN BARU')->count()),
            Stat::make('BIATAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'BIATAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIATAN BARU [Proses]', Relawan::where('kelurahan', 'BIATAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANGAN', Relawan::where('kelurahan', 'KARANGAN')->count()),
            Stat::make('KARANGAN [Terverifikasi]', Relawan::where('kelurahan', 'KARANGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANGAN [Proses]', Relawan::where('kelurahan', 'KARANGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANUNGGAL JAYA', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->count()),
            Stat::make('MANUNGGAL JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUNGGAL JAYA [Proses]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT MAKMUR JAYA', Relawan::where('kelurahan', 'BUKIT MAKMUR JAYA')->count()),
            Stat::make('BUKIT MAKMUR JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT MAKMUR JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT MAKMUR JAYA [Proses]', Relawan::where('kelurahan', 'BUKIT MAKMUR JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIATAN ULU', Relawan::where('kelurahan', 'BIATAN ULU')->count()),
            Stat::make('BIATAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'BIATAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIATAN ULU [Proses]', Relawan::where('kelurahan', 'BIATAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Biduk-Biduk
            BaseWidget\Card::make('Kecamatan', 'BIDUK-BIDUK')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BIDUK-BIDUK', Relawan::where('kelurahan', 'BIDUK-BIDUK')->count()),
            Stat::make('BIDUK-BIDUK [Terverifikasi]', Relawan::where('kelurahan', 'BIDUK-BIDUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIDUK-BIDUK [Proses]', Relawan::where('kelurahan', 'BIDUK-BIDUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK SULAIMAN', Relawan::where('kelurahan', 'TELUK SULAIMAN')->count()),
            Stat::make('TELUK SULAIMAN [Terverifikasi]', Relawan::where('kelurahan', 'TELUK SULAIMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK SULAIMAN [Proses]', Relawan::where('kelurahan', 'TELUK SULAIMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG PREPAT', Relawan::where('kelurahan', 'TANJUNG PREPAT')->count()),
            Stat::make('TANJUNG PREPAT [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG PREPAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG PREPAT [Proses]', Relawan::where('kelurahan', 'TANJUNG PREPAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GIRING-GIRING', Relawan::where('kelurahan', 'GIRING-GIRING')->count()),
            Stat::make('GIRING-GIRING [Terverifikasi]', Relawan::where('kelurahan', 'GIRING-GIRING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GIRING-GIRING [Proses]', Relawan::where('kelurahan', 'GIRING-GIRING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK SUMBANG', Relawan::where('kelurahan', 'TELUK SUMBANG')->count()),
            Stat::make('TELUK SUMBANG [Terverifikasi]', Relawan::where('kelurahan', 'TELUK SUMBANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK SUMBANG [Proses]', Relawan::where('kelurahan', 'TELUK SUMBANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PANTAI HARAPAN', Relawan::where('kelurahan', 'PANTAI HARAPAN')->count()),
            Stat::make('PANTAI HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'PANTAI HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANTAI HARAPAN [Proses]', Relawan::where('kelurahan', 'PANTAI HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Gunung Tabur
            BaseWidget\Card::make('Kecamatan', 'GUNUNG TABUR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TASUK', Relawan::where('kelurahan', 'TASUK')->count()),
            Stat::make('TASUK [Terverifikasi]', Relawan::where('kelurahan', 'TASUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TASUK [Proses]', Relawan::where('kelurahan', 'TASUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MALUANG', Relawan::where('kelurahan', 'MALUANG')->count()),
            Stat::make('MALUANG [Terverifikasi]', Relawan::where('kelurahan', 'MALUANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MALUANG [Proses]', Relawan::where('kelurahan', 'MALUANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MERANCANG', Relawan::where('kelurahan', 'MERANCANG')->count()),
            Stat::make('MERANCANG ULU [Terverifikasi]', Relawan::where('kelurahan', 'MERANCANG ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERANCANG ULU [Proses]', Relawan::where('kelurahan', 'MERANCANG ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBAKUNGAN', Relawan::where('kelurahan', 'SAMBAKUNGAN')->count()),
            Stat::make('SAMBAKUNGAN [Terverifikasi]', Relawan::where('kelurahan', 'SAMBAKUNGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBAKUNGAN [Proses]', Relawan::where('kelurahan', 'SAMBAKUNGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU-BATU', Relawan::where('kelurahan', 'BATU-BATU')->count()),
            Stat::make('BATU-BATU [Terverifikasi]', Relawan::where('kelurahan', 'BATU-BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU-BATU [Proses]', Relawan::where('kelurahan', 'BATU-BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MERANCANG ILIR', Relawan::where('kelurahan', 'MERANCANG ILIR')->count()),
            Stat::make('MERANCANG ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MERANCANG ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERANCANG ILIR [Proses]', Relawan::where('kelurahan', 'MERANCANG ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBURAKAT', Relawan::where('kelurahan', 'SAMBURAKAT')->count()),
            Stat::make('SAMBURAKAT [Terverifikasi]', Relawan::where('kelurahan', 'SAMBURAKAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBURAKAT [Proses]', Relawan::where('kelurahan', 'SAMBURAKAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIRANG', Relawan::where('kelurahan', 'BIRANG')->count()),
            Stat::make('BIRANG [Terverifikasi]', Relawan::where('kelurahan', 'BIRANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIRANG [Proses]', Relawan::where('kelurahan', 'BIRANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MELATI JAYA', Relawan::where('kelurahan', 'MELATI JAYA')->count()),
            Stat::make('MELATI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MELATI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELATI JAYA [Proses]', Relawan::where('kelurahan', 'MELATI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU BESING', Relawan::where('kelurahan', 'PULAU BESING')->count()),
            Stat::make('PULAU BESING [Terverifikasi]', Relawan::where('kelurahan', 'PULAU BESING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU BESING [Proses]', Relawan::where('kelurahan', 'PULAU BESING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kelay
            BaseWidget\Card::make('Kecamatan', 'KELAY')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MERAPUN', Relawan::where('kelurahan', 'MERAPUN')->count()),
            Stat::make('MERAPUN [Terverifikasi]', Relawan::where('kelurahan', 'MERAPUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERAPUN [Proses]', Relawan::where('kelurahan', 'MERAPUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MERABU', Relawan::where('kelurahan', 'MERABU')->count()),
            Stat::make('MERABU [Terverifikasi]', Relawan::where('kelurahan', 'MERABU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERABU [Proses]', Relawan::where('kelurahan', 'MERABU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDO BANGEN', Relawan::where('kelurahan', 'SIDO BANGEN')->count()),
            Stat::make('SIDO BANGEN [Terverifikasi]', Relawan::where('kelurahan', 'SIDO BANGEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDO BANGEN [Proses]', Relawan::where('kelurahan', 'SIDO BANGEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG BELIU', Relawan::where('kelurahan', 'LONG BELIU')->count()),
            Stat::make('LONG BELIU [Terverifikasi]', Relawan::where('kelurahan', 'LONG BELIU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BELIU [Proses]', Relawan::where('kelurahan', 'LONG BELIU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MERASA', Relawan::where('kelurahan', 'MERASA')->count()),
            Stat::make('MERASA [Terverifikasi]', Relawan::where('kelurahan', 'MERASA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MERASA [Proses]', Relawan::where('kelurahan', 'MERASA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA LESAN', Relawan::where('kelurahan', 'MUARA LESAN')->count()),
            Stat::make('MUARA LESAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA LESAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA LESAN [Proses]', Relawan::where('kelurahan', 'MUARA LESAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG DUHUNG', Relawan::where('kelurahan', 'LONG DUHUNG')->count()),
            Stat::make('LONG DUHUNG [Terverifikasi]', Relawan::where('kelurahan', 'LONG DUHUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG DUHUNG [Proses]', Relawan::where('kelurahan', 'LONG DUHUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LESAN DAYAK', Relawan::where('kelurahan', 'LESAN DAYAK')->count()),
            Stat::make('LESAN DAYAK [Terverifikasi]', Relawan::where('kelurahan', 'LESAN DAYAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LESAN DAYAK [Proses]', Relawan::where('kelurahan', 'LESAN DAYAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG KELUH', Relawan::where('kelurahan', 'LONG KELUH')->count()),
            Stat::make('LONG KELUH [Terverifikasi]', Relawan::where('kelurahan', 'LONG KELUH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG KELUH [Proses]', Relawan::where('kelurahan', 'LONG KELUH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PELAY', Relawan::where('kelurahan', 'LONG PELAY')->count()),
            Stat::make('LONG PELAY [Terverifikasi]', Relawan::where('kelurahan', 'LONG PELAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PELAY [Proses]', Relawan::where('kelurahan', 'LONG PELAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PANAAN', Relawan::where('kelurahan', 'PANAAN')->count()),
            Stat::make('PANAAN [Terverifikasi]', Relawan::where('kelurahan', 'PANAAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANAAN [Proses]', Relawan::where('kelurahan', 'PANAAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LAMCIN', Relawan::where('kelurahan', 'LONG LAMCIN')->count()),
            Stat::make('LONG LAMCIN [Terverifikasi]', Relawan::where('kelurahan', 'LONG LAMCIN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LAMCIN [Proses]', Relawan::where('kelurahan', 'LONG LAMCIN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG SULUI', Relawan::where('kelurahan', 'LONG SULUI')->count()),
            Stat::make('LONG SULUI [Terverifikasi]', Relawan::where('kelurahan', 'LONG SULUI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG SULUI [Proses]', Relawan::where('kelurahan', 'LONG SULUI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Maratua
            BaseWidget\Card::make('Kecamatan', 'MARATUA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TELUK HARAPAN', Relawan::where('kelurahan', 'TELUK HARAPAN')->count()),
            Stat::make('TELUK HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'TELUK HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK HARAPAN [Proses]', Relawan::where('kelurahan', 'TELUK HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BOHE SILIAN', Relawan::where('kelurahan', 'BOHE SILIAN')->count()),
            Stat::make('BOHE SILIAN [Terverifikasi]', Relawan::where('kelurahan', 'BOHE SILIAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BOHE SILIAN [Proses]', Relawan::where('kelurahan', 'BOHE SILIAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PAYUNG-PAYUNG', Relawan::where('kelurahan', 'PAYUNG-PAYUNG')->count()),
            Stat::make('PAYUNG-PAYUNG [Terverifikasi]', Relawan::where('kelurahan', 'PAYUNG-PAYUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PAYUNG-PAYUNG [Proses]', Relawan::where('kelurahan', 'PAYUNG-PAYUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK ALULU', Relawan::where('kelurahan', 'TELUK ALULU')->count()),
            Stat::make('TELUK ALULU [Terverifikasi]', Relawan::where('kelurahan', 'TELUK ALULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK ALULU [Proses]', Relawan::where('kelurahan', 'TELUK ALULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Pulau Derawan
            BaseWidget\Card::make('Kecamatan', 'PULAU DERAWAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TANJUNG BATU', Relawan::where('kelurahan', 'TANJUNG BATU')->count()),
            Stat::make('TANJUNG BATU [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG BATU [Proses]', Relawan::where('kelurahan', 'TANJUNG BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU DERAWAN', Relawan::where('kelurahan', 'PULAU DERAWAN')->count()),
            Stat::make('PULAU DERAWAN [Terverifikasi]', Relawan::where('kelurahan', 'PULAU DERAWAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU DERAWAN [Proses]', Relawan::where('kelurahan', 'PULAU DERAWAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KASAI', Relawan::where('kelurahan', 'KASAI')->count()),
            Stat::make('KASAI [Terverifikasi]', Relawan::where('kelurahan', 'KASAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KASAI [Proses]', Relawan::where('kelurahan', 'KASAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK SEMANTING', Relawan::where('kelurahan', 'TELUK SEMANTING')->count()),
            Stat::make('TELUK SEMANTING [Terverifikasi]', Relawan::where('kelurahan', 'TELUK SEMANTING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK SEMANTING [Proses]', Relawan::where('kelurahan', 'TELUK SEMANTING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEGAT BATUMBUK', Relawan::where('kelurahan', 'PEGAT BATUMBUK')->count()),
            Stat::make('PEGAT BATUMBUK [Terverifikasi]', Relawan::where('kelurahan', 'PEGAT BATUMBUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEGAT BATUMBUK [Proses]', Relawan::where('kelurahan', 'PEGAT BATUMBUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Sambaliung
            BaseWidget\Card::make('Kecamatan', 'SAMBALIUNG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('GURIMBANG', Relawan::where('kelurahan', 'GURIMBANG')->count()),
            Stat::make('GURIMBANG [Terverifikasi]', Relawan::where('kelurahan', 'GURIMBANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GURIMBANG [Proses]', Relawan::where('kelurahan', 'GURIMBANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKAN TENGAH', Relawan::where('kelurahan', 'SUKAN TENGAH')->count()),
            Stat::make('SUKAN TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'SUKAN TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKAN TENGAH [Proses]', Relawan::where('kelurahan', 'SUKAN TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEI BEBANIR BANGUN', Relawan::where('kelurahan', 'SEI BEBANIR BANGUN')->count()),
            Stat::make('SEI BEBANIR BANGUN [Terverifikasi]', Relawan::where('kelurahan', 'SEI BEBANIR BANGUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEI BEBANIR BANGUN [Proses]', Relawan::where('kelurahan', 'SEI BEBANIR BANGUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEGAT BUKUR', Relawan::where('kelurahan', 'PEGAT BUKUR')->count()),
            Stat::make('PEGAT BUKUR [Terverifikasi]', Relawan::where('kelurahan', 'PEGAT BUKUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEGAT BUKUR [Proses]', Relawan::where('kelurahan', 'PEGAT BUKUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG PERANGAT', Relawan::where('kelurahan', 'TANJUNG PERANGAT')->count()),
            Stat::make('TANJUNG PERANGAT [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG PERANGAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG PERANGAT [Proses]', Relawan::where('kelurahan', 'TANJUNG PERANGAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUARAN', Relawan::where('kelurahan', 'SUARAN')->count()),
            Stat::make('SUARAN [Terverifikasi]', Relawan::where('kelurahan', 'SUARAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUARAN [Proses]', Relawan::where('kelurahan', 'SUARAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PILANJAU', Relawan::where('kelurahan', 'PILANJAU')->count()),
            Stat::make('PILANJAU [Terverifikasi]', Relawan::where('kelurahan', 'PILANJAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PILANJAU [Proses]', Relawan::where('kelurahan', 'PILANJAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PESAYAN', Relawan::where('kelurahan', 'PESAYAN')->count()),
            Stat::make('PESAYAN [Terverifikasi]', Relawan::where('kelurahan', 'PESAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PESAYAN [Proses]', Relawan::where('kelurahan', 'PESAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU PANJANG', Relawan::where('kelurahan', 'RANTAU PANJANG')->count()),
            Stat::make('RANTAU PANJANG [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU PANJANG [Proses]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENA BARU', Relawan::where('kelurahan', 'BENA BARU')->count()),
            Stat::make('BENA BARU [Terverifikasi]', Relawan::where('kelurahan', 'BENA BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENA BARU [Proses]', Relawan::where('kelurahan', 'BENA BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('INARAN', Relawan::where('kelurahan', 'INARAN')->count()),
            Stat::make('INARAN [Terverifikasi]', Relawan::where('kelurahan', 'INARAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('INARAN [Proses]', Relawan::where('kelurahan', 'INARAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUMBIT DAYAK', Relawan::where('kelurahan', 'TUMBIT DAYAK')->count()),
            Stat::make('TUMBIT DAYAK [Terverifikasi]', Relawan::where('kelurahan', 'TUMBIT DAYAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUMBIT DAYAK [Proses]', Relawan::where('kelurahan', 'TUMBIT DAYAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LANUK', Relawan::where('kelurahan', 'LONG LANUK')->count()),
            Stat::make('LONG LANUK [Terverifikasi]', Relawan::where('kelurahan', 'LONG LANUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LANUK [Proses]', Relawan::where('kelurahan', 'LONG LANUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBALIUNG', Relawan::where('kelurahan', 'SAMBALIUNG')->count()),
            Stat::make('SAMBALIUNG [Terverifikasi]', Relawan::where('kelurahan', 'SAMBALIUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBALIUNG [Proses]', Relawan::where('kelurahan', 'SAMBALIUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Segah
            BaseWidget\Card::make('Kecamatan', 'SEGAH')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('HARAPAN JAYA', Relawan::where('kelurahan', 'HARAPAN JAYA')->count()),
            Stat::make('HARAPAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'HARAPAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HARAPAN JAYA [Proses]', Relawan::where('kelurahan', 'HARAPAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN BUAH', Relawan::where('kelurahan', 'TEPIAN BUAH')->count()),
            Stat::make('TEPIAN BUAH [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN BUAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN BUAH [Proses]', Relawan::where('kelurahan', 'TEPIAN BUAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SARI', Relawan::where('kelurahan', 'GUNUNG SARI')->count()),
            Stat::make('GUNUNG SARI [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SARI [Proses]', Relawan::where('kelurahan', 'GUNUNG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG AYAN', Relawan::where('kelurahan', 'LONG AYAN')->count()),
            Stat::make('LONG AYAN [Terverifikasi]', Relawan::where('kelurahan', 'LONG AYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG AYAN [Proses]', Relawan::where('kelurahan', 'LONG AYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT MAKMUR', Relawan::where('kelurahan', 'BUKIT MAKMUR')->count()),
            Stat::make('BUKIT MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT MAKMUR [Proses]', Relawan::where('kelurahan', 'BUKIT MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LA\'AI', Relawan::where('kelurahan', 'LONG LA\'AI')->count()),
            Stat::make('LONG LA\'AI [Terverifikasi]', Relawan::where('kelurahan', 'LONG LA\'AI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LA\'AI [Proses]', Relawan::where('kelurahan', 'LONG LA\'AI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PANDAN SARI', Relawan::where('kelurahan', 'PANDAN SARI')->count()),
            Stat::make('PANDAN SARI [Terverifikasi]', Relawan::where('kelurahan', 'PANDAN SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANDAN SARI [Proses]', Relawan::where('kelurahan', 'PANDAN SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDUUNG INDAH', Relawan::where('kelurahan', 'SIDUUNG INDAH')->count()),
            Stat::make('SIDUUNG INDAH [Terverifikasi]', Relawan::where('kelurahan', 'SIDUUNG INDAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDUUNG INDAH [Proses]', Relawan::where('kelurahan', 'SIDUUNG INDAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PUNAN MALINAU', Relawan::where('kelurahan', 'PUNAN MALINAU')->count()),
            Stat::make('PUNAN MALINAU [Terverifikasi]', Relawan::where('kelurahan', 'PUNAN MALINAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PUNAN MALINAU [Proses]', Relawan::where('kelurahan', 'PUNAN MALINAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PUNAN MAHKAM', Relawan::where('kelurahan', 'PUNAN MAHKAM')->count()),
            Stat::make('PUNAN MAHKAM [Terverifikasi]', Relawan::where('kelurahan', 'PUNAN MAHKAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PUNAN MAHKAM [Proses]', Relawan::where('kelurahan', 'PUNAN MAHKAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PUNAN SEGAH', Relawan::where('kelurahan', 'PUNAN SEGAH')->count()),
            Stat::make('PUNAN SEGAH [Terverifikasi]', Relawan::where('kelurahan', 'PUNAN SEGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PUNAN SEGAH [Proses]', Relawan::where('kelurahan', 'PUNAN SEGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG AYAP', Relawan::where('kelurahan', 'LONG AYAP')->count()),
            Stat::make('LONG AYAP [Terverifikasi]', Relawan::where('kelurahan', 'LONG AYAP')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG AYAP [Proses]', Relawan::where('kelurahan', 'LONG AYAP')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU RAJANG', Relawan::where('kelurahan', 'BATU RAJANG')->count()),
            Stat::make('BATU RAJANG [Terverifikasi]', Relawan::where('kelurahan', 'BATU RAJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU RAJANG [Proses]', Relawan::where('kelurahan', 'BATU RAJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Tabalar
            BaseWidget\Card::make('Kecamatan', 'TABALAR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TUBAAN', Relawan::where('kelurahan', 'TUBAAN')->count()),
            Stat::make('TUBAAN [Terverifikasi]', Relawan::where('kelurahan', 'TUBAAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUBAAN [Proses]', Relawan::where('kelurahan', 'TUBAAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TABALAR MUARA', Relawan::where('kelurahan', 'TABALAR MUARA')->count()),
            Stat::make('TABALAR MUARA [Terverifikasi]', Relawan::where('kelurahan', 'TABALAR MUARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TABALAR MUARA [Proses]', Relawan::where('kelurahan', 'TABALAR MUARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HARAPAN MAJU', Relawan::where('kelurahan', 'HARAPAN MAJU')->count()),
            Stat::make('HARAPAN MAJU [Terverifikasi]', Relawan::where('kelurahan', 'HARAPAN MAJU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HARAPAN MAJU [Proses]', Relawan::where('kelurahan', 'HARAPAN MAJU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUYUNG-BUYUNG', Relawan::where('kelurahan', 'BUYUNG-BUYUNG')->count()),
            Stat::make('BUYUNG-BUYUNG [Terverifikasi]', Relawan::where('kelurahan', 'BUYUNG-BUYUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUYUNG-BUYUNG [Proses]', Relawan::where('kelurahan', 'BUYUNG-BUYUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMURUT', Relawan::where('kelurahan', 'SEMURUT')->count()),
            Stat::make('SEMURUT [Terverifikasi]', Relawan::where('kelurahan', 'SEMURUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMURUT [Proses]', Relawan::where('kelurahan', 'SEMURUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TABALAR ULU', Relawan::where('kelurahan', 'TABALAR ULU')->count()),
            Stat::make('TABALAR ULU [Terverifikasi]', Relawan::where('kelurahan', 'TABALAR ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TABALAR ULU [Proses]', Relawan::where('kelurahan', 'TABALAR ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Talisayan
            BaseWidget\Card::make('Kecamatan', 'TALISAYAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TALISAYAN', Relawan::where('kelurahan', 'TALISAYAN')->count()),
            Stat::make('TALISAYAN [Terverifikasi]', Relawan::where('kelurahan', 'TALISAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TALISAYAN [Proses]', Relawan::where('kelurahan', 'TALISAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA MURYA', Relawan::where('kelurahan', 'SUKA MURYA')->count()),
            Stat::make('SUKA MURYA [Terverifikasi]', Relawan::where('kelurahan', 'SUKA MURYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA MURYA [Proses]', Relawan::where('kelurahan', 'SUKA MURYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DUMARING', Relawan::where('kelurahan', 'DUMARING')->count()),
            Stat::make('DUMARING [Terverifikasi]', Relawan::where('kelurahan', 'DUMARING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DUMARING [Proses]', Relawan::where('kelurahan', 'DUMARING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUMI JAYA', Relawan::where('kelurahan', 'BUMI JAYA')->count()),
            Stat::make('BUMI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUMI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUMI JAYA [Proses]', Relawan::where('kelurahan', 'BUMI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CAMPUR SARI', Relawan::where('kelurahan', 'CAMPUR SARI')->count()),
            Stat::make('CAMPUR SARI [Terverifikasi]', Relawan::where('kelurahan', 'CAMPUR SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CAMPUR SARI [Proses]', Relawan::where('kelurahan', 'CAMPUR SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('EKA SAPTA', Relawan::where('kelurahan', 'EKA SAPTA')->count()),
            Stat::make('EKA SAPTA [Terverifikasi]', Relawan::where('kelurahan', 'EKA SAPTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('EKA SAPTA [Proses]', Relawan::where('kelurahan', 'EKA SAPTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUNGGAL BUMI', Relawan::where('kelurahan', 'TUNGGAL BUMI')->count()),
            Stat::make('TUNGGAL BUMI [Terverifikasi]', Relawan::where('kelurahan', 'TUNGGAL BUMI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUNGGAL BUMI [Proses]', Relawan::where('kelurahan', 'TUNGGAL BUMI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PURNA SARI JAYA', Relawan::where('kelurahan', 'PURNA SARI JAYA')->count()),
            Stat::make('PURNA SARI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'PURNA SARI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PURNA SARI JAYA [Proses]', Relawan::where('kelurahan', 'PURNA SARI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CAPUAK', Relawan::where('kelurahan', 'CAPUAK')->count()),
            Stat::make('CAPUAK [Terverifikasi]', Relawan::where('kelurahan', 'CAPUAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CAPUAK [Proses]', Relawan::where('kelurahan', 'CAPUAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER MULYA', Relawan::where('kelurahan', 'SUMBER MULYA')->count()),
            Stat::make('SUMBER MULYA [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER MULYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER MULYA [Proses]', Relawan::where('kelurahan', 'SUMBER MULYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUGIS', Relawan::where('kelurahan', 'BUGIS')->count()),
            Stat::make('BUGIS [Terverifikasi]', Relawan::where('kelurahan', 'BUGIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUGIS [Proses]', Relawan::where('kelurahan', 'BUGIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GAYAM', Relawan::where('kelurahan', 'GAYAM')->count()),
            Stat::make('GAYAM [Terverifikasi]', Relawan::where('kelurahan', 'GAYAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GAYAM [Proses]', Relawan::where('kelurahan', 'GAYAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG PANJANG', Relawan::where('kelurahan', 'GUNUNG PANJANG')->count()),
            Stat::make('GUNUNG PANJANG [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG PANJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG PANJANG [Proses]', Relawan::where('kelurahan', 'GUNUNG PANJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG AMBUN', Relawan::where('kelurahan', 'KARANG AMBUN')->count()),
            Stat::make('KARANG AMBUN [Terverifikasi]', Relawan::where('kelurahan', 'KARANG AMBUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG AMBUN [Proses]', Relawan::where('kelurahan', 'KARANG AMBUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI BEDUNGUN', Relawan::where('kelurahan', 'SUNGAI BEDUNGUN')->count()),
            Stat::make('SUNGAI BEDUNGUN [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI BEDUNGUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI BEDUNGUN [Proses]', Relawan::where('kelurahan', 'SUNGAI BEDUNGUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG REDEB', Relawan::where('kelurahan', 'TANJUNG REDEB')->count()),
            Stat::make('TANJUNG REDEB [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG REDEB')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG REDEB [Proses]', Relawan::where('kelurahan', 'TANJUNG REDEB')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Teluk Bayur
            BaseWidget\Card::make('Kecamatan', 'TELUK BAYUR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LABANAN MAKMUR', Relawan::where('kelurahan', 'LABANAN MAKMUR')->count()),
            Stat::make('LABANAN MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'LABANAN MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABANAN MAKMUR [Proses]', Relawan::where('kelurahan', 'LABANAN MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABANAN JAYA', Relawan::where('kelurahan', 'LABANAN JAYA')->count()),
            Stat::make('LABANAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'LABANAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABANAN JAYA [Proses]', Relawan::where('kelurahan', 'LABANAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABANAN MAKARTI', Relawan::where('kelurahan', 'LABANAN MAKARTI')->count()),
            Stat::make('LABANAN MAKARTI [Terverifikasi]', Relawan::where('kelurahan', 'LABANAN MAKARTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABANAN MAKARTI [Proses]', Relawan::where('kelurahan', 'LABANAN MAKARTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUMBIT MELAYU', Relawan::where('kelurahan', 'TUMBIT MELAYU')->count()),
            Stat::make('TUMBIT MELAYU [Terverifikasi]', Relawan::where('kelurahan', 'TUMBIT MELAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUMBIT MELAYU [Proses]', Relawan::where('kelurahan', 'TUMBIT MELAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RINDING', Relawan::where('kelurahan', 'RINDING')->count()),
            Stat::make('RINDING [Terverifikasi]', Relawan::where('kelurahan', 'RINDING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RINDING [Proses]', Relawan::where('kelurahan', 'RINDING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
