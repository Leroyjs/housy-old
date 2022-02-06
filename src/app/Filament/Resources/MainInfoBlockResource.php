<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainInfoBlockResource\Pages;
use App\Filament\Resources\MainInfoBlockResource\RelationManagers;
use App\Models\MainInfoBlock;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;

class MainInfoBlockResource extends Resource
{
    protected static ?string $model = MainInfoBlock::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required(),
                TextInput::make('info')
                    ->label('Текст'),
                TextInput::make('url_text')
                    ->label('Текст ссылки'),
                TextInput::make('url')
                    ->label('Ссылка')
                    ->prefix('/'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('Изображение')
                    ->collection('slide')
                    ->required()
//                            ->preserveFilenames()
//                            ->acceptedFileTypes(['.png'])
                ,
                Checkbox::make('is_show')
                    ->label('отображать в слайдере')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Заголовок')
                    ->sortable(),
                TextColumn::make('info')
                    ->label('Текст')
                    ->sortable(),
                BooleanColumn::make('is_shown')
                    ->label('Показать на странице')
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
            'index' => Pages\ListMainInfoBlocks::route('/'),
            'create' => Pages\CreateMainInfoBlock::route('/create'),
            'edit' => Pages\EditMainInfoBlock::route('/{record}/edit'),
        ];
    }
}
