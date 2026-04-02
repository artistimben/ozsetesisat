<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('question')
                    ->label('Soru')
                    ->required(),
                \Filament\Forms\Components\Textarea::make('answer')
                    ->label('Cevap')
                    ->required()
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('order')
                    ->label('Sıralama')
                    ->numeric()
                    ->default(0),
                \Filament\Forms\Components\Toggle::make('is_published')
                    ->label('Yayında mı?')
                    ->default(true),
            ]);
    }
}
