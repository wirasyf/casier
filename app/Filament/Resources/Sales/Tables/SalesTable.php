<?php

namespace App\Filament\Resources\Sales\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SalesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_penjualan')
                    ->date()
                    ->sortable(),
                TextColumn::make('customer.nama_customer')
                    ->label('Pelanggan')
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Petugas')
                    ->searchable(),
                TextColumn::make('total_barang')
                    ->label('Total Barang')
                    ->sortable(),
                TextColumn::make('total_harga')
                    ->money('IDR')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
