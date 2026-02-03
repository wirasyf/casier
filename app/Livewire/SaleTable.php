<?php

namespace App\Livewire;

use App\Models\Sale;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;

class SaleTable extends TableWidget
{
    protected static ?string $heading = 'Recent Sales';

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Sale::query()->latest())
            ->columns([
                TextColumn::make('id')
                    ->label('ID Penjualan')
                    ->sortable(),
                TextColumn::make('tanggal_penjualan')
                    ->date()
                    ->sortable(),
                TextColumn::make('customer.nama_customer')
                    ->label('Pelanggan')
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Petugas')
                    ->searchable(),
                TextColumn::make('product.name')
                    ->label('Produk')
                    ->searchable(),
                TextColumn::make('total_harga')
                    ->money('IDR')
                    ->sortable(),
            ]);
    }
}
