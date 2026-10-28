{{-- File: resources/views/sekolah.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenjang Pendidikan | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-amber-400">Sekolah</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Pendidikan Terpadu
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Jenjang Pendidikan <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Sistem pendidikan berkesinambungan dari jenjang TK, SD, SMP hingga SMA dengan fokus pada keunggulan akademis, teknologi, serta pembentukan karakter budi pekerti luhur.
                </p>
            </div>
        </div>
    </section>

    {{-- 3. KONTEN UTAMA & SIDEBAR --}}
    <section class="py-16 bg-slate-50 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-start">

                <!-- KONTEN UTAMA (8 Kolom) -->
                <main class="lg:col-span-8 space-y-12">

                    <!-- INTRO PERJALANAN PENDIDIKAN -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Kurikulum Terintegrasi TK - SMA</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Satu Kampus, Pengembangan Berkelanjutan</p>
                        </div>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Kami menyediakan ekosistem pendidikan yang lengkap sehingga setiap anak dapat tumbuh dan berkembang secara konsisten dalam lingkungan belajar yang kondusif, beretika, dan berwawasan kasih alam.
                        </p>
                    </div>

                    <!-- DAFTAR JENJANG PENDIDIKAN -->
                    <div class="space-y-10">

                        <!-- 1. JENJANG TK -->
                        <div id="tk" class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6 scroll-mt-28">
                            <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                                <div class="w-14 h-14 rounded-2xl bg-amber-100 text-amber-600 font-black flex items-center justify-center text-xl shadow-inner">
                                    TK
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-amber-600 uppercase tracking-widest block">Usia Dini</span>
                                    <h3 class="text-2xl font-black text-slate-900">Taman Kanak-Kanak (TK)</h3>
                                </div>
                            </div>

                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Menanamkan kebiasaan positif, mandiri sejak dini, serta menumbuhkan minat belajar anak melalui metode eksplorasi bermain sambil belajar yang menyenangkan dan aman.
                            </p>

                            <div class="bg-amber-50/50 rounded-xl p-5 border border-amber-100 space-y-3">
                                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Fokus Pembelajaran TK:</h4>
                                <ul class="grid sm:grid-cols-2 gap-2 text-xs text-slate-700 font-medium">
                                    <li class="flex items-center gap-2"><span class="text-amber-500">✔</span> Pembentukan Kemandirian & Karakter</li>
                                    <li class="flex items-center gap-2"><span class="text-amber-500">✔</span> Pengenalan Bahasa Inggris & Mandarin</li>
                                    <li class="flex items-center gap-2"><span class="text-amber-500">✔</span> Motorik Halus & Kreativitas Seni</li>
                                    <li class="flex items-center gap-2"><span class="text-amber-500">✔</span> Pembiasaan Sopan Santun Harian</li>
                                </ul>
                            </div>
                        </div>

                        <!-- 2. JENJANG SD -->
                        <div id="sd" class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6 scroll-mt-28">
                            <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                                <div class="w-14 h-14 rounded-2xl bg-red-100 text-red-600 font-black flex items-center justify-center text-xl shadow-inner">
                                    SD
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-red-600 uppercase tracking-widest block">Pendidikan Dasar</span>
                                    <h3 class="text-2xl font-black text-slate-900">Sekolah Dasar (SD)</h3>
                                </div>
                            </div>

                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Mengembangkan fondasi literasi, numerasi, dan logika berpikir dasar yang dipadukan dengan penguasaan trilingual (Bahasa Indonesia, Inggris, Mandarin) serta penguatan etika.
                            </p>

                            <div class="bg-red-50/50 rounded-xl p-5 border border-red-100 space-y-3">
                                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Fokus Pembelajaran SD:</h4>
                                <ul class="grid sm:grid-cols-2 gap-2 text-xs text-slate-700 font-medium">
                                    <li class="flex items-center gap-2"><span class="text-red-500">✔</span> Penguatan Akademis & Literasi Digital</li>
                                    <li class="flex items-center gap-2"><span class="text-red-500">✔</span> Program Kebahasaan Trilingual</li>
                                    <li class="flex items-center gap-2"><span class="text-red-500">✔</span> Pembentukan Budi Pekerti Universal</li>
                                    <li class="flex items-center gap-2"><span class="text-red-500">✔</span> Eksplorasi Minat, Seni & Olahraga</li>
                                </ul>
                            </div>
                        </div>

                        <!-- 3. JENJANG SMP -->
                        <div id="smp" class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6 scroll-mt-28">
                            <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                                <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 font-black flex items-center justify-center text-xl shadow-inner">
                                    SMP
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-blue-600 uppercase tracking-widest block">Pendidikan Menengah Pertama</span>
                                    <h3 class="text-2xl font-black text-slate-900">Sekolah Menengah Pertama (SMP)</h3>
                                </div>
                            </div>

                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Mendorong kemampuan analisis sains, penguasaan teknologi informasi dasar (STEM & Coding), serta pengasahan kepemimpinan organisasi siswa.
                            </p>

                            <div class="bg-blue-50/50 rounded-xl p-5 border border-blue-100 space-y-3">
                                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Fokus Pembelajaran SMP:</h4>
                                <ul class="grid sm:grid-cols-2 gap-2 text-xs text-slate-700 font-medium">
                                    <li class="flex items-center gap-2"><span class="text-blue-500">✔</span> Pembelajaran Berbasis STEM & Praktikum IPA</li>
                                    <li class="flex items-center gap-2"><span class="text-blue-500">✔</span> Bimbingan Olimpiade Akademis</li>
                                    <li class="flex items-center gap-2"><span class="text-blue-500">✔</span> Pengembangan Bakat Ekstrakurikuler</li>
                                    <li class="flex items-center gap-2"><span class="text-blue-500">✔</span> Pendidikan Karakter Kepemimpinan</li>
                                </ul>
                            </div>
                        </div>

                        <!-- 4. JENJANG SMA -->
                        <div id="sma" class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6 scroll-mt-28">
                            <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                                <div class="w-14 h-14 rounded-2xl bg-slate-100 text-slate-800 font-black flex items-center justify-center text-xl shadow-inner">
                                    SMA
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-slate-600 uppercase tracking-widest block">Pendidikan Menengah Atas</span>
                                    <h3 class="text-2xl font-black text-slate-900">Sekolah Menengah Atas (SMA)</h3>
                                </div>
                            </div>

                            <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                                Mempersiapkan murid secara matang menuju Perguruan Tinggi favorit, mengasah jiwa kewirausahaan, riset ilmiah, serta membentuk kedewasaan moral.
                            </p>

                            <div class="bg-slate-100/60 rounded-xl p-5 border border-slate-200 space-y-3">
                                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Fokus Pembelajaran SMA:</h4>
                                <ul class="grid sm:grid-cols-2 gap-2 text-xs text-slate-700 font-medium">
                                    <li class="flex items-center gap-2"><span class="text-slate-700">✔</span> Persiapan UTBK & Seleksi PTN / PTS</li>
                                    <li class="flex items-center gap-2"><span class="text-slate-700">✔</span> Riset Ilmiah & Kewirausahaan Muda</li>
                                    <li class="flex items-center gap-2"><span class="text-slate-700">✔</span> Bimbingan Karir & Konseling Perguruan Tinggi</li>
                                    <li class="flex items-center gap-2"><span class="text-slate-700">✔</span> Integritas & Kematangan Spiritual</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </main>

                <!-- SIDEBAR NAVIGASI & INFORMASI (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Menu Navigasi Akses Cepat Jenjang -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Pilih Jenjang
                        </h3>
                        <nav class="flex flex-col gap-1 text-xs font-bold text-slate-600">
                            <a href="#tk" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Taman Kanak-Kanak (TK)</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                            <a href="#sd" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Sekolah Dasar (SD)</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                            <a href="#smp" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Sekolah Menengah Pertama (SMP)</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                            <a href="#sma" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Sekolah Menengah Atas (SMA)</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
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
