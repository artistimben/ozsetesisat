@extends('layouts.app')

@section('title', $service->title . ' - ÖZSE Tesisat')

@section('content')
<section class="py-24 bg-surface overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="relative">
                <div class="absolute -inset-4 bg-primary/10 rounded-[3rem] blur-3xl transform rotate-3"></div>
                @if($service->image)
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="relative rounded-[2.5rem] w-full h-[500px] object-cover shadow-2xl">
                @else
                <img src="https://images.unsplash.com/photo-1542013936693-884638332954?auto=format&fit=crop&w=1200&q=80" alt="{{ $service->title }}" class="relative rounded-[2.5rem] w-full h-[500px] object-cover shadow-2xl">
                @endif
            </div>
            
            <div>
                <nav class="flex items-center space-x-3 text-sm text-slate-400 mb-8">
                    <a href="/" class="hover:text-primary transition-colors">Ana Sayfa</a>
                    <span>/</span>
                    <a href="/hizmetler" class="hover:text-primary transition-colors">Hizmetlerimiz</a>
                    <span>/</span>
                    <span class="text-slate-800 font-bold tracking-wide">{{ $service->title }}</span>
                </nav>
                
                <h1 class="text-4xl lg:text-5xl font-bold font-outfit mb-8 tracking-tight">{{ $service->title }}</h1>
                <div class="prose prose-lg text-slate-600 mb-12">
                    <p class="leading-relaxed text-xl font-light mb-6">
                        {{ $service->description }}
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-4 shrink-0 mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-slate-700">Dörtyol ve çevresinde profesyonel müdahale.</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-4 shrink-0 mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-slate-700">Kırmadan, dökmeden cihazla çözüm.</p>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-green-100 text-green-600 rounded-full flex items-center justify-center mr-4 shrink-0 mt-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="text-slate-700">Uygun fiyat garantisi ve teknik destek.</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 pt-8 border-t border-slate-200">
                    <a href="tel:05300000000" class="bg-primary text-white px-10 py-5 rounded-2xl font-bold hover:bg-secondary transition-all shadow-xl shadow-primary/30 flex items-center justify-center text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        Hemen Bizi Arayın
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
