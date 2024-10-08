<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MahakamUluKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Laham
            BaseWidget\Card::make('Kecamatan', 'WARU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('LAHAM', Relawan::where('kelurahan', 'LAHAM')->count()),
            Stat::make('LAHAM [Terverifikasi]', Relawan::where('kelurahan', 'LAHAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LAHAM [Proses]', Relawan::where('kelurahan', 'LAHAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DANUM PAROY', Relawan::where('kelurahan', 'DANUM PAROY')->count()),
            Stat::make('DANUM PAROY [Terverifikasi]', Relawan::where('kelurahan', 'DANUM PAROY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DANUM PAROY [Proses]', Relawan::where('kelurahan', 'DANUM PAROY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG GELAWANG', Relawan::where('kelurahan', 'LONG GELAWANG')->count()),
            Stat::make('LONG GELAWANG [Terverifikasi]', Relawan::where('kelurahan', 'LONG GELAWANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG GELAWANG [Proses]', Relawan::where('kelurahan', 'LONG GELAWANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA RATAH', Relawan::where('kelurahan', 'MUARA RATAH')->count()),
            Stat::make('MUARA RATAH [Terverifikasi]', Relawan::where('kelurahan', 'MUARA RATAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA RATAH [Proses]', Relawan::where('kelurahan', 'MUARA RATAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NYARIBUNGAN', Relawan::where('kelurahan', 'NYARIBUNGAN')->count()),
            Stat::make('NYARIBUNGAN [Terverifikasi]', Relawan::where('kelurahan', 'NYARIBUNGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NYARIBUNGAN [Proses]', Relawan::where('kelurahan', 'NYARIBUNGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Apari
            BaseWidget\Card::make('Kecamatan', 'LONG APARI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('LONG KERIOQ', Relawan::where('kelurahan', 'LONG KERIOQ')->count()),
            Stat::make('LONG KERIOQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG KERIOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG KERIOQ [Proses]', Relawan::where('kelurahan', 'LONG KERIOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TIONG OHANG', Relawan::where('kelurahan', 'TIONG OHANG')->count()),
            Stat::make('TIONG OHANG [Terverifikasi]', Relawan::where('kelurahan', 'TIONG OHANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TIONG OHANG [Proses]', Relawan::where('kelurahan', 'TIONG OHANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TIONG BU\'U', Relawan::where('kelurahan', 'TIONG BU\'U')->count()),
            Stat::make('TIONG BU\'U [Terverifikasi]', Relawan::where('kelurahan', 'TIONG BU\'U')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TIONG BU\'U [Proses]', Relawan::where('kelurahan', 'TIONG BU\'U')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PENANEH III', Relawan::where('kelurahan', 'LONG PENANEH III')->count()),
            Stat::make('LONG PENANEH III [Terverifikasi]', Relawan::where('kelurahan', 'LONG PENANEH III')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PENANEH III [Proses]', Relawan::where('kelurahan', 'LONG PENANEH III')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PENANEH I', Relawan::where('kelurahan', 'LONG PENANEH I')->count()),
            Stat::make('LONG PENANEH I [Terverifikasi]', Relawan::where('kelurahan', 'LONG PENANEH I')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PENANEH I [Proses]', Relawan::where('kelurahan', 'LONG PENANEH I')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NAHA BUAN', Relawan::where('kelurahan', 'NAHA BUAN')->count()),
            Stat::make('NAHA BUAN [Terverifikasi]', Relawan::where('kelurahan', 'NAHA BUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NAHA BUAN [Proses]', Relawan::where('kelurahan', 'NAHA BUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PENANEH II', Relawan::where('kelurahan', 'LONG PENANEH II')->count()),
            Stat::make('LONG PENANEH II [Terverifikasi]', Relawan::where('kelurahan', 'LONG PENANEH II')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PENANEH II [Proses]', Relawan::where('kelurahan', 'LONG PENANEH II')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG APARI', Relawan::where('kelurahan', 'LONG APARI')->count()),
            Stat::make('LONG APARI [Terverifikasi]', Relawan::where('kelurahan', 'LONG APARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG APARI [Proses]', Relawan::where('kelurahan', 'LONG APARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NAHA SILAT', Relawan::where('kelurahan', 'NAHA SILAT')->count()),
            Stat::make('NAHA SILAT [Terverifikasi]', Relawan::where('kelurahan', 'NAHA SILAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NAHA SILAT [Proses]', Relawan::where('kelurahan', 'NAHA SILAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NAHA TIFAB', Relawan::where('kelurahan', 'NAHA TIFAB')->count()),
            Stat::make('NAHA TIFAB [Terverifikasi]', Relawan::where('kelurahan', 'NAHA TIFAB')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NAHA TIFAB [Proses]', Relawan::where('kelurahan', 'NAHA TIFAB')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Long Bagun
            BaseWidget\Card::make('Kecamatan', 'LONG BAGUN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LONG BAGUN ULU', Relawan::where('kelurahan', 'LONG BAGUN ULU')->count()),
            Stat::make('LONG BAGUN ULU [Terverifikasi]', Relawan::where('kelurahan', 'LONG BAGUN ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BAGUN ULU [Proses]', Relawan::where('kelurahan', 'LONG BAGUN ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEMAHAK BESAR', Relawan::where('kelurahan', 'MEMAHAK BESAR')->count()),
            Stat::make('MEMAHAK BESAR [Terverifikasi]', Relawan::where('kelurahan', 'MEMAHAK BESAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEMAHAK BESAR [Proses]', Relawan::where('kelurahan', 'MEMAHAK BESAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UJOH BILANG', Relawan::where('kelurahan', 'UJOH BILANG')->count()),
            Stat::make('UJOH BILANG [Terverifikasi]', Relawan::where('kelurahan', 'UJOH BILANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UJOH BILANG [Proses]', Relawan::where('kelurahan', 'UJOH BILANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEMAHAK ULU', Relawan::where('kelurahan', 'MEMAHAK ULU')->count()),
            Stat::make('MEMAHAK ULU [Terverifikasi]', Relawan::where('kelurahan', 'MEMAHAK ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEMAHAK ULU [Proses]', Relawan::where('kelurahan', 'MEMAHAK ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG MELAHAM', Relawan::where('kelurahan', 'LONG MELAHAM')->count()),
            Stat::make('LONG MELAHAM [Terverifikasi]', Relawan::where('kelurahan', 'LONG MELAHAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG MELAHAM [Proses]', Relawan::where('kelurahan', 'LONG MELAHAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATOQ KELO', Relawan::where('kelurahan', 'BATOQ KELO')->count()),
            Stat::make('BATOQ KELO [Terverifikasi]', Relawan::where('kelurahan', 'BATOQ KELO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATOQ KELO [Proses]', Relawan::where('kelurahan', 'BATOQ KELO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RUKUN DAMAI', Relawan::where('kelurahan', 'RUKUN DAMAI')->count()),
            Stat::make('RUKUN DAMAI [Terverifikasi]', Relawan::where('kelurahan', 'RUKUN DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RUKUN DAMAI [Proses]', Relawan::where('kelurahan', 'RUKUN DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG BAGUN ILIR', Relawan::where('kelurahan', 'LONG BAGUN ILIR')->count()),
            Stat::make('LONG BAGUN ILIR [Terverifikasi]', Relawan::where('kelurahan', 'LONG BAGUN ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG BAGUN ILIR [Proses]', Relawan::where('kelurahan', 'LONG BAGUN ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG MERAH', Relawan::where('kelurahan', 'LONG MERAH')->count()),
            Stat::make('LONG MERAH [Terverifikasi]', Relawan::where('kelurahan', 'LONG MERAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG MERAH [Proses]', Relawan::where('kelurahan', 'LONG MERAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU MAJANG', Relawan::where('kelurahan', 'BATU MAJANG')->count()),
            Stat::make('BATU MAJANG [Terverifikasi]', Relawan::where('kelurahan', 'BATU MAJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU MAJANG [Proses]', Relawan::where('kelurahan', 'BATU MAJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG HURAI', Relawan::where('kelurahan', 'LONG HURAI')->count()),
            Stat::make('LONG HURAI [Terverifikasi]', Relawan::where('kelurahan', 'LONG HURAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG HURAI [Proses]', Relawan::where('kelurahan', 'LONG HURAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Hubung
            BaseWidget\Card::make('Kecamatan', 'LONG HUBUNG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('DATAH BILANG ULU', Relawan::where('kelurahan', 'DATAH BILANG ULU')->count()),
            Stat::make('DATAH BILANG ULU [Terverifikasi]', Relawan::where('kelurahan', 'DATAH BILANG ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DATAH BILANG ULU [Proses]', Relawan::where('kelurahan', 'DATAH BILANG ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DATAH BILANG ILIR', Relawan::where('kelurahan', 'DATAH BILANG ILIR')->count()),
            Stat::make('DATAH BILANG ILIR [Terverifikasi]', Relawan::where('kelurahan', 'DATAH BILANG ILIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DATAH BILANG ILIR [Proses]', Relawan::where('kelurahan', 'DATAH BILANG ILIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DATAH BILANG BARU', Relawan::where('kelurahan', 'DATAH BILANG BARU')->count()),
            Stat::make('DATAH BILANG BARU [Terverifikasi]', Relawan::where('kelurahan', 'DATAH BILANG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DATAH BILANG BARU [Proses]', Relawan::where('kelurahan', 'DATAH BILANG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUTAN', Relawan::where('kelurahan', 'LUTAN')->count()),
            Stat::make('LUTAN [Terverifikasi]', Relawan::where('kelurahan', 'LUTAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUTAN [Proses]', Relawan::where('kelurahan', 'LUTAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MATALIBAQ', Relawan::where('kelurahan', 'MATALIBAQ')->count()),
            Stat::make('MATALIBAQ [Terverifikasi]', Relawan::where('kelurahan', 'MATALIBAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MATALIBAQ [Proses]', Relawan::where('kelurahan', 'MATALIBAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MEMAHAK TEBOQ', Relawan::where('kelurahan', 'MEMAHAK TEBOQ')->count()),
            Stat::make('MEMAHAK TEBOQ [Terverifikasi]', Relawan::where('kelurahan', 'MEMAHAK TEBOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MEMAHAK TEBOQ [Proses]', Relawan::where('kelurahan', 'MEMAHAK TEBOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG HUBUNG', Relawan::where('kelurahan', 'LONG HUBUNG')->count()),
            Stat::make('LONG HUBUNG [Terverifikasi]', Relawan::where('kelurahan', 'LONG HUBUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG HUBUNG [Proses]', Relawan::where('kelurahan', 'LONG HUBUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG HUBUNG ULU', Relawan::where('kelurahan', 'LONG HUBUNG ULU')->count()),
            Stat::make('LONG HUBUNG ULU [Terverifikasi]', Relawan::where('kelurahan', 'LONG HUBUNG ULU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG HUBUNG ULU [Proses]', Relawan::where('kelurahan', 'LONG HUBUNG ULU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SIRAU', Relawan::where('kelurahan', 'SIRAU')->count()),
            Stat::make('SIRAU [Terverifikasi]', Relawan::where('kelurahan', 'SIRAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SIRAU [Proses]', Relawan::where('kelurahan', 'SIRAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TRI PARIQ MAKMUR', Relawan::where('kelurahan', 'TRI PARIQ MAKMUR')->count()),
            Stat::make('TRI PARIQ MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'TRI PARIQ MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TRI PARIQ MAKMUR [Proses]', Relawan::where('kelurahan', 'TRI PARIQ MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('WANA PARIQ', Relawan::where('kelurahan', 'WANA PARIQ')->count()),
            Stat::make('WANA PARIQ [Terverifikasi]', Relawan::where('kelurahan', 'WANA PARIQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('WANA PARIQ [Proses]', Relawan::where('kelurahan', 'WANA PARIQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Pahangai
            BaseWidget\Card::make('Kecamatan', 'LONG PAHANGAI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('LONG LUNUK BARU', Relawan::where('kelurahan', 'LONG LUNUK BARU')->count()),
            Stat::make('LONG LUNUK BARU [Terverifikasi]', Relawan::where('kelurahan', 'LONG LUNUK BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LUNUK BARU [Proses]', Relawan::where('kelurahan', 'LONG LUNUK BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG ISUN', Relawan::where('kelurahan', 'LONG ISUN')->count()),
            Stat::make('LONG ISUN [Terverifikasi]', Relawan::where('kelurahan', 'LONG ISUN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG ISUN [Proses]', Relawan::where('kelurahan', 'LONG ISUN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PAHANGAI I', Relawan::where('kelurahan', 'LONG PAHANGAI I')->count()),
            Stat::make('LONG PAHANGAI I [Terverifikasi]', Relawan::where('kelurahan', 'LONG PAHANGAI I')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PAHANGAI I [Proses]', Relawan::where('kelurahan', 'LONG PAHANGAI I')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('NAHA ARU', Relawan::where('kelurahan', 'NAHA ARU')->count()),
            Stat::make('NAHA ARU [Terverifikasi]', Relawan::where('kelurahan', 'NAHA ARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('NAHA ARU [Proses]', Relawan::where('kelurahan', 'NAHA ARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG LUNUK', Relawan::where('kelurahan', 'LONG LUNUK')->count()),
            Stat::make('LONG LUNUK [Terverifikasi]', Relawan::where('kelurahan', 'LONG LUNUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG LUNUK [Proses]', Relawan::where('kelurahan', 'LONG LUNUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PAHANGAI II', Relawan::where('kelurahan', 'LONG PAHANGAI II')->count()),
            Stat::make('LONG PAHANGAI II [Terverifikasi]', Relawan::where('kelurahan', 'LONG PAHANGAI II')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PAHANGAI II [Proses]', Relawan::where('kelurahan', 'LONG PAHANGAI II')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG TUYOQ', Relawan::where('kelurahan', 'LONG TUYOQ')->count()),
            Stat::make('LONG TUYOQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG TUYOQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG TUYOQ [Proses]', Relawan::where('kelurahan', 'LONG TUYOQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIU MULANG', Relawan::where('kelurahan', 'LIU MULANG')->count()),
            Stat::make('LIU MULANG [Terverifikasi]', Relawan::where('kelurahan', 'LIU MULANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIU MULANG [Proses]', Relawan::where('kelurahan', 'LIU MULANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DATAH NAHA', Relawan::where('kelurahan', 'DATAH NAHA')->count()),
            Stat::make('DATAH NAHA [Terverifikasi]', Relawan::where('kelurahan', 'DATAH NAHA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DATAH NAHA [Proses]', Relawan::where('kelurahan', 'DATAH NAHA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PAKAQ BARU', Relawan::where('kelurahan', 'LONG PAKAQ BARU')->count()),
            Stat::make('LONG PAKAQ BARU [Terverifikasi]', Relawan::where('kelurahan', 'LONG PAKAQ BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PAKAQ BARU [Proses]', Relawan::where('kelurahan', 'LONG PAKAQ BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DELANG KEROHONG', Relawan::where('kelurahan', 'DELANG KEROHONG')->count()),
            Stat::make('DELANG KEROHONG [Terverifikasi]', Relawan::where('kelurahan', 'DELANG KEROHONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DELANG KEROHONG [Proses]', Relawan::where('kelurahan', 'DELANG KEROHONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIRUNG UBING', Relawan::where('kelurahan', 'LIRUNG UBING')->count()),
            Stat::make('LIRUNG UBING [Terverifikasi]', Relawan::where('kelurahan', 'LIRUNG UBING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIRUNG UBING [Proses]', Relawan::where('kelurahan', 'LIRUNG UBING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG PAKAQ', Relawan::where('kelurahan', 'LONG PAKAQ')->count()),
            Stat::make('LONG PAKAQ [Terverifikasi]', Relawan::where('kelurahan', 'LONG PAKAQ')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG PAKAQ [Proses]', Relawan::where('kelurahan', 'LONG PAKAQ')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
