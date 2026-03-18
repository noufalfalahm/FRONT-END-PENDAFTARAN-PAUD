@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-orange-500 to-orange-600 pt-12 pb-16 relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-white opacity-10 blur-3xl"></div>
    <div class="absolute bottom-0 left-10 w-64 h-64 rounded-full bg-amber-400 opacity-20 blur-2xl"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-4 tracking-tight">Formulir Pendaftaran Online</h1>
        <p class="text-orange-100 mb-10 text-lg" id="headerSubtitle">
            Tahun Ajaran 2026/2027. Mohon isi data dengan lengkap sesuai dokumen resmi (KK/Akta).
        </p>

        <div class="flex items-center justify-center max-w-2xl mx-auto">
            <div class="flex items-center text-white" id="step1">
                <div id="step1Circle" class="rounded-full h-12 w-12 flex items-center justify-center bg-white text-orange-600 font-extrabold text-lg shadow-lg border-4 border-orange-200 transition-all duration-500">1</div>
                <span class="ml-3 font-bold hidden sm:block text-shadow-sm">Isi Data Diri</span>
            </div>
            
            <div class="flex-1 w-12 sm:w-20 border-t-2 border-white border-dashed mx-4 opacity-50" id="line1"></div>
            
            <div class="flex items-center text-orange-200 opacity-80" id="step2">
                <div id="step2Circle" class="rounded-full h-12 w-12 flex items-center justify-center bg-orange-600/50 border-2 border-orange-300 font-bold text-lg transition-all duration-500">2</div>
                <span class="ml-3 font-medium hidden sm:block transition-all duration-500" id="step2Text">Kirim Form</span>
            </div>
            
            <div class="flex-1 w-12 sm:w-20 border-t-2 border-orange-300 border-dashed mx-4 opacity-50" id="line2"></div>
            
            <div class="flex items-center text-orange-200 opacity-80" id="step3">
                <div id="step3Circle" class="rounded-full h-12 w-12 flex items-center justify-center bg-orange-600/50 border-2 border-orange-300 font-bold text-lg transition-all duration-500">3</div>
                <span class="ml-3 font-medium hidden sm:block transition-all duration-500" id="step3Text">Selesai</span>
            </div>
        </div>
    </div>
</section>

