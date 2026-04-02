<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'title' => 'Su Tesisatı Döşeme',
            'slug' => 'su-tesisati-doseme',
            'description' => 'Hatay Dörtyol ve çevresinde profesyonel su tesisatı döşeme ve yenileme hizmetleri.',
            'icon' => 'wrench-screwdriver',
            'order' => 1
        ]);

        \App\Models\Service::create([
            'title' => 'Tıkanıklık Açma',
            'slug' => 'tikaniklik-acma',
            'description' => 'Mutfak, banyo ve kanalizasyon tıkanıklıklarını kırmadan dökmeden robot cihazlarla açıyoruz.',
            'icon' => 'arrow-path',
            'order' => 2
        ]);

        \App\Models\Service::create([
            'title' => 'Cihazla Su Kaçağı Tespiti',
            'slug' => 'su-kacagi-tespiti',
            'description' => 'Akustik dinleme cihazları ve termal kameralar ile su kaçaklarını noktasal olarak tespit ediyoruz.',
            'icon' => 'magnifying-glass',
            'order' => 3
        ]);

        \App\Models\Service::create([
            'title' => 'Petek Temizleme',
            'slug' => 'petek-temizleme',
            'description' => 'Kombi ve peteklerinizi temizleyerek yakıt tasarrufu ve daha iyi ısınma sağlıyoruz.',
            'icon' => 'fire',
            'order' => 4
        ]);

        \App\Models\Setting::create(['key' => 'site_title', 'value' => 'ÖZSE Tesisat - Hatay Dörtyol Su Tesisatçısı', 'label' => 'Site Başlığı', 'type' => 'text']);
        \App\Models\Setting::create(['key' => 'site_description', 'value' => 'Dörtyol ve Hatay çevresinde su tesisatı, tıkanıklık açma, kaçak tespiti ve petek temizleme hizmetleri.', 'label' => 'Site Açıklaması', 'type' => 'textarea']);
        \App\Models\Setting::create(['key' => 'phone', 'value' => '05XX XXX XX XX', 'label' => 'Telefon Numarası', 'type' => 'text']);
        \App\Models\Setting::create(['key' => 'address', 'value' => 'Dörtyol, Hatay', 'label' => 'Adres', 'type' => 'text']);
        \App\Models\Setting::create(['key' => 'whatsapp', 'value' => 'https://wa.me/905XXXXXXXXX', 'label' => 'WhatsApp Bağlantısı', 'type' => 'text']);
        \App\Models\Setting::create(['key' => 'seo_keywords', 'value' => 'dörtyol su tesisatçısı, hatay tikaniklik açma, kaçak tespiti dörtyol', 'label' => 'SEO Anahtar Kelimeler', 'type' => 'text']);

        \App\Models\Post::create([
            'title' => 'Su Kaçağı Belirtileri Nelerdir?',
            'slug' => 'su-kacagi-belirtileri',
            'content' => 'Evinizde su kaçağı olduğunu nasıl anlarsınız? İşte en belirgin işaretler...',
            'published_at' => now(),
            'is_published' => true
        ]);

        \App\Models\Post::create([
            'title' => 'Tıkanan Giderler İçin Pratik Çözümler',
            'slug' => 'tikanan-giderler-icin-cozumler',
            'content' => 'Mutfak ve banyo giderleriniz tıkandığında evde uygulayabileceğiniz yöntemler.',
            'published_at' => now(),
            'is_published' => true
        ]);
    }
}
