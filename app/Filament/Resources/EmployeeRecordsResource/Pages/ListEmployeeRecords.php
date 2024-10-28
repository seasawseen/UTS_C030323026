<?php

namespace App\Filament\Resources\EmployeeRecordsResource\Pages;

use App\Filament\Resources\EmployeeRecordsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeRecords extends ListRecords
{
    protected static string $resource = EmployeeRecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
