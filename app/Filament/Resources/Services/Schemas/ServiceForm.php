<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Hizmet Adı')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),
                \Filament\Forms\Components\TextInput::make('slug')
                    ->label('URL Uzantısı')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->unique(\App\Models\Service::class, 'slug', ignoreRecord: true),
                \Filament\Forms\Components\Textarea::make('description')
                    ->label('Açıklama')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Hizmet Görseli')
                    ->image(),
                \Filament\Forms\Components\TextInput::make('icon')
                    ->label('İkon Kodu (Heroicons)'),
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->label('Aktif mi?')
                    ->default(true),
                \Filament\Forms\Components\TextInput::make('order')
                    ->label('Sıralama')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
