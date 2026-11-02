{{-- File: resources/views/testimoni-orang-tua-siswa.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni Orang Tua Siswa | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-amber-400">Testimoni Orang Tua</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Kepercayaan & Kemitraan
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Kata Mereka Tentang <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Ungkapan jujur dan pengalaman nyata dari para orang tua murid mengenai perkembangan karakter, akademis, dan lingkungan belajar putra-putri mereka.
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

                    <!-- INTRO KARTU PENILAIAN -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Sinergi Sekolah & Orang Tua</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Membangun Masa Depan Anak Bersama-sama</p>
                        </div>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                            Pendidikan yang berhasil adalah hasil kolaborasi yang harmonis antara lingkungan sekolah dan keluarga. Berikut adalah tanggapan serta kesan dari para wali murid yang telah mempercayakan pendidikan putra-putrinya di Sekolah Maitreyawira Palembang.
                        </p>
                    </div>

                    <!-- DAFTAR TESTIMONI (GRID CARDS) -->
                    <div class="grid sm:grid-cols-2 gap-6">

                        <!-- Testimoni 1 (TK) -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 hover:border-blue-200 transition group">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex text-amber-400 text-sm gap-1">
                                        ★★★★★
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">TK Maitreyawira</span>
                                </div>
                                <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                                    "Sejak bersekolah di TK Maitreyawira, anak saya menjadi sangat mandiri, ramah, dan belajar cara menyayangi sesama teman serta lingkungan. Guru-gurunya sangat sabar dan penuh kasih sayang!"
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-sm">
                                    LB
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Ibu Lina Budiman</h4>
                                    <p class="text-[11px] text-slate-500">Orang Tua dari Kenzo (TK B)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimoni 2 (SD) -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 hover:border-blue-200 transition group">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex text-amber-400 text-sm gap-1">
                                        ★★★★★
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-red-100 text-red-800">SD Maitreyawira</span>
                                </div>
                                <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                                    "Pendidikan budi pekerti di SD Maitreyawira sangat terasa perkembangannya di rumah. Selain itu, program bahasa Inggris dan Mandarinnya membuat anak saya percaya diri berbicara dalam dua bahasa asing."
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-amber-500 text-slate-900 font-bold flex items-center justify-center text-sm">
                                    HW
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Bapak Hendra Wijaya</h4>
                                    <p class="text-[11px] text-slate-500">Orang Tua dari Clarissa (Kelas 4 SD)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimoni 3 (SMP) -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 hover:border-blue-200 transition group">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex text-amber-400 text-sm gap-1">
                                        ★★★★★
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-800">SMP Maitreyawira</span>
                                </div>
                                <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                                    "Fasilitas laboratorium dan kegiatan ekstrakurikuler di SMP sangat mendukung bakat anak saya. Lingkungan sekolah bebas dari budaya perundungan (bullying) sehingga anak merasa sangat aman."
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-sm">
                                    SL
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Ibu Sukma Lestari</h4>
                                    <p class="text-[11px] text-slate-500">Orang Tua dari Darren (Kelas 8 SMP)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimoni 4 (SMA) -->
                        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4 hover:border-blue-200 transition group">
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <div class="flex text-amber-400 text-sm gap-1">
                                        ★★★★★
                                    </div>
                                    <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-slate-200 text-slate-800">SMA Maitreyawira</span>
                                </div>
                                <p class="text-slate-600 text-xs sm:text-sm italic leading-relaxed">
                                    "Bimbingan masuk Perguruan Tinggi dan pembentukan karakter kepemimpinan di SMA Maitreyawira sangat terarah. Anak saya tidak hanya siap secara akademis, tapi juga punya integritas tinggi."
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-indigo-600 text-white font-bold flex items-center justify-center text-sm">
                                    RT
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-sm">Bapak Rudi Tanujaya</h4>
                                    <p class="text-[11px] text-slate-500">Orang Tua dari Jessica (Alumni SMA)</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- BANNER KASIH ALAM & KANTIN VEGETARIS -->
                    <div class="bg-gradient-to-br from-blue-900 to-slate-900 text-white rounded-2xl p-8 shadow-xl space-y-4">
                        <h3 class="text-2xl font-black">Lingkungan Belajar yang Sehat & Nyaman</h3>
                        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed">
                            Banyak orang tua juga mengapresiasi keberadaan Kantin Vegetaris Sehat dan pembiasaan hidup ramah lingkungan di Sekolah Maitreyawira yang menjaga fisik murid tetap bugar dan fokus belajar.
                        </p>
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
                            <a href="/fasilitas" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Fasilitas Sekolah</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/pencapaian" class="flex items-center justify-between p-2.5 rounded-lg hover:bg-slate-50 hover:text-blue-600 transition">
                                <span>Pencapaian & Prestasi</span>
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                            <a href="/testimoni" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Testimoni Orang Tua</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
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
