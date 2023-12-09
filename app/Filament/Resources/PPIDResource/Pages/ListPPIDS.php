<?php

namespace App\Filament\Resources\PPIDResource\Pages;

use App\Filament\Resources\PPIDResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPPIDS extends ListRecords
{
    protected static string $resource = PPIDResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
