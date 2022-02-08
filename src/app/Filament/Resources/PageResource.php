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
//        @todo рефактор
        $currentUrlParams = \Illuminate\Support\Facades\Route::current()->parameters();
        $slug = Page::find($currentUrlParams['record'])
                ->title ?? null;

        $defaultFields = [
            TextInput::make('title')
                ->label('Название страницы')
                ->disabled(),
        ];

        switch ($slug) {
            case Page::PAGE_ABOUT:
//                $fields = $this->robotsFields();

                break;
            case Page::PAGE_BUILDING:
//                $fields = $this->seoTextFields();

                break;
            case Page::PAGE_CONTACT:
//                $fields = $this->shopContactsFields();

                break;
            case Page::PAGE_PAY:
//                $fields = $this->defaultOfferPropertiesFields();

                break;
            case Page::PAGE_PORTFOLIO:
//                $fields = $this->welcomeScreenFields();

                break;
            case Page::PAGE_SALE:
//                $fields = $this->footerMenuSocialNetworks();

                break;
            case Page::PAGE_TYPICAL_PROJECTS:
//                $fields = $this->footerMenuInformation();

                break;
            default:
                $fields = [];

                break;
        }
//
//        return array_merge($defaultFields, $fields);

        return $form
            ->schema([

                Repeater::make('fields')
                    ->schema([
                        TextInput::make('Заголовок'),
                        RichEditor::make('Текст'),
                    ])
            ]);
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

    private function about()
    {

    }

    private function typicalProjectsFields()
    {

    }

    private function portfolio()
    {

    }

    private function sale()
    {

    }


}
