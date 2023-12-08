<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PKHResource\Pages;
use App\Filament\Resources\PKHResource\RelationManagers;
use App\Models\PKH;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PKHResource extends Resource
{
    protected static ?string $model = PKH::class;

    protected static ?string $navigationIcon = 'heroicon-s-globe-europe-africa';

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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPKHS::route('/'),
            'create' => Pages\CreatePKH::route('/create'),
            'edit' => Pages\EditPKH::route('/{record}/edit'),
        ];
    }    
}
