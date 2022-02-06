<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainPageResource\Pages;
use App\Filament\Resources\MainPageResource\RelationManagers;
use App\Models\MainPage;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class MainPageResource extends Resource
{
    protected static ?string $model = MainPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Станица')
                    ->required(),

                Repeater::make('slider')
                    ->label('Слайдер на главной')
                    ->schema([
                        Forms\Components\SpatieMediaLibraryFileUpload::make('Изображение')
                            ->collection('main-slider')
                            ->required()
//                            ->preserveFilenames()
//                            ->acceptedFileTypes(['.png'])
                        ,
                        TextInput::make('title')
                            ->label('Заголовок')
                            ->required(),
                        TextInput::make('text')
                            ->label('Текст')
                            ->required(),
                    ])
                    ->createItemButtonLabel('Добавить слайд'),
                Repeater::make('info')
                    ->label('Информационные блоки')
                    ->schema([
                        Forms\Components\SpatieMediaLibraryFileUpload::make('Изображение')
                            ->collection('info-img')
//                            ->preserveFilenames()
//                            ->acceptedFileTypes(['.png'])
                        ,
                        TextInput::make('title')
                            ->label('Заголовок')
                            ->required(),
                        TextInput::make('text')
                            ->label('Текст')
                            ->required(),
                        TextInput::make('url')
                            ->prefix('https://')
                    ])
                    ->createItemButtonLabel('Добавить информационный блок')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('id')
                    ->sortable(),
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
            'index' => Pages\ListMainPages::route('/'),
//            'create' => Pages\CreateMainPage::route('/create'),
            'edit' => Pages\EditMainPage::route('/{record}/edit'),
        ];
    }
}
