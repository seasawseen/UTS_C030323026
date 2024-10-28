<?php

namespace App\Filament\Resources\PayrollManagementResource\Pages;

use App\Filament\Resources\PayrollManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayrollManagement extends EditRecord
{
    protected static string $resource = PayrollManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
