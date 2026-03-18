<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Murid - PAUD Ta'am</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 overflow-hidden relative">

    <div class="flex h-screen">

        <aside class="w-64 bg-white shadow-xl flex flex-col hidden md:flex z-10 relative print:hidden">
            <div class="h-16 flex items-center px-6 border-b border-gray-100">
                <span class="text-2xl font-extrabold text-orange-600 tracking-tight">PAUD Ta'am</span>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-semibold text-sm">Dashboard</span>
                </a>
                <a href="{{ route('data-pendaftar') }}" class="flex items-center px-4 py-3 bg-orange-50 text-orange-700 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <span class="font-semibold text-sm">Data Pendaftar</span>
                </a>
            </nav>
        </aside>

        <main class="flex-1 flex flex-col h-screen overflow-hidden bg-gray-50/50 print:bg-white print:h-auto print:overflow-visible">
            
            <header class="h-16 bg-white/80 backdrop-blur-md shadow-sm flex items-center justify-between px-6 lg:px-10 z-0 print:hidden">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('data-pendaftar') }}" class="text-gray-400 hover:text-orange-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </a>
                    <h1 class="text-xl font-bold text-gray-800">Detail Profil Pendaftar</h1>
                </div>
            </header>

            <div class="flex-1 overflow-y-auto p-6 lg:p-10 print:p-0">
                
                <div class="flex justify-between items-center mb-6 print:hidden">
                    <div class="flex items-center space-x-3">
                        <span class="px-4 py-1.5 bg-green-100 text-green-700 border border-green-200 text-sm font-bold rounded-full flex items-center">
                            <span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span> Diterima
                        </span>
                        <span class="text-sm text-gray-500">Terdaftar pada: 12 Juli 2025</span>
                    </div>
                    
                    <button onclick="window.print()" class="px-5 py-2.5 bg-gray-800 hover:bg-gray-900 text-white text-sm font-medium rounded-xl transition shadow-sm flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        Cetak Formulir
                    </button>
                </div>

                <div class="bg-white rounded-3xl shadow-sm border border-gray-200 overflow-hidden max-w-4xl mx-auto print:shadow-none print:border-none print:w-full">
                    
                    <div class="border-b-2 border-gray-800 p-8 flex items-center justify-between bg-orange-50/30 print:bg-white">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-orange-600 text-white rounded-xl flex items-center justify-center font-bold text-3xl print:border-2 print:border-black print:text-black print:bg-white">T</div>
                            <div>
                                <h2 class="text-2xl font-extrabold text-gray-900 tracking-tight">PAUD TA'AM INSAN TAQWA</h2>
                                <p class="text-sm text-gray-600">KP Kramat RT 02/03, Harapan Jaya, Cibinong, Bogor</p>
                                <p class="text-sm text-gray-600">Telp: +62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <h3 class="font-bold text-lg text-gray-800 uppercase tracking-widest">Formulir Pendaftaran</h3>
                            <p class="text-sm font-mono text-gray-500 mt-1">NO. REG: REG-2025-001</p>
                        </div>
                    </div>

                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                            
                            <div class="md:col-span-1 flex flex-col items-center border-r border-gray-100 pr-0 md:pr-8 print:border-none">
                                <div class="w-40 h-48 bg-gray-100 border-2 border-dashed border-gray-300 rounded-2xl flex flex-col items-center justify-center mb-4 text-gray-400">
                                    <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-xs">Foto Anak 3x4</span>
                                </div>
                            </div>

                            <div class="md:col-span-2 space-y-8">
                                
                                <div>
                                    <h3 class="text-lg font-bold text-orange-800 border-b border-gray-200 pb-2 mb-4 uppercase text-sm tracking-wider">A. Data Calon Murid</h3>
                                    <table class="w-full text-sm">
                                        <tbody>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Nama Lengkap</td><td class="py-2 font-semibold text-gray-900">: Daffa Al-Fatih</td></tr>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Tempat, Tanggal Lahir</td><td class="py-2 font-semibold text-gray-900">: Bogor, 12 Januari 2020</td></tr>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Jenis Kelamin</td><td class="py-2 font-semibold text-gray-900">: Laki-laki</td></tr>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Usia saat mendaftar</td><td class="py-2 font-semibold text-gray-900">: 5 Tahun 6 Bulan</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div>
                                    <h3 class="text-lg font-bold text-orange-800 border-b border-gray-200 pb-2 mb-4 uppercase text-sm tracking-wider">B. Data Orang Tua / Wali</h3>
                                    <table class="w-full text-sm">
                                        <tbody>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Nama Ayah / Wali</td><td class="py-2 font-semibold text-gray-900">: Budi Santoso</td></tr>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3">Nomor WhatsApp</td><td class="py-2 font-semibold text-gray-900">: +62 812-3456-7890</td></tr>
                                            <tr class="border-b border-gray-50"><td class="py-2 text-gray-500 w-1/3 align-top">Alamat Domisili</td><td class="py-2 font-semibold text-gray-900">: Jl. Melati Raya No. 15, RT 01/RW 04, Kelurahan Harapan Jaya, Cibinong.</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                        <div class="mt-16 pt-8 flex justify-between items-end">
                            <div class="text-center w-48">
                                <p class="text-sm text-gray-600 mb-16">Mengetahui,<br>Kepala Sekolah / Admin</p>
                                <div class="border-b border-gray-400 w-full mb-1"></div>
                                <p class="text-xs text-gray-500">NIP/NIK: .......................</p>
                            </div>
                            <div class="text-center w-48">
                                <p class="text-sm text-gray-600 mb-16">Bogor, 12 Juli 2025<br>Orang Tua / Wali Murid</p>
                                <div class="border-b border-gray-400 w-full mb-1"></div>
                                <p class="text-xs text-gray-500 font-semibold">Budi Santoso</p>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
        </main>
    </div>
</body>
</html>