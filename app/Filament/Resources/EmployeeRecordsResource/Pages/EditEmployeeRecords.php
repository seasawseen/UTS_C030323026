<?php

namespace App\Filament\Resources\EmployeeRecordsResource\Pages;

use App\Filament\Resources\EmployeeRecordsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeeRecords extends EditRecord
{
    protected static string $resource = EmployeeRecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
