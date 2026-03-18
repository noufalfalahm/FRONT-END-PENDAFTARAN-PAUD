<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAUD Ta'am Insan Taqwa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <nav class="bg-white/90 backdrop-blur-md shadow-sm fixed w-full z-50 transition-all duration-300 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-orange-500 text-white rounded-xl flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-105 transition-transform">
                            T
                        </div>
                        <span class="font-extrabold text-2xl text-gray-900 tracking-tight">PAUD <span class="text-orange-500">Ta'am</span></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-sm transition-all relative py-2 {{ request()->is('/') ? 'text-gray-900 font-bold after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-1/2 after:h-[3px] after:bg-gray-800 after:rounded-full' : 'text-gray-600 font-medium hover:text-orange-500 after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-[3px] after:bg-orange-500 after:rounded-full hover:after:w-1/2 after:transition-all after:duration-300' }}">
                        Beranda
                    </a>
                    
                    <a href="/profil" class="text-sm transition-all relative py-2 {{ request()->is('profil') ? 'text-gray-900 font-bold after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-1/2 after:h-[3px] after:bg-gray-800 after:rounded-full' : 'text-gray-600 font-medium hover:text-orange-500 after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-[3px] after:bg-orange-500 after:rounded-full hover:after:w-1/2 after:transition-all after:duration-300' }}">
                        Profil Sekolah
                    </a>
                    
                    <a href="/informasi-pendaftaran" class="text-sm transition-all relative py-2 {{ request()->is('informasi-pendaftaran') ? 'text-gray-900 font-bold after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-1/2 after:h-[3px] after:bg-gray-800 after:rounded-full' : 'text-gray-600 font-medium hover:text-orange-500 after:absolute after:-bottom-1 after:left-1/2 after:-translate-x-1/2 after:w-0 after:h-[3px] after:bg-orange-500 after:rounded-full hover:after:w-1/2 after:transition-all after:duration-300' }}">
                        Info Pendaftaran
                    </a>
                    
                    <a href="/pendaftaran" class="px-6 py-2.5 text-sm font-bold rounded-full text-white transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5 {{ request()->is('pendaftaran') ? 'bg-orange-600 ring-2 ring-orange-300 ring-offset-2' : 'bg-orange-500 hover:bg-orange-600' }}">
                        Formulir Pendaftaran
                    </a>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 hover:text-orange-500 focus:outline-none p-2 rounded-lg hover:bg-gray-50 transition-colors">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 flex flex-col">
                <a href="/" class="block px-4 py-3 text-base rounded-xl transition {{ request()->is('/') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-700 font-medium hover:text-orange-500 hover:bg-orange-50' }}">Beranda</a>
                
                <a href="/profil" class="block px-4 py-3 text-base rounded-xl transition {{ request()->is('profil') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-700 font-medium hover:text-orange-500 hover:bg-orange-50' }}">Profil Sekolah</a>
                
                <a href="/informasi-pendaftaran" class="block px-4 py-3 text-base rounded-xl transition {{ request()->is('informasi-pendaftaran') ? 'bg-gray-100 text-gray-900 font-bold' : 'text-gray-700 font-medium hover:text-orange-500 hover:bg-orange-50' }}">Info Pendaftaran</a>
                
                <div class="pt-2">
                    <a href="/pendaftaran" class="block w-full text-center px-4 py-3 text-base font-bold rounded-full transition shadow-sm {{ request()->is('pendaftaran') ? 'bg-orange-600 text-white' : 'bg-orange-500 text-white hover:bg-orange-600' }}">Formulir Pendaftaran</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="pt-20 flex-grow">
        @yield('content')
    </div>

    <footer class="bg-gray-900 pt-16 pb-8 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 bg-orange-500 text-white rounded-lg flex items-center justify-center font-bold shadow-lg">T</div>
                        <span class="font-extrabold text-xl text-white tracking-tight">PAUD Ta'am</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed max-w-sm mb-6">
                        Pendidikan anak usia dini dengan pendekatan interaktif, fasilitas aman, dan nilai-nilai Islami untuk mencetak generasi cerdas dan berakhlak mulia.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Navigasi</h4>
                    <ul class="space-y-4">
                        <li><a href="/" class="text-gray-400 hover:text-orange-400 transition-colors">Beranda</a></li>
                        <li><a href="/profil" class="text-gray-400 hover:text-orange-400 transition-colors">Profil Sekolah</a></li>
                        <li><a href="/informasi-pendaftaran" class="text-gray-400 hover:text-orange-400 transition-colors">Info Pendaftaran</a></li>
                        <li><a href="/pendaftaran" class="text-gray-400 hover:text-orange-400 transition-colors">Formulir Pendaftaran</a></li>
                        <li class="pt-2"><a href="/login" class="text-gray-500 hover:text-white transition-colors text-sm">Portal Admin</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-sm">Hubungi Kami</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 mr-3 mt-0.5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            KP Kramat RT 02/03, Harapan Jaya, Cibinong, Bogor
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-3 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            +62 812-3456-7890
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm">
                    &copy; 2026 PAUD Ta'am Insan Taqwa. Sistem Informasi Pendaftaran.
                </p>
                <p class="text-gray-600 text-sm mt-2 md:mt-0">
                    Dikembangkan oleh M. Noufal Falah (1.2210466)
                </p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('menu-icon-open');
        const iconClose = document.getElementById('menu-icon-close');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>
</body>
</html>