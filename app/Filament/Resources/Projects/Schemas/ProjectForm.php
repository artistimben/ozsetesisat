<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('Proje Adı')
                    ->required(),
                \Filament\Forms\Components\Textarea::make('description')
                    ->label('Proje Detayı')
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Proje Görseli')
                    ->image(),
                \Filament\Forms\Components\TextInput::make('area')
                    ->label('Bölge / Alan')
                    ->placeholder('Örn: Dörtyol / 5 Ocak Mahallesi'),
            ]);
    }
}
