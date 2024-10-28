<?php

namespace App\Filament\Resources\LeaveManagementResource\Pages;

use App\Filament\Resources\LeaveManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeaveManagement extends EditRecord
{
    protected static string $resource = LeaveManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
