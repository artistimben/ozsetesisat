<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Forms\Components\Select::make('type')
                    ->label('Islem Türü')
                    ->options([
                        'gelir' => 'Gelir (+)',
                        'gider' => 'Gider (-)',
                    ])
                    ->required()
                    ->native(false),
                \Filament\Forms\Components\TextInput::make('amount')
                    ->label('Tutar')
                    ->numeric()
                    ->required()
                    ->prefix('₺'),
                \Filament\Forms\Components\TextInput::make('category')
                    ->label('Kategori')
                    ->placeholder('Örn: Malzeme, Yakit, Isçilik')
                    ->datalist([
                        'Malzeme Alimi',
                        'Yakit Gideri',
                        'Isçilik Ücreti',
                        'Kira',
                        'Diger',
                    ]),
                \Filament\Forms\Components\DatePicker::make('date')
                    ->label('Tarih')
                    ->required()
                    ->default(now()),
                \Filament\Forms\Components\Select::make('work_order_id')
                    ->label('Ilgili Is (Opsiyonel)')
                    ->relationship('workOrder', 'title')
                    ->searchable()
                    ->placeholder('Bir is seçin'),
                \Filament\Forms\Components\Textarea::make('description')
                    ->label('Açiklama')
                    ->columnSpanFull(),
            ]);
    }
}
