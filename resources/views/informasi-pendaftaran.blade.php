@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-br from-orange-600 to-orange-800 py-16 relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-white opacity-10 blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-3xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Informasi Pendaftaran</h1>
        <p class="text-orange-100 max-w-2xl mx-auto text-lg">
            Panduan lengkap mengenai alur, persyaratan, dan rincian biaya pendaftaran murid baru di PAUD Ta'am Insan Taqwa.
        </p>
    </div>
</section>

<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <section>
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-900 inline-block relative">
                    Alur Pendaftaran
                    <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-orange-600 rounded-full -mb-2"></span>
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">1</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Isi Formulir Online</h3>
                    <p class="text-gray-600 text-sm">Wali murid mengisi data anak dan orang tua melalui formulir di website ini.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">2</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Konfirmasi Admin</h3>
                    <p class="text-gray-600 text-sm">Admin sekolah akan memverifikasi data dan menghubungi via WhatsApp.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">3</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pembayaran</h3>
                    <p class="text-gray-600 text-sm">Melakukan pembayaran biaya administrasi pendaftaran secara transfer atau tunai.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative group hover:shadow-md transition">
                    <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center font-bold text-xl mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors">4</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Daftar Ulang</h3>
                    <p class="text-gray-600 text-sm">Menyerahkan berkas fisik ke sekolah dan pengambilan seragam.</p>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <section class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Syarat Pendaftaran
                </h2>
                
                <div class="space-y-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">A. Syarat Umum</h4>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Berusia 3 - 4 tahun untuk Kelompok Bermain (KB).</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Berusia 5 - 6 tahun untuk Taman Kanak-Kanak (TK).</li>
                            <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Mengisi formulir pendaftaran online.</li>
                        </ul>
                    </div>
                    
                    <div class="pt-4 border-t border-gray-100">
                        <h4 class="font-semibold text-gray-800 mb-2">B. Berkas Fisik (Dibawa saat daftar ulang)</h4>
                        <ul class="space-y-2 text-gray-600 text-sm">
                            <li class="flex items-center"><span class="text-orange-500 mr-2">📄</span> 2 Lembar Fotokopi Akta Kelahiran Anak</li>
                            <li class="flex items-center"><span class="text-orange-500 mr-2">📄</span> 2 Lembar Fotokopi Kartu Keluarga (KK)</li>
                            <li class="flex items-center"><span class="text-orange-500 mr-2">📄</span> 2 Lembar Fotokopi KTP Orang Tua (Ayah & Ibu)</li>
                            <li class="flex items-center"><span class="text-orange-500 mr-2">📷</span> 4 Lembar Pas Foto Anak (Ukuran 3x4)</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="bg-gradient-to-b from-orange-50 to-white p-8 rounded-3xl shadow-sm border border-orange-100 relative overflow-hidden">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Rincian Biaya
                </h2>

                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-200 dashed">
                        <span class="text-gray-600">Formulir Pendaftaran</span>
                        <span class="font-semibold text-gray-900">Rp 150.000</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-200 dashed">
                        <span class="text-gray-600">Uang Gedung / Fasilitas (1 Tahun)</span>
                        <span class="font-semibold text-gray-900">Rp 800.000</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-200 dashed">
                        <span class="text-gray-600">Seragam Sekolah (3 Stel)</span>
                        <span class="font-semibold text-gray-900">Rp 450.000</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-200 dashed">
                        <span class="text-gray-600">Buku & Alat Tulis (1 Semester)</span>
                        <span class="font-semibold text-gray-900">Rp 300.000</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-200 dashed">
                        <span class="text-gray-600">SPP Bulan Pertama</span>
                        <span class="font-semibold text-gray-900">Rp 100.000</span>
                    </div>
                    
                    <div class="pt-4 mt-4">
                        <div class="bg-orange-600 text-white rounded-xl p-4 flex justify-between items-center shadow-lg">
                            <span class="font-medium">Total Biaya Awal</span>
                            <span class="text-2xl font-bold">Rp 1.800.000</span>
                        </div>
                        <p class="text-xs text-center text-gray-500 mt-3">*Biaya di atas hanyalah estimasi/simulasi untuk keperluan sistem.</p>
                    </div>
                </div>
            </section>

        </div>

        <section class="text-center bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
            <h3 class="text-2xl font-bold text-gray-900 mb-3">Sudah Memahami Alur & Syaratnya?</h3>
            <p class="text-gray-600 mb-8">Jangan ragu, segera daftarkan putra-putri Anda sebelum kuota penuh.</p>
            <a href="/pendaftaran" class="inline-flex justify-center items-center py-4 px-8 border border-transparent rounded-full shadow-md text-lg font-bold text-white bg-orange-600 hover:bg-orange-700 transition-all transform hover:-translate-y-1">
                Lanjut ke Formulir Pendaftaran &rarr;
            </a>
        </section>

    </div>
</div>
@endsection