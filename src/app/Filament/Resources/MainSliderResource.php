<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainSliderResource\Pages;
use App\Filament\Resources\MainSliderResource\RelationManagers;
use App\Models\MainSlider;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;

class MainSliderResource extends Resource
{
    protected static ?string $model = MainSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required(),
                TextInput::make('slider_text')
                    ->label('Текст')
                    ->required(),
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
                TextColumn::make('slider_text')
                    ->label('Текст')
                    ->sortable(),
                BooleanColumn::make('is_shown')
                    ->label('Показать в слайдере')
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
            'index' => Pages\ListMainSliders::route('/'),
            'create' => Pages\CreateMainSlider::route('/create'),
            'edit' => Pages\EditMainSlider::route('/{record}/edit'),
        ];
    }
}
