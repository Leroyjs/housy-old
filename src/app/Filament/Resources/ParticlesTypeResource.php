<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticlesTypeResource\Pages;
use App\Filament\Resources\ParticlesTypeResource\RelationManagers;
use App\Models\ParticlesType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ParticlesTypeResource extends Resource
{
    protected static ?string $model = ParticlesType::class;

    protected static ?string $label  = 'Тип составляющего пакета';
    protected static ?string $pluralLabel  = 'Тип составляющих пакета';
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
            'index' => Pages\ListParticlesTypes::route('/'),
            'create' => Pages\CreateParticlesType::route('/create'),
            'edit' => Pages\EditParticlesType::route('/{record}/edit'),
        ];
    }
}
