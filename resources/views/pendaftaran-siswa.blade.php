{{-- File: resources/views/pendaftaran-siswa.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru (PPDB) | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-amber-400">Pendaftaran Siswa</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-amber-500/20 text-amber-300 border border-amber-500/30 uppercase tracking-widest">
                    PPDB Online T.A 2026/2027
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Pendaftaran Murid Baru <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Selamat datang calon peserta didik baru! Bergabunglah menjadi bagian dari komunitas pembelajar yang cerdas, berkarakter luhur, dan berbudaya kasih alam.
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

                    <!-- ALUR PENDAFTARAN (STEPS) -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-8">
                        <div>
                            <h2 class="text-2xl font-black text-slate-900">Alur Pendaftaran PPDB</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Tahapan Kemudahan Pendaftaran Siswa Baru</p>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <!-- Step 1 -->
                            <div class="p-5 rounded-xl border border-slate-100 bg-slate-50/60 space-y-2 relative">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-xs flex items-center justify-center">1</span>
                                <h3 class="font-bold text-slate-900 text-base">Pengisian Formulir Online</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Calon wali murid mengisi data diri siswa dan orang tua secara lengkap melalui portal pendaftaran resmi.
                                </p>
                            </div>

                            <!-- Step 2 -->
                            <div class="p-5 rounded-xl border border-slate-100 bg-slate-50/60 space-y-2 relative">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-xs flex items-center justify-center">2</span>
                                <h3 class="font-bold text-slate-900 text-base">Penyerahan Berkas Dokumen</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Mengunggah atau menyerahkan fotokopi Akta Kelahiran, Kartu Keluarga, dan pasfoto terbaru calon murid.
                                </p>
                            </div>

                            <!-- Step 3 -->
                            <div class="p-5 rounded-xl border border-slate-100 bg-slate-50/60 space-y-2 relative">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-xs flex items-center justify-center">3</span>
                                <h3 class="font-bold text-slate-900 text-base">Pemetaan / Pemetaan Kesiapan</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Pelaksanaan wawancara singkat serta observasi tumbuh kembang anak sesuai jenjang yang dituju.
                                </p>
                            </div>

                            <!-- Step 4 -->
                            <div class="p-5 rounded-xl border border-slate-100 bg-slate-50/60 space-y-2 relative">
                                <span class="w-8 h-8 rounded-lg bg-blue-600 text-white font-black text-xs flex items-center justify-center">4</span>
                                <h3 class="font-bold text-slate-900 text-base">Pengumuman & Daftar Ulang</h3>
                                <p class="text-slate-600 text-xs leading-relaxed">
                                    Penerimaan hasil kelulusan dan penyelesaian administrasi daftar ulang murid baru.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- PERSYARATAN BERKAS -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Persyaratan Dokumen</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Berkas Administrasi Calon Murid</p>
                        </div>

                        <ul class="space-y-3 text-xs sm:text-sm text-slate-700 font-medium">
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <span>Fotokopi Akta Kelahiran Calon Murid (2 lembar)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <span>Fotokopi Kartu Keluarga (KK) & KTP Orang Tua / Wali (2 lembar)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <span>Pasfoto berwarna terbaru ukuran 3x4 (4 lembar)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold text-xs flex items-center justify-center shrink-0 mt-0.5">✓</span>
                                <span>Fotokopi Ijazah / Rapor jenjang sebelumnya (Khusus pendaftar SD, SMP, SMA)</span>
                            </li>
                        </ul>
                    </div>

                    <!-- FORMULIR PENDAFTARAN SINGKAT -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Formulir Pendaftaran Awal</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Isi data awal untuk menghubungi panitia PPDB</p>
                        </div>

                        <form action="#" method="POST" class="space-y-4 text-xs sm:text-sm">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Nama Lengkap Anak</label>
                                    <input type="text" placeholder="Masukkan nama lengkap anak" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs">
                                </div>
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Jenjang Dituju</label>
                                    <select class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs bg-white">
                                        <option value="">-- Pilih Jenjang --</option>
                                        <option value="TK">Taman Kanak-Kanak (TK)</option>
                                        <option value="SD">Sekolah Dasar (SD)</option>
                                        <option value="SMP">Sekolah Menengah Pertama (SMP)</option>
                                        <option value="SMA">Sekolah Menengah Atas (SMA)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Nama Orang Tua / Wali</label>
                                    <input type="text" placeholder="Nama ayah/ibu/wali" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs">
                                </div>
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">No. WhatsApp / HP</label>
                                    <input type="tel" placeholder="Contoh: 081234567890" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs">
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label class="font-bold text-slate-700 block">Catatan / Pertanyaan (Opsional)</label>
                                <textarea rows="3" placeholder="Tuliskan pertanyaan atau catatan khusus" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs"></textarea>
                            </div>

                            <button type="button" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs rounded-xl shadow-md transition">
                                Kirim Formulir Pendaftaran Awal
                            </button>
                        </form>
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
                            <a href="/pendaftaran-siswa" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Pendaftaran Siswa</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/rekrutmen" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Rekrutmen & Karir</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </nav>
                    </div>

                    <!-- Contact Hotline PPDB Callout Widget -->
                    <div class="bg-gradient-to-br from-blue-900 to-slate-900 rounded-2xl p-6 text-white shadow-md space-y-4">
                        <div class="font-black text-lg leading-tight">
                            Butuh Bantuan Pendaftaran?
                        </div>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Tim layanan informasi PPDB kami siap membantu menjelaskan rincian biaya, program, dan jadwal pengisian.
                        </p>
                        <div class="space-y-2 text-xs font-bold pt-2 border-t border-slate-800">
                            <p class="flex items-center gap-2">
                                <span>📞</span> Hotline: (0711) XXXXXX
                            </p>
                            <p class="flex items-center gap-2">
                                <span>💬</span> WhatsApp: 08XX-XXXX-XXXX
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
