<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('categories_name')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\Toggle::make('is_root_category')
                    ->inline(),
                Forms\Components\Select::make('root_category')
                    ->label('Category')
                    ->options(function () {
                        return Category::where('is_root_category', 1);
                    })
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('categories_name')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_root_category'),
                Tables\Columns\TextColumn::make('parentCategory.categories_name')
                ->label('Parent Category'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')->relationship('parentCategory', 'categories_name', fn(Builder $query) =>
                    $query->where('is_root_category', 1)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}