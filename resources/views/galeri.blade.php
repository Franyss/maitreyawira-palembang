{{-- File: resources/views/galeri.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri & Dokumentasi | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-slate-300">Media & Informasi</span>
                <span>/</span>
                <span class="text-amber-400">Galeri</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Dokumentasi Kegiatan
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Galeri Foto & Momen <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Kumpulan rekam jejak visual aktivitas belajar-mengajar, kegiatan kebudayaan, perayaan hari besar, serta kebersamaan civitas akademika Sekolah Maitreyawira Palembang.
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

                    <!-- INTRO & FILTER KATEGORI -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Album Foto Kegiatan</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Satu Kasih, Beragam Momen</p>
                        </div>

                        <!-- Kategori Filter Badges -->
                        <div class="flex flex-wrap gap-2 text-xs font-bold">
                            <button class="px-4 py-2 rounded-xl bg-blue-600 text-white shadow-xs">Semua Momen</button>
                            <button class="px-4 py-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition">Kegiatan Belajar</button>
                            <button class="px-4 py-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition">Seni & Budaya</button>
                            <button class="px-4 py-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition">Ekskul & Olahraga</button>
                            <button class="px-4 py-2 rounded-xl bg-slate-100 text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition">Eco-Green & Lingkungan</button>
                        </div>
                    </div>

                    <!-- GRID DOKUMENTASI GALERI -->
                    <div class="grid sm:grid-cols-2 gap-6">

                        <!-- Item Galeri 1 -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-48 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative overflow-hidden">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Pentas Seni ]</span>
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-slate-900/80 text-white text-[10px] font-bold backdrop-blur-xs">
                                    Seni & Budaya
                                </span>
                            </div>
                            <div class="p-5 space-y-2">
                                <span class="text-[11px] font-semibold text-slate-400">15 Februari 2026</span>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-600 transition">
                                    Pentas Seni & Pertunjukan Tari Kasih Alam
                                </h3>
                                <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                    Pementasan seni tahunan murid TK hingga SMA dengan tema persaudaraan dunia dan pelestarian lingkungan.
                                </p>
                            </div>
                        </div>

                        <!-- Item Galeri 2 -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-48 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative overflow-hidden">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Kegiatan Sains & STEM ]</span>
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-slate-900/80 text-white text-[10px] font-bold backdrop-blur-xs">
                                    Kegiatan Belajar
                                </span>
                            </div>
                            <div class="p-5 space-y-2">
                                <span class="text-[11px] font-semibold text-slate-400">28 Januari 2026</span>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-600 transition">
                                    Pameran Karya STEM & Robotika Siswa
                                </h3>
                                <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                    Demonstrasi inovasi teknologi dan pemrograman robotik sederhana karya murid SMP dan SMA Maitreyawira.
                                </p>
                            </div>
                        </div>

                        <!-- Item Galeri 3 -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-48 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative overflow-hidden">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Aksi Eco-Green ]</span>
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-slate-900/80 text-white text-[10px] font-bold backdrop-blur-xs">
                                    Eco-Green & Lingkungan
                                </span>
                            </div>
                            <div class="p-5 space-y-2">
                                <span class="text-[11px] font-semibold text-slate-400">10 Desember 2025</span>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-600 transition">
                                    Aksi Menanam Pohon & Kampus Hijau Adiwiyata
                                </h3>
                                <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                    Kegiatan penanaman bibit tanaman dan edukasi pemilahan sampah organik bersama komunitas murid.
                                </p>
                            </div>
                        </div>

                        <!-- Item Galeri 4 -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-48 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative overflow-hidden">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Olahraga & Ekskul ]</span>
                                <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-slate-900/80 text-white text-[10px] font-bold backdrop-blur-xs">
                                    Ekskul & Olahraga
                                </span>
                            </div>
                            <div class="p-5 space-y-2">
                                <span class="text-[11px] font-semibold text-slate-400">18 November 2025</span>
                                <h3 class="text-base font-bold text-slate-900 group-hover:text-blue-600 transition">
                                    Turnamen Olahraga Persahabatan Antar Jenjang
                                </h3>
                                <p class="text-slate-600 text-xs leading-relaxed line-clamp-2">
                                    Kompetisi basket, badminton, dan futsal guna memupuk sportivitas dan kebugaran jasmani peserta didik.
                                </p>
                            </div>
                        </div>

                    </div>

                </main>

                <!-- SIDEBAR NAVIGASI & INFORMASI (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Menu Navigasi Sub-Halaman Media -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Media & Informasi
                        </h3>
                        <nav class="flex flex-col gap-1 text-xs font-bold text-slate-600">
                            <a href="/galeri" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Galeri & Dokumentasi</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/berita" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Berita & Pengumuman</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </nav>
                    </div>

                    <!-- Widget PPDB Call-to-Action -->
                    <div class="bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl p-6 text-slate-900 shadow-md space-y-4">
                        <div class="font-black text-lg leading-tight">
                            Bergabung Bersama Keluarga Maitreyawira!
                        </div>
                        <p class="text-xs text-slate-800 font-medium leading-relaxed">
                            Pendaftaran Murid Baru (PPDB) T.A 2026/2027 telah dibuka untuk jenjang TK, SD, SMP, dan SMA.
                        </p>
                        <a href="#ppdb" class="inline-block w-full py-2.5 px-4 bg-slate-900 hover:bg-slate-800 text-amber-400 font-extrabold text-xs text-center rounded-xl shadow-xs transition">
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
