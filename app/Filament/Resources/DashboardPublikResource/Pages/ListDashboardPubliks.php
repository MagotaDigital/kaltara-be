<?php

namespace App\Filament\Resources\DashboardPublikResource\Pages;

use App\Filament\Resources\DashboardPublikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDashboardPubliks extends ListRecords
{
    protected static string $resource = DashboardPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
