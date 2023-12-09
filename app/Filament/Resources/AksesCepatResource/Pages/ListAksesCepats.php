<?php

namespace App\Filament\Resources\AksesCepatResource\Pages;

use App\Filament\Resources\AksesCepatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAksesCepats extends ListRecords
{
    protected static string $resource = AksesCepatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
