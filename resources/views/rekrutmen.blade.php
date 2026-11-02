{{-- File: resources/views/rekrutmen.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutmen & Karir | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-slate-300">Bergabung</span>
                <span>/</span>
                <span class="text-amber-400">Rekrutmen & Karir</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Peluang Karir & Pengabdian
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Tumbuh & Berkarya Bersama <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Bergabunglah bersama kami dalam membentuk generasi penerus bangsa yang berintegritas, cerdas secara akademik, dan berjiwa Kasih Alam Universal.
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

                    <!-- INTRO KULTUR KERJA -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Mengapa Berkarir di Maitreyawira?</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Lingkungan Kerja Positif & Berkelanjutan</p>
                        </div>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Kami percaya bahwa pendidik dan tenaga kependidikan adalah pilar utama keberhasilan sekolah. Oleh karena itu, Sekolah Maitreyawira Palembang menyediakan ekosistem kerja yang saling menghormati, suportif, serta berorientasi pada pengembangan kompetensi profesional secara berkelanjutan.
                        </p>

                        <div class="grid sm:grid-cols-3 gap-4 pt-4">
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 text-center space-y-1">
                                <span class="text-2xl">🌱</span>
                                <h3 class="font-bold text-slate-900 text-xs">Budaya Harmonis</h3>
                                <p class="text-[11px] text-slate-500">Suasana kerja berasaskan kekeluargaan dan saling menghargai.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 text-center space-y-1">
                                <span class="text-2xl">📚</span>
                                <h3 class="font-bold text-slate-900 text-xs">Pelatihan Berkala</h3>
                                <p class="text-[11px] text-slate-500">Program workshop dan peningkatan profesionalisme guru.</p>
                            </div>
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 text-center space-y-1">
                                <span class="text-2xl">🏛️</span>
                                <h3 class="font-bold text-slate-900 text-xs">Fasilitas Modern</h3>
                                <p class="text-[11px] text-slate-500">Sarana pendukung kerja dan ruang kelas berbasis IT.</p>
                            </div>
                        </div>
                    </div>

                    <!-- DAFTAR LOWONGAN PEKERJAAN (JOB OPENINGS) -->
                    <div class="space-y-6">
                        <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                            <div>
                                <h3 class="text-xl font-black text-slate-900">Lowongan Pekerjaan Aktif</h3>
                                <p class="text-xs text-slate-500">Pilih posisi yang sesuai dengan kualifikasi Anda</p>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-xs font-extrabold bg-blue-100 text-blue-700">
                                4 Posisi Terbuka
                            </span>
                        </div>

                        <!-- Posisi 1 -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:border-blue-200 transition group">
                            <div class="flex flex-wrap items-start justify-between gap-2">
                                <div>
                                    <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800 uppercase tracking-wider">
                                        Tenaga Pendidik
                                    </span>
                                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition mt-1">
                                        Guru Bahasa Mandarin (TK / SD)
                                    </h4>
                                </div>
                                <span class="text-xs text-slate-400 font-medium">Full-Time</span>
                            </div>

                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                Bertanggung jawab menyusun materi pembelajaran Bahasa Mandarin yang interaktif dan mendidik bagi anak usia dini dan tingkat dasar.
                            </p>

                            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-xs text-slate-700 space-y-1">
                                <p class="font-bold text-slate-900 mb-1">Kualifikasi Utama:</p>
                                <ul class="list-disc list-inside space-y-0.5 text-slate-600">
                                    <li>S1 Pendidikan Bahasa Mandarin / Sastra Mandarin.</li>
                                    <li>Memiliki sertifikat HSK Min. Level 5 / setara.</li>
                                    <li>Menyukai anak-anak, sabar, serta kreatif dalam mengajar.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Posisi 2 -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:border-blue-200 transition group">
                            <div class="flex flex-wrap items-start justify-between gap-2">
                                <div>
                                    <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-amber-100 text-amber-800 uppercase tracking-wider">
                                        Tenaga Pendidik
                                    </span>
                                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition mt-1">
                                        Guru Matematika & IPA (SMP / SMA)
                                    </h4>
                                </div>
                                <span class="text-xs text-slate-400 font-medium">Full-Time</span>
                            </div>

                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                Mengajar mata pelajaran sains dan matematika tingkat menengah serta membimbing persiapan olimpiade sains siswa.
                            </p>

                            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-xs text-slate-700 space-y-1">
                                <p class="font-bold text-slate-900 mb-1">Kualifikasi Utama:</p>
                                <ul class="list-disc list-inside space-y-0.5 text-slate-600">
                                    <li>S1 Pendidikan Matematika / Fisika / Biologi / Kimia.</li>
                                    <li>Menguasai kurikulum nasional dan pengajaran berbasis STEM.</li>
                                    <li>Diutamakan memiliki pengalaman mengajar minimal 1 tahun.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Posisi 3 -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:border-blue-200 transition group">
                            <div class="flex flex-wrap items-start justify-between gap-2">
                                <div>
                                    <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-blue-100 text-blue-800 uppercase tracking-wider">
                                        Tenaga Kependidikan
                                    </span>
                                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition mt-1">
                                        Staf IT & Web Development
                                    </h4>
                                </div>
                                <span class="text-xs text-slate-400 font-medium">Full-Time</span>
                            </div>

                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                Mengelola infrastruktur jaringan sekolah, pemeliharaan sistem informasi manajemen, serta mengelola portal web resmi.
                            </p>

                            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-xs text-slate-700 space-y-1">
                                <p class="font-bold text-slate-900 mb-1">Kualifikasi Utama:</p>
                                <ul class="list-disc list-inside space-y-0.5 text-slate-600">
                                    <li>S1 Teknik Informatika / Sistem Informasi / Ilmu Komputer.</li>
                                    <li>Menguasai dasar Laravel, Tailwind CSS, jaringan LAN/Wi-Fi, dan troubleshooting hardware.</li>
                                    <li>Disiplin, komunikatif, dan mampu bekerja dalam tim.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Posisi 4 -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4 hover:border-blue-200 transition group">
                            <div class="flex flex-wrap items-start justify-between gap-2">
                                <div>
                                    <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold bg-blue-100 text-blue-800 uppercase tracking-wider">
                                        Tenaga Kependidikan
                                    </span>
                                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-blue-600 transition mt-1">
                                        Staf Administrasi & Keuangan
                                    </h4>
                                </div>
                                <span class="text-xs text-slate-400 font-medium">Full-Time</span>
                            </div>

                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                Mengelola pembukuan keuangan sekolah, tata kelola dokumen kesiswaan, serta pelayanan administrasi orang tua murid.
                            </p>

                            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 text-xs text-slate-700 space-y-1">
                                <p class="font-bold text-slate-900 mb-1">Kualifikasi Utama:</p>
                                <ul class="list-disc list-inside space-y-0.5 text-slate-600">
                                    <li>D3 / S1 Akuntansi / Manajemen / Administrasi Perkantoran.</li>
                                    <li>Mahir menggunakan MS Office (Excel, Word) dan sistem kasir/pembukuan.</li>
                                    <li>Teliti, jujur, serta berpenampilan rapi.</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- TATA CARA MELAMAR -->
                    <div class="bg-gradient-to-br from-slate-900 to-blue-950 text-white rounded-2xl p-8 shadow-xl space-y-6">
                        <div>
                            <h3 class="text-2xl font-black">Tata Cara Pengiriman Lamaran</h3>
                            <p class="text-slate-300 text-xs sm:text-sm mt-1">Kirimkan berkas lamaran Anda dengan mengikuti langkah mudah berikut</p>
                        </div>

                        <div class="space-y-3 text-xs sm:text-sm text-slate-200">
                            <p class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-amber-400 text-slate-900 font-extrabold flex items-center justify-center shrink-0 mt-0.5 text-xs">1</span>
                                <span>Siapkan Surat Lamaran, Curriculum Vitae (CV), Fotokopi Ijazah & Transkrip Nilai, Pasfoto terbaru, serta dokumen pendukung lainnya dalam bentuk PDF.</span>
                            </p>
                            <p class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-amber-400 text-slate-900 font-extrabold flex items-center justify-center shrink-0 mt-0.5 text-xs">2</span>
                                <span>Kirimkan email dengan Subjek: <strong>[Posisi_Yang_Dilamar] - Nama Lengkap</strong> ke alamat email HRD resmi.</span>
                            </p>
                        </div>

                        <div class="p-4 rounded-xl bg-slate-800/80 border border-slate-700 flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <span class="text-[10px] font-bold text-amber-400 uppercase tracking-widest block">Email Resmi HRD:</span>
                                <span class="font-mono text-sm sm:text-base font-bold text-white">hrd@maitreyawira-palembang.sch.id</span>
                            </div>
                            <a href="mailto:hrd@maitreyawira-palembang.sch.id" class="px-4 py-2 bg-amber-400 hover:bg-amber-300 text-slate-900 font-extrabold text-xs rounded-xl shadow-xs transition">
                                Kirim Lamaran Sekarang
                            </a>
                        </div>
                    </div>

                </main>

                <!-- SIDEBAR NAVIGASI & INFORMASI (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Menu Navigasi Sub-Halaman Bergabung -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Bergabung
                        </h3>
                        <nav class="flex flex-col gap-1 text-xs font-bold text-slate-600">
                            <a href="/pendaftaran-siswa" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Pendaftaran Siswa</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/rekrutmen" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Rekrutmen & Karir</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </nav>
                    </div>

                    <!-- Contact HR Widget -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-4">
                        <h4 class="font-bold text-slate-900 text-sm border-b border-slate-100 pb-2">Kontak Tim Rekrutmen</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Punya pertanyaan seputar kualifikasi atau proses seleksi? Hubungi tim HRD kami pada jam kerja.
                        </p>
                        <div class="space-y-2 text-xs text-slate-700 font-medium pt-1">
                            <p class="flex items-center gap-2">
                                <span>📍</span> Kampus Maitreyawira Palembang
                            </p>
                            <p class="flex items-center gap-2">
                                <span>⏰</span> Senin - Jumat (08.00 - 15.00 WIB)
                            </p>
                            <p class="flex items-center gap-2">
                                <span>📧</span> hrd@maitreyawira-palembang.sch.id
                            </p>
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>

    {{-- 4. FOOTER PARTIAL --}}
    @include('partials.footer')

</body>
</html>
