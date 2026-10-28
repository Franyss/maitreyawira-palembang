{{-- File: resources/views/fasilitas.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Sekolah | Maitreyawira Palembang</title>
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
                <span class="text-slate-300">Tentang Kami</span>
                <span>/</span>
                <span class="text-amber-400">Fasilitas</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Sarana & Prasarana
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Fasilitas Modern & Asri <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Lingkungan belajar yang aman, nyaman, dan dilengkapi sarana penunjang modern untuk mendukung perkembangan akademis, seni, serta karakter murid.
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

                    <!-- INTRO FAKTOR KENYAMANAN -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Mendukung Pembelajaran Terbaik</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Lingkungan Kondusif & Terpadu</p>
                        </div>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Kampus Sekolah Maitreyawira Palembang dirancang dengan konsep ramah lingkungan dan penuh penghijauan. Setiap fasilitas dirawat secara berkala untuk memastikan kenyamanan dan keselamatan seluruh peserta didik dari jenjang TK hingga SMA.
                        </p>
                    </div>

                    <!-- GRID DAFTAR FASILITAS -->
                    <div class="grid sm:grid-cols-2 gap-6">

                        <!-- 1. Ruang Kelas Interaktif -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Ruang Kelas ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Ruang Kelas Interaktif & Ber-AC</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Dilengkapi proyektor multimedia, papan tulis interaktif, pencahayaan alami yang baik, serta pendingin udara untuk kenyamanan belajar harian.
                                </p>
                            </div>
                        </div>

                        <!-- 2. Laboratorium Sains & STEM -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Laboratorium IPA ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Laboratorium IPA & Fisika</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Peralatan praktikum lengkap untuk eksperimen Biologi, Fisika, dan Kimia guna menumbuhkan rasa ingin tahu serta kemampuan riset ilmiah siswa.
                                </p>
                            </div>
                        </div>

                        <!-- 3. Laboratorium Komputer -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Lab Komputer ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Laboratorium Komputer & IT</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Perangkat PC modern dengan koneksi internet cepat untuk pembelajaran pemrograman, desain grafis, serta literasi digital modern.
                                </p>
                            </div>
                        </div>

                        <!-- 4. Perpustakaan & Corner Baca -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Perpustakaan ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Perpustakaan Digital & Ruang Baca</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Koleksi ribuan buku cetak dan akses jurnal digital dalam suasana ruang baca yang tenang, asri, dan dilengkapi area diskusi.
                                </p>
                            </div>
                        </div>

                        <!-- 5. Lapangan Olahraga Serbaguna -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Lapangan Olahraga ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Lapangan Olahraga Serbaguna</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Fasilitas olahraga outdoor & indoor untuk Basket, Futsal, Voli, dan Bulutangkis guna menjaga kesehatan dan kebugaran fisik murid.
                                </p>
                            </div>
                        </div>

                        <!-- 6. Auditorium / Aula Utama -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Auditorium / Aula ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Auditorium / Aula Pertemuan</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Ruang pertemuan luas berkapasitas besar yang dilengkapi sistem tata suara dan tata cahaya modern untuk seminar, pentas seni, dan perayaan sekolah.
                                </p>
                            </div>
                        </div>

                        <!-- 7. Studio Seni & Musik -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Studio Musik & Seni ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Studio Musik & Ruang Seni Tradisional</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Wadah eksplorasi bakat seni tari, seni rupa, instrumen musik tradisional dan modern bagi seluruh murid.
                                </p>
                            </div>
                        </div>

                        <!-- 8. Kantin Vegetaris Sehat -->
                        <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-md transition group">
                            <div class="h-44 bg-slate-200 flex items-center justify-center text-slate-400 font-medium relative">
                                <span class="group-hover:scale-105 transition duration-300">[ Foto Kantin ]</span>
                            </div>
                            <div class="p-6 space-y-2">
                                <h3 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition">Kantin Nutrisi Vegetaris Higienis</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Menyediakan aneka pilihan makanan dan minuman sehat vegetaris yang bergizi tinggi, bersih, dan terjangkau.
                                </p>
                            </div>
                        </div>

                    </div>

                </main>

                <!-- SIDEBAR NAVIGASI & INFORMASI (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Menu Navigasi Sub-Halaman -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Tentang Kami
                        </h3>
                        <nav class="flex flex-col gap-1 text-xs font-bold text-slate-600">
                            <a href="/sejarah" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Sejarah Sekolah</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/visi-misi-motto" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Visi, Misi & Motto</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/program-unggulan" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Program Unggulan</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/fasilitas" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Fasilitas Sekolah</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/pencapaian" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Pencapaian & Prestasi</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/testimoni" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Testimoni Orang Tua</span>
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
