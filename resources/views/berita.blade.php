{{-- File: resources/views/berita.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Artikel | Sekolah Maitreyawira Palembang</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    {{-- 1. HEADER / NAVBAR PARTIAL --}}
    @include('partials.navbar')

    {{-- 2. HERO BANNER & BREADCRUMB --}}
    <section class="relative bg-slate-900 text-white overflow-hidden py-16 sm:py-20">
        <!-- Background Overlay Pattern -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-blue-950/90 to-slate-900/80 z-10"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:16px_16px] opacity-15"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20">
            <!-- Breadcrumb -->
            <nav class="flex text-xs font-semibold text-slate-400 mb-4 gap-2 items-center">
                <a href="/" class="hover:text-amber-400 transition">Beranda</a>
                <span>/</span>
                <span class="text-amber-400">Berita & Informasi</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Pusat Informasi & Kabar
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Berita & Kegiatan Terbaru <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Dapatkan kabar terkini seputar liputan kegiatan sekolah, pengumuman resmi, prestasi murid, serta artikel seputar dunia pendidikan.
                </p>
            </div>
        </div>
    </section>

    {{-- 3. KONTEN UTAMA & SIDEBAR --}}
    <section class="py-16 bg-slate-50 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <!-- KONTEN UTAMA (8 Kolom) -->
                <main class="lg:col-span-8 space-y-10">

                    <!-- BERITA UTAMA / FEATURED POST -->
                    <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                        <div class="grid md:grid-cols-12 items-center">
                            <div class="md:col-span-6 h-64 md:h-full bg-slate-200 overflow-hidden relative">
                                <img src="https://via.placeholder.com/800x600"
                                     alt="Berita Utama"
                                     class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                <span class="absolute top-4 left-4 px-3 py-1 bg-blue-600 text-white font-extrabold text-[11px] rounded-full uppercase tracking-wider shadow-sm">
                                    Berita Utama
                                </span>
                            </div>
                            <div class="md:col-span-6 p-6 sm:p-8 space-y-4">
                                <div class="flex items-center gap-3 text-xs text-slate-400 font-medium">
                                    <span>📅 20 Oktober 2026</span>
                                    <span>•</span>
                                    <span>✍️ Humas Sekolah</span>
                                </div>
                                <h2 class="text-xl sm:text-2xl font-black text-slate-900 group-hover:text-blue-600 transition leading-snug">
                                    Pelaksanaan Peringatan Hari Kasih Alam & Gerakan Penghijauan Kampus 2026
                                </h2>
                                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3">
                                    Sekolah Maitreyawira Palembang kembali menggelar aksi penanaman pohon bersama seluruh siswa, guru, dan staf sebagai bentuk komitmen terhadap lingkungan hidup dan budaya Kasih Alam.
                                </p>
                                <a href="#" class="inline-flex items-center text-xs font-black text-blue-600 hover:text-blue-800 transition gap-1">
                                    <span>Baca Selengkapnya</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- GRID DAFTAR BERITA -->
                    <div class="space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                            <h3 class="text-xl font-black text-slate-900">Kabar Terbaru</h3>
                            <span class="text-xs text-slate-500 font-medium">Menampilkan berita terkini</span>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">

                            <!-- BERITA CARD 1 -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                                <div class="space-y-4">
                                    <div class="h-48 bg-slate-200 overflow-hidden relative">
                                        <img src="https://via.placeholder.com/600x400" alt="Berita 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <span class="absolute top-3 left-3 px-2.5 py-0.5 bg-amber-500 text-slate-900 font-bold text-[10px] rounded-full uppercase">
                                            Prestasi
                                        </span>
                                    </div>
                                    <div class="px-6 space-y-2">
                                        <div class="text-[11px] text-slate-400 font-medium">📅 15 Oktober 2026</div>
                                        <h4 class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition leading-snug">
                                            Siswa SMA Maitreyawira Raih Medali Emas Olimpiade Sains Tingkat Kota
                                        </h4>
                                        <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                            Selamat atas prestasi gemilang yang diraih dalam ajang kompetisi sains tahun ini...
                                        </p>
                                    </div>
                                </div>
                                <div class="p-6 pt-4 border-t border-slate-100">
                                    <a href="#" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition">Baca Berita →</a>
                                </div>
                            </div>

                            <!-- BERITA CARD 2 -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                                <div class="space-y-4">
                                    <div class="h-48 bg-slate-200 overflow-hidden relative">
                                        <img src="https://via.placeholder.com/600x400" alt="Berita 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <span class="absolute top-3 left-3 px-2.5 py-0.5 bg-blue-600 text-white font-bold text-[10px] rounded-full uppercase">
                                            Pengumuman
                                        </span>
                                    </div>
                                    <div class="px-6 space-y-2">
                                        <div class="text-[11px] text-slate-400 font-medium">📅 10 Oktober 2026</div>
                                        <h4 class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition leading-snug">
                                            Jadwal & Panduan Pendaftaran Siswa Baru (PPDB) Gelombang 1
                                        </h4>
                                        <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                            Informasi lengkap mengenai jadwal, alur pendaftaran, serta berkas administrasi...
                                        </p>
                                    </div>
                                </div>
                                <div class="p-6 pt-4 border-t border-slate-100">
                                    <a href="#" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition">Baca Berita →</a>
                                </div>
                            </div>

                            <!-- BERITA CARD 3 -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                                <div class="space-y-4">
                                    <div class="h-48 bg-slate-200 overflow-hidden relative">
                                        <img src="https://via.placeholder.com/600x400" alt="Berita 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <span class="absolute top-3 left-3 px-2.5 py-0.5 bg-emerald-600 text-white font-bold text-[10px] rounded-full uppercase">
                                            Kegiatan
                                        </span>
                                    </div>
                                    <div class="px-6 space-y-2">
                                        <div class="text-[11px] text-slate-400 font-medium">📅 05 Oktober 2026</div>
                                        <h4 class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition leading-snug">
                                            Pentas Seni & Budaya Trilingual Siswa Jenjang SD & SMP
                                        </h4>
                                        <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                            Kemeriahan penampilan seni pertunjukan drama dan puisi dalam 3 bahasa...
                                        </p>
                                    </div>
                                </div>
                                <div class="p-6 pt-4 border-t border-slate-100">
                                    <a href="#" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition">Baca Berita →</a>
                                </div>
                            </div>

                            <!-- BERITA CARD 4 -->
                            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group flex flex-col justify-between">
                                <div class="space-y-4">
                                    <div class="h-48 bg-slate-200 overflow-hidden relative">
                                        <img src="https://via.placeholder.com/600x400" alt="Berita 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        <span class="absolute top-3 left-3 px-2.5 py-0.5 bg-purple-600 text-white font-bold text-[10px] rounded-full uppercase">
                                            Edukasi
                                        </span>
                                    </div>
                                    <div class="px-6 space-y-2">
                                        <div class="text-[11px] text-slate-400 font-medium">📅 28 September 2026</div>
                                        <h4 class="font-bold text-slate-900 text-base group-hover:text-blue-600 transition leading-snug">
                                            Workshop Literasi Digital & Penggunaan Teknologi Sehat Bagi Murid
                                        </h4>
                                        <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                            Edukasi pemanfaatan teknologi informasi secara bijak dan aman di era digital...
                                        </p>
                                    </div>
                                </div>
                                <div class="p-6 pt-4 border-t border-slate-100">
                                    <a href="#" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition">Baca Berita →</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </main>

                <!-- SIDEBAR NAVIGASI & SEARCH (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Search Box Widget -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-3">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider">Cari Berita</h3>
                        <div class="relative">
                            <input type="text" placeholder="Kata kunci berita..." class="w-full px-4 py-2.5 pl-10 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs">
                            <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                    </div>

                    <!-- Kategori Berita -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Kategori Berita
                        </h3>
                        <ul class="space-y-2 text-xs font-semibold text-slate-600">
                            <li>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                    <span>Kegiatan Sekolah</span>
                                    <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[10px]">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                    <span>Prestasi & Penghargaan</span>
                                    <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[10px]">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                    <span>Pengumuman PPDB</span>
                                    <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[10px]">5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between p-2 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                    <span>Artikel Edukasi</span>
                                    <span class="px-2 py-0.5 rounded-md bg-slate-100 text-slate-500 text-[10px]">10</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Widget PPDB Call-to-Action -->
                    <div class="bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl p-6 text-slate-900 shadow-md space-y-4">
                        <div class="font-black text-lg leading-tight">
                            Bergabung Bersama Keluarga Maitreyawira!
                        </div>
                        <p class="text-xs text-slate-800 font-medium leading-relaxed">
                            Pendaftaran Murid Baru (PPDB) T.A 2026/2027 telah dibuka untuk jenjang TK, SD, SMP, dan SMA.
                        </p>
                        <a href="/pendaftaran-siswa" class="inline-block w-full py-2.5 px-4 bg-slate-900 hover:bg-slate-800 text-amber-400 font-extrabold text-xs text-center rounded-xl shadow-xs transition">
                            Daftar PPDB Online Sekarang
                        </a>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    {{-- 4. FOOTER PARTIAL --}}
    @include('partials.footer')

</body>
</html>
