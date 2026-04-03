@extends('layouts.app')

@section('title', 'Galeri - ÖZSE Tesisat')

@section('content')
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h1 class="text-5xl font-bold font-outfit mb-6 tracking-tight">Fotoğraf <span class="gradient-text">Galerisi</span></h1>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">Hizmetlerimizden ve çalışma alanlarımızdan profesyonel kareler.</p>
        </div>
        
        <div class="space-y-24">
            @forelse($galleries as $gallery)
            <div class="bg-white p-12 rounded-[3.5rem] shadow-sm border border-slate-100">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                    <div>
                        <h2 class="text-3xl font-bold font-outfit mb-4">{{ $gallery->title ?? 'Albüm' }}</h2>
                        <div class="w-20 h-1.5 bg-primary rounded-full"></div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @php
                        $images = is_array($gallery->images) ? $gallery->images : [];
                    @endphp
                    @foreach($images as $image)
                    <div class="group relative aspect-square overflow-hidden rounded-3xl bg-slate-100 cursor-pointer" onclick="showLightbox('{{ asset('storage/' . $image) }}')">
                        <img src="{{ asset('storage/' . $image) }}" alt="Galeri" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path></svg>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @empty
            <div class="py-20 text-center">
                <p class="text-slate-400 text-lg">Henüz eklenmiş bir fotoğraf bulunmuyor.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Lightbox Backdrop (Simple implementation) -->
<div id="lightbox" class="fixed inset-0 bg-dark/95 z-[100] hidden items-center justify-center p-4 backdrop-blur-sm" onclick="this.classList.add('hidden')">
    <img id="lightbox-img" src="" class="max-w-full max-h-full rounded-2xl shadow-2xl">
    <button class="absolute top-10 right-10 text-white hover:text-primary transition-colors">
        <svg class="w-10 h-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
</div>

<script>
    function showLightbox(src) {
        const lightbox = document.getElementById('lightbox');
        const img = document.getElementById('lightbox-img');
        img.src = src;
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
    }
</script>
@endsection
