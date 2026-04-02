<?php

namespace App\Filament\Resources\WorkOrders\Schemas;

use Filament\Schemas\Schema;

class WorkOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('customer_id')
                    ->label('Müşteri')
                    ->relationship('customer', 'name')
                    ->searchable()
                    ->required(),
                \Filament\Forms\Components\Select::make('service_id')
                    ->label('Hizmet')
                    ->relationship('service', 'title')
                    ->searchable(),
                \Filament\Forms\Components\TextInput::make('title')
                    ->label('İş Başlığı')
                    ->placeholder('Örn: Mutfak gideri tıkanıklığı')
                    ->required(),
                \Filament\Forms\Components\RichEditor::make('description')
                    ->label('İş Detayı')
                    ->columnSpanFull(),
                \Filament\Forms\Components\Select::make('status')
                    ->label('Durum')
                    ->options([
                        'pending' => 'Beklemede',
                        'in_progress' => 'Devam Ediyor',
                        'completed' => 'Tamamlandı',
                        'cancelled' => 'İptal Edildi',
                    ])
                    ->default('pending')
                    ->required(),
                \Filament\Forms\Components\TextInput::make('price')
                    ->label('Ücret')
                    ->numeric()
                    ->prefix('₺'),
                \Filament\Forms\Components\DateTimePicker::make('scheduled_at')
                    ->label('Randevu Zamanı'),
                \Filament\Forms\Components\DateTimePicker::make('completed_at')
                    ->label('Tamamlanma Zamanı'),
            ]);
    }
}
