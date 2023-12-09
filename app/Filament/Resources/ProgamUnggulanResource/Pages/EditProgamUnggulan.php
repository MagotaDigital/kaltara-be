<?php

namespace App\Filament\Resources\ProgamUnggulanResource\Pages;

use App\Filament\Resources\ProgamUnggulanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgamUnggulan extends EditRecord
{
    protected static string $resource = ProgamUnggulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
