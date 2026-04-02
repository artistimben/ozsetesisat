<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Başlık')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('subtitle')
                    ->label('Alt Başlık / Açıklama'),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Görsel')
                    ->image()
                    ->required(),
                \Filament\Forms\Components\TextInput::make('link')
                    ->label('Link / Bağlantı'),
                \Filament\Forms\Components\TextInput::make('order')
                    ->label('Sıralama')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->label('Aktif mi?')
                    ->default(true),
            ]);
    }
}
