<?php

namespace App\Filament\Resources\AttendanceTrackingResource\Pages;

use App\Filament\Resources\AttendanceTrackingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttendanceTrackings extends ListRecords
{
    protected static string $resource = AttendanceTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
