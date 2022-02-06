<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProtfolioResource\Pages;
use App\Filament\Resources\ProtfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Название')
                    ->required(),
                TextInput::make('build_date')
                    ->label('Год постройки')
                    ->integer(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('Изображения')
                    ->multiple()
                    ->collection('main-slider')
                    ->required(),
                RichEditor::make('about')
                    ->label('Информация о проекте')
                    ->toolbarButtons([
                        'bold',
                        'bulletList',
                        'orderedList',
                    ]),
                RichEditor::make('description')
                    ->label('Описание проекта')
                    ->toolbarButtons([
                        'bold',
                        'bulletList',
                        'orderedList',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Название')
                    ->sortable(),
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
            'index' => Pages\ListProtfolios::route('/'),
            'create' => Pages\CreateProtfolio::route('/create'),
            'edit' => Pages\EditProtfolio::route('/{record}/edit'),
        ];
    }
}
