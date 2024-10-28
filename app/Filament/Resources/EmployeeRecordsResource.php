<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeRecordsResource\Pages;
use App\Filament\Resources\EmployeeRecordsResource\RelationManagers;
use App\Models\EmployeeRecords;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeRecordsResource extends Resource
{
    protected static ?string $model = EmployeeRecords::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployeeRecords::route('/'),
            'create' => Pages\CreateEmployeeRecords::route('/create'),
            'edit' => Pages\EditEmployeeRecords::route('/{record}/edit'),
        ];
    }
}
