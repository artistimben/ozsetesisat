<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Başlık')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', \Illuminate\Support\Str::slug($state)) : null),
                \Filament\Forms\Components\TextInput::make('slug')
                    ->label('URL Uzantısı')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->unique(\App\Models\Post::class, 'slug', ignoreRecord: true),
                \Filament\Forms\Components\RichEditor::make('content')
                    ->label('İçerik')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Kapak Görseli')
                    ->image(),
                \Filament\Forms\Components\DateTimePicker::make('published_at')
                    ->label('Yayınlanma Tarihi'),
                \Filament\Forms\Components\Toggle::make('is_published')
                    ->label('Yayında mı?')
                    ->default(false),
            ]);
    }
}
