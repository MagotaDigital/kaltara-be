<?php

namespace App\Filament\Resources\KategoriLayananPublikResource\Pages;

use App\Filament\Resources\KategoriLayananPublikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriLayananPublik extends EditRecord
{
    protected static string $resource = KategoriLayananPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
