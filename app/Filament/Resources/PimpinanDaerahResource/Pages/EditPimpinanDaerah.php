<?php

namespace App\Filament\Resources\PimpinanDaerahResource\Pages;

use App\Filament\Resources\PimpinanDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPimpinanDaerah extends EditRecord
{
    protected static string $resource = PimpinanDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
