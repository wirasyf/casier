<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_customer')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nomor_telepon')
                    ->tel()
                    ->maxLength(20),
                Textarea::make('alamat')
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }
}
