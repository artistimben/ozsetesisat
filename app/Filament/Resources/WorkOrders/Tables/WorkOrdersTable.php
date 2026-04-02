<?php

namespace App\Filament\Resources\WorkOrders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class WorkOrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('customer.name')
                    ->label('Müşteri')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('title')
                    ->label('İş Başlığı')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('status')
                    ->label('Durum')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'in_progress' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        default => 'secondary',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'Beklemede',
                        'in_progress' => 'Devam Ediyor',
                        'completed' => 'Tamamlandı',
                        'cancelled' => 'İptal Edildi',
                        default => $state,
                    }),
                \Filament\Tables\Columns\TextColumn::make('price')
                    ->label('Ücret')
                    ->money('try')
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('scheduled_at')
                    ->label('Randevu')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                \Filament\Tables\Filters\SelectFilter::make('status')
                    ->label('İş Durumu')
                    ->options([
                        'pending' => 'Beklemede',
                        'in_progress' => 'Devam Ediyor',
                        'completed' => 'Tamamlandı',
                        'cancelled' => 'İptal Edildi',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
