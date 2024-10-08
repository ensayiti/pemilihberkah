<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SamarindaKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            BaseWidget\Card::make('Kecamatan', 'LOA JANAN ILIR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('HARAPAN BARU', Relawan::where('kelurahan', 'HARAPAN BARU')->count()),
            Stat::make('HARAPAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'HARAPAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HARAPAN BARU [Proses]', Relawan::where('kelurahan', 'HARAPAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RAPAK DALAM', Relawan::where('kelurahan', 'RAPAK DALAM')->count()),
            Stat::make('RAPAK DALAM [Terverifikasi]', Relawan::where('kelurahan', 'RAPAK DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RAPAK DALAM [Proses]', Relawan::where('kelurahan', 'RAPAK DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENGKOTEK', Relawan::where('kelurahan', 'SENGKOTEK')->count()),
            Stat::make('SENGKOTEK [Terverifikasi]', Relawan::where('kelurahan', 'SENGKOTEK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENGKOTEK [Proses]', Relawan::where('kelurahan', 'SENGKOTEK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIMPANG TIGA', Relawan::where('kelurahan', 'SIMPANG TIGA')->count()),
            Stat::make('SIMPANG TIGA [Terverifikasi]', Relawan::where('kelurahan', 'SIMPANG TIGA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIMPANG TIGA [Proses]', Relawan::where('kelurahan', 'SIMPANG TIGA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANI AMAN', Relawan::where('kelurahan', 'TANI AMAN')->count()),
            Stat::make('TANI AMAN [Terverifikasi]', Relawan::where('kelurahan', 'TANI AMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANI AMAN [Proses]', Relawan::where('kelurahan', 'TANI AMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'PALARAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BANTUAS', Relawan::where('kelurahan', 'BANTUAS')->count()),
            Stat::make('BANTUAS [Terverifikasi]', Relawan::where('kelurahan', 'BANTUAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANTUAS [Proses]', Relawan::where('kelurahan', 'BANTUAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKUAN', Relawan::where('kelurahan', 'BUKUAN')->count()),
            Stat::make('BUKUAN [Terverifikasi]', Relawan::where('kelurahan', 'BUKUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKUAN [Proses]', Relawan::where('kelurahan', 'BUKUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HANDIL BAKTI', Relawan::where('kelurahan', 'HANDIL BAKTI')->count()),
            Stat::make('HANDIL BAKTI [Terverifikasi]', Relawan::where('kelurahan', 'HANDIL BAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HANDIL BAKTI [Proses]', Relawan::where('kelurahan', 'HANDIL BAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RAWA MAKMUR', Relawan::where('kelurahan', 'RAWA MAKMUR')->count()),
            Stat::make('RAWA MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'RAWA MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RAWA MAKMUR [Proses]', Relawan::where('kelurahan', 'RAWA MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIMPANG PASIR', Relawan::where('kelurahan', 'SIMPANG PASIR')->count()),
            Stat::make('SIMPANG PASIR [Terverifikasi]', Relawan::where('kelurahan', 'SIMPANG PASIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIMPANG PASIR [Proses]', Relawan::where('kelurahan', 'SIMPANG PASIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMARINDA ILIR')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('PELITA', Relawan::where('kelurahan', 'PELITA')->count()),
            Stat::make('PELITA [Terverifikasi]', Relawan::where('kelurahan', 'PELITA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PELITA [Proses]', Relawan::where('kelurahan', 'PELITA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SELILI', Relawan::where('kelurahan', 'SELILI')->count()),
            Stat::make('SELILI [Terverifikasi]', Relawan::where('kelurahan', 'SELILI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SELILI [Proses]', Relawan::where('kelurahan', 'SELILI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDODAMAI', Relawan::where('kelurahan', 'SIDODAMAI')->count()),
            Stat::make('SIDODAMAI [Terverifikasi]', Relawan::where('kelurahan', 'SIDODAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDODAMAI [Proses]', Relawan::where('kelurahan', 'SIDODAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOMULYO', Relawan::where('kelurahan', 'SIDOMULYO')->count()),
            Stat::make('SIDOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOMULYO [Proses]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI DAMA', Relawan::where('kelurahan', 'SUNGAI DAMA')->count()),
            Stat::make('SUNGAI DAMA [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI DAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI DAMA [Proses]', Relawan::where('kelurahan', 'SUNGAI DAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMARINDA KOTA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('BUGIS', Relawan::where('kelurahan', 'BUGIS')->count()),
            Stat::make('BUGIS [Terverifikasi]', Relawan::where('kelurahan', 'BUGIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUGIS [Proses]', Relawan::where('kelurahan', 'BUGIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG MUMUS', Relawan::where('kelurahan', 'KARANG MUMUS')->count()),
            Stat::make('KARANG MUMUS [Terverifikasi]', Relawan::where('kelurahan', 'KARANG MUMUS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG MUMUS [Proses]', Relawan::where('kelurahan', 'KARANG MUMUS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PASAR PAGI', Relawan::where('kelurahan', 'PASAR PAGI')->count()),
            Stat::make('PASAR PAGI [Terverifikasi]', Relawan::where('kelurahan', 'PASAR PAGI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PASAR PAGI [Proses]', Relawan::where('kelurahan', 'PASAR PAGI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PELABUHAN', Relawan::where('kelurahan', 'PELABUHAN')->count()),
            Stat::make('PELABUHAN [Terverifikasi]', Relawan::where('kelurahan', 'PELABUHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PELABUHAN [Proses]', Relawan::where('kelurahan', 'PELABUHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI PINANG LUAR', Relawan::where('kelurahan', 'SUNGAI PINANG LUAR')->count()),
            Stat::make('SUNGAI PINANG LUAR [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI PINANG LUAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI PINANG LUAR [Proses]', Relawan::where('kelurahan', 'SUNGAI PINANG LUAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMARINDA SEBERANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('BAQA', Relawan::where('kelurahan', 'BAQA')->count()),
            Stat::make('BAQA [Terverifikasi]', Relawan::where('kelurahan', 'BAQA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BAQA [Proses]', Relawan::where('kelurahan', 'BAQA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG PANJANG', Relawan::where('kelurahan', 'GUNUNG PANJANG')->count()),
            Stat::make('GUNUNG PANJANG [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG PANJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG PANJANG [Proses]', Relawan::where('kelurahan', 'GUNUNG PANJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANGKUPALAS', Relawan::where('kelurahan', 'MANGKUPALAS')->count()),
            Stat::make('MANGKUPALAS [Terverifikasi]', Relawan::where('kelurahan', 'MANGKUPALAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANGKUPALAS [Proses]', Relawan::where('kelurahan', 'MANGKUPALAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MESJID', Relawan::where('kelurahan', 'MESJID')->count()),
            Stat::make('MESJID [Terverifikasi]', Relawan::where('kelurahan', 'MESJID')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MESJID [Proses]', Relawan::where('kelurahan', 'MESJID')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI KELEDANG', Relawan::where('kelurahan', 'SUNGAI KELEDANG')->count()),
            Stat::make('SUNGAI KELEDANG [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI KELEDANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI KELEDANG [Proses]', Relawan::where('kelurahan', 'SUNGAI KELEDANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TENUN', Relawan::where('kelurahan', 'TENUN')->count()),
            Stat::make('TENUN [Terverifikasi]', Relawan::where('kelurahan', 'TENUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TENUN [Proses]', Relawan::where('kelurahan', 'TENUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMARINDA ULU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('AIR HITAM', Relawan::where('kelurahan', 'AIR HITAM')->count()),
            Stat::make('AIR HITAM [Terverifikasi]', Relawan::where('kelurahan', 'AIR HITAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AIR HITAM [Proses]', Relawan::where('kelurahan', 'AIR HITAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('AIR PUTIH', Relawan::where('kelurahan', 'AIR PUTIH')->count()),
            Stat::make('AIR PUTIH [Terverifikasi]', Relawan::where('kelurahan', 'AIR PUTIH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AIR PUTIH [Proses]', Relawan::where('kelurahan', 'AIR PUTIH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT PINANG', Relawan::where('kelurahan', 'BUKIT PINANG')->count()),
            Stat::make('BUKIT PINANG [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT PINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT PINANG [Proses]', Relawan::where('kelurahan', 'BUKIT PINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DADI MULYA', Relawan::where('kelurahan', 'DADI MULYA')->count()),
            Stat::make('DADI MULYA [Terverifikasi]', Relawan::where('kelurahan', 'DADI MULYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DADI MULYA [Proses]', Relawan::where('kelurahan', 'DADI MULYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG KELUA', Relawan::where('kelurahan', 'GUNUNG KELUA')->count()),
            Stat::make('GUNUNG KELUA [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG KELUA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG KELUA [Proses]', Relawan::where('kelurahan', 'GUNUNG KELUA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JAWA', Relawan::where('kelurahan', 'JAWA')->count()),
            Stat::make('JAWA [Terverifikasi]', Relawan::where('kelurahan', 'JAWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAWA [Proses]', Relawan::where('kelurahan', 'JAWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDODADI', Relawan::where('kelurahan', 'SIDODADI')->count()),
            Stat::make('SIDODADI [Terverifikasi]', Relawan::where('kelurahan', 'SIDODADI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDODADI [Proses]', Relawan::where('kelurahan', 'SIDODADI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK LERONG ILIR', Relawan::where('kelurahan', 'TELUK LERONG ILIR')->count()),
            Stat::make('TELUK LERONG ILIR [Terverifikasi]', Relawan::where('kelurahan', 'TELUK LERONG ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK LERONG ILIR [Proses]', Relawan::where('kelurahan', 'TELUK LERONG ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMARINDA UTARA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BUDAYA PAMPANG', Relawan::where('kelurahan', 'BUDAYA PAMPANG')->count()),
            Stat::make('BUDAYA PAMPANG [Terverifikasi]', Relawan::where('kelurahan', 'BUDAYA PAMPANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUDAYA PAMPANG [Proses]', Relawan::where('kelurahan', 'BUDAYA PAMPANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEMPAKE', Relawan::where('kelurahan', 'LEMPAKE')->count()),
            Stat::make('LEMPAKE [Terverifikasi]', Relawan::where('kelurahan', 'LEMPAKE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEMPAKE [Proses]', Relawan::where('kelurahan', 'LEMPAKE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPAJA BARAT', Relawan::where('kelurahan', 'SEMPAJA BARAT')->count()),
            Stat::make('SEMPAJA BARAT [Terverifikasi]', Relawan::where('kelurahan', 'SEMPAJA BARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPAJA BARAT [Proses]', Relawan::where('kelurahan', 'SEMPAJA BARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPAJA UTARA', Relawan::where('kelurahan', 'SEMPAJA UTARA')->count()),
            Stat::make('SEMPAJA UTARA [Terverifikasi]', Relawan::where('kelurahan', 'SEMPAJA UTARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPAJA UTARA [Proses]', Relawan::where('kelurahan', 'SEMPAJA UTARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPAJA SELATAN', Relawan::where('kelurahan', 'SEMPAJA SELATAN')->count()),
            Stat::make('SEMPAJA SELATAN [Terverifikasi]', Relawan::where('kelurahan', 'SEMPAJA SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPAJA SELATAN [Proses]', Relawan::where('kelurahan', 'SEMPAJA SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPAJA TIMUR', Relawan::where('kelurahan', 'SEMPAJA TIMUR')->count()),
            Stat::make('SEMPAJA TIMUR [Terverifikasi]', Relawan::where('kelurahan', 'SEMPAJA TIMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPAJA TIMUR [Proses]', Relawan::where('kelurahan', 'SEMPAJA TIMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI SIRING', Relawan::where('kelurahan', 'SUNGAI SIRING')->count()),
            Stat::make('SUNGAI SIRING [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI SIRING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI SIRING [Proses]', Relawan::where('kelurahan', 'SUNGAI SIRING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH MERAH', Relawan::where('kelurahan', 'TANAH MERAH')->count()),
            Stat::make('TANAH MERAH [Terverifikasi]', Relawan::where('kelurahan', 'TANAH MERAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH MERAH [Proses]', Relawan::where('kelurahan', 'TANAH MERAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SAMBUTAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('MAKROMAN', Relawan::where('kelurahan', 'MAKROMAN')->count()),
            Stat::make('MAKROMAN [Terverifikasi]', Relawan::where('kelurahan', 'MAKROMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MAKROMAN [Proses]', Relawan::where('kelurahan', 'MAKROMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU ATAS', Relawan::where('kelurahan', 'PULAU ATAS')->count()),
            Stat::make('PULAU ATAS [Terverifikasi]', Relawan::where('kelurahan', 'PULAU ATAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU ATAS [Proses]', Relawan::where('kelurahan', 'PULAU ATAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBUTAN', Relawan::where('kelurahan', 'SAMBUTAN')->count()),
            Stat::make('SAMBUTAN [Terverifikasi]', Relawan::where('kelurahan', 'SAMBUTAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBUTAN [Proses]', Relawan::where('kelurahan', 'SAMBUTAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SINDANG SARI', Relawan::where('kelurahan', 'SINDANG SARI')->count()),
            Stat::make('SINDANG SARI [Terverifikasi]', Relawan::where('kelurahan', 'SINDANG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SINDANG SARI [Proses]', Relawan::where('kelurahan', 'SINDANG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI KAPIH', Relawan::where('kelurahan', 'SUNGAI KAPIH')->count()),
            Stat::make('SUNGAI KAPIH [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI KAPIH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI KAPIH [Proses]', Relawan::where('kelurahan', 'SUNGAI KAPIH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SUNGAI KUNJANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LOA BUAH', Relawan::where('kelurahan', 'LOA BUAH')->count()),
            Stat::make('LOA BUAH [Terverifikasi]', Relawan::where('kelurahan', 'LOA BUAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA BUAH [Proses]', Relawan::where('kelurahan', 'LOA BUAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA BAKUNG', Relawan::where('kelurahan', 'LOA BAKUNG')->count()),
            Stat::make('LOA BAKUNG [Terverifikasi]', Relawan::where('kelurahan', 'LOA BAKUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA BAKUNG [Proses]', Relawan::where('kelurahan', 'LOA BAKUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA BAHU', Relawan::where('kelurahan', 'LOA BAHU')->count()),
            Stat::make('LOA BAHU [Terverifikasi]', Relawan::where('kelurahan', 'LOA BAHU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA BAHU [Proses]', Relawan::where('kelurahan', 'LOA BAHU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG ANYAR', Relawan::where('kelurahan', 'KARANG ANYAR')->count()),
            Stat::make('KARANG ANYAR [Terverifikasi]', Relawan::where('kelurahan', 'KARANG ANYAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG ANYAR [Proses]', Relawan::where('kelurahan', 'KARANG ANYAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG ASAM ILIR', Relawan::where('kelurahan', 'KARANG ASAM ILIR')->count()),
            Stat::make('KARANG ASAM ILIR [Terverifikasi]', Relawan::where('kelurahan', 'KARANG ASAM ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG ASAM ILIR [Proses]', Relawan::where('kelurahan', 'KARANG ASAM ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG ASAM ULU', Relawan::where('kelurahan', 'KARANG ASAM ULU')->count()),
            Stat::make('KARANG ASAM ULU [Terverifikasi]', Relawan::where('kelurahan', 'KARANG ASAM ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG ASAM ULU [Proses]', Relawan::where('kelurahan', 'KARANG ASAM ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK LERONG ULU', Relawan::where('kelurahan', 'TELUK LERONG ULU')->count()),
            Stat::make('TELUK LERONG ULU [Terverifikasi]', Relawan::where('kelurahan', 'TELUK LERONG ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK LERONG ULU [Proses]', Relawan::where('kelurahan', 'TELUK LERONG ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            BaseWidget\Card::make('Kecamatan', 'SUNGAI PINANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('BANDARA', Relawan::where('kelurahan', 'BANDARA')->count()),
            Stat::make('BANDARA [Terverifikasi]', Relawan::where('kelurahan', 'BANDARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANDARA [Proses]', Relawan::where('kelurahan', 'BANDARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG LINGAI', Relawan::where('kelurahan', 'GUNUNG LINGAI')->count()),
            Stat::make('GUNUNG LINGAI [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG LINGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG LINGAI [Proses]', Relawan::where('kelurahan', 'GUNUNG LINGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUGIREJO', Relawan::where('kelurahan', 'MUGIREJO')->count()),
            Stat::make('MUGIREJO [Terverifikasi]', Relawan::where('kelurahan', 'MUGIREJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUGIREJO [Proses]', Relawan::where('kelurahan', 'MUGIREJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI PINANG DALAM', Relawan::where('kelurahan', 'SUNGAI PINANG DALAM')->count()),
            Stat::make('SUNGAI PINANG DALAM [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI PINANG DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI PINANG DALAM [Proses]', Relawan::where('kelurahan', 'SUNGAI PINANG DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEMINDUNG PERMAI', Relawan::where('kelurahan', 'TEMINDUNG PERMAI')->count()),
            Stat::make('TEMINDUNG PERMAI [Terverifikasi]', Relawan::where('kelurahan', 'TEMINDUNG PERMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEMINDUNG PERMAI [Proses]', Relawan::where('kelurahan', 'TEMINDUNG PERMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
