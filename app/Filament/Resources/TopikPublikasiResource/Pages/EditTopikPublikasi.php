<?php

namespace App\Filament\Resources\TopikPublikasiResource\Pages;

use App\Filament\Resources\TopikPublikasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopikPublikasi extends EditRecord
{
    protected static string $resource = TopikPublikasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
