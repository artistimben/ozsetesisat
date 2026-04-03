<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Albüm Adı')
                    ->placeholder('Örn: Banyo Tesisatı Örnekleri'),
                \Filament\Forms\Components\FileUpload::make('images')
                    ->label('Görseller')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->disk('public')
                    ->directory('gallery')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('order')
                    ->label('Sıralama')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->label('Yayında mı?')
                    ->default(true),
            ]);
    }
}
