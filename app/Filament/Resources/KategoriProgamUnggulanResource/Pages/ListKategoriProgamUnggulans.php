<?php

namespace App\Filament\Resources\KategoriProgamUnggulanResource\Pages;

use App\Filament\Resources\KategoriProgamUnggulanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriProgamUnggulans extends ListRecords
{
    protected static string $resource = KategoriProgamUnggulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
