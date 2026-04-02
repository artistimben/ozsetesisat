<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('name')
                    ->label('Müşteri Adı')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('role')
                    ->label('Ünvan / Şehir'),
                \Filament\Forms\Components\Textarea::make('content')
                    ->label('Yorum İçeriği')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('rating')
                    ->label('Puan (1-5)')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Müşteri Fotoğrafı')
                    ->image(),
            ]);
    }
}
