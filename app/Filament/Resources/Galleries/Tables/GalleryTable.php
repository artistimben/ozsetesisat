<?php

namespace App\Filament\Resources\Galleries\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Table;

class GalleryTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('title')
                    ->label('Albüm Adı')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('images')
                    ->label('Görsel Sayısı')
                    ->getStateUsing(fn ($record) => is_array($record->images) ? count($record->images) : 0),
                \Filament\Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Yayında'),
                \Filament\Tables\Columns\TextColumn::make('order')
                    ->label('Sıra')
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
