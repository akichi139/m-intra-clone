<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Http\UploadedFile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('product_name')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('picture')
                    ->image()
                    ->multiple()
                    ->maxFiles(5)
                    ->disk('media')
                    ->conversionsDisk('media')
                    ->collection('productImages')
                    ->required(),
                // Forms\Components\FileUpload::make('picture')
                //     ->image()
                //     ->multiple()
                //     ->maxFiles(5)
                //     ->disk('media')
                //     ->directory('product')
                //     ->visibility('private')
                //     ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('datasheet')
                    ->acceptedFileTypes(['application/pdf'])
                    ->disk('media')
                    ->conversionsDisk('media')
                    ->collection('productDataSheet')
                    ->required(),
                // Forms\Components\FileUpload::make('datasheet')
                //     ->acceptedFileTypes(['application/pdf'])
                //     ->disk('media')
                //     ->directory('datasheet')
                //     ->visibility('private')
                //     ->required(),
                Forms\Components\Select::make('category_id')
                    ->label('category')
                    ->relationship('category', 'categories_name', fn(Builder $query) =>
                        $query->where('is_root_category', 0))
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('brand_id')
                    ->label('brand')
                    ->relationship('brand', 'brand_name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'new' => 'new',
                        'out of stock' => 'out of stock',
                        'sale' => 'sale',
                    ])
                    ->required(),
                Forms\Components\Select::make('supervise')
                    ->relationship('supervise', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('phone')
                            ->label('Phone number')
                            ->tel()
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('guarantee')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(10)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.categories_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand.brand_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('THB'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'new' => 'success',
                        'out of stock' => 'danger',
                        'sale' => 'warning'
                    }),
                Tables\Columns\TextColumn::make('supervise'),
                Tables\Columns\TextColumn::make('guarantee'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'new',
                        'out of stock' => 'out of stock',
                        'sale' => 'sale',
                    ]),
                Tables\Filters\SelectFilter::make('brand')->relationship('brand', 'brand_name'),
                Tables\Filters\SelectFilter::make('category')->relationship('category', 'categories_name', fn(Builder $query) =>
                    $query->where('is_root_category', 0)),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}