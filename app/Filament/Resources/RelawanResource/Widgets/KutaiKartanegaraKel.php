<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KutaiKartanegaraKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Anggana
            BaseWidget\Card::make('Kecamatan', 'ANGGANA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SUNGAI MERIAM', Relawan::where('kelurahan', 'SUNGAI MERIAM')->count()),
            Stat::make('SUNGAI MERIAM [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI MERIAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI MERIAM [Proses]', Relawan::where('kelurahan', 'SUNGAI MERIAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ANGGANA', Relawan::where('kelurahan', 'ANGGANA')->count()),
            Stat::make('ANGGANA [Terverifikasi]', Relawan::where('kelurahan', 'ANGGANA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ANGGANA [Proses]', Relawan::where('kelurahan', 'ANGGANA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOMULYO', Relawan::where('kelurahan', 'SIDOMULYO')->count()),
            Stat::make('SIDOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOMULYO [Proses]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KUTAI LAMA', Relawan::where('kelurahan', 'KUTAI LAMA')->count()),
            Stat::make('KUTAI LAMA [Terverifikasi]', Relawan::where('kelurahan', 'KUTAI LAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KUTAI LAMA [Proses]', Relawan::where('kelurahan', 'KUTAI LAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPATIN', Relawan::where('kelurahan', 'SEPATIN')->count()),
            Stat::make('SEPATIN [Terverifikasi]', Relawan::where('kelurahan', 'SEPATIN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPATIN [Proses]', Relawan::where('kelurahan', 'SEPATIN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PANTUAN', Relawan::where('kelurahan', 'MUARA PANTUAN')->count()),
            Stat::make('MUARA PANTUAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PANTUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PANTUAN [Proses]', Relawan::where('kelurahan', 'MUARA PANTUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HANDIL TERUSAN', Relawan::where('kelurahan', 'HANDIL TERUSAN')->count()),
            Stat::make('HANDIL TERUSAN [Terverifikasi]', Relawan::where('kelurahan', 'HANDIL TERUSAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HANDIL TERUSAN [Proses]', Relawan::where('kelurahan', 'HANDIL TERUSAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANI BARU', Relawan::where('kelurahan', 'TANI BARU')->count()),
            Stat::make('TANI BARU [Terverifikasi]', Relawan::where('kelurahan', 'TANI BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANI BARU [Proses]', Relawan::where('kelurahan', 'TANI BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI TEMPURUNG', Relawan::where('kelurahan', 'SUNGAI TEMPURUNG')->count()),
            Stat::make('SUNGAI TEMPURUNG [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI TEMPURUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI TEMPURUNG [Proses]', Relawan::where('kelurahan', 'SUNGAI TEMPURUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kembang Janggut
            BaseWidget\Card::make('Kecamatan', 'KEMBANG JANGGUT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KEMBANG JANGGUT', Relawan::where('kelurahan', 'KEMBANG JANGGUT')->count()),
            Stat::make('KEMBANG JANGGUT [Terverifikasi]', Relawan::where('kelurahan', 'KEMBANG JANGGUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEMBANG JANGGUT [Proses]', Relawan::where('kelurahan', 'KEMBANG JANGGUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HAMBAU', Relawan::where('kelurahan', 'HAMBAU')->count()),
            Stat::make('HAMBAU [Terverifikasi]', Relawan::where('kelurahan', 'HAMBAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HAMBAU [Proses]', Relawan::where('kelurahan', 'HAMBAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG BELEH MODANG', Relawan::where('kelurahan', 'LONG BELEH MODANG')->count()),
            Stat::make('LONG BELEH MODANG [Terverifikasi]', Relawan::where('kelurahan', 'LONG BELEH MODANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BELEH MODANG [Proses]', Relawan::where('kelurahan', 'LONG BELEH MODANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GENTING TANAH', Relawan::where('kelurahan', 'GENTING TANAH')->count()),
            Stat::make('GENTING TANAH [Terverifikasi]', Relawan::where('kelurahan', 'GENTING TANAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GENTING TANAH [Proses]', Relawan::where('kelurahan', 'GENTING TANAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERDANA', Relawan::where('kelurahan', 'PERDANA')->count()),
            Stat::make('PERDANA [Terverifikasi]', Relawan::where('kelurahan', 'PERDANA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERDANA [Proses]', Relawan::where('kelurahan', 'PERDANA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUAI', Relawan::where('kelurahan', 'MUAI')->count()),
            Stat::make('MUAI [Terverifikasi]', Relawan::where('kelurahan', 'MUAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUAI [Proses]', Relawan::where('kelurahan', 'MUAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG BELEH HALOQ', Relawan::where('kelurahan', 'LONG BELEH HALOQ')->count()),
            Stat::make('LONG BELEH HALOQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG BELEH HALOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BELEH HALOQ [Proses]', Relawan::where('kelurahan', 'LONG BELEH HALOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA SAKOH', Relawan::where('kelurahan', 'LOA SAKOH')->count()),
            Stat::make('LOA SAKOH [Terverifikasi]', Relawan::where('kelurahan', 'LOA SAKOH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA SAKOH [Proses]', Relawan::where('kelurahan', 'LOA SAKOH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU PINANG', Relawan::where('kelurahan', 'PULAU PINANG')->count()),
            Stat::make('PULAU PINANG [Terverifikasi]', Relawan::where('kelurahan', 'PULAU PINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU PINANG [Proses]', Relawan::where('kelurahan', 'PULAU PINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELEKAT', Relawan::where('kelurahan', 'KELEKAT')->count()),
            Stat::make('KELEKAT [Terverifikasi]', Relawan::where('kelurahan', 'KELEKAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELEKAT [Proses]', Relawan::where('kelurahan', 'KELEKAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT LAYANG', Relawan::where('kelurahan', 'BUKIT LAYANG')->count()),
            Stat::make('BUKIT LAYANG [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT LAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT LAYANG [Proses]', Relawan::where('kelurahan', 'BUKIT LAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kenohan
            BaseWidget\Card::make('Kecamatan', 'KENOHAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TUANA TUHA', Relawan::where('kelurahan', 'TUANA TUHA')->count()),
            Stat::make('TUANA TUHA [Terverifikasi]', Relawan::where('kelurahan', 'TUANA TUHA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUANA TUHA [Proses]', Relawan::where('kelurahan', 'TUANA TUHA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LAMIN TELIHAN', Relawan::where('kelurahan', 'LAMIN TELIHAN')->count()),
            Stat::make('LAMIN TELIHAN [Terverifikasi]', Relawan::where('kelurahan', 'LAMIN TELIHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAMIN TELIHAN [Proses]', Relawan::where('kelurahan', 'LAMIN TELIHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LAMIN PULUT', Relawan::where('kelurahan', 'LAMIN PULUT')->count()),
            Stat::make('LAMIN PULUT [Terverifikasi]', Relawan::where('kelurahan', 'LAMIN PULUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAMIN PULUT [Proses]', Relawan::where('kelurahan', 'LAMIN PULUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK BINGKAI', Relawan::where('kelurahan', 'TELUK BINGKAI')->count()),
            Stat::make('TELUK BINGKAI [Terverifikasi]', Relawan::where('kelurahan', 'TELUK BINGKAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK BINGKAI [Proses]', Relawan::where('kelurahan', 'TELUK BINGKAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMAYANG', Relawan::where('kelurahan', 'SEMAYANG')->count()),
            Stat::make('SEMAYANG [Terverifikasi]', Relawan::where('kelurahan', 'SEMAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMAYANG [Proses]', Relawan::where('kelurahan', 'SEMAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUBUHAN', Relawan::where('kelurahan', 'TUBUHAN')->count()),
            Stat::make('TUBUHAN [Terverifikasi]', Relawan::where('kelurahan', 'TUBUHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUBUHAN [Proses]', Relawan::where('kelurahan', 'TUBUHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK MUDA', Relawan::where('kelurahan', 'TELUK MUDA')->count()),
            Stat::make('TELUK MUDA [Terverifikasi]', Relawan::where('kelurahan', 'TELUK MUDA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK MUDA [Proses]', Relawan::where('kelurahan', 'TELUK MUDA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAHALA', Relawan::where('kelurahan', 'KAHALA')->count()),
            Stat::make('KAHALA [Terverifikasi]', Relawan::where('kelurahan', 'KAHALA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAHALA [Proses]', Relawan::where('kelurahan', 'KAHALA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAHALA ILIR', Relawan::where('kelurahan', 'KAHALA ILIR')->count()),
            Stat::make('KAHALA ILIR [Terverifikasi]', Relawan::where('kelurahan', 'KAHALA ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAHALA ILIR [Proses]', Relawan::where('kelurahan', 'KAHALA ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Kota Bangun
            BaseWidget\Card::make('Kecamatan', 'KOTA BANGUN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KOTA BANGUN ULU', Relawan::where('kelurahan', 'KOTA BANGUN ULU')->count()),
            Stat::make('KOTA BANGUN ULU [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN ULU [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOTA BANGUN III', Relawan::where('kelurahan', 'KOTA BANGUN III')->count()),
            Stat::make('KOTA BANGUN III [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN III')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN III [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN III')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KEDANG IPIL', Relawan::where('kelurahan', 'KEDANG IPIL')->count()),
            Stat::make('KEDANG IPIL [Terverifikasi]', Relawan::where('kelurahan', 'KEDANG IPIL')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEDANG IPIL [Proses]', Relawan::where('kelurahan', 'KEDANG IPIL')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PELA', Relawan::where('kelurahan', 'PELA')->count()),
            Stat::make('PELA [Terverifikasi]', Relawan::where('kelurahan', 'PELA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PELA [Proses]', Relawan::where('kelurahan', 'PELA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIANG', Relawan::where('kelurahan', 'LIANG')->count()),
            Stat::make('LIANG [Terverifikasi]', Relawan::where('kelurahan', 'LIANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIANG [Proses]', Relawan::where('kelurahan', 'LIANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOTA BANGUN II', Relawan::where('kelurahan', 'KOTA BANGUN II')->count()),
            Stat::make('KOTA BANGUN II [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN II')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN II [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN II')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOLENG', Relawan::where('kelurahan', 'LOLENG')->count()),
            Stat::make('LOLENG [Terverifikasi]', Relawan::where('kelurahan', 'LOLENG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOLENG [Proses]', Relawan::where('kelurahan', 'LOLENG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOTA BANGUN ILIR', Relawan::where('kelurahan', 'KOTA BANGUN ILIR')->count()),
            Stat::make('KOTA BANGUN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN ILIR [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOTA BANGUN I', Relawan::where('kelurahan', 'KOTA BANGUN I')->count()),
            Stat::make('KOTA BANGUN I [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN I')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN I [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN I')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KEDANG MURUNG', Relawan::where('kelurahan', 'KEDANG MURUNG')->count()),
            Stat::make('KEDANG MURUNG [Terverifikasi]', Relawan::where('kelurahan', 'KEDANG MURUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEDANG MURUNG [Proses]', Relawan::where('kelurahan', 'KEDANG MURUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SARI NADI', Relawan::where('kelurahan', 'SARI NADI')->count()),
            Stat::make('SARI NADI [Terverifikasi]', Relawan::where('kelurahan', 'SARI NADI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SARI NADI [Proses]', Relawan::where('kelurahan', 'SARI NADI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KOTA BANGUN SEBERANG', Relawan::where('kelurahan', 'KOTA BANGUN SEBERANG')->count()),
            Stat::make('KOTA BANGUN SEBERANG [Terverifikasi]', Relawan::where('kelurahan', 'KOTA BANGUN SEBERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KOTA BANGUN SEBERANG [Proses]', Relawan::where('kelurahan', 'KOTA BANGUN SEBERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIANG ULU', Relawan::where('kelurahan', 'LIANG ULU')->count()),
            Stat::make('LIANG ULU [Terverifikasi]', Relawan::where('kelurahan', 'LIANG ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIANG ULU [Proses]', Relawan::where('kelurahan', 'LIANG ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA BUMI', Relawan::where('kelurahan', 'SUKA BUMI')->count()),
            Stat::make('SUKA BUMI [Terverifikasi]', Relawan::where('kelurahan', 'SUKA BUMI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA BUMI [Proses]', Relawan::where('kelurahan', 'SUKA BUMI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBELIMBINGAN', Relawan::where('kelurahan', 'SEBELIMBINGAN')->count()),
            Stat::make('SEBELIMBINGAN [Terverifikasi]', Relawan::where('kelurahan', 'SEBELIMBINGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBELIMBINGAN [Proses]', Relawan::where('kelurahan', 'SEBELIMBINGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGKULIMAN', Relawan::where('kelurahan', 'SANGKULIMAN')->count()),
            Stat::make('SANGKULIMAN [Terverifikasi]', Relawan::where('kelurahan', 'SANGKULIMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGKULIMAN [Proses]', Relawan::where('kelurahan', 'SANGKULIMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUHURAN', Relawan::where('kelurahan', 'MUHURAN')->count()),
            Stat::make('MUHURAN [Terverifikasi]', Relawan::where('kelurahan', 'MUHURAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUHURAN [Proses]', Relawan::where('kelurahan', 'MUHURAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEDULANG', Relawan::where('kelurahan', 'SEDULANG')->count()),
            Stat::make('SEDULANG [Terverifikasi]', Relawan::where('kelurahan', 'SEDULANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEDULANG [Proses]', Relawan::where('kelurahan', 'SEDULANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WONOSARI', Relawan::where('kelurahan', 'WONOSARI')->count()),
            Stat::make('WONOSARI [Terverifikasi]', Relawan::where('kelurahan', 'WONOSARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WONOSARI [Proses]', Relawan::where('kelurahan', 'WONOSARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENUA BARU', Relawan::where('kelurahan', 'BENUA BARU')->count()),
            Stat::make('BENUA BARU [Terverifikasi]', Relawan::where('kelurahan', 'BENUA BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUA BARU [Proses]', Relawan::where('kelurahan', 'BENUA BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Loa Janan
            BaseWidget\Card::make('Kecamatan', 'LOA JANAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LOA DURI ILIR', Relawan::where('kelurahan', 'LOA DURI ILIR')->count()),
            Stat::make('LOA DURI ILIR [Terverifikasi]', Relawan::where('kelurahan', 'LOA DURI ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA DURI ILIR [Proses]', Relawan::where('kelurahan', 'LOA DURI ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA DURI ULU', Relawan::where('kelurahan', 'LOA DURI ULU')->count()),
            Stat::make('LOA DURI ULU [Terverifikasi]', Relawan::where('kelurahan', 'LOA DURI ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA DURI ULU [Proses]', Relawan::where('kelurahan', 'LOA DURI ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATUAH', Relawan::where('kelurahan', 'BATUAH')->count()),
            Stat::make('BATUAH [Terverifikasi]', Relawan::where('kelurahan', 'BATUAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATUAH [Proses]', Relawan::where('kelurahan', 'BATUAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PURWAJAYA', Relawan::where('kelurahan', 'PURWAJAYA')->count()),
            Stat::make('PURWAJAYA [Terverifikasi]', Relawan::where('kelurahan', 'PURWAJAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PURWAJAYA [Proses]', Relawan::where('kelurahan', 'PURWAJAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BAKUNGAN', Relawan::where('kelurahan', 'BAKUNGAN')->count()),
            Stat::make('BAKUNGAN [Terverifikasi]', Relawan::where('kelurahan', 'BAKUNGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BAKUNGAN [Proses]', Relawan::where('kelurahan', 'BAKUNGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANI BHAKTI', Relawan::where('kelurahan', 'TANI BHAKTI')->count()),
            Stat::make('TANI BHAKTI [Terverifikasi]', Relawan::where('kelurahan', 'TANI BHAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANI BHAKTI [Proses]', Relawan::where('kelurahan', 'TANI BHAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA JANAN ULU', Relawan::where('kelurahan', 'LOA JANAN ULU')->count()),
            Stat::make('LOA JANAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'LOA JANAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA JANAN ULU [Proses]', Relawan::where('kelurahan', 'LOA JANAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANI HARAPAN', Relawan::where('kelurahan', 'TANI HARAPAN')->count()),
            Stat::make('TANI HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'TANI HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANI HARAPAN [Proses]', Relawan::where('kelurahan', 'TANI HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Loa Kulu
            BaseWidget\Card::make('Kecamatan', 'LOA KULU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('REMPANGA', Relawan::where('kelurahan', 'REMPANGA')->count()),
            Stat::make('REMPANGA [Terverifikasi]', Relawan::where('kelurahan', 'REMPANGA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('REMPANGA [Proses]', Relawan::where('kelurahan', 'REMPANGA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA KULU KOTA', Relawan::where('kelurahan', 'LOA KULU KOTA')->count()),
            Stat::make('LOA KULU KOTA [Terverifikasi]', Relawan::where('kelurahan', 'LOA KULU KOTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA KULU KOTA [Proses]', Relawan::where('kelurahan', 'LOA KULU KOTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOH SUMBER', Relawan::where('kelurahan', 'LOH SUMBER')->count()),
            Stat::make('LOH SUMBER [Terverifikasi]', Relawan::where('kelurahan', 'LOH SUMBER')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOH SUMBER [Proses]', Relawan::where('kelurahan', 'LOH SUMBER')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PONORAGAN', Relawan::where('kelurahan', 'PONORAGAN')->count()),
            Stat::make('PONORAGAN [Terverifikasi]', Relawan::where('kelurahan', 'PONORAGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PONORAGAN [Proses]', Relawan::where('kelurahan', 'PONORAGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPAKAT', Relawan::where('kelurahan', 'SEPAKAT')->count()),
            Stat::make('SEPAKAT [Terverifikasi]', Relawan::where('kelurahan', 'SEPAKAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPAKAT [Proses]', Relawan::where('kelurahan', 'SEPAKAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JONGKANG', Relawan::where('kelurahan', 'JONGKANG')->count()),
            Stat::make('JONGKANG [Terverifikasi]', Relawan::where('kelurahan', 'JONGKANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JONGKANG [Proses]', Relawan::where('kelurahan', 'JONGKANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUNG ANAI', Relawan::where('kelurahan', 'LUNG ANAI')->count()),
            Stat::make('LUNG ANAI [Terverifikasi]', Relawan::where('kelurahan', 'LUNG ANAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUNG ANAI [Proses]', Relawan::where('kelurahan', 'LUNG ANAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGA RAHAYU', Relawan::where('kelurahan', 'MARGA RAHAYU')->count()),
            Stat::make('MARGA RAHAYU [Terverifikasi]', Relawan::where('kelurahan', 'MARGA RAHAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGA RAHAYU [Proses]', Relawan::where('kelurahan', 'MARGA RAHAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JONGGON JAYA', Relawan::where('kelurahan', 'JONGGON JAYA')->count()),
            Stat::make('JONGGON JAYA [Terverifikasi]', Relawan::where('kelurahan', 'JONGGON JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JONGGON JAYA [Proses]', Relawan::where('kelurahan', 'JONGGON JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JEMBAYAN', Relawan::where('kelurahan', 'JEMBAYAN')->count()),
            Stat::make('JEMBAYAN [Terverifikasi]', Relawan::where('kelurahan', 'JEMBAYAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JEMBAYAN [Proses]', Relawan::where('kelurahan', 'JEMBAYAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JEMBAYAN DALAM', Relawan::where('kelurahan', 'JEMBAYAN DALAM')->count()),
            Stat::make('JEMBAYAN DALAM [Terverifikasi]', Relawan::where('kelurahan', 'JEMBAYAN DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JEMBAYAN DALAM [Proses]', Relawan::where('kelurahan', 'JEMBAYAN DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI PAYANG', Relawan::where('kelurahan', 'SUNGAI PAYANG')->count()),
            Stat::make('SUNGAI PAYANG [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI PAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI PAYANG [Proses]', Relawan::where('kelurahan', 'SUNGAI PAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JEMBAYAN TENGAH', Relawan::where('kelurahan', 'JEMBAYAN TENGAH')->count()),
            Stat::make('JEMBAYAN TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'JEMBAYAN TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JEMBAYAN TENGAH [Proses]', Relawan::where('kelurahan', 'JEMBAYAN TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JONGGON DESA', Relawan::where('kelurahan', 'JONGGON DESA')->count()),
            Stat::make('JONGGON DESA [Terverifikasi]', Relawan::where('kelurahan', 'JONGGON DESA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JONGGON DESA [Proses]', Relawan::where('kelurahan', 'JONGGON DESA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Marang Kayu
            BaseWidget\Card::make('Kecamatan', 'MARANG KAYU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SEBUNTAL', Relawan::where('kelurahan', 'SEBUNTAL')->count()),
            Stat::make('SEBUNTAL [Terverifikasi]', Relawan::where('kelurahan', 'SEBUNTAL')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBUNTAL [Proses]', Relawan::where('kelurahan', 'SEBUNTAL')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PRANGAT SELATAN', Relawan::where('kelurahan', 'PRANGAT SELATAN')->count()),
            Stat::make('PRANGAT SELATAN [Terverifikasi]', Relawan::where('kelurahan', 'PRANGAT SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PRANGAT SELATAN [Proses]', Relawan::where('kelurahan', 'PRANGAT SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANTAN ULU', Relawan::where('kelurahan', 'SANTAN ULU')->count()),
            Stat::make('SANTAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'SANTAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANTAN ULU [Proses]', Relawan::where('kelurahan', 'SANTAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMANGKOK', Relawan::where('kelurahan', 'SEMANGKOK')->count()),
            Stat::make('SEMANGKOK [Terverifikasi]', Relawan::where('kelurahan', 'SEMANGKOK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMANGKOK [Proses]', Relawan::where('kelurahan', 'SEMANGKOK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUNGA PUTIH', Relawan::where('kelurahan', 'BUNGA PUTIH')->count()),
            Stat::make('BUNGA PUTIH [Terverifikasi]', Relawan::where('kelurahan', 'BUNGA PUTIH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUNGA PUTIH [Proses]', Relawan::where('kelurahan', 'BUNGA PUTIH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MAKARTI', Relawan::where('kelurahan', 'MAKARTI')->count()),
            Stat::make('MAKARTI [Terverifikasi]', Relawan::where('kelurahan', 'MAKARTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MAKARTI [Proses]', Relawan::where('kelurahan', 'MAKARTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PRANGAT BARU', Relawan::where('kelurahan', 'PRANGAT BARU')->count()),
            Stat::make('PRANGAT BARU [Terverifikasi]', Relawan::where('kelurahan', 'PRANGAT BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PRANGAT BARU [Proses]', Relawan::where('kelurahan', 'PRANGAT BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERSIK', Relawan::where('kelurahan', 'KERSIK')->count()),
            Stat::make('KERSIK [Terverifikasi]', Relawan::where('kelurahan', 'KERSIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERSIK [Proses]', Relawan::where('kelurahan', 'KERSIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBERA BARU', Relawan::where('kelurahan', 'SAMBERA BARU')->count()),
            Stat::make('SAMBERA BARU [Terverifikasi]', Relawan::where('kelurahan', 'SAMBERA BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBERA BARU [Proses]', Relawan::where('kelurahan', 'SAMBERA BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANTAN TENGAH', Relawan::where('kelurahan', 'SANTAN TENGAH')->count()),
            Stat::make('SANTAN TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'SANTAN TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANTAN TENGAH [Proses]', Relawan::where('kelurahan', 'SANTAN TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANTAN ILIR', Relawan::where('kelurahan', 'SANTAN ILIR')->count()),
            Stat::make('SANTAN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'SANTAN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANTAN ILIR [Proses]', Relawan::where('kelurahan', 'SANTAN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Muara Badak
            BaseWidget\Card::make('Kecamatan', 'MUARA BADAK')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BADAK BARU', Relawan::where('kelurahan', 'BADAK BARU')->count()),
            Stat::make('BADAK BARU [Terverifikasi]', Relawan::where('kelurahan', 'BADAK BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BADAK BARU [Proses]', Relawan::where('kelurahan', 'BADAK BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BADAK ILIR', Relawan::where('kelurahan', 'MUARA BADAK ILIR')->count()),
            Stat::make('MUARA BADAK ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BADAK ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BADAK ILIR [Proses]', Relawan::where('kelurahan', 'MUARA BADAK ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GAS ALAM BADAK I', Relawan::where('kelurahan', 'GAS ALAM BADAK I')->count()),
            Stat::make('GAS ALAM BADAK I [Terverifikasi]', Relawan::where('kelurahan', 'GAS ALAM BADAK I')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GAS ALAM BADAK I [Proses]', Relawan::where('kelurahan', 'GAS ALAM BADAK I')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BADAK ULU', Relawan::where('kelurahan', 'MUARA BADAK ULU')->count()),
            Stat::make('MUARA BADAK ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BADAK ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BADAK ULU [Proses]', Relawan::where('kelurahan', 'MUARA BADAK ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH DATAR', Relawan::where('kelurahan', 'TANAH DATAR')->count()),
            Stat::make('TANAH DATAR [Terverifikasi]', Relawan::where('kelurahan', 'TANAH DATAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH DATAR [Proses]', Relawan::where('kelurahan', 'TANAH DATAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG LIMAU', Relawan::where('kelurahan', 'TANJUNG LIMAU')->count()),
            Stat::make('TANJUNG LIMAU [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG LIMAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG LIMAU [Proses]', Relawan::where('kelurahan', 'TANJUNG LIMAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU-BATU', Relawan::where('kelurahan', 'BATU-BATU')->count()),
            Stat::make('BATU-BATU [Terverifikasi]', Relawan::where('kelurahan', 'BATU-BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU-BATU [Proses]', Relawan::where('kelurahan', 'BATU-BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALO PALAI', Relawan::where('kelurahan', 'SALO PALAI')->count()),
            Stat::make('SALO PALAI [Terverifikasi]', Relawan::where('kelurahan', 'SALO PALAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALO PALAI [Proses]', Relawan::where('kelurahan', 'SALO PALAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA DAMAI', Relawan::where('kelurahan', 'SUKA DAMAI')->count()),
            Stat::make('SUKA DAMAI [Terverifikasi]', Relawan::where('kelurahan', 'SUKA DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA DAMAI [Proses]', Relawan::where('kelurahan', 'SUKA DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALO CELLA', Relawan::where('kelurahan', 'SALO CELLA')->count()),
            Stat::make('SALO CELLA [Terverifikasi]', Relawan::where('kelurahan', 'SALO CELLA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALO CELLA [Proses]', Relawan::where('kelurahan', 'SALO CELLA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALIKI', Relawan::where('kelurahan', 'SALIKI')->count()),
            Stat::make('SALIKI [Terverifikasi]', Relawan::where('kelurahan', 'SALIKI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALIKI [Proses]', Relawan::where('kelurahan', 'SALIKI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI BAWANG', Relawan::where('kelurahan', 'SUNGAI BAWANG')->count()),
            Stat::make('SUNGAI BAWANG [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI BAWANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI BAWANG [Proses]', Relawan::where('kelurahan', 'SUNGAI BAWANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BADAK MEKAR', Relawan::where('kelurahan', 'BADAK MEKAR')->count()),
            Stat::make('BADAK MEKAR [Terverifikasi]', Relawan::where('kelurahan', 'BADAK MEKAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BADAK MEKAR [Proses]', Relawan::where('kelurahan', 'BADAK MEKAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Muara Jawa
            BaseWidget\Card::make('Kecamatan', 'MUARA JAWA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('DONDANG', Relawan::where('kelurahan', 'DONDANG')->count()),
            Stat::make('DONDANG [Terverifikasi]', Relawan::where('kelurahan', 'DONDANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DONDANG [Proses]', Relawan::where('kelurahan', 'DONDANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA JAWA ILIR', Relawan::where('kelurahan', 'MUARA JAWA ILIR')->count()),
            Stat::make('MUARA JAWA ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA JAWA ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA JAWA ILIR [Proses]', Relawan::where('kelurahan', 'MUARA JAWA ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA JAWA PESISIR', Relawan::where('kelurahan', 'MUARA JAWA PESISIR')->count()),
            Stat::make('MUARA JAWA PESISIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA JAWA PESISIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA JAWA PESISIR [Proses]', Relawan::where('kelurahan', 'MUARA JAWA PESISIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA JAWA TENGAH', Relawan::where('kelurahan', 'MUARA JAWA TENGAH')->count()),
            Stat::make('MUARA JAWA TENGAH [Terverifikasi]', Relawan::where('kelurahan', 'MUARA JAWA TENGAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA JAWA TENGAH [Proses]', Relawan::where('kelurahan', 'MUARA JAWA TENGAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA JAWA ULU', Relawan::where('kelurahan', 'MUARA JAWA ULU')->count()),
            Stat::make('MUARA JAWA ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA JAWA ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA JAWA ULU [Proses]', Relawan::where('kelurahan', 'MUARA JAWA ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KEMBANG', Relawan::where('kelurahan', 'MUARA KEMBANG')->count()),
            Stat::make('MUARA KEMBANG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KEMBANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KEMBANG [Proses]', Relawan::where('kelurahan', 'MUARA KEMBANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAMA POLE', Relawan::where('kelurahan', 'TAMA POLE')->count()),
            Stat::make('TAMA POLE [Terverifikasi]', Relawan::where('kelurahan', 'TAMA POLE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAMA POLE [Proses]', Relawan::where('kelurahan', 'TAMA POLE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK DALAM', Relawan::where('kelurahan', 'TELUK DALAM')->count()),
            Stat::make('TELUK DALAM [Terverifikasi]', Relawan::where('kelurahan', 'TELUK DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK DALAM [Proses]', Relawan::where('kelurahan', 'TELUK DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Muara Kaman
            BaseWidget\Card::make('Kecamatan', 'MUARA KAMAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('PANCA JAYA', Relawan::where('kelurahan', 'PANCA JAYA')->count()),
            Stat::make('PANCA JAYA [Terverifikasi]', Relawan::where('kelurahan', 'PANCA JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANCA JAYA [Proses]', Relawan::where('kelurahan', 'PANCA JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUNGA JADI', Relawan::where('kelurahan', 'BUNGA JADI')->count()),
            Stat::make('BUNGA JADI [Terverifikasi]', Relawan::where('kelurahan', 'BUNGA JADI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUNGA JADI [Proses]', Relawan::where('kelurahan', 'BUNGA JADI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENUA PUHUN', Relawan::where('kelurahan', 'BENUA PUHUN')->count()),
            Stat::make('BENUA PUHUN [Terverifikasi]', Relawan::where('kelurahan', 'BENUA PUHUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENUA PUHUN [Proses]', Relawan::where('kelurahan', 'BENUA PUHUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KAMAN ULU', Relawan::where('kelurahan', 'MUARA KAMAN ULU')->count()),
            Stat::make('MUARA KAMAN ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KAMAN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KAMAN ULU [Proses]', Relawan::where('kelurahan', 'MUARA KAMAN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOMUKTI', Relawan::where('kelurahan', 'SIDOMUKTI')->count()),
            Stat::make('SIDOMUKTI [Terverifikasi]', Relawan::where('kelurahan', 'SIDOMUKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOMUKTI [Proses]', Relawan::where('kelurahan', 'SIDOMUKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KAMAN ILIR', Relawan::where('kelurahan', 'MUARA KAMAN ILIR')->count()),
            Stat::make('MUARA KAMAN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KAMAN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KAMAN ILIR [Proses]', Relawan::where('kelurahan', 'MUARA KAMAN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA SIRAN', Relawan::where('kelurahan', 'MUARA SIRAN')->count()),
            Stat::make('MUARA SIRAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA SIRAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA SIRAN [Proses]', Relawan::where('kelurahan', 'MUARA SIRAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PUAN CEPAK', Relawan::where('kelurahan', 'PUAN CEPAK')->count()),
            Stat::make('PUAN CEPAK [Terverifikasi]', Relawan::where('kelurahan', 'PUAN CEPAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PUAN CEPAK [Proses]', Relawan::where('kelurahan', 'PUAN CEPAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TERATAK', Relawan::where('kelurahan', 'TERATAK')->count()),
            Stat::make('TERATAK [Terverifikasi]', Relawan::where('kelurahan', 'TERATAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TERATAK [Proses]', Relawan::where('kelurahan', 'TERATAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU HEMPANG', Relawan::where('kelurahan', 'RANTAU HEMPANG')->count()),
            Stat::make('RANTAU HEMPANG [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU HEMPANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU HEMPANG [Proses]', Relawan::where('kelurahan', 'RANTAU HEMPANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEBAHO ULAQ', Relawan::where('kelurahan', 'LEBAHO ULAQ')->count()),
            Stat::make('LEBAHO ULAQ [Terverifikasi]', Relawan::where('kelurahan', 'LEBAHO ULAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEBAHO ULAQ [Proses]', Relawan::where('kelurahan', 'LEBAHO ULAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SABINTULUNG', Relawan::where('kelurahan', 'SABINTULUNG')->count()),
            Stat::make('SABINTULUNG [Terverifikasi]', Relawan::where('kelurahan', 'SABINTULUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SABINTULUNG [Proses]', Relawan::where('kelurahan', 'SABINTULUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT JERING', Relawan::where('kelurahan', 'BUKIT JERING')->count()),
            Stat::make('BUKIT JERING [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT JERING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT JERING [Proses]', Relawan::where('kelurahan', 'BUKIT JERING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('CIPARI MAKMUR', Relawan::where('kelurahan', 'CIPARI MAKMUR')->count()),
            Stat::make('CIPARI MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'CIPARI MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('CIPARI MAKMUR [Proses]', Relawan::where('kelurahan', 'CIPARI MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEDULANG', Relawan::where('kelurahan', 'SEDULANG')->count()),
            Stat::make('SEDULANG [Terverifikasi]', Relawan::where('kelurahan', 'SEDULANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEDULANG [Proses]', Relawan::where('kelurahan', 'SEDULANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENAMANG KIRI', Relawan::where('kelurahan', 'MENAMANG KIRI')->count()),
            Stat::make('MENAMANG KIRI [Terverifikasi]', Relawan::where('kelurahan', 'MENAMANG KIRI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENAMANG KIRI [Proses]', Relawan::where('kelurahan', 'MENAMANG KIRI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENAMANG KANAN', Relawan::where('kelurahan', 'MENAMANG KANAN')->count()),
            Stat::make('MENAMANG KANAN [Terverifikasi]', Relawan::where('kelurahan', 'MENAMANG KANAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENAMANG KANAN [Proses]', Relawan::where('kelurahan', 'MENAMANG KANAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUNJUNGAN', Relawan::where('kelurahan', 'TUNJUNGAN')->count()),
            Stat::make('TUNJUNGAN [Terverifikasi]', Relawan::where('kelurahan', 'TUNJUNGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUNJUNGAN [Proses]', Relawan::where('kelurahan', 'TUNJUNGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIANG BUAYA', Relawan::where('kelurahan', 'LIANG BUAYA')->count()),
            Stat::make('LIANG BUAYA [Terverifikasi]', Relawan::where('kelurahan', 'LIANG BUAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIANG BUAYA [Proses]', Relawan::where('kelurahan', 'LIANG BUAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KUPANG BARU', Relawan::where('kelurahan', 'KUPANG BARU')->count()),
            Stat::make('KUPANG BARU [Terverifikasi]', Relawan::where('kelurahan', 'KUPANG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KUPANG BARU [Proses]', Relawan::where('kelurahan', 'KUPANG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Muara Muntai
            BaseWidget\Card::make('Kecamatan', 'MUARA MUNTAI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('PERIAN', Relawan::where('kelurahan', 'PERIAN')->count()),
            Stat::make('PERIAN [Terverifikasi]', Relawan::where('kelurahan', 'PERIAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERIAN [Proses]', Relawan::where('kelurahan', 'PERIAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA MUNTAI ILIR', Relawan::where('kelurahan', 'MUARA MUNTAI ILIR')->count()),
            Stat::make('MUARA MUNTAI ILIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA MUNTAI ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA MUNTAI ILIR [Proses]', Relawan::where('kelurahan', 'MUARA MUNTAI ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA MUNTAI ULU', Relawan::where('kelurahan', 'MUARA MUNTAI ULU')->count()),
            Stat::make('MUARA MUNTAI ULU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA MUNTAI ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA MUNTAI ULU [Proses]', Relawan::where('kelurahan', 'MUARA MUNTAI ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU HARAPAN', Relawan::where('kelurahan', 'PULAU HARAPAN')->count()),
            Stat::make('PULAU HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'PULAU HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU HARAPAN [Proses]', Relawan::where('kelurahan', 'PULAU HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAYU BATU', Relawan::where('kelurahan', 'KAYU BATU')->count()),
            Stat::make('KAYU BATU [Terverifikasi]', Relawan::where('kelurahan', 'KAYU BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAYU BATU [Proses]', Relawan::where('kelurahan', 'KAYU BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA LEKA', Relawan::where('kelurahan', 'MUARA LEKA')->count()),
            Stat::make('MUARA LEKA [Terverifikasi]', Relawan::where('kelurahan', 'MUARA LEKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA LEKA [Proses]', Relawan::where('kelurahan', 'MUARA LEKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JANTUR BARU', Relawan::where('kelurahan', 'JANTUR BARU')->count()),
            Stat::make('JANTUR BARU [Terverifikasi]', Relawan::where('kelurahan', 'JANTUR BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JANTUR BARU [Proses]', Relawan::where('kelurahan', 'JANTUR BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATUQ', Relawan::where('kelurahan', 'BATUQ')->count()),
            Stat::make('BATUQ [Terverifikasi]', Relawan::where('kelurahan', 'BATUQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATUQ [Proses]', Relawan::where('kelurahan', 'BATUQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JANTUR', Relawan::where('kelurahan', 'JANTUR')->count()),
            Stat::make('JANTUR [Terverifikasi]', Relawan::where('kelurahan', 'JANTUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JANTUR [Proses]', Relawan::where('kelurahan', 'JANTUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JANTUR SELATAN', Relawan::where('kelurahan', 'JANTUR SELATAN')->count()),
            Stat::make('JANTUR SELATAN [Terverifikasi]', Relawan::where('kelurahan', 'JANTUR SELATAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JANTUR SELATAN [Proses]', Relawan::where('kelurahan', 'JANTUR SELATAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('REBAQ RINDING', Relawan::where('kelurahan', 'REBAQ RINDING')->count()),
            Stat::make('REBAQ RINDING [Terverifikasi]', Relawan::where('kelurahan', 'REBAQ RINDING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('REBAQ RINDING [Proses]', Relawan::where('kelurahan', 'REBAQ RINDING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ALOH', Relawan::where('kelurahan', 'MUARA ALOH')->count()),
            Stat::make('MUARA ALOH [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ALOH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ALOH [Proses]', Relawan::where('kelurahan', 'MUARA ALOH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG BATUQ HARAPAN', Relawan::where('kelurahan', 'TANJUNG BATUQ HARAPAN')->count()),
            Stat::make('TANJUNG BATUQ HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG BATUQ HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG BATUQ HARAPAN [Proses]', Relawan::where('kelurahan', 'TANJUNG BATUQ HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Muara Wis
            BaseWidget\Card::make('Kecamatan', 'MAURA WIS')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LEBAK CILONG', Relawan::where('kelurahan', 'LEBAK CILONG')->count()),
            Stat::make('LEBAK CILONG [Terverifikasi]', Relawan::where('kelurahan', 'LEBAK CILONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEBAK CILONG [Proses]', Relawan::where('kelurahan', 'LEBAK CILONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA WIS', Relawan::where('kelurahan', 'MUARA WIS')->count()),
            Stat::make('MUARA WIS [Terverifikasi]', Relawan::where('kelurahan', 'MUARA WIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA WIS [Proses]', Relawan::where('kelurahan', 'MUARA WIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEBAK MANTAN', Relawan::where('kelurahan', 'LEBAK MANTAN')->count()),
            Stat::make('LEBAK MANTAN [Terverifikasi]', Relawan::where('kelurahan', 'LEBAK MANTAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEBAK MANTAN [Proses]', Relawan::where('kelurahan', 'LEBAK MANTAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ENGGELAM', Relawan::where('kelurahan', 'MUARA ENGGELAM')->count()),
            Stat::make('MUARA ENGGELAM [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ENGGELAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ENGGELAM [Proses]', Relawan::where('kelurahan', 'MUARA ENGGELAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MELINTANG', Relawan::where('kelurahan', 'MELINTANG')->count()),
            Stat::make('MELINTANG [Terverifikasi]', Relawan::where('kelurahan', 'MELINTANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELINTANG [Proses]', Relawan::where('kelurahan', 'MELINTANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBEMBAN', Relawan::where('kelurahan', 'SEBEMBAN')->count()),
            Stat::make('SEBEMBAN [Terverifikasi]', Relawan::where('kelurahan', 'SEBEMBAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBEMBAN [Proses]', Relawan::where('kelurahan', 'SEBEMBAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ENGGELAM', Relawan::where('kelurahan', 'ENGGELAM')->count()),
            Stat::make('ENGGELAM [Terverifikasi]', Relawan::where('kelurahan', 'ENGGELAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ENGGELAM [Proses]', Relawan::where('kelurahan', 'ENGGELAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Samboja
            BaseWidget\Card::make('Kecamatan', 'SAMBOJA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TANI BHAKTI', Relawan::where('kelurahan', 'TANI BHAKTI')->count()),
            Stat::make('TANI BHAKTI [Terverifikasi]', Relawan::where('kelurahan', 'TANI BHAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANI BHAKTI [Proses]', Relawan::where('kelurahan', 'TANI BHAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT RAYA', Relawan::where('kelurahan', 'BUKIT RAYA')->count()),
            Stat::make('BUKIT RAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT RAYA [Proses]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARYA JAYA', Relawan::where('kelurahan', 'KARYA JAYA')->count()),
            Stat::make('KARYA JAYA [Terverifikasi]', Relawan::where('kelurahan', 'KARYA JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARYA JAYA [Proses]', Relawan::where('kelurahan', 'KARYA JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BERINGIN AGUNG', Relawan::where('kelurahan', 'BERINGIN AGUNG')->count()),
            Stat::make('BERINGIN AGUNG [Terverifikasi]', Relawan::where('kelurahan', 'BERINGIN AGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BERINGIN AGUNG [Proses]', Relawan::where('kelurahan', 'BERINGIN AGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('AMBARAWANG DARAT', Relawan::where('kelurahan', 'AMBARAWANG DARAT')->count()),
            Stat::make('AMBARAWANG DARAT [Terverifikasi]', Relawan::where('kelurahan', 'AMBARAWANG DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AMBARAWANG DARAT [Proses]', Relawan::where('kelurahan', 'AMBARAWANG DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('AMBARAWANG LAUT', Relawan::where('kelurahan', 'AMBARAWANG LAUT')->count()),
            Stat::make('AMBARAWANG LAUT [Terverifikasi]', Relawan::where('kelurahan', 'AMBARAWANG LAUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('AMBARAWANG LAUT [Proses]', Relawan::where('kelurahan', 'AMBARAWANG LAUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ARGOSARI', Relawan::where('kelurahan', 'ARGOSARI')->count()),
            Stat::make('ARGOSARI [Terverifikasi]', Relawan::where('kelurahan', 'ARGOSARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ARGOSARI [Proses]', Relawan::where('kelurahan', 'ARGOSARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT MERDEKA', Relawan::where('kelurahan', 'BUKIT MERDEKA')->count()),
            Stat::make('BUKIT MERDEKA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT MERDEKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT MERDEKA [Proses]', Relawan::where('kelurahan', 'BUKIT MERDEKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HANDIL BARU', Relawan::where('kelurahan', 'HANDIL BARU')->count()),
            Stat::make('HANDIL BARU [Terverifikasi]', Relawan::where('kelurahan', 'HANDIL BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HANDIL BARU [Proses]', Relawan::where('kelurahan', 'HANDIL BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HANDIL BARU DARAT', Relawan::where('kelurahan', 'HANDIL BARU DARAT')->count()),
            Stat::make('HANDIL BARU DARAT [Terverifikasi]', Relawan::where('kelurahan', 'HANDIL BARU DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HANDIL BARU DARAT [Proses]', Relawan::where('kelurahan', 'HANDIL BARU DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAMPUNG LAMA', Relawan::where('kelurahan', 'KAMPUNG LAMA')->count()),
            Stat::make('KAMPUNG LAMA [Terverifikasi]', Relawan::where('kelurahan', 'KAMPUNG LAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAMPUNG LAMA [Proses]', Relawan::where('kelurahan', 'KAMPUNG LAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARYA MERDEKA', Relawan::where('kelurahan', 'KARYA MERDEKA')->count()),
            Stat::make('KARYA MERDEKA [Terverifikasi]', Relawan::where('kelurahan', 'KARYA MERDEKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARYA MERDEKA [Proses]', Relawan::where('kelurahan', 'KARYA MERDEKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARGOMULYO', Relawan::where('kelurahan', 'MARGOMULYO')->count()),
            Stat::make('MARGOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'MARGOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARGOMULYO [Proses]', Relawan::where('kelurahan', 'MARGOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA SEMBILANG', Relawan::where('kelurahan', 'MUARA SEMBILANG')->count()),
            Stat::make('MUARA SEMBILANG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA SEMBILANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA SEMBILANG [Proses]', Relawan::where('kelurahan', 'MUARA SEMBILANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALOK API DARAT', Relawan::where('kelurahan', 'SALOK API DARAT')->count()),
            Stat::make('SALOK API DARAT [Terverifikasi]', Relawan::where('kelurahan', 'SALOK API DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALOK API DARAT [Proses]', Relawan::where('kelurahan', 'SALOK API DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SALOK API LAUT', Relawan::where('kelurahan', 'SALOK API LAUT')->count()),
            Stat::make('SALOK API LAUT [Terverifikasi]', Relawan::where('kelurahan', 'SALOK API LAUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SALOK API LAUT [Proses]', Relawan::where('kelurahan', 'SALOK API LAUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMBOJA KUALA', Relawan::where('kelurahan', 'SAMBOJA KUALA')->count()),
            Stat::make('SAMBOJA KUALA [Terverifikasi]', Relawan::where('kelurahan', 'SAMBOJA KUALA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMBOJA KUALA [Proses]', Relawan::where('kelurahan', 'SAMBOJA KUALA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANIPAH', Relawan::where('kelurahan', 'SANIPAH')->count()),
            Stat::make('SANIPAH [Terverifikasi]', Relawan::where('kelurahan', 'SANIPAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANIPAH [Proses]', Relawan::where('kelurahan', 'SANIPAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEI MERDEKA', Relawan::where('kelurahan', 'SEI MERDEKA')->count()),
            Stat::make('SEI MERDEKA [Terverifikasi]', Relawan::where('kelurahan', 'SEI MERDEKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEI MERDEKA [Proses]', Relawan::where('kelurahan', 'SEI MERDEKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI SELUANG', Relawan::where('kelurahan', 'SUNGAI SELUANG')->count()),
            Stat::make('SUNGAI SELUANG [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI SELUANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI SELUANG [Proses]', Relawan::where('kelurahan', 'SUNGAI SELUANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WONOTIRTO', Relawan::where('kelurahan', 'WONOTIRTO')->count()),
            Stat::make('WONOTIRTO [Terverifikasi]', Relawan::where('kelurahan', 'WONOTIRTO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WONOTIRTO [Proses]', Relawan::where('kelurahan', 'WONOTIRTO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG HARAPAN', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->count()),
            Stat::make('TANJUNG HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG HARAPAN [Proses]', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK PEMEDAS', Relawan::where('kelurahan', 'TELUK PEMEDAS')->count()),
            Stat::make('TELUK PEMEDAS [Terverifikasi]', Relawan::where('kelurahan', 'TELUK PEMEDAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK PEMEDAS [Proses]', Relawan::where('kelurahan', 'TELUK PEMEDAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Sanga-Sanga
            BaseWidget\Card::make('Kecamatan', 'SANGA-SANGA')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('JAWA', Relawan::where('kelurahan', 'JAWA')->count()),
            Stat::make('JAWA [Terverifikasi]', Relawan::where('kelurahan', 'JAWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAWA [Proses]', Relawan::where('kelurahan', 'JAWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENDINGIN', Relawan::where('kelurahan', 'PENDINGIN')->count()),
            Stat::make('PENDINGIN [Terverifikasi]', Relawan::where('kelurahan', 'PENDINGIN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENDINGIN [Proses]', Relawan::where('kelurahan', 'PENDINGIN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGA-SANGA DALAM', Relawan::where('kelurahan', 'SANGA-SANGA DALAM')->count()),
            Stat::make('SANGA-SANGA DALAM [Terverifikasi]', Relawan::where('kelurahan', 'SANGA-SANGA DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGA-SANGA DALAM [Proses]', Relawan::where('kelurahan', 'SANGA-SANGA DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGA-SANGA MUARA', Relawan::where('kelurahan', 'SANGA-SANGA MUARA')->count()),
            Stat::make('SANGA-SANGA MUARA [Terverifikasi]', Relawan::where('kelurahan', 'SANGA-SANGA MUARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGA-SANGA MUARA [Proses]', Relawan::where('kelurahan', 'SANGA-SANGA MUARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SARI JAYA', Relawan::where('kelurahan', 'SARI JAYA')->count()),
            Stat::make('SARI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SARI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SARI JAYA [Proses]', Relawan::where('kelurahan', 'SARI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Sebulu
            BaseWidget\Card::make('Kecamatan', 'SEBULU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SUMBER SARI', Relawan::where('kelurahan', 'SUMBER SARI')->count()),
            Stat::make('SUMBER SARI [Terverifikasi]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUMBER SARI [Proses]', Relawan::where('kelurahan', 'SUMBER SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANUNGGAL DAYA', Relawan::where('kelurahan', 'MANUNGGAL DAYA')->count()),
            Stat::make('MANUNGGAL DAYA [Terverifikasi]', Relawan::where('kelurahan', 'MANUNGGAL DAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUNGGAL DAYA [Proses]', Relawan::where('kelurahan', 'MANUNGGAL DAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBULU ULU', Relawan::where('kelurahan', 'SEBULU ULU')->count()),
            Stat::make('SEBULU ULU [Terverifikasi]', Relawan::where('kelurahan', 'SEBULU ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBULU ULU [Proses]', Relawan::where('kelurahan', 'SEBULU ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBULU ILIR', Relawan::where('kelurahan', 'SEBULU ILIR')->count()),
            Stat::make('SEBULU ILIR [Terverifikasi]', Relawan::where('kelurahan', 'SEBULU ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBULU ILIR [Proses]', Relawan::where('kelurahan', 'SEBULU ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBULU MODEREN', Relawan::where('kelurahan', 'SEBULU MODEREN')->count()),
            Stat::make('SEBULU MODEREN [Terverifikasi]', Relawan::where('kelurahan', 'SEBULU MODEREN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBULU MODEREN [Proses]', Relawan::where('kelurahan', 'SEBULU MODEREN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEKAR JAYA', Relawan::where('kelurahan', 'MEKAR JAYA')->count()),
            Stat::make('MEKAR JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MEKAR JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEKAR JAYA [Proses]', Relawan::where('kelurahan', 'MEKAR JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SELERONG', Relawan::where('kelurahan', 'SELERONG')->count()),
            Stat::make('SELERONG [Terverifikasi]', Relawan::where('kelurahan', 'SELERONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SELERONG [Proses]', Relawan::where('kelurahan', 'SELERONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENONI', Relawan::where('kelurahan', 'SENONI')->count()),
            Stat::make('SENONI [Terverifikasi]', Relawan::where('kelurahan', 'SENONI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENONI [Proses]', Relawan::where('kelurahan', 'SENONI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GIRI AGUNG', Relawan::where('kelurahan', 'GIRI AGUNG')->count()),
            Stat::make('GIRI AGUNG [Terverifikasi]', Relawan::where('kelurahan', 'GIRI AGUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GIRI AGUNG [Proses]', Relawan::where('kelurahan', 'GIRI AGUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BELORO', Relawan::where('kelurahan', 'BELORO')->count()),
            Stat::make('BELORO [Terverifikasi]', Relawan::where('kelurahan', 'BELORO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BELORO [Proses]', Relawan::where('kelurahan', 'BELORO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEGIHAN', Relawan::where('kelurahan', 'SEGIHAN')->count()),
            Stat::make('SEGIHAN [Terverifikasi]', Relawan::where('kelurahan', 'SEGIHAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEGIHAN [Proses]', Relawan::where('kelurahan', 'SEGIHAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG HARAPAN', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->count()),
            Stat::make('TANJUNG HARAPAN [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG HARAPAN [Proses]', Relawan::where('kelurahan', 'TANJUNG HARAPAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGGULAN', Relawan::where('kelurahan', 'SANGGULAN')->count()),
            Stat::make('SANGGULAN [Terverifikasi]', Relawan::where('kelurahan', 'SANGGULAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGGULAN [Proses]', Relawan::where('kelurahan', 'SANGGULAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEKAQ KIDAU', Relawan::where('kelurahan', 'LEKAQ KIDAU')->count()),
            Stat::make('LEKAQ KIDAU [Terverifikasi]', Relawan::where('kelurahan', 'LEKAQ KIDAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEKAQ KIDAU [Proses]', Relawan::where('kelurahan', 'LEKAQ KIDAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Tabang
            BaseWidget\Card::make('Kecamatan', 'TABANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BILA TALANG', Relawan::where('kelurahan', 'BILA TALANG')->count()),
            Stat::make('BILA TALANG [Terverifikasi]', Relawan::where('kelurahan', 'BILA TALANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BILA TALANG [Proses]', Relawan::where('kelurahan', 'BILA TALANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG SARI', Relawan::where('kelurahan', 'GUNUNG SARI')->count()),
            Stat::make('GUNUNG SARI [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG SARI [Proses]', Relawan::where('kelurahan', 'GUNUNG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA RITAN', Relawan::where('kelurahan', 'MUARA RITAN')->count()),
            Stat::make('MUARA RITAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA RITAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA RITAN [Proses]', Relawan::where('kelurahan', 'MUARA RITAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PEDOHON', Relawan::where('kelurahan', 'MUARA PEDOHON')->count()),
            Stat::make('MUARA PEDOHON [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PEDOHON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PEDOHON [Proses]', Relawan::where('kelurahan', 'MUARA PEDOHON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIDOMULYO', Relawan::where('kelurahan', 'SIDOMULYO')->count()),
            Stat::make('SIDOMULYO [Terverifikasi]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIDOMULYO [Proses]', Relawan::where('kelurahan', 'SIDOMULYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAMPUNG BARU', Relawan::where('kelurahan', 'KAMPUNG BARU')->count()),
            Stat::make('KAMPUNG BARU [Terverifikasi]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAMPUNG BARU [Proses]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TUKUNG RITAN', Relawan::where('kelurahan', 'TUKUNG RITAN')->count()),
            Stat::make('TUKUNG RITAN [Terverifikasi]', Relawan::where('kelurahan', 'TUKUNG RITAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TUKUNG RITAN [Proses]', Relawan::where('kelurahan', 'TUKUNG RITAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RITAN BARU', Relawan::where('kelurahan', 'RITAN BARU')->count()),
            Stat::make('RITAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'RITAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RITAN BARU [Proses]', Relawan::where('kelurahan', 'RITAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UMAQ DIAN', Relawan::where('kelurahan', 'UMAQ DIAN')->count()),
            Stat::make('UMAQ DIAN [Terverifikasi]', Relawan::where('kelurahan', 'UMAQ DIAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UMAQ DIAN [Proses]', Relawan::where('kelurahan', 'UMAQ DIAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BULUK SEN', Relawan::where('kelurahan', 'BULUK SEN')->count()),
            Stat::make('BULUK SEN [Terverifikasi]', Relawan::where('kelurahan', 'BULUK SEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BULUK SEN [Proses]', Relawan::where('kelurahan', 'BULUK SEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LALANG', Relawan::where('kelurahan', 'LONG LALANG')->count()),
            Stat::make('LONG LALANG [Terverifikasi]', Relawan::where('kelurahan', 'LONG LALANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LALANG [Proses]', Relawan::where('kelurahan', 'LONG LALANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TIQ', Relawan::where('kelurahan', 'MUARA TIQ')->count()),
            Stat::make('MUARA TIQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TIQ [Proses]', Relawan::where('kelurahan', 'MUARA TIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA SALUNG', Relawan::where('kelurahan', 'MUARA SALUNG')->count()),
            Stat::make('MUARA SALUNG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA SALUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA SALUNG [Proses]', Relawan::where('kelurahan', 'MUARA SALUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TUBOQ', Relawan::where('kelurahan', 'MUARA TUBOQ')->count()),
            Stat::make('MUARA TUBOQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TUBOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TUBOQ [Proses]', Relawan::where('kelurahan', 'MUARA TUBOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA BELINAU', Relawan::where('kelurahan', 'MUARA BELINAU')->count()),
            Stat::make('MUARA BELINAU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA BELINAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA BELINAU [Proses]', Relawan::where('kelurahan', 'MUARA BELINAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KEBAQ', Relawan::where('kelurahan', 'MUARA KEBAQ')->count()),
            Stat::make('MUARA KEBAQ [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KEBAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KEBAQ [Proses]', Relawan::where('kelurahan', 'MUARA KEBAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UMAQ TUKUNG', Relawan::where('kelurahan', 'UMAQ TUKUNG')->count()),
            Stat::make('UMAQ TUKUNG [Terverifikasi]', Relawan::where('kelurahan', 'UMAQ TUKUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UMAQ TUKUNG [Proses]', Relawan::where('kelurahan', 'UMAQ TUKUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UMAQ BEKUAY', Relawan::where('kelurahan', 'UMAQ BEKUAY')->count()),
            Stat::make('UMAQ BEKUAY [Terverifikasi]', Relawan::where('kelurahan', 'UMAQ BEKUAY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UMAQ BEKUAY [Proses]', Relawan::where('kelurahan', 'UMAQ BEKUAY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TABANG LAMA', Relawan::where('kelurahan', 'TABANG LAMA')->count()),
            Stat::make('TABANG LAMA [Terverifikasi]', Relawan::where('kelurahan', 'TABANG LAMA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TABANG LAMA [Proses]', Relawan::where('kelurahan', 'TABANG LAMA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Tenggarong
            BaseWidget\Card::make('Kecamatan', 'TENGGARONG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('RAMPAK LAMBUR', Relawan::where('kelurahan', 'RAMPAK LAMBUR')->count()),
            Stat::make('RAMPAK LAMBUR [Terverifikasi]', Relawan::where('kelurahan', 'RAMPAK LAMBUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RAMPAK LAMBUR [Proses]', Relawan::where('kelurahan', 'RAMPAK LAMBUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENDANG RAYA', Relawan::where('kelurahan', 'BENDANG RAYA')->count()),
            Stat::make('BENDANG RAYA [Terverifikasi]', Relawan::where('kelurahan', 'BENDANG RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENDANG RAYA [Proses]', Relawan::where('kelurahan', 'BENDANG RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT BIRU', Relawan::where('kelurahan', 'BUKIT BIRU')->count()),
            Stat::make('BUKIT BIRU [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT BIRU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT BIRU [Proses]', Relawan::where('kelurahan', 'BUKIT BIRU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JAHAB', Relawan::where('kelurahan', 'JAHAB')->count()),
            Stat::make('JAHAB [Terverifikasi]', Relawan::where('kelurahan', 'JAHAB')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JAHAB [Proses]', Relawan::where('kelurahan', 'JAHAB')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAMPUNG BARU', Relawan::where('kelurahan', 'KAMPUNG BARU')->count()),
            Stat::make('KAMPUNG BARU [Terverifikasi]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAMPUNG BARU [Proses]', Relawan::where('kelurahan', 'KAMPUNG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA IPUH', Relawan::where('kelurahan', 'LOA IPUH')->count()),
            Stat::make('LOA IPUH [Terverifikasi]', Relawan::where('kelurahan', 'LOA IPUH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA IPUH [Proses]', Relawan::where('kelurahan', 'LOA IPUH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA IPUH DARAT', Relawan::where('kelurahan', 'LOA IPUH DARAT')->count()),
            Stat::make('LOA IPUH DARAT [Terverifikasi]', Relawan::where('kelurahan', 'LOA IPUH DARAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA IPUH DARAT [Proses]', Relawan::where('kelurahan', 'LOA IPUH DARAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA TEBU', Relawan::where('kelurahan', 'LOA TEBU')->count()),
            Stat::make('LOA TEBU [Terverifikasi]', Relawan::where('kelurahan', 'LOA TEBU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA TEBU [Proses]', Relawan::where('kelurahan', 'LOA TEBU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MALUHU', Relawan::where('kelurahan', 'MALUHU')->count()),
            Stat::make('MALUHU [Terverifikasi]', Relawan::where('kelurahan', 'MALUHU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MALUHU [Proses]', Relawan::where('kelurahan', 'MALUHU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MANGKURAWANG', Relawan::where('kelurahan', 'MANGKURAWANG')->count()),
            Stat::make('MANGKURAWANG [Terverifikasi]', Relawan::where('kelurahan', 'MANGKURAWANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANGKURAWANG [Proses]', Relawan::where('kelurahan', 'MANGKURAWANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MELAYU', Relawan::where('kelurahan', 'MELAYU')->count()),
            Stat::make('MELAYU [Terverifikasi]', Relawan::where('kelurahan', 'MELAYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MELAYU [Proses]', Relawan::where('kelurahan', 'MELAYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PANJI', Relawan::where('kelurahan', 'PANJI')->count()),
            Stat::make('PANJI [Terverifikasi]', Relawan::where('kelurahan', 'PANJI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PANJI [Proses]', Relawan::where('kelurahan', 'PANJI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKARAME', Relawan::where('kelurahan', 'SUKARAME')->count()),
            Stat::make('SUKARAME [Terverifikasi]', Relawan::where('kelurahan', 'SUKARAME')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKARAME [Proses]', Relawan::where('kelurahan', 'SUKARAME')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TIMBAU', Relawan::where('kelurahan', 'TIMBAU')->count()),
            Stat::make('TIMBAU [Terverifikasi]', Relawan::where('kelurahan', 'TIMBAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TIMBAU [Proses]', Relawan::where('kelurahan', 'TIMBAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Tenggarong Seberang
            BaseWidget\Card::make('Kecamatan', 'TENGGARONG SEBERANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MANUNGGAL JAYA', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->count()),
            Stat::make('MANUNGGAL JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MANUNGGAL JAYA [Proses]', Relawan::where('kelurahan', 'MANUNGGAL JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BANGUN REJO', Relawan::where('kelurahan', 'BANGUN REJO')->count()),
            Stat::make('BANGUN REJO [Terverifikasi]', Relawan::where('kelurahan', 'BANGUN REJO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BANGUN REJO [Proses]', Relawan::where('kelurahan', 'BANGUN REJO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUANA JAYA', Relawan::where('kelurahan', 'BUANA JAYA')->count()),
            Stat::make('BUANA JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUANA JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUANA JAYA [Proses]', Relawan::where('kelurahan', 'BUANA JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT RAYA', Relawan::where('kelurahan', 'BUKIT RAYA')->count()),
            Stat::make('BUKIT RAYA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT RAYA [Proses]', Relawan::where('kelurahan', 'BUKIT RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUKA MAJU', Relawan::where('kelurahan', 'SUKA MAJU')->count()),
            Stat::make('SUKA MAJU [Terverifikasi]', Relawan::where('kelurahan', 'SUKA MAJU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUKA MAJU [Proses]', Relawan::where('kelurahan', 'SUKA MAJU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KARANG TUNGGAL', Relawan::where('kelurahan', 'KARANG TUNGGAL')->count()),
            Stat::make('KARANG TUNGGAL [Terverifikasi]', Relawan::where('kelurahan', 'KARANG TUNGGAL')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KARANG TUNGGAL [Proses]', Relawan::where('kelurahan', 'KARANG TUNGGAL')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('EMBALUT', Relawan::where('kelurahan', 'EMBALUT')->count()),
            Stat::make('EMBALUT [Terverifikasi]', Relawan::where('kelurahan', 'EMBALUT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('EMBALUT [Proses]', Relawan::where('kelurahan', 'EMBALUT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT PARIAMAN', Relawan::where('kelurahan', 'BUKIT PARIAMAN')->count()),
            Stat::make('BUKIT PARIAMAN [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT PARIAMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT PARIAMAN [Proses]', Relawan::where('kelurahan', 'BUKIT PARIAMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERJIWA', Relawan::where('kelurahan', 'PERJIWA')->count()),
            Stat::make('PERJIWA [Terverifikasi]', Relawan::where('kelurahan', 'PERJIWA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERJIWA [Proses]', Relawan::where('kelurahan', 'PERJIWA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MULAWARMAN', Relawan::where('kelurahan', 'MULAWARMAN')->count()),
            Stat::make('MULAWARMAN [Terverifikasi]', Relawan::where('kelurahan', 'MULAWARMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MULAWARMAN [Proses]', Relawan::where('kelurahan', 'MULAWARMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA PARI', Relawan::where('kelurahan', 'LOA PARI')->count()),
            Stat::make('LOA PARI [Terverifikasi]', Relawan::where('kelurahan', 'LOA PARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA PARI [Proses]', Relawan::where('kelurahan', 'LOA PARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERTA BUANA', Relawan::where('kelurahan', 'KERTA BUANA')->count()),
            Stat::make('KERTA BUANA [Terverifikasi]', Relawan::where('kelurahan', 'KERTA BUANA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERTA BUANA [Proses]', Relawan::where('kelurahan', 'KERTA BUANA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK DALAM', Relawan::where('kelurahan', 'TELUK DALAM')->count()),
            Stat::make('TELUK DALAM [Terverifikasi]', Relawan::where('kelurahan', 'TELUK DALAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK DALAM [Proses]', Relawan::where('kelurahan', 'TELUK DALAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA ULUNG', Relawan::where('kelurahan', 'LOA ULUNG')->count()),
            Stat::make('LOA ULUNG [Terverifikasi]', Relawan::where('kelurahan', 'LOA ULUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA ULUNG [Proses]', Relawan::where('kelurahan', 'LOA ULUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA RAYA', Relawan::where('kelurahan', 'LOA RAYA')->count()),
            Stat::make('LOA RAYA [Terverifikasi]', Relawan::where('kelurahan', 'LOA RAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA RAYA [Proses]', Relawan::where('kelurahan', 'LOA RAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOA LEPU', Relawan::where('kelurahan', 'LOA LEPU')->count()),
            Stat::make('LOA LEPU [Terverifikasi]', Relawan::where('kelurahan', 'LOA LEPU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOA LEPU [Proses]', Relawan::where('kelurahan', 'LOA LEPU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEPARI', Relawan::where('kelurahan', 'SEPARI')->count()),
            Stat::make('SEPARI [Terverifikasi]', Relawan::where('kelurahan', 'SEPARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEPARI [Proses]', Relawan::where('kelurahan', 'SEPARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG BATU', Relawan::where('kelurahan', 'TANJUNG BATU')->count()),
            Stat::make('TANJUNG BATU [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG BATU [Proses]', Relawan::where('kelurahan', 'TANJUNG BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