<div class="bg-gray-50 py-12 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col lg:flex-row gap-8 items-start">
            
            <div class="w-full lg:w-1/3 space-y-6 lg:sticky lg:top-24" id="leftColumn">
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-orange-100 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-orange-400 to-amber-400"></div>
                    <h3 class="font-bold text-gray-900 text-xl mb-6 flex items-center">
                        <svg class="w-6 h-6 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Panduan Singkat
                    </h3>
                    
                    <ul class="space-y-6 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-orange-200 before:to-transparent">
                        <li class="relative flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-sm z-10 shadow-sm border-2 border-white">1</div>
                            <div class="flex-1 pt-1.5">
                                <h4 class="font-semibold text-gray-900 text-sm">Isi Formulir</h4>
                                <p class="text-xs text-gray-500 mt-1">Lengkapi ketiga bagian form di samping dengan data yang valid.</p>
                            </div>
                        </li>
                        <li class="relative flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-sm z-10 shadow-sm border-2 border-white">2</div>
                            <div class="flex-1 pt-1.5">
                                <h4 class="font-semibold text-gray-900 text-sm">Tunggu Pesan WA</h4>
                                <p class="text-xs text-gray-500 mt-1">Admin akan menghubungi nomor WhatsApp Anda maksimal 1x24 jam.</p>
                            </div>
                        </li>
                        <li class="relative flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold text-sm z-10 shadow-sm border-2 border-white">3</div>
                            <div class="flex-1 pt-1.5">
                                <h4 class="font-semibold text-gray-900 text-sm">Daftar Ulang</h4>
                                <p class="text-xs text-gray-500 mt-1">Datang ke sekolah membawa berkas fisik (KK, Akta) & pelunasan.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 shadow-sm border border-green-100">
                    <h3 class="font-bold text-gray-900 text-lg mb-2 flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Butuh Bantuan?
                    </h3>
                    <p class="text-sm text-gray-600 mb-6">Jika Ayah/Bunda mengalami kendala saat mengisi form, jangan ragu untuk menghubungi admin kami.</p>
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-full flex items-center justify-center px-4 py-3 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        Hubungi via WA
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-2/3" id="formContainer">
                <form id="registrationForm" onsubmit="submitForm(event)" class="space-y-8 transition-all duration-500">
                    @csrf 
                    
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 relative">
                        <div class="flex items-center mb-8 pb-4 border-b border-gray-100">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mr-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900">A. Data Calon Murid</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Pilih Program Kelas <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg></div>
                                    <select required class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-700 bg-gray-50 focus:bg-white appearance-none cursor-pointer">
                                        <option value="" disabled selected>-- Silakan Pilih Program --</option>
                                        <option value="KB">Kelompok Bermain (KB) | Usia 3-4 Tahun</option>
                                        <option value="TKA">Taman Kanak-Kanak A (TK A) | Usia 4-5 Tahun</option>
                                        <option value="TKB">Taman Kanak-Kanak B (TK B) | Usia 5-6 Tahun</option>
                                    </select>
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">NIK Anak (16 Digit) <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg></div>
                                    <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="16" required placeholder="Contoh: 3201012345678901" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 font-medium bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap Anak <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></div>
                                    <input type="text" required placeholder="Contoh: Daffa Al-Fatih" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Tempat Lahir <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg></div>
                                    <input type="text" required placeholder="Contoh: Bogor" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                                    <input type="date" required class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 relative">
                        <div class="flex items-center mb-8 pb-4 border-b border-gray-100">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mr-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900">B. Data Orang Tua / Wali</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor Kartu Keluarga (KK) <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg></div>
                                    <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="16" required placeholder="Masukkan 16 digit Nomor KK" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 font-medium bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div class="md:col-span-2 mt-4">
                                <span class="inline-block py-1 px-3 rounded-lg bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-wider mb-2">Data Ayah Kandung</span>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">NIK Ayah <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg></div>
                                    <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="16" required placeholder="NIK Ayah (16 digit)" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 font-medium bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Ayah <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></div>
                                    <input type="text" required placeholder="Sesuai KTP" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div class="md:col-span-2 mt-2">
                                <span class="inline-block py-1 px-3 rounded-lg bg-pink-50 text-pink-700 text-xs font-bold uppercase tracking-wider mb-2">Data Ibu Kandung</span>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">NIK Ibu <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg></div>
                                    <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="16" required placeholder="NIK Ibu (16 digit)" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 font-medium bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Ibu <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></div>
                                    <input type="text" required placeholder="Sesuai KTP" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                            <div class="md:col-span-2 border-t border-gray-100 pt-6 mt-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nomor WhatsApp Aktif <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none"><svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg></div>
                                    <input type="text" inputmode="numeric" pattern="[0-9]*" required placeholder="Contoh: 081234567890" class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 font-medium bg-gray-50 focus:bg-white">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 relative">
                        <div class="flex items-center mb-6 pb-4 border-b border-gray-100">
                            <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center mr-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </div>
                            <h2 class="text-xl font-bold text-gray-900">C. Alamat & Pas Foto</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Alamat Lengkap Domisili <span class="text-red-500">*</span></label>
                                <textarea required rows="3" placeholder="Nama Jalan, Kampung, Perumahan, RT/RW..." class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition text-gray-900 bg-gray-50 focus:bg-white resize-none"></textarea>
                            </div>
                            <div class="md:col-span-2 mt-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Unggah Pas Foto Anak (Opsional) </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl bg-gray-50 hover:bg-orange-50 hover:border-orange-300 transition-colors group">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-orange-500 transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                        <div class="flex text-sm text-gray-600 justify-center mt-2">
                                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-orange-600 hover:text-orange-500 border border-orange-200 px-3 py-1.5 shadow-sm transition">
                                                <span>Pilih file foto</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" onchange="document.getElementById('file-name').textContent = this.files[0].name">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-2">Format PNG/JPG maksimal 2MB</p>
                                        <p id="file-name" class="text-sm font-semibold text-orange-600 mt-2"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <div class="bg-orange-50 rounded-2xl p-6 border border-orange-200 flex flex-col md:flex-row items-center justify-between gap-6 shadow-sm">
                            <p class="text-sm text-orange-900 flex-1 leading-relaxed">
                                <span class="font-bold flex items-center mb-1"><svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg> Pernyataan:</span> 
                                Dengan menekan tombol daftar, saya menjamin bahwa data yang diinputkan adalah benar.
                            </p>
                            <button type="submit" class="w-full md:w-auto px-8 py-4 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-xl shadow-lg shadow-orange-500/30 transition-all transform hover:-translate-y-1 flex items-center justify-center whitespace-nowrap">
                                Kirim Data Pendaftaran
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </button>
                        </div>
                    </div>
                </form>

                <div id="successMessage" class="hidden bg-white rounded-3xl p-10 md:p-16 shadow-xl border border-green-100 text-center transition-all duration-500 transform translate-y-4 opacity-0">
                    <div class="w-24 h-24 mx-auto bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-green-500 animate-[bounce_1s_ease-in-out_infinite]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-4">Pendaftaran Berhasil!</h2>
                    <p class="text-gray-600 text-lg mb-8 max-w-lg mx-auto">
                        Alhamdulillah, data formulir pendaftaran ananda telah berhasil tersimpan di sistem kami.
                    </p>
                    
                    <div class="bg-orange-50 rounded-2xl p-6 mb-10 text-left border border-orange-100 inline-block max-w-md w-full">
                        <h4 class="font-bold text-orange-800 flex items-center mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Langkah Selanjutnya:
                        </h4>
                        <p class="text-sm text-orange-700 leading-relaxed">
                            Mohon tunggu pesan WhatsApp dari Admin PAUD Ta'am (maksimal 1x24 jam kerja) untuk proses konfirmasi data dan instruksi Daftar Ulang ke sekolah.
                        </p>
                    </div>

                    <div>
                        <a href="/" class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 hover:bg-gray-800 text-white font-bold rounded-xl transition-all shadow-md">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>

            </div>
            
        </div>
    </div>
