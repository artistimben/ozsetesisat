@extends('layouts.app')

@section('title', 'ÖZSE Tesisat - Hatay Dörtyol Su Tesisatı & Tıkanıklık Açma')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center pt-8 bg-surface">
    @if($sliders->count() > 0)
        @foreach($sliders as $slider)
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="bg-primary/10 text-primary px-4 py-1.5 rounded-full text-sm font-semibold mb-6 inline-block">7/24 Profesyonel Tesisat Hizmeti</span>
                    <h1 class="text-5xl lg:text-7xl font-bold font-outfit mb-8 tracking-tight leading-[1.1]">
                        {{ $slider->title }}
                    </h1>
                    <p class="text-xl text-slate-600 mb-10 leading-relaxed font-light">
                        {{ $slider->subtitle ?? 'Hatay Dörtyol ve çevre illerde modern cihazlarla kırmadan dökmeden profesyonel çözümler sunuyoruz.' }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 mb-12">
                        <a href="/hizmetler" class="bg-primary text-white px-8 py-4 rounded-2xl font-bold hover:bg-secondary transition-all shadow-xl shadow-primary/30 flex items-center justify-center">
                            Hizmetlerimizi İncele
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                        </a>
                        <a href="https://wa.me/905300000000" class="bg-white text-slate-800 border-2 border-slate-200 px-8 py-4 rounded-2xl font-bold hover:border-primary/30 hover:bg-slate-50 transition-all flex items-center justify-center group">
                            WhatsApp Mesajı
                        </a>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="relative bg-white rounded-[2.5rem] overflow-hidden shadow-2xl p-2 border border-white/50">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" class="rounded-[2rem] w-full h-[450px] object-cover">
                    </div>
                </div>
            </div>
        </div>
        @break <!-- For now display first one as hero, or we could add a proper slider JS -->
        @endforeach
    @else
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h1 class="text-5xl lg:text-7xl font-bold font-outfit mb-8 tracking-tight leading-[1.1]">
                    Tesisatınız Emin <br><span class="gradient-text">Ellerde</span>
                </h1>
                <p class="text-xl text-slate-600 mb-10 leading-relaxed font-light">
                    Hatay Dörtyol ve çevre illerde modern cihazlarla kırmadan dökmeden su kaçağı tespiti ve tüm tesisat çözümleri sunuyoruz.
                </p>
                <a href="/hizmetler" class="bg-primary text-white px-8 py-4 rounded-2xl font-bold hover:bg-secondary transition-all shadow-xl shadow-primary/30 inline-block">Hizmetler</a>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=800&q=80" alt="Tesisat" class="rounded-[2.5rem] w-full h-[450px] object-cover shadow-2xl">
            </div>
        </div>
    </div>
    @endif
</section>

<!-- Services Grid -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl lg:text-5xl font-bold font-outfit mb-6 tracking-tight">Hizmet Alanlarımız</h2>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto">Modern ekipman ve uzman kadroyla sunduğumuz tesisat çözümleri.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($services as $service)
            <div class="group bg-surface p-8 rounded-3xl border border-slate-100 hover:border-primary/20 card-hover">
                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-primary mb-8 shadow-sm group-hover:bg-primary group-hover:text-white transition-all transform group-hover:scale-110">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        @if($service->icon == 'wrench-screwdriver')
                        <path d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.9l-4.752 5.728a2.25 2.25 0 01-3.188.142l-2.25-2.25a2.25 2.25 0 01.142-3.188l5.728-4.752c.829-.686.991-1.874.9-2.95a4.5 4.5 0 014.484-4.884V4.5a.75.75 0 001.5 0v-.366a4.508 4.508 0 014.484 4.417c0 .11-.002.218-.006.326a2.25 2.25 0 002.164 2.164c.108-.004.216-.006.326-.006a4.508 4.508 0 014.417 4.484v-.1zM10.5 9l-9 9m9-9l9 9"></path>
                        @elseif($service->icon == 'arrow-path')
                        <path d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"></path>
                        @elseif($service->icon == 'magnifying-glass')
                        <path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        @elseif($service->icon == 'fire')
                        <path d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"></path>
                        @else
                        <path d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        @endif
                    </svg>
                </div>
                <h3 class="text-xl font-bold font-outfit mb-4 group-hover:text-primary transition-colors">{{ $service->title }}</h3>
                <p class="text-slate-500 leading-relaxed mb-8">{{ $service->description }}</p>
                <a href="/hizmetler/{{ $service->slug }}" class="flex items-center text-sm font-bold text-primary group-hover:translate-x-2 transition-transform">
                    Detaylı Bilgi
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About Call to Action -->
<section class="py-24 bg-dark relative overflow-hidden">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/5 -skew-x-12 transform translate-x-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl lg:text-5xl font-bold font-outfit text-white mb-8 tracking-tight leading-tight">Neden <span class="text-primary italic">ÖZSE Tesisat?</span></h2>
                <div class="space-y-8">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary/20 text-primary rounded-xl flex items-center justify-center mr-6 shrink-0 border border-primary/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-2">Hızlı Müdahale</h4>
                            <p class="text-slate-400">Dörtyol ve çevresinde acil tesisat durumlarına 30 dakika içinde yanıt veriyoruz.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-primary/20 text-primary rounded-xl flex items-center justify-center mr-6 shrink-0 border border-primary/20">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-2">Kırmadan Çözüm</h4>
                            <p class="text-slate-400">Termal kamera ve akustik cihazlarla tesisat sorunlarını noktasal tespit ederek gereksiz tadilattan kurtarıyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white/5 backdrop-blur-md rounded-[3rem] p-12 border border-white/10">
                <h3 class="text-3xl font-bold font-outfit text-white mb-6">Hemen Fiyat Teklifi Alın</h3>
                <p class="text-slate-400 mb-8 leading-relaxed">Sorununuzu fotoğrafını çekip bize WhatsApp üzerinden gönderin, anında fiyat ve çözüm sunalım.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/10 p-6 rounded-3xl text-center border border-white/5">
                        <p class="text-2xl font-bold text-white mb-1">12+</p>
                        <p class="text-xs text-slate-500 uppercase font-bold tracking-widest">Yıllık Tecrübe</p>
                    </div>
                    <div class="bg-white/10 p-6 rounded-3xl text-center border border-white/5">
                        <p class="text-2xl font-bold text-white mb-1">2.5k+</p>
                        <p class="text-xs text-slate-500 uppercase font-bold tracking-widest">Mutlu Müşteri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold font-outfit text-center mb-16">Müşterilerimiz <span class="gradient-text">Ne Dedi?</span></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="bg-white p-10 rounded-[2rem] shadow-sm border border-slate-100 italic relative group">
                <div class="absolute -top-6 left-10 w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-white shadow-lg shadow-primary/20 group-hover:-translate-y-2 transition-transform">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C14.9124 8 14.017 7.10457 14.017 6V5C14.017 3.89543 14.9124 3 16.017 3H19.017C21.2261 3 23.017 4.79086 23.017 7L23.017 15C23.017 18.866 19.883 22 16.017 22H14.017M3.017 21L3.017 18C3.017 16.8954 3.91243 16 5.017 16H8.017C8.56928 16 9.017 15.5523 9.017 15V9C9.017 8.44772 8.56928 8 8.017 8H5.017C3.91243 8 3.017 7.10457 3.017 6V5C3.017 3.89543 3.91243 3 5.017 3H8.017C10.2261 3 12.017 4.79086 12.017 7L12.017 15C12.017 18.866 8.883 22 5.017 22H3.017"></path></svg>
                </div>
                <p class="text-slate-600 mb-8 text-lg leading-relaxed">"{{ $testimonial->content }}"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-slate-200 rounded-full mr-4"></div>
                    <div>
                        <h5 class="font-bold text-slate-800">{{ $testimonial->name }}</h5>
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-widest">{{ $testimonial->role }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
