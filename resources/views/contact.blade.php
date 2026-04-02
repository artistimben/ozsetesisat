@extends('layouts.app')

@section('title', 'İletişim - ÖZSE Tesisat')

@section('content')
<section class="py-24 bg-surface">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
            <div>
                <h1 class="text-5xl font-bold font-outfit mb-8 tracking-tight">Bize <span class="gradient-text">Ulaşın</span></h1>
                <p class="text-slate-500 text-lg mb-12 max-w-lg leading-relaxed">
                    Sorularınız varsa veya acil bir tesisat yardımı gerekiyorsa, aşağıdaki iletişim kanallarından bizimle bağlantı kurabilirsiniz.
                </p>
                
                <div class="space-y-8">
                    <div class="flex items-center group">
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-primary shadow-sm border border-slate-100 group-hover:bg-primary group-hover:text-white transition-all mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M22.5 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.9l-4.752 5.728a2.25 2.25 0 01-3.188.142l-2.25-2.25a2.25 2.25 0 01.142-3.188l5.728-4.752c.829-.686.991-1.874.9-2.95a4.5 4.5 0 014.484-4.884V4.5a.75.75 0 001.5 0v-.366a4.508 4.508 0 014.484 4.417c0 .11-.002.218-.006.326a2.25 2.25 0 002.164 2.164c.108-.004.216-.006.326-.006a4.508 4.508 0 014.417 4.484v-.1zM10.5 9l-9 9m9-9l9 9"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Hızlı İletişim</p>
                            <p class="text-xl font-bold font-outfit">0530 000 00 00</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center group">
                        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-primary shadow-sm border border-slate-100 group-hover:bg-primary group-hover:text-white transition-all mr-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path></svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-bold uppercase tracking-widest mb-1">Adresimiz</p>
                            <p class="text-xl font-bold font-outfit leading-snug">Dörtyol, Hatay, Türkiye</p>
                        </div>
                    </div>
                    <div class="flex items-center group cursor-pointer" onclick="window.open('https://wa.me/905300000000', '_blank')">
                        <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center text-green-600 shadow-sm border border-green-100 group-hover:bg-green-500 group-hover:text-white transition-all mr-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-green-600 font-bold uppercase tracking-widest mb-1">Acil Yardım Hattı</p>
                            <p class="text-xl font-bold font-outfit">Hemen Mesaj Gönder</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-12 rounded-[3.5rem] shadow-2xl border border-slate-100 relative group">
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                
                <h3 class="text-3xl font-bold font-outfit mb-8 leading-tight">Teklif İsteyin</h3>
                
                @if(session('success'))
                <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-2xl mb-8">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6 relative z-10">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Ad Soyad</label>
                        <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-slate-300" placeholder="Adınız">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">E-posta</label>
                        <input type="email" name="email" required class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-slate-300" placeholder="E-posta adresiniz">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wider">Mesajınız</label>
                        <textarea name="message" required rows="4" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none transition-all placeholder:text-slate-300" placeholder="Sorununuzu kısaca anlatın..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary text-white py-5 rounded-2xl font-bold hover:bg-secondary transition-all shadow-xl shadow-primary/30 flex items-center justify-center text-lg">
                        Talep Gönder
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
