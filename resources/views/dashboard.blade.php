<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PAUD Ta'am</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 overflow-hidden relative">

    <div class="flex h-screen">

        <aside class="w-64 bg-white shadow-xl flex flex-col hidden md:flex z-10 relative">
            <div class="h-16 flex items-center px-6 border-b border-gray-100">
                <span class="text-2xl font-extrabold text-orange-600 tracking-tight">PAUD Ta'am</span>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 bg-orange-50 text-orange-700 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-semibold text-sm">Dashboard</span>
                </a>

                <a href="{{ route('data-pendaftar') }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span class="font-semibold text-sm">Data Pendaftar</span>
                </a>
            </nav>

            <div class="p-4 border-t border-gray-100">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-3 text-red-600 hover:bg-red-50 rounded-xl transition-colors group">
                        <svg class="w-5 h-5 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span class="font-semibold text-sm">Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 flex flex-col h-screen overflow-hidden">
            
            <header class="h-16 bg-white/80 backdrop-blur-md shadow-sm flex items-center justify-between px-6 lg:px-10 z-0">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-800">Ringkasan Sistem</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-600">Halo, Admin</span>
                    <div class="h-8 w-8 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold text-sm shadow-md">
                        A
                    </div>
                </div>
            </header>

            <div class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 flex items-center hover:shadow-md transition-shadow">
                        <div class="p-4 bg-orange-50 rounded-xl mr-4">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Total Pendaftar</p>
                            <h3 class="text-2xl font-bold text-gray-900">24 <span class="text-sm font-normal text-gray-400">Anak</span></h3>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="px-6 py-5 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                        <h2 class="text-lg font-bold text-gray-800">5 Pendaftar Terbaru</h2>
                        </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-white border-b border-gray-100">
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Nama Anak</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Tanggal Lahir</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Nama Orang Tua</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                <tr class="hover:bg-orange-50/40 transition-colors group">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold mr-3">D</div>
                                            <div>
                                                <span class="font-semibold text-gray-800 block">Daffa Al-Fatih</span>
                                                <span class="text-xs text-gray-500">Laki-laki</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-600">12 Jan 2020</td>
                                    <td class="py-4 px-6 text-sm text-gray-600">Budi Santoso</td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="{{ route('data-pendaftar') }}" class="text-sm font-medium text-orange-600 hover:text-orange-800 transition-colors">
                                            Lihat Detail &rarr;
                                        </a>
                                    </td>
                                </tr>

                                <tr class="hover:bg-orange-50/40 transition-colors group">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center font-bold mr-3">A</div>
                                            <div>
                                                <span class="font-semibold text-gray-800 block">Aisyah Putri</span>
                                                <span class="text-xs text-gray-500">Perempuan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-600">05 Mar 2021</td>
                                    <td class="py-4 px-6 text-sm text-gray-600">Ahmad Wijaya</td>
                                    <td class="py-4 px-6 text-right">
                                        <a href="{{ route('data-pendaftar') }}" class="text-sm font-medium text-orange-600 hover:text-orange-800 transition-colors">
                                            Lihat Detail &rarr;
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>