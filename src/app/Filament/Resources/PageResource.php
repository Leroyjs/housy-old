<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
//
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Станица')
                    ->required(),

                Repeater::make('fields[1]')
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
                Repeater::make('fields[2]')
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
