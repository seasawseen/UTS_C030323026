<?php

namespace App\Filament\Resources\LeaveManagementResource\Pages;

use App\Filament\Resources\LeaveManagementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeaveManagement extends ListRecords
{
    protected static string $resource = LeaveManagementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
