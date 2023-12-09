<?php

namespace App\Filament\Resources\AksesCepatResource\Pages;

use App\Filament\Resources\AksesCepatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAksesCepat extends EditRecord
{
    protected static string $resource = AksesCepatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
