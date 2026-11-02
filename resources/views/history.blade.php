{{-- File: resources/views/sejarah.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Sekolah | Maitreyawira Palembang</title>
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
                <span class="text-amber-400">Sejarah</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Profil Lembaga
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Sejarah Singkat <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Perjalanan tumbuh dan berkembangnya institusi pendidikan yang berlandaskan kasih alam, moralitas luhur, dan keunggulan akademik di Kota Palembang.
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

                    <!-- Latar Belakang Pendirian -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Awal Mula Pendirian</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Latar Belakang & Cita-Cita Luhur</p>
                        </div>

                        <div class="prose prose-slate text-slate-600 text-sm sm:text-base leading-relaxed space-y-4">
                            <p>
                                Sekolah Maitreyawira Palembang didirikan di bawah naungan <strong>Yayasan Maitreyawira Palembang</strong> sebagai wujud kepedulian nyata terhadap pentingnya pendidikan karakter universal sejak usia dini.
                            </p>
                            <p>
                                Nama <span class="text-blue-600 font-semibold">Maitreyawira</span> berasal dari Bahasa Sanskerta: <em>Maitreya</em> yang berarti "Kasih Semesta" dan <em>Wira</em> yang berarti "Pahlawan" atau "Integritas". Sekolah ini didirikan bukan sekadar sebagai tempat menimba ilmu pengetahuan, melainkan sebagai wadah pembentukan manusia berintegritas yang memiliki jiwa kasih sayang kepada sesama dan lingkungan.
                            </p>
                            <blockquote class="p-4 border-l-4 border-amber-400 bg-amber-50/50 rounded-r-xl italic text-slate-700 text-sm">
                                "Mendidik manusia tidak hanya mengasah kecerdasan otak, melainkan juga menghidupkan nurani dan karakter kasih di dalam jiwa setiap anak didik."
                            </blockquote>
                        </div>
                    </div>

                    <!-- TIMELINE MILISTONE (Data Dinamis dari Database) -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-8">
                        <div>
                            <h2 class="text-2xl font-black text-slate-900">Jejak Langkah & Perkembangan</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Milestone Penting Sekolah Maitreyawira Palembang</p>
                        </div>

                        <div class="relative border-l-2 border-blue-100 ml-4 space-y-10">
                            @forelse($histories as $history)
                                <div class="relative pl-8 group">
                                    {{-- Marker Titik Warna --}}
                                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full border-4 border-white shadow-xs group-hover:scale-125 transition"
                                         style="background-color: {{ $history->color ?? '#2563eb' }};">
                                    </div>

                                    {{-- Tanggal / Tahun --}}
                                    <span class="px-2.5 py-1 rounded-md bg-blue-50 text-blue-700 font-black text-xs inline-block mb-2 border border-blue-100">
                                        {{ \Carbon\Carbon::parse($history->history_date)->translatedFormat('d F Y') }}
                                    </span>

                                    {{-- Judul Sejarah --}}
                                    <h3 class="text-xl font-bold text-slate-900">{{ $history->history_title }}</h3>

                                    {{-- Detail Deskripsi & Foto --}}
                                    @foreach($history->details as $detail)
                                        <div class="mt-3 space-y-3">
                                            @if($detail->history_detail_photo)
                                                <img src="{{ asset('storage/history/' . $detail->history_detail_photo) }}"
                                                     alt="{{ $history->history_title }}"
                                                     class="w-full max-w-lg rounded-xl border border-slate-200 shadow-sm my-3 object-cover">
                                            @endif
                                            @if($detail->history_detail_desc)
                                                <p class="text-sm text-slate-600 leading-relaxed">
                                                    {{ $detail->history_detail_desc }}
                                                </p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @empty
                                <div class="p-6 text-center text-slate-400 italic bg-slate-50 rounded-xl border border-dashed border-slate-200">
                                    Belum ada data sejarah yang dicatat di database.
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- NILAI UTAMA MAITREYAWIRA -->
                    <div class="bg-gradient-to-br from-blue-900 to-slate-900 text-white rounded-2xl p-8 shadow-xl space-y-6">
                        <h2 class="text-2xl font-black">Nilai Historis yang Terus Dijaga</h2>
                        <div class="grid sm:grid-cols-2 gap-4 text-xs sm:text-sm">
                            <div class="bg-slate-800/60 p-4 rounded-xl border border-slate-700/60">
                                <div class="text-amber-400 font-extrabold mb-1">🌿 Kasih Alam</div>
                                <p class="text-slate-300">Menanamkan kesadaran menjaga kelestarian lingkungan dan menyayangi sesama makhluk hidup.</p>
                            </div>
                            <div class="bg-slate-800/60 p-4 rounded-xl border border-slate-700/60">
                                <div class="text-amber-400 font-extrabold mb-1">🎓 Keunggulan Akademik</div>
                                <p class="text-slate-300">Memadukan kurikulum nasional dan penguasaan bahasa asing serta teknologi informasi.</p>
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
                            <a href="/sejarah" class="flex items-center justify-between p-2.5 rounded-lg bg-blue-50 text-blue-600 font-extrabold">
                                <span>Sejarah Sekolah</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
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
