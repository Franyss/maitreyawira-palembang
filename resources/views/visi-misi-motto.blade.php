{{-- File: resources/views/visi-misi-motto.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi, Misi & Motto | Sekolah Maitreyawira Palembang</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    {{-- 1. HEADER / NAVBAR PARTIAL --}}
    @include('partials.navbar')

    {{-- 2. HERO BANNER & BREADCRUMB (Gaya PCR) --}}
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
                <span class="text-amber-400">Visi, Misi & Motto</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Profil Lembaga
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Visi, Misi & Motto <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Landasan filosofis dan komitmen berkelanjutan dalam membina insan berkarakter mulia, berilmu pengetahuan, dan berjiwa kasih alam.
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

                    <!-- VISI SEKOLAH -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/5 rounded-bl-full -mr-6 -mt-6 transition group-hover:scale-110"></div>

                        <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                            <div class="w-12 h-12 rounded-xl bg-blue-600 text-white font-black flex items-center justify-center text-xl shadow-md">
                                👁️
                            </div>
                            <div>
                                <h2 class="text-2xl font-black text-slate-900">Visi Sekolah</h2>
                                <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-0.5">Pandangan Masa Depan Institusi</p>
                            </div>
                        </div>

                        <div class="p-6 bg-gradient-to-br from-blue-50/60 to-slate-50 rounded-2xl border border-blue-100/80">
                            <p class="text-slate-800 font-extrabold text-lg sm:text-xl leading-relaxed italic text-center">
                                "Menjadi lembaga pendidikan terpadu yang unggul dalam membentuk manusia berintegritas, berakhlak mulia, cerdas secara akademik, dan berjiwa Kasih Alam Universal."
                            </p>
                        </div>
                    </div>

                    <!-- MISI SEKOLAH -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-500 text-slate-900 font-black flex items-center justify-center text-xl shadow-md">
                                🎯
                            </div>
                            <div>
                                <h2 class="text-2xl font-black text-slate-900">Misi Sekolah</h2>
                                <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-0.5">Langkah & Komitmen Strategis</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100/80 hover:border-blue-200 transition">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-sm flex items-center justify-center shrink-0">1</span>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-base">Pendidikan Budi Pekerti & Moralku</h3>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Menanamkan nilai-nilai etika, rasa hormat, kedisiplinan, dan tanggung jawab moral dalam kehidupan sehari-hari.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100/80 hover:border-blue-200 transition">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-sm flex items-center justify-center shrink-0">2</span>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-base">Keunggulan Akademik & Teknologi</h3>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Menyelenggarakan proses pembelajaran berkualitas berbasis kurikulum nasional yang dipadukan dengan penguasaan teknologi informasi dan bahasa asing.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100/80 hover:border-blue-200 transition">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-sm flex items-center justify-center shrink-0">3</span>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-base">Budaya Kasih Alam & Kelestarian Ekosistem</h3>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Menumbuhkan kesadaran kepedulian terhadap kelestarian lingkungan hidup dan cinta terhadap sesama makhluk ciptaan Tuhan.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100/80 hover:border-blue-200 transition">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-sm flex items-center justify-center shrink-0">4</span>
                                <div>
                                    <h3 class="font-bold text-slate-900 text-base">Pengembangan Bakat & Kepemimpinan</h3>
                                    <p class="text-slate-600 text-xs sm:text-sm mt-1 leading-relaxed">
                                        Mendorong potensi unik murid melalui kegiatan minat-bakat, seni, olahraga, serta pembentukan jiwa kepemimpinan yang mandiri.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MOTTO SEKOLAH -->
                    <div class="bg-gradient-to-br from-blue-900 via-slate-900 to-slate-950 text-white rounded-2xl p-8 shadow-xl space-y-6 relative overflow-hidden">
                        <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-amber-400/10 rounded-full blur-2xl"></div>

                        <div class="flex items-center gap-4 border-b border-slate-800 pb-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-400 text-slate-900 font-black flex items-center justify-center text-xl">
                                🌟
                            </div>
                            <div>
                                <h2 class="text-2xl font-black text-white">Motto Sekolah</h2>
                                <p class="text-xs text-amber-400 font-bold uppercase tracking-wider mt-0.5">Semboyan Utama</p>
                            </div>
                        </div>

                        <div class="text-center py-6 space-y-3">
                            <div class="text-3xl sm:text-4xl font-black tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500 uppercase">
                                "Dunia Satu Keluarga"
                            </div>
                            <p class="text-slate-300 text-xs sm:text-sm max-w-xl mx-auto leading-relaxed">
                                Menjunjung tinggi semangat persaudaraan universal, saling menghormati keberagaman, serta menyebarkan kedamaian dan kasih sayang kepada seluruh umat manusia.
                            </p>
                        </div>
                    </div>

                    <!-- CORE VALUES (NILAI UTAMA) -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div>
                            <h2 class="text-2xl font-black text-slate-900">Nilai-Nilai Utama (Core Values)</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Prinsip Karakter Pelajar Maitreyawira</p>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-5 rounded-xl border border-slate-200/80 bg-slate-50/50 space-y-2">
                                <div class="text-blue-600 font-extrabold text-lg flex items-center gap-2">
                                    <span>🤝</span> Integritas
                                </div>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Jujur, dapat dipercaya, konsisten dalam ucapan dan tindakan luhur.
                                </p>
                            </div>

                            <div class="p-5 rounded-xl border border-slate-200/80 bg-slate-50/50 space-y-2">
                                <div class="text-amber-600 font-extrabold text-lg flex items-center gap-2">
                                    <span>❤️</span> Kasih Semesta
                                </div>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Menyayangi sesama, toleran terhadap perbedaan, serta berempati tinggi.
                                </p>
                            </div>

                            <div class="p-5 rounded-xl border border-slate-200/80 bg-slate-50/50 space-y-2">
                                <div class="text-emerald-600 font-extrabold text-lg flex items-center gap-2">
                                    <span>🌱</span> Kasih Alam
                                </div>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Menjaga kebersihan, menghemat energi, dan mencintai kelestarian bumi.
                                </p>
                            </div>

                            <div class="p-5 rounded-xl border border-slate-200/80 bg-slate-50/50 space-y-2">
                                <div class="text-indigo-600 font-extrabold text-lg flex items-center gap-2">
                                    <span>🚀</span> Semangat Berprestasi
                                </div>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Pantang menyerah, kreatif, serta tekun mengasah potensi keilmuan.
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
                            <a href="/visi-misi-motto" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Visi, Misi & Motto</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/program-unggulan" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Program Unggulan</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/fasilitas" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Fasilitas Sekolah</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/pencapaian" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Pencapaian & Prestasi</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/testimoni-orang-tua-siswa" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
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
