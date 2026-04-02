<?php

namespace App\Filament\Resources\ContactMessages\Schemas;

use Filament\Schemas\Schema;

class ContactMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->label('Gönderen Adı')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('phone')
                    ->label('Telefon Numarası')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('email')
                    ->label('E-posta Adresi')
                    ->disabled(),
                \Filament\Forms\Components\TextInput::make('subject')
                    ->label('Konu')
                    ->disabled(),
                \Filament\Forms\Components\Textarea::make('message')
                    ->label('Mesaj İçeriği')
                    ->disabled()
                    ->columnSpanFull(),
                \Filament\Forms\Components\Toggle::make('is_read')
                    ->label('Okundu mu?')
                    ->default(false),
            ]);
    }
}
