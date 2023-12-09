<?php

namespace App\Filament\Resources\PimpinanDaerahResource\Pages;

use App\Filament\Resources\PimpinanDaerahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPimpinanDaerahs extends ListRecords
{
    protected static string $resource = PimpinanDaerahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
