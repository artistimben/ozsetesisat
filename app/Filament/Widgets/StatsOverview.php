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
            Stat::make('Bekleyen İşler', \App\Models\WorkOrder::where('status', 'pending')->count())
                ->description('Müdahale bekleyen işler')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Clock)
                ->color('warning'),
            Stat::make('Yeni Mesajlar', \App\Models\ContactMessage::where('is_read', false)->count())
                ->description('Okunmamış iletişim mesajları')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::Envelope)
                ->color('danger'),
            Stat::make('Tamamlanan İşler', \App\Models\WorkOrder::where('status', 'completed')->count())
                ->description('Başarıyla biten işler')
                ->descriptionIcon(\Filament\Support\Icons\Heroicon::CheckCircle)
                ->color('info'),
        ];
    }
}
