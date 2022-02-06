<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParticleResource\Pages;
use App\Filament\Resources\ParticleResource\RelationManagers;
use App\Models\Particle;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ParticleResource extends Resource
{
    protected static ?string $model = Particle::class;

    protected static ?string $label  = 'Составляющие пакета';
    protected static ?string $pluralLabel  = 'Составляющие пакета';
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
            'index' => Pages\ListParticles::route('/'),
            'create' => Pages\CreateParticle::route('/create'),
            'edit' => Pages\EditParticle::route('/{record}/edit'),
        ];
    }
}
