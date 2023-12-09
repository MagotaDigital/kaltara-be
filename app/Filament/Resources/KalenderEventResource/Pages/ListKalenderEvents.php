<?php

namespace App\Filament\Resources\KalenderEventResource\Pages;

use App\Filament\Resources\KalenderEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKalenderEvents extends ListRecords
{
    protected static string $resource = KalenderEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
