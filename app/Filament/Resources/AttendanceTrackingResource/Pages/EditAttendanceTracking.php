<?php

namespace App\Filament\Resources\AttendanceTrackingResource\Pages;

use App\Filament\Resources\AttendanceTrackingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAttendanceTracking extends EditRecord
{
    protected static string $resource = AttendanceTrackingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
