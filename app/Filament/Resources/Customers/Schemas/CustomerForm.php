<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->label('Müşteri Adı')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('phone')
                    ->label('Telefon Numarası')
                    ->tel()
                    ->required(),
                \Filament\Forms\Components\Textarea::make('address')
                    ->label('Adres')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Textarea::make('notes')
                    ->label('Notlar')
                    ->columnSpanFull(),
            ]);
    }
}
