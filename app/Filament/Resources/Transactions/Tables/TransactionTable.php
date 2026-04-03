<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Table;

class TransactionTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('date')
                    ->label('Tarih')
                    ->date()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('type')
                    ->label('Tür')
                    ->badge()
                    ->color(fn ($state) => $state === 'gelir' ? 'success' : 'danger')
                    ->formatStateUsing(fn ($state) => ucfirst($state)),
                \Filament\Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('amount')
                    ->label('Tutar')
                    ->money('TRY')
                    ->sortable()
                    ->summarize(\Filament\Tables\Columns\Summarizers\Sum::make()->label('Toplam')),
                \Filament\Tables\Columns\TextColumn::make('workOrder.title')
                    ->label('Is')
                    ->limit(20)
                    ->toggleable(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
