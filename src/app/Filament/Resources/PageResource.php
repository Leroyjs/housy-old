<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

//    public function __construct()
//    {
//
//    }

    public static function form(Form $form): Form
    {

        $defaultFields = [
            TextInput::make('title')
                ->label('Название страницы')
                ->disabled(),
        ];

        $housesFields = PageResource::getHousesFields();
        $aboutFields = PageResource::getAboutFields();
        return $form->schema(array_merge($defaultFields, $housesFields, $aboutFields));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Заголовок')
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
//            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    //@todo так можем запрещать удалять запись
    public static function canDelete(Model $record): bool
    {
        return false;
    }

    private static function getHousesFields()
    {
        return [Repeater::make('fields')
            ->label('Информационные блоки')
            ->schema([
                TextInput::make('url_text')
                    ->label('Текст для ссылки'),
                TextInput::make('url')
                    ->label('Ссылка'),
                RichEditor::make('text')
                    ->label('Текст'),
            ])->hidden(fn(?Model $record) => $record->title !== 'Портфолио')];
    }

    private static function getAboutFields()
    {
        return [
            Repeater::make('fields')
                ->label('Информационные блоки')
                ->schema([
                        TextInput::make('title')
                            ->label('Заголовк'),
                        RichEditor::make('text')
                            ->label('Текст'),
                    ]
                )->hidden(fn(?Model $record) => $record->title !== 'О компании'),
            Repeater::make('info')
                ->label('Информационные блоки справа')
                ->schema([
                        TextInput::make('title')
                            ->label('Заголовк'),
                        TextInput::make('text')
                            ->label('Текст'),
                    ]
                )->hidden(fn(?Model $record) => $record->title !== 'О компании'),
        ];
    }
}
