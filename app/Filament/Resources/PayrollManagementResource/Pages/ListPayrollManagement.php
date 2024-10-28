<?php

namespace App\Filament\Resources\PayrollManagementResource\Pages;

use App\Filament\Resources\PayrollManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayrollManagement extends ListRecords
{
    protected static string $resource = PayrollManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
