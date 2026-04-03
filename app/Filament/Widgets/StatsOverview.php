<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Toplam Müşteri', \App\Models\Customer::count())
                ->description('Kayıtlı müşteri sayısı')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Users)
                ->color('success'),
            Stat::make('Toplam Gelir', '₺' . number_format(\App\Models\Transaction::where('type', 'gelir')->sum('amount'), 2))
                ->description('Toplam tahsil edilen tutar')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Banknotes)
                ->color('success'),
            Stat::make('Toplam Gider', '₺' . number_format(\App\Models\Transaction::where('type', 'gider')->sum('amount'), 2))
                ->description('Toplam yapılan harcama')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::PresentationChartLine)
                ->color('danger'),
            Stat::make('Bekleyen İşler', \App\Models\WorkOrder::where('status', 'pending')->count())
                ->description('Müdahale bekleyen işler')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Clock)
                ->color('warning'),
            Stat::make('Yeni Mesajlar', \App\Models\ContactMessage::where('is_read', false)->count())
                ->description('Okunmamış mesajlar')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Envelope)
                ->color('info'),
        ];
    }
}
