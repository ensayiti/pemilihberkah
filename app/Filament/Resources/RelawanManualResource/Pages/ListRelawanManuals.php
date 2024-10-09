<?php

namespace App\Filament\Resources\RelawanManualResource\Pages;

use App\Filament\Resources\RelawanManualResource;
use App\Models\Relawan;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;

class ListRelawanManuals extends ListRecords
{
    protected static string $resource = RelawanManualResource::class;

    protected ?string $heading = 'Relawan [Form]';

    public function getTitle(): string | Htmlable
    {
        return __('Relawan [Form]');
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->badge(Relawan::query()->count()),
            'Terverifikasi' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'Terverifikasi'))
                ->badge(Relawan::query()->where('status', 'Terverifikasi')->count()),
            'Proses' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', 'Proses'))
                ->badge(Relawan::query()->where('status', 'Proses')->count()),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
