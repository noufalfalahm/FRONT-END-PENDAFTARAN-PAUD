<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data - PAUD Ta'am</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50 overflow-hidden relative">

    <div class="flex h-screen">

        <aside class="w-64 bg-white shadow-xl flex flex-col hidden md:flex z-10 relative">
            <div class="h-16 flex items-center px-6 border-b border-gray-100">
                <span class="text-2xl font-extrabold text-orange-600 tracking-tight">PAUD Ta'am</span>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-gray-900 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-gray-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    <span class="font-semibold text-sm">Dashboard</span>
                </a>

                <a href="{{ route('data-pendaftar') }}" class="flex items-center px-4 py-3 bg-orange-50 text-orange-700 rounded-xl transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
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

        <main class="flex-1 flex flex-col h-screen overflow-hidden bg-gray-50/50">
            
            <header class="h-16 bg-white/80 backdrop-blur-md shadow-sm flex items-center justify-between px-6 lg:px-10 z-0">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-gray-800">Manajemen Data Pendaftar</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-600">Halo, Admin</span>
                    <div class="h-8 w-8 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold text-sm shadow-md">A</div>
                </div>
            </header>

            <div class="flex-1 overflow-y-auto p-6 lg:p-10">
                
                <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4 bg-white p-4 rounded-2xl shadow-sm border border-gray-100">
                    
                    <div class="flex flex-col sm:flex-row w-full md:w-auto gap-3">
                        <div class="relative w-full sm:w-72 group">
                            <input type="text" placeholder="Cari nama anak atau ortu..." class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-sm transition-all group-focus-within:shadow-md">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        
                        <div class="relative w-full sm:w-48 group">
                            <select class="w-full pl-10 pr-8 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-sm appearance-none transition-all group-focus-within:shadow-md text-gray-600">
                                <option value="">Semua Status</option>
                                <option value="Diterima">Diterima</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3 group-focus-within:text-orange-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        </div>
                    </div>

                    <button onclick="openModal('addModal')" class="w-full md:w-auto px-5 py-2.5 bg-orange-600 text-white text-sm font-medium rounded-xl hover:bg-orange-700 transition shadow-sm hover:shadow-md flex items-center justify-center transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Tambah Manual
                    </button>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 border-b border-gray-100">
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Nama Anak</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Tanggal Lahir</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider">Nama Orang Tua</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider text-center">Status</th>
                                    <th class="py-4 px-6 font-semibold text-gray-500 text-xs uppercase tracking-wider text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50">
                                
                                <tr id="row-1" class="hover:bg-orange-50/40 transition-colors group">
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
                                    <td class="py-4 px-6 text-center">
                                        <span class="px-3 py-1 bg-green-100 text-green-700 border border-green-200 text-xs font-semibold rounded-full inline-flex items-center">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>Diterima
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right space-x-2 flex justify-end items-center">
                                        <a href="{{ route('detail-pendaftar') }}" class="px-3 py-1.5 text-xs font-medium bg-orange-50 text-orange-600 rounded-md hover:bg-orange-100 transition-colors border border-orange-100 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            Detail
                                        </a>
                                        <button onclick="openModal('editModal')" class="px-3 py-1.5 text-xs font-medium bg-indigo-50 text-indigo-600 rounded-md hover:bg-indigo-100 transition-colors border border-indigo-100">Edit</button>
                                        <button onclick="openDeleteModal('row-1')" class="px-3 py-1.5 text-xs font-medium bg-red-50 text-red-600 rounded-md hover:bg-red-100 transition-colors border border-red-100">Hapus</button>
                                    </td>
                                </tr>

                                <tr id="row-2" class="hover:bg-orange-50/40 transition-colors group">
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 rounded-full bg-yellow-100 text-yellow-600 flex items-center justify-center font-bold mr-3">A</div>
                                            <div>
                                                <span class="font-semibold text-gray-800 block">Aisyah Putri</span>
                                                <span class="text-xs text-gray-500">Perempuan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-600">05 Mar 2021</td>
                                    <td class="py-4 px-6 text-sm text-gray-600">Ahmad Wijaya</td>
                                    <td class="py-4 px-6 text-center">
                                        <span class="px-3 py-1 bg-yellow-100 text-yellow-700 border border-yellow-200 text-xs font-semibold rounded-full inline-flex items-center">
                                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 mr-1.5"></span>Menunggu
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right space-x-2 flex justify-end items-center">
                                        <a href="{{ route('detail-pendaftar') }}" class="px-3 py-1.5 text-xs font-medium bg-orange-50 text-orange-600 rounded-md hover:bg-orange-100 transition-colors border border-orange-100 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            Detail
                                        </a>
                                        <button onclick="openModal('editModal')" class="px-3 py-1.5 text-xs font-medium bg-indigo-50 text-indigo-600 rounded-md hover:bg-indigo-100 transition-colors border border-indigo-100">Edit</button>
                                        <button onclick="openDeleteModal('row-2')" class="px-3 py-1.5 text-xs font-medium bg-red-50 text-red-600 rounded-md hover:bg-red-100 transition-colors border border-red-100">Hapus</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <div id="addModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 transition-opacity backdrop-blur-sm" onclick="closeModal('addModal')"></div>
        <div class="bg-white rounded-2xl shadow-2xl z-10 w-full max-w-lg mx-4 transform scale-95 opacity-0 transition-all duration-300 flex flex-col max-h-[90vh]" id="addModalContent">
            <div class="px-6 py-4 border-b flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-900">Tambah Pendaftar Manual</h3>
                <button onclick="closeModal('addModal')" class="text-gray-400 hover:text-red-500 transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
            </div>
            <div class="p-6 overflow-y-auto space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap Anak</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" placeholder="Masukkan nama...">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                        <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Orang Tua / Wali</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" placeholder="Nama orang tua...">
                </div>
            </div>
            <div class="px-6 py-4 border-t bg-gray-50 flex justify-end space-x-3 rounded-b-2xl">
                <button onclick="closeModal('addModal')" class="px-4 py-2 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium rounded-xl transition">Batal</button>
                <button onclick="simpanData('addModal', 'Data pendaftar baru berhasil ditambahkan!')" class="px-5 py-2 bg-orange-600 hover:bg-orange-700 text-white font-medium rounded-xl transition shadow-sm">Simpan Data</button>
            </div>
        </div>
    </div>

    <div id="editModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 transition-opacity backdrop-blur-sm" onclick="closeModal('editModal')"></div>
        <div class="bg-white rounded-2xl shadow-2xl z-10 w-full max-w-lg mx-4 transform scale-95 opacity-0 transition-all duration-300 flex flex-col max-h-[90vh]" id="editModalContent">
            <div class="px-6 py-4 border-b flex justify-between items-center">
                <h3 class="text-xl font-bold text-gray-900">Edit Data Pendaftar</h3>
                <button onclick="closeModal('editModal')" class="text-gray-400 hover:text-red-500 transition"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button>
            </div>
            <div class="p-6 overflow-y-auto space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap Anak</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" value="Daffa Al-Fatih">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nama Orang Tua</label>
                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" value="Budi Santoso">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status Pendaftaran</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 outline-none">
                        <option selected>Diterima</option>
                        <option>Menunggu</option>
                        <option>Ditolak</option>
                    </select>
                </div>
            </div>
            <div class="px-6 py-4 border-t bg-gray-50 flex justify-end space-x-3 rounded-b-2xl">
                <button onclick="closeModal('editModal')" class="px-4 py-2 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium rounded-xl transition">Batal</button>
                <button onclick="simpanData('editModal', 'Perubahan data berhasil disimpan!')" class="px-5 py-2 bg-orange-600 hover:bg-orange-700 text-white font-medium rounded-xl transition shadow-sm">Simpan Perubahan</button>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50 transition-opacity backdrop-blur-sm" onclick="closeModal('deleteModal')"></div>
        <div class="bg-white rounded-2xl p-6 shadow-2xl z-10 w-96 max-w-sm mx-4 transform scale-95 opacity-0 transition-all duration-300 flex flex-col items-center text-center" id="deleteModalContent">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Hapus Data?</h3>
            <p class="text-sm text-gray-500 mb-6">Data ini akan dihapus secara permanen dari sistem. Tindakan ini tidak dapat dibatalkan.</p>
            <div class="flex space-x-3 w-full">
                <button onclick="closeModal('deleteModal')" class="flex-1 py-2.5 px-4 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-xl transition">Batal</button>
                <button onclick="konfirmasiHapus()" class="flex-1 py-2.5 px-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-xl transition shadow-lg shadow-red-500/30">Ya, Hapus</button>
            </div>
        </div>
    </div>

    <div id="toastNotification" class="fixed bottom-5 right-5 z-50 transform translate-y-20 opacity-0 transition-all duration-500 pointer-events-none">
        <div class="bg-gray-900 text-white px-6 py-4 rounded-xl shadow-2xl flex items-center border border-gray-700">
            <svg class="w-6 h-6 text-green-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span id="toastMessage" class="font-medium text-sm">Aksi berhasil!</span>
        </div>
    </div>

    <script>
        let barisYangAkanDihapus = null;

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            const content = document.getElementById(modalId + 'Content');
            modal.classList.remove('hidden');
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            const content = document.getElementById(modalId + 'Content');
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        function openDeleteModal(rowId) {
            barisYangAkanDihapus = rowId;
            openModal('deleteModal');
        }

        function konfirmasiHapus() {
            closeModal('deleteModal');
            if (barisYangAkanDihapus) {
                const elemenBaris = document.getElementById(barisYangAkanDihapus);
                
                elemenBaris.style.transition = 'all 0.4s ease';
                elemenBaris.classList.add('opacity-0', '-translate-x-full');
                
                setTimeout(() => {
                    elemenBaris.remove(); 
                    tampilkanToast('Data berhasil dihapus dari sistem.');
                }, 400); 
            }
        }

        function simpanData(modalId, pesanSukses) {
            closeModal(modalId);
            setTimeout(() => {
                tampilkanToast(pesanSukses);
            }, 300);
        }

        function tampilkanToast(pesan) {
            const toast = document.getElementById('toastNotification');
            const teksToast = document.getElementById('toastMessage');
            
            teksToast.innerText = pesan;
            toast.classList.remove('translate-y-20', 'opacity-0');
            
            setTimeout(() => {
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3500);
        }
    </script>

</body>
</html>