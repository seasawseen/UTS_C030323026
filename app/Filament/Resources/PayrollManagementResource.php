<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollManagementResource\Pages;
use App\Filament\Resources\PayrollManagementResource\RelationManagers;
use App\Models\PayrollManagement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayrollManagementResource extends Resource
{
    protected static ?string $model = PayrollManagement::class;

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
            'index' => Pages\ListPayrollManagement::route('/'),
            'create' => Pages\CreatePayrollManagement::route('/create'),
            'edit' => Pages\EditPayrollManagement::route('/{record}/edit'),
        ];
    }
}
