@extends('layouts.app')

@section('content')
<section class="relative bg-gradient-to-b from-orange-50/50 to-white pt-20 pb-32 overflow-hidden">
    <div class="absolute top-20 left-10 w-20 h-20 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
    <div class="absolute top-40 right-10 w-32 h-32 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-40 w-24 h-24 bg-green-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            
            <div class="lg:w-1/2 text-center lg:text-left">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-orange-100 text-orange-700 font-semibold text-sm mb-6 border border-orange-200 shadow-sm animate-fade-in-up">
                    <span class="flex h-2 w-2 rounded-full bg-orange-500 mr-2 animate-ping"></span>
                    Pendaftaran Tahun Ajaran Baru Dibuka!
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6 leading-tight tracking-tight">
                    Langkah Awal <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-500">Masa Depan Cerah</span> <br>
                    Putra-Putri Anda.
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                    PAUD Ta'am Insan Taqwa menghadirkan lingkungan belajar yang ceria, aman, dan berlandaskan nilai-nilai Islam untuk memaksimalkan potensi emas anak usia dini.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="/pendaftaran" class="w-full sm:w-auto px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white font-bold rounded-full shadow-lg shadow-orange-500/30 transition-all transform hover:-translate-y-1 flex items-center justify-center group">
                        Daftar Sekarang
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                    <a href="/profil" class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-orange-50 text-gray-700 font-bold rounded-full shadow-sm border border-orange-200 transition-all">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            <div class="lg:w-1/2 w-full">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4 mt-8">
                        <div class="bg-orange-100 rounded-3xl h-48 w-full shadow-lg overflow-hidden group relative border border-orange-200">
                            <div class="absolute inset-0 flex items-center justify-center text-orange-500 font-bold text-xl group-hover:scale-110 transition-transform duration-500">Ceria</div>
                        </div>
                        <div class="bg-yellow-100 rounded-3xl h-64 w-full shadow-lg overflow-hidden group relative border border-yellow-200">
                            <div class="absolute inset-0 flex items-center justify-center text-yellow-600 font-bold text-xl group-hover:scale-110 transition-transform duration-500">Kreatif</div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-green-100 rounded-3xl h-64 w-full shadow-lg overflow-hidden group relative border border-green-200">
                            <div class="absolute inset-0 flex items-center justify-center text-green-600 font-bold text-xl group-hover:scale-110 transition-transform duration-500">Islami</div>
                        </div>
                        <div class="bg-purple-100 rounded-3xl h-48 w-full shadow-lg overflow-hidden group relative border border-purple-200">
                            <div class="absolute inset-0 flex items-center justify-center text-purple-600 font-bold text-xl group-hover:scale-110 transition-transform duration-500">Mandiri</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="relative z-20 -mt-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-3xl shadow-xl shadow-orange-100/50 border border-orange-100 p-8 md:p-12 flex flex-col md:flex-row justify-around items-center gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100">
        
        <div class="text-center w-full pt-4 md:pt-0 group">
            <div class="w-14 h-14 mx-auto bg-orange-50 text-orange-500 rounded-2xl flex items-center justify-center mb-4 group-hover:-translate-y-2 transition-transform duration-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
            </div>
            <h3 class="text-4xl font-extrabold text-gray-900 mb-1">15+</h3>
            <p class="text-gray-500 font-medium">Pengajar Berpengalaman</p>
        </div>

        <div class="text-center w-full pt-4 md:pt-0 group">
            <div class="w-14 h-14 mx-auto bg-yellow-50 text-yellow-600 rounded-2xl flex items-center justify-center mb-4 group-hover:-translate-y-2 transition-transform duration-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="text-4xl font-extrabold text-gray-900 mb-1">200+</h3>
            <p class="text-gray-500 font-medium">Alumni Berprestasi</p>
        </div>

        <div class="text-center w-full pt-4 md:pt-0 group">
            <div class="w-14 h-14 mx-auto bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:-translate-y-2 transition-transform duration-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h3 class="text-4xl font-extrabold text-gray-900 mb-1">Terakreditasi</h3>
            <p class="text-gray-500 font-medium">Pendidikan Berkualitas</p>
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Program Pembelajaran</h2>
            <p class="text-gray-600 text-lg">Kami menyediakan program kelas yang disesuaikan dengan tahapan usia dan perkembangan anak.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-pink-100 transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-pink-100 text-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Kelompok Bermain (KB)</h3>
                <p class="text-gray-600 mb-6">Usia 3 - 4 Tahun. Fokus pada pengembangan motorik, sosialisasi, dan pengenalan lingkungan melalui bermain.</p>
                <ul class="space-y-2 text-sm text-gray-500 mb-8">
                    <li class="flex items-center"><span class="text-pink-500 mr-2">✔</span> Bermain Interaktif</li>
                    <li class="flex items-center"><span class="text-pink-500 mr-2">✔</span> Pengenalan Warna & Bentuk</li>
                </ul>
            </div>

            <div class="bg-orange-500 rounded-3xl p-8 shadow-xl shadow-orange-200 transform md:-translate-y-4 hover:-translate-y-6 transition-all duration-300 group relative overflow-hidden">
                <div class="absolute -right-10 -top-10 w-32 h-32 bg-orange-400 rounded-full opacity-50"></div>
                
                <div class="w-16 h-16 bg-white/20 text-white rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-3 transition-transform backdrop-blur-sm relative z-10">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-3 relative z-10">Taman Kanak-Kanak A</h3>
                <p class="text-orange-50 mb-6 relative z-10">Usia 4 - 5 Tahun. Mulai mengenalkan huruf, angka, dan kemandirian dasar dengan metode yang menyenangkan.</p>
                <ul class="space-y-2 text-sm text-orange-50 mb-8 relative z-10">
                    <li class="flex items-center"><span class="text-orange-200 mr-2">✔</span> Calistung Dasar</li>
                    <li class="flex items-center"><span class="text-orange-200 mr-2">✔</span> Hafalan Doa Harian</li>
                </ul>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-2xl hover:shadow-yellow-100 transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-16 h-16 bg-yellow-100 text-yellow-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:-rotate-3 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Taman Kanak-Kanak B</h3>
                <p class="text-gray-600 mb-6">Usia 5 - 6 Tahun. Pemantapan kognitif dan karakter untuk persiapan yang matang memasuki jenjang Sekolah Dasar (SD).</p>
                <ul class="space-y-2 text-sm text-gray-500 mb-8">
                    <li class="flex items-center"><span class="text-yellow-500 mr-2">✔</span> Persiapan Masuk SD</li>
                    <li class="flex items-center"><span class="text-yellow-500 mr-2">✔</span> Praktik Ibadah Lengkap</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-orange-50/50 relative border-t border-orange-100">
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#f97316 2px, transparent 2px); background-size: 30px 30px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block py-1 px-4 rounded-full bg-orange-100 text-orange-700 text-sm font-semibold tracking-wider mb-4 border border-orange-200">
                Lingkungan Belajar
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fasilitas Bermain & Belajar</h2>
            <p class="text-gray-600 text-lg">Kami menyediakan lingkungan yang aman, bersih, dan menstimulasi perkembangan motorik serta kognitif anak.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-3xl p-6 border border-orange-100 shadow-sm hover:shadow-xl hover:shadow-orange-200/50 transition-all duration-300 group">
                <div class="w-14 h-14 bg-orange-100 text-orange-600 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-xl mb-2">Ruang Kelas Nyaman</h3>
                <p class="text-gray-500 text-sm">Kelas ber-AC dengan dekorasi ceria dan perlengkapan belajar yang ramah anak.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-orange-100 shadow-sm hover:shadow-xl hover:shadow-orange-200/50 transition-all duration-300 group">
                <div class="w-14 h-14 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-xl mb-2">Taman Bermain</h3>
                <p class="text-gray-500 text-sm">Area *playground* *outdoor* dan *indoor* yang aman untuk melatih motorik kasar.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-orange-100 shadow-sm hover:shadow-xl hover:shadow-orange-200/50 transition-all duration-300 group">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-xl mb-2">Pojok Baca</h3>
                <p class="text-gray-500 text-sm">Koleksi buku bergambar yang menarik untuk menumbuhkan minat literasi sejak dini.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-orange-100 shadow-sm hover:shadow-xl hover:shadow-orange-200/50 transition-all duration-300 group">
                <div class="w-14 h-14 bg-purple-100 text-purple-600 rounded-2xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="font-bold text-gray-900 text-xl mb-2">Mushola Mini</h3>
                <p class="text-gray-500 text-sm">Fasilitas ibadah untuk praktik shalat dhuha dan pengenalan agama secara langsung.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white relative overflow-hidden">
    <div class="absolute -left-20 top-20 w-64 h-64 bg-orange-50 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute -right-20 bottom-20 w-64 h-64 bg-amber-50 rounded-full blur-3xl opacity-60"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Pertanyaan Seputar Pendaftaran</h2>
            <p class="text-gray-600 text-lg">Jawaban cepat untuk pertanyaan yang sering diajukan oleh calon wali murid.</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-200 transition-all duration-300 overflow-hidden group">
                <details class="w-full">
                    <summary class="flex justify-between items-center font-bold text-gray-900 p-6 cursor-pointer select-none outline-none list-none marker:hidden">
                        <span>Apakah bisa mendaftar secara langsung (offline) ke sekolah?</span>
                        <span class="transition group-open:rotate-180 bg-orange-50 text-orange-600 p-2 rounded-full">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-gray-600 mt-2 p-6 pt-0 leading-relaxed border-t border-gray-50 bg-gray-50/50">
                        Sangat bisa! Walaupun kami menyediakan fasilitas pendaftaran <i>online</i> untuk kemudahan dari rumah, Ayah/Bunda tetap dipersilakan untuk datang langsung ke sekolah pada jam kerja (07:30 - 14:00 WIB) dan admin kami akan membantu proses pendaftaran.
                    </div>
                </details>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-200 transition-all duration-300 overflow-hidden group">
                <details class="w-full">
                    <summary class="flex justify-between items-center font-bold text-gray-900 p-6 cursor-pointer select-none outline-none list-none marker:hidden">
                        <span>Kapan batas akhir pendaftaran murid baru ditutup?</span>
                        <span class="transition group-open:rotate-180 bg-orange-50 text-orange-600 p-2 rounded-full">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-gray-600 mt-2 p-6 pt-0 leading-relaxed border-t border-gray-50 bg-gray-50/50">
                        Pendaftaran akan terus dibuka hingga kuota kelas terpenuhi (maksimal 20 anak per kelas). Kami menyarankan untuk segera mengisi formulir <i>online</i> untuk mengamankan kursi putra-putri Anda sebelum kuota penuh.
                    </div>
                </details>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-200 transition-all duration-300 overflow-hidden group">
                <details class="w-full">
                    <summary class="flex justify-between items-center font-bold text-gray-900 p-6 cursor-pointer select-none outline-none list-none marker:hidden">
                        <span>Bagaimana metode pembayaran biaya pendaftarannya?</span>
                        <span class="transition group-open:rotate-180 bg-orange-50 text-orange-600 p-2 rounded-full">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-gray-600 mt-2 p-6 pt-0 leading-relaxed border-t border-gray-50 bg-gray-50/50">
                        Setelah Anda mengisi formulir dan data dikonfirmasi oleh admin via WhatsApp, pembayaran dapat dilakukan melalui transfer ke rekening resmi sekolah atau dibayar secara tunai saat datang ke sekolah untuk proses Daftar Ulang / pengambilan seragam.
                    </div>
                </details>
            </div>

            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm hover:shadow-md hover:border-orange-200 transition-all duration-300 overflow-hidden group">
                <details class="w-full">
                    <summary class="flex justify-between items-center font-bold text-gray-900 p-6 cursor-pointer select-none outline-none list-none marker:hidden">
                        <span>Apakah seragam sudah termasuk dalam rincian biaya awal?</span>
                        <span class="transition group-open:rotate-180 bg-orange-50 text-orange-600 p-2 rounded-full">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg>
                        </span>
                    </summary>
                    <div class="text-gray-600 mt-2 p-6 pt-0 leading-relaxed border-t border-gray-50 bg-gray-50/50">
                        Iya, betul. Rincian "Total Biaya Awal" yang tercantum di halaman Informasi Pendaftaran sudah mencakup uang pendaftaran, uang fasilitas 1 tahun, seragam sekolah (3 stel), buku paket, dan SPP bulan pertama. Anda bisa melihat rincian lengkapnya di menu "Info Pendaftaran".
                    </div>
                </details>
            </div>
        </div>
        
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-orange-800 rounded-3xl overflow-hidden shadow-2xl relative">
            <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(#ffffff 2px, transparent 2px); background-size: 30px 30px;"></div>
            <div class="absolute -right-20 -top-40 w-96 h-96 bg-orange-500 rounded-full blur-3xl opacity-50"></div>
            
            <div class="relative z-10 px-8 py-16 md:p-16 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
                <div class="mb-8 md:mb-0 md:mr-8 max-w-2xl">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Siap Bergabung Bersama Kami?</h2>
                    <p class="text-orange-100 text-lg">Pendaftaran secara online sangat mudah dan cepat. Segera daftarkan putra-putri tercinta sebelum kuota kelas terpenuhi.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="/pendaftaran" class="inline-block px-8 py-4 bg-yellow-400 hover:bg-yellow-300 text-orange-900 font-bold text-lg rounded-full transition-transform transform hover:scale-105 shadow-lg shadow-yellow-500/20">
                        Isi Formulir Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes blob {
        0% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
        100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob { animation: blob 7s infinite; }
    .animation-delay-2000 { animation-delay: 2s; }
    .animation-delay-4000 { animation-delay: 4s; }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
</style>
@endsection