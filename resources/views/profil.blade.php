@extends('layouts.app')

@section('content')
<section class="relative bg-white pt-24 pb-16 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-40">
        <div class="absolute -top-20 -left-20 w-96 h-96 rounded-full bg-orange-100 blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 rounded-full bg-amber-100 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-3/5 text-center lg:text-left">
                <span class="inline-block py-1 px-4 rounded-full bg-orange-50 text-orange-700 text-sm font-semibold tracking-wider mb-5 border border-orange-200 shadow-sm">
                    Mengenal Lebih Dekat
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight tracking-tight">
                    Profil <span class="text-orange-500">PAUD Ta'am</span> <br> Insan Taqwa Cibinong
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Mewujudkan generasi cerdas, kreatif, mandiri, dan berakhlak mulia melalui lingkungan belajar yang ceria dan berlandaskan nilai-nilai Islam sejak usia dini.
                </p>
            </div>
            <div class="lg:w-2/5 flex justify-center lg:justify-end">
                <div class="w-72 h-72 md:w-80 md:h-80 bg-orange-50 rounded-full flex items-center justify-center p-8 shadow-inner relative border-4 border-white">
                    <svg class="w-full h-full text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    <div class="absolute -top-4 -right-4 w-12 h-12 bg-amber-400 rounded-full animate-pulse shadow-md"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50 relative">
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#f97316 1px, transparent 1px); background-size: 24px 24px;"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="bg-white p-8 md:p-12 rounded-3xl shadow-xl shadow-orange-100/50 border border-orange-100 relative overflow-hidden">
            
            <svg class="absolute top-0 right-0 w-64 h-64 text-orange-50 opacity-50 transform translate-x-16 -translate-y-16" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
                
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-orange-500 text-white rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900">Sejarah Singkat</h2>
                    </div>
                    
                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">
                        <p>
                            PAUD TAAM Insan Taqwa didirikan sebagai Satuan Pendidikan Serupa (SPS) dengan visi utama untuk menyediakan akses pendidikan dini yang berkualitas, terjangkau, dan mengintegrasikan nilai-nilai Islam bagi masyarakat di lingkungan Cibinong dan sekitarnya.
                        </p>
                        <div class="pl-6 border-l-4 border-orange-400 bg-orange-50/50 py-4 pr-4 rounded-r-2xl">
                            <p class="font-medium text-orange-900 m-0">
                                Sejak awal berdirinya, kami berkomitmen penuh untuk membina karakter anak usia dini agar memiliki kesiapan mental dan spiritual yang kuat sebelum memasuki jenjang pendidikan dasar.
                            </p>
                        </div>
                        <p>
                            Melalui dedikasi para tenaga pengajar dan dukungan penuh dari wali murid, sekolah ini terus berkembang baik secara infrastruktur maupun kualitas kurikulum untuk menjawab tantangan pendidikan di era modern.
                        </p>
                    </div>
                </div>

                <div class="bg-orange-50/50 p-8 rounded-3xl border border-orange-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-8 border-b border-orange-200 pb-4">Tonggak Sejarah</h3>
                    
                    <div class="relative border-l-2 border-orange-300 ml-3 space-y-8">
                        <div class="relative pl-8 group">
                            <div class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-orange-500 border-4 border-white shadow-sm group-hover:scale-125 transition-transform"></div>
                            <span class="text-sm font-bold text-orange-600 bg-orange-100 px-3 py-1 rounded-full inline-block mb-2">Tahun 2018</span>
                            <h4 class="font-bold text-gray-900 text-lg">Pendirian Awal</h4>
                            <p class="text-sm text-gray-600 mt-1 leading-relaxed">Dimulai dari kelompok belajar kecil untuk memfasilitasi pendidikan balita di lingkungan warga sekitar.</p>
                        </div>

                        <div class="relative pl-8 group">
                            <div class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-amber-500 border-4 border-white shadow-sm group-hover:scale-125 transition-transform"></div>
                            <span class="text-sm font-bold text-amber-600 bg-amber-100 px-3 py-1 rounded-full inline-block mb-2">Tahun 2021</span>
                            <h4 class="font-bold text-gray-900 text-lg">Izin Operasional Resmi</h4>
                            <p class="text-sm text-gray-600 mt-1 leading-relaxed">Mendapatkan legalitas penuh dari Dinas Pendidikan setempat dan memperluas kapasitas ruang kelas.</p>
                        </div>

                        <div class="relative pl-8 group">
                            <div class="absolute -left-[11px] top-1 w-5 h-5 rounded-full bg-green-500 border-4 border-white shadow-sm group-hover:scale-125 transition-transform"></div>
                            <span class="text-sm font-bold text-green-600 bg-green-100 px-3 py-1 rounded-full inline-block mb-2">Tahun 2026</span>
                            <h4 class="font-bold text-gray-900 text-lg">Transformasi Digital</h4>
                            <p class="text-sm text-gray-600 mt-1 leading-relaxed">Peluncuran Sistem Informasi Pendaftaran Murid Baru berbasis Web untuk memudahkan akses wali murid.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
            
            <div class="bg-white p-10 rounded-3xl shadow-xl shadow-gray-100/70 hover:-translate-y-2 transition-transform duration-300 border-t-4 border-orange-500 group relative overflow-hidden">
                <div class="absolute -bottom-10 -right-10 w-40 h-40 rounded-full bg-orange-50 opacity-50 group-hover:scale-110 transition-transform"></div>
                <div class="flex items-center mb-6 relative z-10">
                    <div class="p-4 bg-orange-100 rounded-2xl mr-5 group-hover:bg-orange-500 transition-colors duration-300">
                        <svg class="w-8 h-8 text-orange-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900">Visi Kami</h3>
                </div>
                <p class="text-gray-600 text-lg leading-relaxed relative z-10">
                    Menjadi lembaga pendidikan anak usia dini unggulan yang mencetak generasi cerdas, kreatif, mandiri, dan berakhlak mulia berlandaskan tauhid.
                </p>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-xl shadow-gray-100/70 hover:-translate-y-2 transition-transform duration-300 border-t-4 border-amber-500 group relative overflow-hidden">
                <div class="absolute -bottom-10 -right-10 w-40 h-40 rounded-full bg-amber-50 opacity-50 group-hover:scale-110 transition-transform"></div>
                <div class="flex items-center mb-6 relative z-10">
                    <div class="p-4 bg-amber-100 rounded-2xl mr-5 group-hover:bg-amber-500 transition-colors duration-300">
                        <svg class="w-8 h-8 text-amber-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900">Misi Kami</h3>
                </div>
                <ul class="space-y-4 text-gray-600 text-lg relative z-10">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-amber-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Menyelenggarakan pembelajaran yang aktif, inovatif, kreatif, dan menyenangkan.
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-amber-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Membangun karakter Islami sejak dini melalui pembiasaan sehari-hari.
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-amber-500 mr-3 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        Menyediakan fasilitas belajar yang aman dan merangsang motorik anak.
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-orange-50/30 relative border-t border-orange-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block py-1 px-4 rounded-full bg-orange-100 text-orange-700 text-sm font-semibold tracking-wider mb-4 border border-orange-200">
                Tim Pengajar Kami
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mendidik dengan Hati</h2>
            <p class="text-gray-600 text-lg">Dibimbing oleh tenaga pendidik yang berpengalaman, sabar, dan berdedikasi tinggi dalam dunia pendidikan anak usia dini.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-xl hover:shadow-orange-100/50 transition-all duration-300 transform hover:-translate-y-2 text-center group border border-gray-100">
                <div class="w-32 h-32 mx-auto rounded-full bg-orange-100 border-4 border-white shadow-md mb-6 relative overflow-hidden group-hover:border-orange-300 transition-colors flex items-center justify-center text-orange-400">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Siti Aminah, S.Pd.</h3>
                <p class="text-orange-600 font-medium text-sm mb-4">Kepala Sekolah</p>
                <p class="text-gray-500 text-sm leading-relaxed">Berpengalaman lebih dari 10 tahun dalam manajemen pendidikan dan psikologi anak.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-xl hover:shadow-orange-100/50 transition-all duration-300 transform hover:-translate-y-2 text-center group border border-gray-100">
                <div class="w-32 h-32 mx-auto rounded-full bg-amber-100 border-4 border-white shadow-md mb-6 relative overflow-hidden group-hover:border-amber-300 transition-colors flex items-center justify-center text-amber-400">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Nisa Fitriani, S.Pd.</h3>
                <p class="text-amber-600 font-medium text-sm mb-4">Guru Kelas TK B</p>
                <p class="text-gray-500 text-sm leading-relaxed">Fokus pada persiapan literasi dan numerasi dasar anak sebelum memasuki jenjang SD.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-xl hover:shadow-orange-100/50 transition-all duration-300 transform hover:-translate-y-2 text-center group border border-gray-100">
                <div class="w-32 h-32 mx-auto rounded-full bg-yellow-100 border-4 border-white shadow-md mb-6 relative overflow-hidden group-hover:border-yellow-300 transition-colors flex items-center justify-center text-yellow-400">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Dian Pertiwi, S.Pd.</h3>
                <p class="text-yellow-600 font-medium text-sm mb-4">Guru Kelas TK A</p>
                <p class="text-gray-500 text-sm leading-relaxed">Mengedepankan metode belajar sambil bermain untuk merangsang kreativitas anak.</p>
            </div>

            <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow-xl hover:shadow-orange-100/50 transition-all duration-300 transform hover:-translate-y-2 text-center group border border-gray-100">
                <div class="w-32 h-32 mx-auto rounded-full bg-emerald-100 border-4 border-white shadow-md mb-6 relative overflow-hidden group-hover:border-emerald-300 transition-colors flex items-center justify-center text-emerald-400">
                    <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-1">Rina Amelia</h3>
                <p class="text-emerald-600 font-medium text-sm mb-4">Guru Kelompok Bermain</p>
                <p class="text-gray-500 text-sm leading-relaxed">Sangat telaten dalam melatih sensorik, motorik, dan kemandirian dasar balita.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 inline-block relative">
                Galeri Kegiatan
                <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-12 h-1.5 bg-orange-500 rounded-full -mb-3"></span>
            </h2>
            <p class="text-gray-500 mt-6 text-lg">Potret keceriaan dan kreativitas siswa di lingkungan sekolah.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="relative overflow-hidden rounded-2xl aspect-square bg-gray-200 group cursor-pointer shadow-sm hover:shadow-xl transition-shadow duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-orange-600 bg-orange-100 font-bold transition-transform duration-500 group-hover:scale-110">Foto 1</div>
                <div class="absolute inset-0 bg-gradient-to-t from-orange-900/90 via-orange-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Belajar Menggambar</span>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded-2xl aspect-square bg-gray-200 group cursor-pointer shadow-sm hover:shadow-xl transition-shadow duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-amber-600 bg-amber-100 font-bold transition-transform duration-500 group-hover:scale-110">Foto 2</div>
                <div class="absolute inset-0 bg-gradient-to-t from-amber-900/90 via-amber-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Bermain di Taman</span>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl aspect-square bg-gray-200 group cursor-pointer shadow-sm hover:shadow-xl transition-shadow duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-emerald-600 bg-emerald-100 font-bold transition-transform duration-500 group-hover:scale-110">Foto 3</div>
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Mewarnai Bersama</span>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl aspect-square bg-gray-200 group cursor-pointer shadow-sm hover:shadow-xl transition-shadow duration-300">
                <div class="absolute inset-0 flex items-center justify-center text-yellow-600 bg-yellow-100 font-bold transition-transform duration-500 group-hover:scale-110">Foto 4</div>
                <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/90 via-yellow-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <span class="text-white font-bold text-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">Kegiatan Manasik</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row border border-gray-100">
            
            <div class="lg:w-1/3 bg-orange-500 p-10 text-white flex flex-col justify-center relative overflow-hidden">
                <div class="absolute -top-10 -left-10 w-32 h-32 rounded-full bg-orange-400 opacity-50"></div>

                <h3 class="text-3xl font-bold mb-6 relative z-10">Kunjungi Kami</h3>
                <p class="text-orange-50 mb-8 text-lg leading-relaxed relative z-10">
                    Kami sangat senang menyambut kehadiran Ayah/Bunda untuk melihat langsung lingkungan belajar di sekolah kami.
                </p>
                
                <div class="space-y-6 relative z-10">
                    <div class="flex items-start">
                        <div class="bg-orange-400 p-3 rounded-full mr-4 flex-shrink-0 border border-orange-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1 text-white">Alamat Lengkap</h4>
                            <p class="text-orange-100">KP Kramat RT 02/03, Harapan Jaya, Cibinong, Bogor</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-orange-400 p-3 rounded-full mr-4 flex-shrink-0 border border-orange-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1 text-white">Kontak & WhatsApp</h4>
                            <p class="text-orange-100">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>
                
                <a href="https://maps.google.com/maps?q=PAUD%20Ta'am%20Insan%20Taqwa%20Cibinong" target="_blank" class="mt-10 inline-block text-center px-6 py-3 bg-white text-orange-600 font-bold rounded-xl hover:bg-orange-50 transition-colors shadow-lg relative z-10">
                    Buka di Aplikasi Maps
                </a>
            </div>

            <div class="lg:w-2/3 h-96 lg:h-auto relative bg-gray-200">
                <iframe 
                    class="absolute inset-0 w-full h-full border-0" 
                    src="https://maps.google.com/maps?q=PAUD%20Ta'am%20Insan%20Taqwa,%20Harapan%20Jaya,%20Cibinong&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>
@endsection