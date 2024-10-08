<?php

namespace App\Filament\Resources\NIKResource\Pages;

use App\Filament\Resources\NIKResource;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListNIKS extends ListRecords
{
    protected static string $resource = NIKResource::class;

    protected ?string $heading = 'NIK';

    public function getTitle(): string | Htmlable
    {
        return __('NIK');
    }

    protected function getHeaderActions(): array
    {
        return [
            ExcelImportAction::make()
                ->color('primary')
//            Actions\CreateAction::make(),
        ];
    }
}
