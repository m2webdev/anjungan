<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ISDHTLResource\Pages;
use App\Filament\Resources\ISDHTLResource\RelationManagers;
use App\Models\ISDHTL;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ISDHTLResource extends Resource
{
    protected static ?string $model = ISDHTL::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListISDHTLS::route('/'),
            'create' => Pages\CreateISDHTL::route('/create'),
            'view' => Pages\ViewISDHTL::route('/{record}'),
            'edit' => Pages\EditISDHTL::route('/{record}/edit'),
        ];
    }    
}
