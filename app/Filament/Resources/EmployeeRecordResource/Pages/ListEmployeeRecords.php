<?php

namespace App\Filament\Resources\EmployeeRecordResource\Pages;

use App\Filament\Resources\EmployeeRecordResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeRecords extends ListRecords
{
    protected static string $resource = EmployeeRecordResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
