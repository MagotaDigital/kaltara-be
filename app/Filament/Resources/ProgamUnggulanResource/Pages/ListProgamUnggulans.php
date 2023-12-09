<?php

namespace App\Filament\Resources\ProgamUnggulanResource\Pages;

use App\Filament\Resources\ProgamUnggulanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgamUnggulans extends ListRecords
{
    protected static string $resource = ProgamUnggulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
