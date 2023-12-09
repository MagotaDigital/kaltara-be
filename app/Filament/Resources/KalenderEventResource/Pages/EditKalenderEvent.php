<?php

namespace App\Filament\Resources\KalenderEventResource\Pages;

use App\Filament\Resources\KalenderEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKalenderEvent extends EditRecord
{
    protected static string $resource = KalenderEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
