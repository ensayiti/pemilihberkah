<?php

namespace App\Filament\Resources\RelawanResource\Widgets;

use App\Models\Relawan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PaserKel extends BaseWidget
{
    protected function getColumns(): int
    {
        return 3;
    }

    protected function getStats(): array
    {
        return [
            // Kecamatan Batu Engau
            BaseWidget\Card::make('Kecamatan', 'BATU ENGAU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),
            Stat::make('KERANG', Relawan::where('kelurahan', 'KERANG')->count()),
            Stat::make('KERANG [Terverifikasi]', Relawan::where('kelurahan', 'KERANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERANG [Proses]', Relawan::where('kelurahan', 'KERANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAMPAKAN', Relawan::where('kelurahan', 'TAMPAKAN')->count()),
            Stat::make('TAMPAKAN [Terverifikasi]', Relawan::where('kelurahan', 'TAMPAKAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAMPAKAN [Proses]', Relawan::where('kelurahan', 'TAMPAKAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENGKUDU', Relawan::where('kelurahan', 'MENGKUDU')->count()),
            Stat::make('MENGKUDU [Terverifikasi]', Relawan::where('kelurahan', 'MENGKUDU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENGKUDU [Proses]', Relawan::where('kelurahan', 'MENGKUDU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEBRU PASER DAMAI', Relawan::where('kelurahan', 'TEBRU PASER DAMAI')->count()),
            Stat::make('TEBRU PASER DAMAI [Terverifikasi]', Relawan::where('kelurahan', 'TEBRU PASER DAMAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEBRU PASER DAMAI [Proses]', Relawan::where('kelurahan', 'TEBRU PASER DAMAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERANG DAYO', Relawan::where('kelurahan', 'KERANG DAYO')->count()),
            Stat::make('KERANG DAYO [Terverifikasi]', Relawan::where('kelurahan', 'KERANG DAYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERANG DAYO [Proses]', Relawan::where('kelurahan', 'KERANG DAYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAING PRUPUK', Relawan::where('kelurahan', 'SAING PRUPUK')->count()),
            Stat::make('SAING PRUPUK [Terverifikasi]', Relawan::where('kelurahan', 'SAING PRUPUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAING PRUPUK [Proses]', Relawan::where('kelurahan', 'SAING PRUPUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RIWANG', Relawan::where('kelurahan', 'RIWANG')->count()),
            Stat::make('RIWANG [Terverifikasi]', Relawan::where('kelurahan', 'RIWANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RIWANG [Proses]', Relawan::where('kelurahan', 'RIWANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEGENDANG', Relawan::where('kelurahan', 'SEGENDANG')->count()),
            Stat::make('SEGENDANG [Terverifikasi]', Relawan::where('kelurahan', 'SEGENDANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEGENDANG [Proses]', Relawan::where('kelurahan', 'SEGENDANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PETANGIS', Relawan::where('kelurahan', 'PETANGIS')->count()),
            Stat::make('PETANGIS [Terverifikasi]', Relawan::where('kelurahan', 'PETANGIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PETANGIS [Proses]', Relawan::where('kelurahan', 'PETANGIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LANGGAI', Relawan::where('kelurahan', 'LANGGAI')->count()),
            Stat::make('LANGGAI [Terverifikasi]', Relawan::where('kelurahan', 'LANGGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LANGGAI [Proses]', Relawan::where('kelurahan', 'LANGGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOMU', Relawan::where('kelurahan', 'LOMU')->count()),
            Stat::make('LOMU [Terverifikasi]', Relawan::where('kelurahan', 'LOMU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOMU [Proses]', Relawan::where('kelurahan', 'LOMU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PENGGUREN JAYA', Relawan::where('kelurahan', 'PENGGUREN JAYA')->count()),
            Stat::make('PENGGUREN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'PENGGUREN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PENGGUREN JAYA [Proses]', Relawan::where('kelurahan', 'PENGGUREN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BAI JAYA', Relawan::where('kelurahan', 'BAI JAYA')->count()),
            Stat::make('BAI JAYA [Terverifikasi]', Relawan::where('kelurahan', 'BAI JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BAI JAYA [Proses]', Relawan::where('kelurahan', 'BAI JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            // Kecamatan Batu Sopang
            BaseWidget\Card::make('Kecamatan', 'SOPANG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('BATU KAJANG', Relawan::where('kelurahan', 'BATU KAJANG')->count()),
            Stat::make('BATU KAJANG [Terverifikasi]', Relawan::where('kelurahan', 'BATU KAJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU KAJANG [Proses]', Relawan::where('kelurahan', 'BATU KAJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SONGKA', Relawan::where('kelurahan', 'SONGKA')->count()),
            Stat::make('SONGKA [Terverifikasi]', Relawan::where('kelurahan', 'SONGKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SONGKA [Proses]', Relawan::where('kelurahan', 'SONGKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI TERIK', Relawan::where('kelurahan', 'SUNGAI TERIK')->count()),
            Stat::make('SUNGAI TERIK [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI TERIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI TERIK [Proses]', Relawan::where('kelurahan', 'SUNGAI TERIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KASUNGAI', Relawan::where('kelurahan', 'KASUNGAI')->count()),
            Stat::make('KASUNGAI [Terverifikasi]', Relawan::where('kelurahan', 'KASUNGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KASUNGAI [Proses]', Relawan::where('kelurahan', 'KASUNGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEGAI', Relawan::where('kelurahan', 'LEGAI')->count()),
            Stat::make('LEGAI [Terverifikasi]', Relawan::where('kelurahan', 'LEGAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEGAI [Proses]', Relawan::where('kelurahan', 'LEGAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUSUI', Relawan::where('kelurahan', 'BUSUI')->count()),
            Stat::make('BUSUI [Terverifikasi]', Relawan::where('kelurahan', 'BUSUI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUSUI [Proses]', Relawan::where('kelurahan', 'BUSUI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAMURANGGAU', Relawan::where('kelurahan', 'SAMURANGGAU')->count()),
            Stat::make('SAMURANGGAU [Terverifikasi]', Relawan::where('kelurahan', 'SAMURANGGAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMURANGGAU [Proses]', Relawan::where('kelurahan', 'SAMURANGGAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU BUTA', Relawan::where('kelurahan', 'RANTAU BUTA')->count()),
            Stat::make('RANTAU BUTA [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU BUTA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU BUTA [Proses]', Relawan::where('kelurahan', 'RANTAU BUTA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU LAYUNG', Relawan::where('kelurahan', 'RANTAU LAYUNG')->count()),
            Stat::make('RANTAU LAYUNG [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU LAYUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU LAYUNG [Proses]', Relawan::where('kelurahan', 'RANTAU LAYUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Kuaro
            BaseWidget\Card::make('Kecamatan', 'KUARO')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('KENDAROM', Relawan::where('kelurahan', 'KENDAROM')->count()),
            Stat::make('KENDAROM [Terverifikasi]', Relawan::where('kelurahan', 'KENDAROM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KENDAROM [Proses]', Relawan::where('kelurahan', 'KENDAROM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELUANG LOLO', Relawan::where('kelurahan', 'KELUANG LOLO')->count()),
            Stat::make('KELUANG LOLO [Terverifikasi]', Relawan::where('kelurahan', 'KELUANG LOLO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELUANG LOLO [Proses]', Relawan::where('kelurahan', 'KELUANG LOLO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELUANG PASER JAYA', Relawan::where('kelurahan', 'KELUANG PASER JAYA')->count()),
            Stat::make('KELUANG PASER JAYA [Terverifikasi]', Relawan::where('kelurahan', 'KELUANG PASER JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELUANG PASER JAYA [Proses]', Relawan::where('kelurahan', 'KELUANG PASER JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERTA BUMI', Relawan::where('kelurahan', 'KERTA BUMI')->count()),
            Stat::make('KERTA BUMI [Terverifikasi]', Relawan::where('kelurahan', 'KERTA BUMI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERTA BUMI [Proses]', Relawan::where('kelurahan', 'KERTA BUMI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MODANG', Relawan::where('kelurahan', 'MODANG')->count()),
            Stat::make('MODANG [Terverifikasi]', Relawan::where('kelurahan', 'MODANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MODANG [Proses]', Relawan::where('kelurahan', 'MODANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PONDANG BARU', Relawan::where('kelurahan', 'PONDANG BARU')->count()),
            Stat::make('PONDANG BARU [Terverifikasi]', Relawan::where('kelurahan', 'PONDANG BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PONDANG BARU [Proses]', Relawan::where('kelurahan', 'PONDANG BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PASIR MAYANG', Relawan::where('kelurahan', 'PASIR MAYANG')->count()),
            Stat::make('PASIR MAYANG [Terverifikasi]', Relawan::where('kelurahan', 'PASIR MAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PASIR MAYANG [Proses]', Relawan::where('kelurahan', 'PASIR MAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PADANG JAYA', Relawan::where('kelurahan', 'PADANG JAYA')->count()),
            Stat::make('PADANG JAYA [Terverifikasi]', Relawan::where('kelurahan', 'PADANG JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PADANG JAYA [Proses]', Relawan::where('kelurahan', 'PADANG JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KLEMPANG SARI', Relawan::where('kelurahan', 'KLEMPANG SARI')->count()),
            Stat::make('KLEMPANG SARI [Terverifikasi]', Relawan::where('kelurahan', 'KLEMPANG SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KLEMPANG SARI [Proses]', Relawan::where('kelurahan', 'KLEMPANG SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('HARAPAN BARU', Relawan::where('kelurahan', 'HARAPAN BARU')->count()),
            Stat::make('HARAPAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'HARAPAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('HARAPAN BARU [Proses]', Relawan::where('kelurahan', 'HARAPAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANDELEY', Relawan::where('kelurahan', 'SANDELEY')->count()),
            Stat::make('SANDELEY [Terverifikasi]', Relawan::where('kelurahan', 'SANDELEY')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANDELEY [Proses]', Relawan::where('kelurahan', 'SANDELEY')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANGAN', Relawan::where('kelurahan', 'RANGAN')->count()),
            Stat::make('RANGAN [Terverifikasi]', Relawan::where('kelurahan', 'RANGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANGAN [Proses]', Relawan::where('kelurahan', 'RANGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KUARO', Relawan::where('kelurahan', 'KUARO')->count()),
            Stat::make('KUARO [Terverifikasi]', Relawan::where('kelurahan', 'KUARO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KUARO [Proses]', Relawan::where('kelurahan', 'KUARO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Ikis
            BaseWidget\Card::make('Kecamatan', 'LONG IKIS')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('SAMUNTAI', Relawan::where('kelurahan', 'SAMUNTAI')->count()),
            Stat::make('SAMUNTAI [Terverifikasi]', Relawan::where('kelurahan', 'SAMUNTAI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAMUNTAI [Proses]', Relawan::where('kelurahan', 'SAMUNTAI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PAIT', Relawan::where('kelurahan', 'PAIT')->count()),
            Stat::make('PAIT [Terverifikasi]', Relawan::where('kelurahan', 'PAIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PAIT [Proses]', Relawan::where('kelurahan', 'PAIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAJUR', Relawan::where('kelurahan', 'TAJUR')->count()),
            Stat::make('TAJUR [Terverifikasi]', Relawan::where('kelurahan', 'TAJUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAJUR [Proses]', Relawan::where('kelurahan', 'TAJUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JEMPARING', Relawan::where('kelurahan', 'JEMPARING')->count()),
            Stat::make('JEMPARING [Terverifikasi]', Relawan::where('kelurahan', 'JEMPARING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JEMPARING [Proses]', Relawan::where('kelurahan', 'JEMPARING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ATANG PAIT', Relawan::where('kelurahan', 'ATANG PAIT')->count()),
            Stat::make('ATANG PAIT [Terverifikasi]', Relawan::where('kelurahan', 'ATANG PAIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ATANG PAIT [Proses]', Relawan::where('kelurahan', 'ATANG PAIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BUKIT SALOKA', Relawan::where('kelurahan', 'BUKIT SALOKA')->count()),
            Stat::make('BUKIT SALOKA [Terverifikasi]', Relawan::where('kelurahan', 'BUKIT SALOKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BUKIT SALOKA [Proses]', Relawan::where('kelurahan', 'BUKIT SALOKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KRAYAN MAKMUR', Relawan::where('kelurahan', 'KRAYAN MAKMUR')->count()),
            Stat::make('KRAYAN MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'KRAYAN MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KRAYAN MAKMUR [Proses]', Relawan::where('kelurahan', 'KRAYAN MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SAWIT JAYA', Relawan::where('kelurahan', 'SAWIT JAYA')->count()),
            Stat::make('SAWIT JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SAWIT JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SAWIT JAYA [Proses]', Relawan::where('kelurahan', 'SAWIT JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KRAYAN JAYA', Relawan::where('kelurahan', 'KRAYAN JAYA')->count()),
            Stat::make('KRAYAN JAYA [Terverifikasi]', Relawan::where('kelurahan', 'KRAYAN JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KRAYAN JAYA [Proses]', Relawan::where('kelurahan', 'KRAYAN JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LOMBOK', Relawan::where('kelurahan', 'LOMBOK')->count()),
            Stat::make('LOMBOK [Terverifikasi]', Relawan::where('kelurahan', 'LOMBOK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LOMBOK [Proses]', Relawan::where('kelurahan', 'LOMBOK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERTA BHAKTI', Relawan::where('kelurahan', 'KERTA BHAKTI')->count()),
            Stat::make('KERTA BHAKTI [Terverifikasi]', Relawan::where('kelurahan', 'KERTA BHAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERTA BHAKTI [Proses]', Relawan::where('kelurahan', 'KERTA BHAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KRAYAN SENTOSA', Relawan::where('kelurahan', 'KRAYAN SENTOSA')->count()),
            Stat::make('KRAYAN SENTOSA [Terverifikasi]', Relawan::where('kelurahan', 'KRAYAN SENTOSA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KRAYAN SENTOSA [Proses]', Relawan::where('kelurahan', 'KRAYAN SENTOSA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KRAYAN BAHAGIA', Relawan::where('kelurahan', 'KRAYAN BAHAGIA')->count()),
            Stat::make('KRAYAN BAHAGIA [Terverifikasi]', Relawan::where('kelurahan', 'KRAYAN BAHAGIA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KRAYAN BAHAGIA [Proses]', Relawan::where('kelurahan', 'KRAYAN BAHAGIA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('ADANG JAYA', Relawan::where('kelurahan', 'ADANG JAYA')->count()),
            Stat::make('ADANG JAYA [Terverifikasi]', Relawan::where('kelurahan', 'ADANG JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('ADANG JAYA [Proses]', Relawan::where('kelurahan', 'ADANG JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TELUK WARU', Relawan::where('kelurahan', 'TELUK WARU')->count()),
            Stat::make('TELUK WARU [Terverifikasi]', Relawan::where('kelurahan', 'TELUK WARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TELUK WARU [Proses]', Relawan::where('kelurahan', 'TELUK WARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('OLUNG', Relawan::where('kelurahan', 'OLUNG')->count()),
            Stat::make('OLUNG [Terverifikasi]', Relawan::where('kelurahan', 'OLUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('OLUNG [Proses]', Relawan::where('kelurahan', 'OLUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAYUNGO', Relawan::where('kelurahan', 'KAYUNGO')->count()),
            Stat::make('KAYUNGO [Terverifikasi]', Relawan::where('kelurahan', 'KAYUNGO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAYUNGO [Proses]', Relawan::where('kelurahan', 'KAYUNGO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAJER MULYA', Relawan::where('kelurahan', 'TAJER MULYA')->count()),
            Stat::make('TAJER MULYA [Terverifikasi]', Relawan::where('kelurahan', 'TAJER MULYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAJER MULYA [Proses]', Relawan::where('kelurahan', 'TAJER MULYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TIWEI', Relawan::where('kelurahan', 'TIWEI')->count()),
            Stat::make('TIWEI [Terverifikasi]', Relawan::where('kelurahan', 'TIWEI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TIWEI [Proses]', Relawan::where('kelurahan', 'TIWEI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKUROU JAYA', Relawan::where('kelurahan', 'SEKUROU JAYA')->count()),
            Stat::make('SEKUROU JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SEKUROU JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKUROU JAYA [Proses]', Relawan::where('kelurahan', 'SEKUROU JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ADANG', Relawan::where('kelurahan', 'MUARA ADANG')->count()),
            Stat::make('MUARA ADANG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ADANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ADANG [Proses]', Relawan::where('kelurahan', 'MUARA ADANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KAYUNGO SARI', Relawan::where('kelurahan', 'KAYUNGO SARI')->count()),
            Stat::make('KAYUNGO SARI [Terverifikasi]', Relawan::where('kelurahan', 'KAYUNGO SARI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KAYUNGO SARI [Proses]', Relawan::where('kelurahan', 'KAYUNGO SARI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BELIMBING', Relawan::where('kelurahan', 'BELIMBING')->count()),
            Stat::make('BELIMBING [Terverifikasi]', Relawan::where('kelurahan', 'BELIMBING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BELIMBING [Proses]', Relawan::where('kelurahan', 'BELIMBING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BREWE', Relawan::where('kelurahan', 'BREWE')->count()),
            Stat::make('BREWE [Terverifikasi]', Relawan::where('kelurahan', 'BREWE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BREWE [Proses]', Relawan::where('kelurahan', 'BREWE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG GELANG', Relawan::where('kelurahan', 'LONG GELANG')->count()),
            Stat::make('LONG GELANG [Terverifikasi]', Relawan::where('kelurahan', 'LONG GELANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG GELANG [Proses]', Relawan::where('kelurahan', 'LONG GELANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG IKIS', Relawan::where('kelurahan', 'LONG IKIS')->count()),
            Stat::make('LONG IKIS [Terverifikasi]', Relawan::where('kelurahan', 'LONG IKIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG IKIS [Proses]', Relawan::where('kelurahan', 'LONG IKIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Long Kali
            BaseWidget\Card::make('Kecamatan', 'LONG KALI')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MAKMUR JAYA', Relawan::where('kelurahan', 'MAKMUR JAYA')->count()),
            Stat::make('MAKMUR JAYA [Terverifikasi]', Relawan::where('kelurahan', 'MAKMUR JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MAKMUR JAYA [Proses]', Relawan::where('kelurahan', 'MAKMUR JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PUTANG', Relawan::where('kelurahan', 'PUTANG')->count()),
            Stat::make('PUTANG [Terverifikasi]', Relawan::where('kelurahan', 'PUTANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PUTANG [Proses]', Relawan::where('kelurahan', 'PUTANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDIK', Relawan::where('kelurahan', 'MENDIK')->count()),
            Stat::make('MENDIK [Terverifikasi]', Relawan::where('kelurahan', 'MENDIK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENDIK [Proses]', Relawan::where('kelurahan', 'MENDIK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('GUNUNG PUTAR', Relawan::where('kelurahan', 'GUNUNG PUTAR')->count()),
            Stat::make('GUNUNG PUTAR [Terverifikasi]', Relawan::where('kelurahan', 'GUNUNG PUTAR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('GUNUNG PUTAR [Proses]', Relawan::where('kelurahan', 'GUNUNG PUTAR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDIK MAKMUR', Relawan::where('kelurahan', 'MENDIK MAKMUR')->count()),
            Stat::make('MENDIK MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'MENDIK MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENDIK MAKMUR [Proses]', Relawan::where('kelurahan', 'MENDIK MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TELAKE', Relawan::where('kelurahan', 'MUARA TELAKE')->count()),
            Stat::make('MUARA TELAKE [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TELAKE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TELAKE [Proses]', Relawan::where('kelurahan', 'MUARA TELAKE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBAKUNG TAKA', Relawan::where('kelurahan', 'SEBAKUNG TAKA')->count()),
            Stat::make('SEBAKUNG TAKA [Terverifikasi]', Relawan::where('kelurahan', 'SEBAKUNG TAKA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBAKUNG TAKA [Proses]', Relawan::where('kelurahan', 'SEBAKUNG TAKA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBAKUNG', Relawan::where('kelurahan', 'SEBAKUNG')->count()),
            Stat::make('SEBAKUNG [Terverifikasi]', Relawan::where('kelurahan', 'SEBAKUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBAKUNG [Proses]', Relawan::where('kelurahan', 'SEBAKUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MARUAT', Relawan::where('kelurahan', 'MARUAT')->count()),
            Stat::make('MARUAT [Terverifikasi]', Relawan::where('kelurahan', 'MARUAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MARUAT [Proses]', Relawan::where('kelurahan', 'MARUAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDIK KARYA', Relawan::where('kelurahan', 'MENDIK KARYA')->count()),
            Stat::make('MENDIK KARYA [Terverifikasi]', Relawan::where('kelurahan', 'MENDIK KARYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MENDIK KARYA [Proses]', Relawan::where('kelurahan', 'MENDIK KARYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BENTE TUALAN', Relawan::where('kelurahan', 'BENTE TUALAN')->count()),
            Stat::make('BENTE TUALAN [Terverifikasi]', Relawan::where('kelurahan', 'BENTE TUALAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BENTE TUALAN [Proses]', Relawan::where('kelurahan', 'BENTE TUALAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEBAKUNG MAKMUR', Relawan::where('kelurahan', 'SEBAKUNG MAKMUR')->count()),
            Stat::make('SEBAKUNG MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'SEBAKUNG MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEBAKUNG MAKMUR [Proses]', Relawan::where('kelurahan', 'SEBAKUNG MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MENDIK BHAKTI', Relawan::where('kelurahan', 'MENDIK BHAKTI')->count()),
            Stat::make('MENDIK BHAKTI [Terverifikasi]', Relawan::where('kelurahan', 'MENDIK BHAKTI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),

            Stat::make('MENDIK BHAKTI [Proses]', Relawan::where('kelurahan', 'MENDIK BHAKTI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PIAS', Relawan::where('kelurahan', 'MUARA PIAS')->count()),
            Stat::make('MUARA PIAS [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PIAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PIAS [Proses]', Relawan::where('kelurahan', 'MUARA PIAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PINANG JATUS', Relawan::where('kelurahan', 'PINANG JATUS')->count()),
            Stat::make('PINANG JATUS [Terverifikasi]', Relawan::where('kelurahan', 'PINANG JATUS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PINANG JATUS [Proses]', Relawan::where('kelurahan', 'PINANG JATUS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUNGGU', Relawan::where('kelurahan', 'MUNGGU')->count()),
            Stat::make('MUNGGU [Terverifikasi]', Relawan::where('kelurahan', 'MUNGGU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUNGGU [Proses]', Relawan::where('kelurahan', 'MUNGGU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PETIKU', Relawan::where('kelurahan', 'PETIKU')->count()),
            Stat::make('PETIKU [Terverifikasi]', Relawan::where('kelurahan', 'PETIKU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PETIKU [Proses]', Relawan::where('kelurahan', 'PETIKU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PERKUWEN', Relawan::where('kelurahan', 'PERKUWEN')->count()),
            Stat::make('PERKUWEN [Terverifikasi]', Relawan::where('kelurahan', 'PERKUWEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PERKUWEN [Proses]', Relawan::where('kelurahan', 'PERKUWEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA LAMBAKAN', Relawan::where('kelurahan', 'MUARA LAMBAKAN')->count()),
            Stat::make('MUARA LAMBAKAN [Terverifikasi]', Relawan::where('kelurahan', 'MUARA LAMBAKAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA LAMBAKAN [Proses]', Relawan::where('kelurahan', 'MUARA LAMBAKAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA TOYU', Relawan::where('kelurahan', 'MUARA TOYU')->count()),
            Stat::make('MUARA TOYU [Terverifikasi]', Relawan::where('kelurahan', 'MUARA TOYU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA TOYU [Proses]', Relawan::where('kelurahan', 'MUARA TOYU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ADANG II', Relawan::where('kelurahan', 'MUARA ADANG II')->count()),
            Stat::make('MUARA ADANG II [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ADANG II')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ADANG II [Proses]', Relawan::where('kelurahan', 'MUARA ADANG II')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KEPALA TELAKE', Relawan::where('kelurahan', 'KEPALA TELAKE')->count()),
            Stat::make('KEPALA TELAKE [Terverifikasi]', Relawan::where('kelurahan', 'KEPALA TELAKE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KEPALA TELAKE [Proses]', Relawan::where('kelurahan', 'KEPALA TELAKE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG KALI', Relawan::where('kelurahan', 'LONG KALI')->count()),
            Stat::make('LONG KALI [Terverifikasi]', Relawan::where('kelurahan', 'LONG KALI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG KALI [Proses]', Relawan::where('kelurahan', 'LONG KALI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Komam
            BaseWidget\Card::make('Kecamatan', 'MUARA KOMAM')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MUARA LANGON', Relawan::where('kelurahan', 'MUARA LANGON')->count()),
            Stat::make('MUARA LANGON [Terverifikasi]', Relawan::where('kelurahan', 'MUARA LANGON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA LANGON [Proses]', Relawan::where('kelurahan', 'MUARA LANGON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BATU BUTOK', Relawan::where('kelurahan', 'BATU BUTOK')->count()),
            Stat::make('BATU BUTOK [Terverifikasi]', Relawan::where('kelurahan', 'BATU BUTOK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BATU BUTOK [Proses]', Relawan::where('kelurahan', 'BATU BUTOK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SELERONG', Relawan::where('kelurahan', 'SELERONG')->count()),
            Stat::make('SELERONG [Terverifikasi]', Relawan::where('kelurahan', 'SELERONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SELERONG [Proses]', Relawan::where('kelurahan', 'SELERONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KUARO', Relawan::where('kelurahan', 'MUARA KUARO')->count()),
            Stat::make('MUARA KUARO [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KUARO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KUARO [Proses]', Relawan::where('kelurahan', 'MUARA KUARO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('UKO', Relawan::where('kelurahan', 'UKO')->count()),
            Stat::make('UKO [Terverifikasi]', Relawan::where('kelurahan', 'UKO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('UKO [Proses]', Relawan::where('kelurahan', 'UKO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEKUAN MAKMUR', Relawan::where('kelurahan', 'SEKUAN MAKMUR')->count()),
            Stat::make('SEKUAN MAKMUR [Terverifikasi]', Relawan::where('kelurahan', 'SEKUAN MAKMUR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEKUAN MAKMUR [Proses]', Relawan::where('kelurahan', 'SEKUAN MAKMUR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PAYANG', Relawan::where('kelurahan', 'MUARA PAYANG')->count()),
            Stat::make('MUARA PAYANG [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PAYANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PAYANG [Proses]', Relawan::where('kelurahan', 'MUARA PAYANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SWAN SLUTUNG', Relawan::where('kelurahan', 'SWAN SLUTUNG')->count()),
            Stat::make('SWAN SLUTUNG [Terverifikasi]', Relawan::where('kelurahan', 'SWAN SLUTUNG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SWAN SLUTUNG [Proses]', Relawan::where('kelurahan', 'SWAN SLUTUNG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BINANGON', Relawan::where('kelurahan', 'BINANGON')->count()),
            Stat::make('BINANGON [Terverifikasi]', Relawan::where('kelurahan', 'BINANGON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BINANGON [Proses]', Relawan::where('kelurahan', 'BINANGON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PRAYON', Relawan::where('kelurahan', 'PRAYON')->count()),
            Stat::make('PRAYON [Terverifikasi]', Relawan::where('kelurahan', 'PRAYON')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PRAYON [Proses]', Relawan::where('kelurahan', 'PRAYON')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LONG SAYO', Relawan::where('kelurahan', 'LONG SAYO')->count()),
            Stat::make('LONG SAYO [Terverifikasi]', Relawan::where('kelurahan', 'LONG SAYO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LONG SAYO [Proses]', Relawan::where('kelurahan', 'LONG SAYO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUSAN', Relawan::where('kelurahan', 'LUSAN')->count()),
            Stat::make('LUSAN [Terverifikasi]', Relawan::where('kelurahan', 'LUSAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUSAN [Proses]', Relawan::where('kelurahan', 'LUSAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA KOMAM', Relawan::where('kelurahan', 'MUARA KOMAM')->count()),
            Stat::make('MUARA KOMAM [Terverifikasi]', Relawan::where('kelurahan', 'MUARA KOMAM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA KOMAM [Proses]', Relawan::where('kelurahan', 'MUARA KOMAM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Muara Samu
            BaseWidget\Card::make('Kecamatan', 'MAURA SAMU')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('MUSER', Relawan::where('kelurahan', 'MUSER')->count()),
            Stat::make('MUSER [Terverifikasi]', Relawan::where('kelurahan', 'MUSER')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUSER [Proses]', Relawan::where('kelurahan', 'MUSER')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LIBUR DINDING', Relawan::where('kelurahan', 'LIBUR DINDING')->count()),
            Stat::make('LIBUR DINDING [Terverifikasi]', Relawan::where('kelurahan', 'LIBUR DINDING')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LIBUR DINDING [Proses]', Relawan::where('kelurahan', 'LIBUR DINDING')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BIU', Relawan::where('kelurahan', 'BIU')->count()),
            Stat::make('BIU [Terverifikasi]', Relawan::where('kelurahan', 'BIU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BIU [Proses]', Relawan::where('kelurahan', 'BIU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU ATAS', Relawan::where('kelurahan', 'RANTAU ATAS')->count()),
            Stat::make('RANTAU ATAS [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU ATAS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU ATAS [Proses]', Relawan::where('kelurahan', 'RANTAU ATAS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LUAN', Relawan::where('kelurahan', 'LUAN')->count()),
            Stat::make('LUAN [Terverifikasi]', Relawan::where('kelurahan', 'LUAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LUAN [Proses]', Relawan::where('kelurahan', 'LUAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUWETO', Relawan::where('kelurahan', 'SUWETO')->count()),
            Stat::make('SUWETO [Terverifikasi]', Relawan::where('kelurahan', 'SUWETO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUWETO [Proses]', Relawan::where('kelurahan', 'SUWETO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANJUNG PINANG', Relawan::where('kelurahan', 'TANJUNG PINANG')->count()),
            Stat::make('TANJUNG PINANG [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG PINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG PINANG [Proses]', Relawan::where('kelurahan', 'TANJUNG PINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU BINTUNGAN', Relawan::where('kelurahan', 'RANTAU BINTUNGAN')->count()),
            Stat::make('RANTAU BINTUNGAN [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU BINTUNGAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU BINTUNGAN [Proses]', Relawan::where('kelurahan', 'RANTAU BINTUNGAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA ANDEH', Relawan::where('kelurahan', 'MUARA ANDEH')->count()),
            Stat::make('MUARA ANDEH [Terverifikasi]', Relawan::where('kelurahan', 'MUARA ANDEH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA ANDEH [Proses]', Relawan::where('kelurahan', 'MUARA ANDEH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Pasir Belengkong
            BaseWidget\Card::make('Kecamatan', 'PASIR BELENGKONG')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('PASIR BELENGKONG', Relawan::where('kelurahan', 'PASIR BELENGKONG')->count()),
            Stat::make('PASIR BELENGKONG [Terverifikasi]', Relawan::where('kelurahan', 'PASIR BELENGKONG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PASIR BELENGKONG [Proses]', Relawan::where('kelurahan', 'PASIR BELENGKONG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SULILIRAN BARU', Relawan::where('kelurahan', 'SULILIRAN BARU')->count()),
            Stat::make('SULILIRAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'SULILIRAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SULILIRAN BARU [Proses]', Relawan::where('kelurahan', 'SULILIRAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABURAN BARU', Relawan::where('kelurahan', 'LABURAN BARU')->count()),
            Stat::make('LABURAN BARU [Terverifikasi]', Relawan::where('kelurahan', 'LABURAN BARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABURAN BARU [Proses]', Relawan::where('kelurahan', 'LABURAN BARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABURAN', Relawan::where('kelurahan', 'LABURAN')->count()),
            Stat::make('LABURAN [Terverifikasi]', Relawan::where('kelurahan', 'LABURAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABURAN [Proses]', Relawan::where('kelurahan', 'LABURAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KERESIK BURA', Relawan::where('kelurahan', 'KERESIK BURA')->count()),
            Stat::make('KERESIK BURA [Terverifikasi]', Relawan::where('kelurahan', 'KERESIK BURA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KERESIK BURA [Proses]', Relawan::where('kelurahan', 'KERESIK BURA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LEMPESU', Relawan::where('kelurahan', 'LEMPESU')->count()),
            Stat::make('LEMPESU [Terverifikasi]', Relawan::where('kelurahan', 'LEMPESU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LEMPESU [Proses]', Relawan::where('kelurahan', 'LEMPESU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUATANG KETEBAN', Relawan::where('kelurahan', 'SUATANG KETEBAN')->count()),
            Stat::make('SUATANG KETEBAN [Terverifikasi]', Relawan::where('kelurahan', 'SUATANG KETEBAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUATANG KETEBAN [Proses]', Relawan::where('kelurahan', 'SUATANG KETEBAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('DAMIT', Relawan::where('kelurahan', 'DAMIT')->count()),
            Stat::make('DAMIT [Terverifikasi]', Relawan::where('kelurahan', 'DAMIT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('DAMIT [Proses]', Relawan::where('kelurahan', 'DAMIT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SANGKURIMAN', Relawan::where('kelurahan', 'SANGKURIMAN')->count()),
            Stat::make('SANGKURIMAN [Terverifikasi]', Relawan::where('kelurahan', 'SANGKURIMAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SANGKURIMAN [Proses]', Relawan::where('kelurahan', 'SANGKURIMAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUATANG', Relawan::where('kelurahan', 'SUATANG')->count()),
            Stat::make('SUATANG [Terverifikasi]', Relawan::where('kelurahan', 'SUATANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUATANG [Proses]', Relawan::where('kelurahan', 'SUATANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('BEKOSO', Relawan::where('kelurahan', 'BEKOSO')->count()),
            Stat::make('BEKOSO [Terverifikasi]', Relawan::where('kelurahan', 'BEKOSO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('BEKOSO [Proses]', Relawan::where('kelurahan', 'BEKOSO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('OLONG PINANG', Relawan::where('kelurahan', 'OLONG PINANG')->count()),
            Stat::make('OLONG PINANG [Terverifikasi]', Relawan::where('kelurahan', 'OLONG PINANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('OLONG PINANG [Proses]', Relawan::where('kelurahan', 'OLONG PINANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGE BATU', Relawan::where('kelurahan', 'SUNGE BATU')->count()),
            Stat::make('SUNGE BATU [Terverifikasi]', Relawan::where('kelurahan', 'SUNGE BATU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGE BATU [Proses]', Relawan::where('kelurahan', 'SUNGE BATU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENIUNG JAYA', Relawan::where('kelurahan', 'SENIUNG JAYA')->count()),
            Stat::make('SENIUNG JAYA [Terverifikasi]', Relawan::where('kelurahan', 'SENIUNG JAYA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENIUNG JAYA [Proses]', Relawan::where('kelurahan', 'SENIUNG JAYA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SULILIRAN', Relawan::where('kelurahan', 'SULILIRAN')->count()),
            Stat::make('SULILIRAN [Terverifikasi]', Relawan::where('kelurahan', 'SULILIRAN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SULILIRAN [Proses]', Relawan::where('kelurahan', 'SULILIRAN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Tanah Grogot
            BaseWidget\Card::make('Kecamatan', 'TANAH GROGOT')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('PADANG PENGRAPAT', Relawan::where('kelurahan', 'PADANG PENGRAPAT')->count()),
            Stat::make('PADANG PENGRAPAT [Terverifikasi]', Relawan::where('kelurahan', 'PADANG PENGRAPAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PADANG PENGRAPAT [Proses]', Relawan::where('kelurahan', 'PADANG PENGRAPAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JANJU', Relawan::where('kelurahan', 'JANJU')->count()),
            Stat::make('JANJU [Terverifikasi]', Relawan::where('kelurahan', 'JANJU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JANJU [Proses]', Relawan::where('kelurahan', 'JANJU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENAKEN', Relawan::where('kelurahan', 'SENAKEN')->count()),
            Stat::make('SENAKEN [Terverifikasi]', Relawan::where('kelurahan', 'SENAKEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENAKEN [Proses]', Relawan::where('kelurahan', 'SENAKEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TAPIS', Relawan::where('kelurahan', 'TAPIS')->count()),
            Stat::make('TAPIS [Terverifikasi]', Relawan::where('kelurahan', 'TAPIS')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TAPIS [Proses]', Relawan::where('kelurahan', 'TAPIS')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SEMPULANG', Relawan::where('kelurahan', 'SEMPULANG')->count()),
            Stat::make('SEMPULANG [Terverifikasi]', Relawan::where('kelurahan', 'SEMPULANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SEMPULANG [Proses]', Relawan::where('kelurahan', 'SEMPULANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANTAU PANJANG', Relawan::where('kelurahan', 'RANTAU PANJANG')->count()),
            Stat::make('RANTAU PANJANG [Terverifikasi]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANTAU PANJANG [Proses]', Relawan::where('kelurahan', 'RANTAU PANJANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI TUAK', Relawan::where('kelurahan', 'SUNGAI TUAK')->count()),
            Stat::make('SUNGAI TUAK [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI TUAK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI TUAK [Proses]', Relawan::where('kelurahan', 'SUNGAI TUAK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TEPIAN BATANG', Relawan::where('kelurahan', 'TEPIAN BATANG')->count()),
            Stat::make('TEPIAN BATANG [Terverifikasi]', Relawan::where('kelurahan', 'TEPIAN BATANG')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TEPIAN BATANG [Proses]', Relawan::where('kelurahan', 'TEPIAN BATANG')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('MUARA PASIR', Relawan::where('kelurahan', 'MUARA PASIR')->count()),
            Stat::make('MUARA PASIR [Terverifikasi]', Relawan::where('kelurahan', 'MUARA PASIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('MUARA PASIR [Proses]', Relawan::where('kelurahan', 'MUARA PASIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH PERIUK', Relawan::where('kelurahan', 'TANAH PERIUK')->count()),
            Stat::make('TANAH PERIUK [Terverifikasi]', Relawan::where('kelurahan', 'TANAH PERIUK')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH PERIUK [Proses]', Relawan::where('kelurahan', 'TANAH PERIUK')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('JONE', Relawan::where('kelurahan', 'JONE')->count()),
            Stat::make('JONE [Terverifikasi]', Relawan::where('kelurahan', 'JONE')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('JONE [Proses]', Relawan::where('kelurahan', 'JONE')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEPARA', Relawan::where('kelurahan', 'PEPARA')->count()),
            Stat::make('PEPARA [Terverifikasi]', Relawan::where('kelurahan', 'PEPARA')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEPARA [Proses]', Relawan::where('kelurahan', 'PEPARA')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PULAU RANTAU', Relawan::where('kelurahan', 'PULAU RANTAU')->count()),
            Stat::make('PULAU RANTAU [Terverifikasi]', Relawan::where('kelurahan', 'PULAU RANTAU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PULAU RANTAU [Proses]', Relawan::where('kelurahan', 'PULAU RANTAU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SUNGAI LANGIR', Relawan::where('kelurahan', 'SUNGAI LANGIR')->count()),
            Stat::make('SUNGAI LANGIR [Terverifikasi]', Relawan::where('kelurahan', 'SUNGAI LANGIR')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SUNGAI LANGIR [Proses]', Relawan::where('kelurahan', 'SUNGAI LANGIR')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('PEREPAT', Relawan::where('kelurahan', 'PEREPAT')->count()),
            Stat::make('PEREPAT [Terverifikasi]', Relawan::where('kelurahan', 'PEREPAT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('PEREPAT [Proses]', Relawan::where('kelurahan', 'PEREPAT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('TANAH GROGOT', Relawan::where('kelurahan', 'TANAH GROGOT')->count()),
            Stat::make('TANAH GROGOT [Terverifikasi]', Relawan::where('kelurahan', 'TANAH GROGOT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANAH GROGOT [Proses]', Relawan::where('kelurahan', 'TANAH GROGOT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

// Kecamatan Tanjung Harapan
            BaseWidget\Card::make('Kecamatan', 'TANJUNG HARAPAN')
                ->extraAttributes([
                    'class' => 'col-span-full bg-transparent shadow-none',
                    'style' => 'padding: 1rem;'
                ]),

            Stat::make('TANJUNG ARU', Relawan::where('kelurahan', 'TANJUNG ARU')->count()),
            Stat::make('TANJUNG ARU [Terverifikasi]', Relawan::where('kelurahan', 'TANJUNG ARU')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('TANJUNG ARU [Proses]', Relawan::where('kelurahan', 'TANJUNG ARU')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LORI', Relawan::where('kelurahan', 'LORI')->count()),
            Stat::make('LORI [Terverifikasi]', Relawan::where('kelurahan', 'LORI')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LORI [Proses]', Relawan::where('kelurahan', 'LORI')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('KELADEN', Relawan::where('kelurahan', 'KELADEN')->count()),
            Stat::make('KELADEN [Terverifikasi]', Relawan::where('kelurahan', 'KELADEN')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('KELADEN [Proses]', Relawan::where('kelurahan', 'KELADEN')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SENIPAH', Relawan::where('kelurahan', 'SENIPAH')->count()),
            Stat::make('SENIPAH [Terverifikasi]', Relawan::where('kelurahan', 'SENIPAH')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SENIPAH [Proses]', Relawan::where('kelurahan', 'SENIPAH')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('RANDOM', Relawan::where('kelurahan', 'RANDOM')->count()),
            Stat::make('RANDOM [Terverifikasi]', Relawan::where('kelurahan', 'RANDOM')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('RANDOM [Proses]', Relawan::where('kelurahan', 'RANDOM')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('SELENGOT', Relawan::where('kelurahan', 'SELENGOT')->count()),
            Stat::make('SELENGOT [Terverifikasi]', Relawan::where('kelurahan', 'SELENGOT')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('SELENGOT [Proses]', Relawan::where('kelurahan', 'SELENGOT')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),

            Stat::make('LABUANGKALLO', Relawan::where('kelurahan', 'LABUANGKALLO')->count()),
            Stat::make('LABUANGKALLO [Terverifikasi]', Relawan::where('kelurahan', 'LABUANGKALLO')->where('status', 'Terverifikasi')->count())
                ->icon('heroicon-o-check-circle'),
            Stat::make('LABUANGKALLO [Proses]', Relawan::where('kelurahan', 'LABUANGKALLO')->where('status', 'Proses')->count())
                ->icon('heroicon-o-x-circle'),
        ];
    }
}
