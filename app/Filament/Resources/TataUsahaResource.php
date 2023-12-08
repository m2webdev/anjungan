<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TataUsahaResource\Pages;
use App\Filament\Resources\TataUsahaResource\RelationManagers;
use App\Models\TataUsaha;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TataUsahaResource extends Resource
{
    protected static ?string $model = TataUsaha::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

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
            'index' => Pages\ListTataUsahas::route('/'),
            'create' => Pages\CreateTataUsaha::route('/create'),
            'edit' => Pages\EditTataUsaha::route('/{record}/edit'),
        ];
    }    
}
