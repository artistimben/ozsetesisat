@extends('layouts.app')

@section('title', 'Tamamlanan Projeler - ÖZSE Tesisat')

@section('content')
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h1 class="text-5xl font-bold font-outfit mb-6 tracking-tight">Tamamlanan Projeler</h1>
            <p class="text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">Referans çalışmalarımızı inceleyerek çözüm süreçlerimiz hakkında fikir sahibi olabilirsiniz.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($projects as $project)
            <div class="group relative rounded-3xl overflow-hidden shadow-lg h-96 card-hover">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                @else
                <img src="https://images.unsplash.com/photo-1541123437800-1bb1317badc1?auto=format&fit=crop&w=800&q=80" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent"></div>
                <div class="absolute bottom-10 left-10 text-white">
                    <p class="text-xs text-primary font-bold uppercase tracking-widest mb-2">{{ $project->area ?? 'Genel' }}</p>
                    <h3 class="text-2xl font-bold font-outfit">{{ $project->title }}</h3>
                </div>
            </div>
            @empty
            <div class="col-span-full py-20 text-center">
                <p class="text-slate-400 text-lg">Henüz eklenmiş bir proje bulunmuyor.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
