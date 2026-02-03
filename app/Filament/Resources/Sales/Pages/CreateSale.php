<?php

namespace App\Filament\Resources\Sales\Pages;

use App\Filament\Resources\Sales\SaleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSale extends CreateRecord
{
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }   
    protected static string $resource = SaleResource::class;
}
