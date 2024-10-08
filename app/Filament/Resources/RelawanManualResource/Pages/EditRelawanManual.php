<?php

namespace App\Filament\Resources\RelawanManualResource\Pages;

use App\Filament\Resources\RelawanManualResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRelawanManual extends EditRecord
{
    protected static string $resource = RelawanManualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
