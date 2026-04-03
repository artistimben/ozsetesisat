<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('key')
                    ->label('Sistem Anahtarı')
                    ->required()
                    ->disabled(fn ($record) => $record !== null),
                \Filament\Forms\Components\TextInput::make('label')
                    ->label('Ayar Adı')
                    ->required(),
                \Filament\Forms\Components\Textarea::make('value')
                    ->label('Ayar Değeri')
                    ->required()
                    ->visible(fn ($record) => $record?->type === 'textarea')
                    ->columnSpanFull(),
                \Filament\Forms\Components\TextInput::make('value')
                    ->label('Ayar Değeri')
                    ->required()
                    ->visible(fn ($record) => $record?->type !== 'textarea' && $record?->type !== 'image')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('value')
                    ->label('Ayar Görseli')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->required()
                    ->visible(fn ($record) => $record?->type === 'image')
                    ->columnSpanFull(),
            ]);
    }
}