</div>

<script>
    function submitForm(event) {
        // 1. Mencegah form untuk reload halaman (karena ini simulasi)
        event.preventDefault();

        // 2. Ambil elemen DOM
        const form = document.getElementById('registrationForm');
        const successMessage = document.getElementById('successMessage');
        
        // Elemen Stepper
        const step1Circle = document.getElementById('step1Circle');
        const step2Circle = document.getElementById('step2Circle');
        const step3Circle = document.getElementById('step3Circle');
        
        const step2 = document.getElementById('step2');
        const step3 = document.getElementById('step3');
        const step2Text = document.getElementById('step2Text');
        const step3Text = document.getElementById('step3Text');
        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');

        const headerSubtitle = document.getElementById('headerSubtitle');
        
        // 3. Sembunyikan Form dengan animasi transisi
        form.classList.add('opacity-0', 'scale-95');
        
        setTimeout(() => {
            form.classList.add('hidden'); // Hilangkan form sepenuhnya
            
            // Tampilkan Pesan Sukses
            successMessage.classList.remove('hidden');
            // Sedikit jeda agar transisi CSS berjalan
            setTimeout(() => {
                successMessage.classList.remove('opacity-0', 'translate-y-4');
            }, 50);

            // 4. Update UI Stepper ke Tahap 3 (Selesai)
            
            // Ubah Step 1 menjadi Centang
            step1Circle.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>';
            step1Circle.classList.replace('text-orange-600', 'text-white');
            step1Circle.classList.replace('bg-white', 'bg-orange-500');
            step1Circle.classList.replace('border-orange-200', 'border-orange-500');
            
            // Ubah Step 2 menjadi Centang
            step2.classList.replace('opacity-80', 'opacity-100');
            step2.classList.replace('text-orange-200', 'text-white');
            step2Circle.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>';
            step2Circle.classList.replace('bg-orange-600/50', 'bg-orange-500');
            step2Circle.classList.replace('border-orange-300', 'border-orange-500');
            
            // Ubah Step 3 menjadi Aktif
            step3.classList.replace('opacity-80', 'opacity-100');
            step3.classList.replace('text-orange-200', 'text-white');
            step3Circle.classList.replace('bg-orange-600/50', 'bg-white');
            step3Circle.classList.replace('border-orange-300', 'border-white');
            step3Circle.classList.add('text-orange-600');
            step3Text.classList.add('font-bold', 'text-shadow-sm');

            // Terangkan garis penghubung
            line1.classList.replace('opacity-50', 'opacity-100');
            line1.classList.replace('border-dashed', 'border-solid');
            line2.classList.replace('opacity-50', 'opacity-100');
            line2.classList.replace('border-dashed', 'border-solid');
            line2.classList.replace('border-orange-300', 'border-white');

            // Ganti teks subtitle
            headerSubtitle.innerText = "Terima kasih! Proses pendaftaran online telah selesai dilakukan.";
            
            // Sembunyikan kolom kiri di layar kecil agar fokus ke pesan sukses
            if(window.innerWidth < 1024) {
                document.getElementById('leftColumn').style.display = 'none';
            }
            
            // Scroll otomatis ke atas
            window.scrollTo({ top: 0, behavior: 'smooth' });

        }, 500); // Tunggu 0.5 detik saat form menghilang
    }
</script>
@endsection