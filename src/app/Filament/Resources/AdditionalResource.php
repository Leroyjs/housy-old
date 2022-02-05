<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalResource\Pages;
use App\Filament\Resources\AdditionalResource\RelationManagers;
use App\Models\Additional;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AdditionalResource extends Resource
{
    protected static ?string $model = Additional::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
            'index' => Pages\ListAdditionals::route('/'),
            'create' => Pages\CreateAdditional::route('/create'),
            'edit' => Pages\EditAdditional::route('/{record}/edit'),
        ];
    }
}
