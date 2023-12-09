<?php

namespace App\Filament\Resources\ListKabupatenResource\Pages;

use App\Filament\Resources\ListKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditListKabupaten extends EditRecord
{
    protected static string $resource = ListKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
