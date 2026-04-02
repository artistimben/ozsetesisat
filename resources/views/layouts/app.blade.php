<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ÖZSE Tesisat - Hatay Dörtyol Su Tesisatı')</title>
    <meta name="description" content="@yield('meta_description', 'Hatay Dörtyol ve çevresinde su tesisatı, tıkanıklık açma, kaçak tespiti ve petek temizleme hizmetleri.')">
    <meta name="keywords" content="dörtyol su tesisatçısı, hatay tıkanıklık açma, dörtyol su kaçağı tespiti">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Heroicons for SVGs (optional but let's use CDN for simplicity) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e40af',
                        accent: '#3b82f6',
                        surface: '#f8fafc',
                        dark: '#0f172a'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        outfit: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; color: #0f172a; }
        .font-outfit { font-family: 'Outfit', sans-serif; }
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .card-hover:hover { transform: translateY(-5px); transition: all 0.3s ease; box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1); }
        .nav-link { position: relative; }
        .nav-link::after { content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0; background-color: #2563eb; transition: width 0.3s ease; }
        .nav-link:hover::after { width: 100%; }
        .gradient-text { background: linear-gradient(135deg, #2563eb 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    </style>
</head>
<body class="antialiased">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 glass">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <a href="/" class="flex items-center group">
                        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white mr-3 group-hover:rotate-12 transition-transform shadow-lg shadow-primary/20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold font-outfit tracking-tight">ÖZSE<span class="text-primary">TESİSAT</span></span>
                    </a>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link font-medium text-slate-600 hover:text-primary">Ana Sayfa</a>
                    <a href="/hizmetler" class="nav-link font-medium text-slate-600 hover:text-primary">Hizmetlerimiz</a>
                    <a href="/projeler" class="nav-link font-medium text-slate-600 hover:text-primary">Projeler</a>
                    <a href="/iletisim" class="nav-link font-medium text-slate-600 hover:text-primary">İletişim</a>
                    <a href="tel:05300000000" class="bg-primary text-white px-6 py-2.5 rounded-full font-semibold hover:bg-secondary transition-all shadow-lg shadow-primary/30 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        Hemen Ara
                    </a>
                </div>
                
                <!-- Mobile Navigation Button -->
                <div class="flex md:hidden">
                    <button class="text-slate-600 hover:text-primary focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-slate-300 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div>
                    <div class="flex items-center text-white mb-6">
                        <span class="text-2xl font-bold font-outfit tracking-tight">ÖZSE<span class="text-primary">TESİSAT</span></span>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-6">
                        Hatay Dörtyol ve çevresinde profesyonel su tesisatı çözümleri sunuyoruz. 7/24 hizmet anlayışımızla yanınızdayız.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                            <!-- Social Icon (Facebook) -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-colors">
                            <!-- Social Icon (Instagram) -->
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-6 font-outfit">Hızlı Linkler</h3>
                    <ul class="space-y-4">
                        <li><a href="/" class="hover:text-primary transition-colors">Ana Sayfa</a></li>
                        <li><a href="/hizmetler" class="hover:text-primary transition-colors">Hizmetlerimiz</a></li>
                        <li><a href="/projeler" class="hover:text-primary transition-colors">Projeler</a></li>
                        <li><a href="/iletisim" class="hover:text-primary transition-colors">İletişim</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-6 font-outfit">Hizmetler</h3>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-primary transition-colors">Tıkanıklık Açma</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Su Kaçağı Tespiti</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Petek Temizleme</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Tesisat Döşeme</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-6 font-outfit">İletişim</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="mr-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            Dörtyol, Hatay
                        </li>
                        <li class="flex items-center">
                            <span class="mr-3 text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                            </span>
                            0530 000 00 00
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-slate-800 text-center text-sm">
                <p>&copy; {{ date('Y') }} ÖZSE Tesisat. Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </footer>
</body>
</html>
