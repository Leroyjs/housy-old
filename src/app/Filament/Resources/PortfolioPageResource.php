<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioPageResource\Pages;
use App\Filament\Resources\PortfolioPageResource\RelationManagers;
use App\Models\PortfolioPage;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PortfolioPageResource extends Resource
{
    protected static ?string $model = PortfolioPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Станица')
                    ->required(),
                Repeater::make('info')
                    ->label('Информация на странице')
                    ->schema([
                        TextInput::make('text')
                            ->label('Текст'),
                        TextInput::make('text_url')
                            ->label('Текст ссылки'),
                        TextInput::make('url')
                            ->label('Сслыка')
                            ->prefix('https://')
                    ])
                    ->createItemButtonLabel('Добавить блок'),
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
            'index' => Pages\ListPortfolioPages::route('/'),
//            'create' => Pages\CreatePortfolioPage::route('/create'),
            'edit' => Pages\EditPortfolioPage::route('/{record}/edit'),
        ];
    }
}
