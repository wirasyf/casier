<?php

namespace App\Filament\Resources\Sales\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;

class SaleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('tanggal_penjualan')
                    ->required(),
                Select::make('customer_id')
                    ->relationship('customer', 'nama_customer')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('total_harga')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
            ]);
    }
}
