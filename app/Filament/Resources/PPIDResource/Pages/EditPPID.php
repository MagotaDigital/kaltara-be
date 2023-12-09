<?php

namespace App\Filament\Resources\PPIDResource\Pages;

use App\Filament\Resources\PPIDResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPPID extends EditRecord
{
    protected static string $resource = PPIDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
