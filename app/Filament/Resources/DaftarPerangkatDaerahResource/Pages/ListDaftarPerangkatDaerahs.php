<?php

namespace App\Filament\Resources\DaftarPerangkatDaerahResource\Pages;

use App\Filament\Resources\DaftarPerangkatDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarPerangkatDaerahs extends ListRecords
{
    protected static string $resource = DaftarPerangkatDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
