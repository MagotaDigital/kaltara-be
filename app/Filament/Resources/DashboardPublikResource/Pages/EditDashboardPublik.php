<?php

namespace App\Filament\Resources\DashboardPublikResource\Pages;

use App\Filament\Resources\DashboardPublikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDashboardPublik extends EditRecord
{
    protected static string $resource = DashboardPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
