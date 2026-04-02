@extends('layouts.app')

@section('title', 'Tüm Hizmetlerimiz - ÖZSE Tesisat')

@section('content')
<section class="py-20 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <h1 class="text-4xl lg:text-6xl font-bold font-outfit mb-6 tracking-tight">Hizmetlerimiz</h1>
            <p class="text-slate-500 text-lg max-w-2xl leading-relaxed">
                Hatay Dörtyol ve çevre ilçelerde profesyonel, garantili ve modern ekipmanlı tesisat çözümleri sunuyoruz.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($services as $service)
            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-slate-100 card-hover flex flex-col">
                <div class="h-64 bg-slate-200 relative overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1542013936693-884638332954?auto=format&fit=crop&w=800&q=80" alt="{{ $service->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 flex space-x-2">
                        <span class="bg-primary/90 text-white px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest backdrop-blur-sm">Garantili</span>
                    </div>
                </div>
                <div class="p-10 flex-grow">
                    <h3 class="text-2xl font-bold font-outfit mb-4">{{ $service->title }}</h3>
                    <p class="text-slate-500 mb-8 leading-relaxed">{{ $service->description }}</p>
                    <a href="/hizmetler/{{ $service->slug }}" class="inline-flex items-center text-primary font-bold hover:translate-x-2 transition-transform">
                        Detaylı Bilgi
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
