<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SaleOrderResource\Pages;
use App\Filament\Resources\SaleOrderResource\RelationManagers;
use App\Models\SaleOrder;
use App\Tables\Columns\CartContent;
use App\Tables\Columns\SaleOrderStatus;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SaleOrderResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = SaleOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }

    protected static array $status = [
        'processing' => 0,
        'shipped' => 1,
        'invoiced' => 2,
        'cancelled' => 3,
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('sale_order_id')
                    ->searchable(),
                CartContent::make('cart_content'),
                Tables\Columns\TextColumn::make('payment_type'),
                Tables\Columns\TextColumn::make('subtotal')->money('THB'),
                Tables\Columns\TextColumn::make('tax')->money('THB')->label('tax (7%)'),
                Tables\Columns\TextColumn::make('total')->money('THB'),
                SaleOrderStatus::make('status'),
                Tables\Columns\TextColumn::make('user.name')
                ->label('customer')
                ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('customer')->relationship('user', 'name'),
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
            'index' => Pages\ListSaleOrders::route('/'),
            'create' => Pages\CreateSaleOrder::route('/create'),
            'edit' => Pages\EditSaleOrder::route('/{record}/edit'),
        ];
    }
}