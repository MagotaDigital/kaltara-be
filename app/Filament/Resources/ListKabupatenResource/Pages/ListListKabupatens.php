<?php

namespace App\Filament\Resources\ListKabupatenResource\Pages;

use App\Filament\Resources\ListKabupatenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListListKabupatens extends ListRecords
{
    protected static string $resource = ListKabupatenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
