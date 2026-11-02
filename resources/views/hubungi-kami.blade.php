{{-- File: resources/views/hubungi-kami.blade.php --}}
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | Sekolah Maitreyawira Palembang</title>
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
                <span class="text-amber-400">Hubungi Kami</span>
            </nav>

            <div class="max-w-3xl space-y-4">
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-blue-500/20 text-blue-300 border border-blue-500/30 uppercase tracking-widest">
                    Pusat Bantuan & Sekretariat
                </span>
                <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight">
                    Layanan Informasi & Kontak <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-yellow-300 to-amber-500">
                        Sekolah Maitreyawira Palembang
                    </span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Kami siap melayani pertanyaan, konsultasi pendaftaran murid baru, kunjungan kampus, maupun informasi umum seputar sekolah.
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

                    <!-- FORMULIR PESAN & PERTANYAAN -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-6">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Kirim Pesan / Pertanyaan</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Sampaikan pesan Anda langsung ke tim layanan kami</p>
                        </div>

                        <form action="#" method="POST" class="space-y-4 text-xs sm:text-sm">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Nama Lengkap <span class="text-red-500">*</span></label>
                                    <input type="text" placeholder="Masukkan nama Anda" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs" required>
                                </div>
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Alamat Email <span class="text-red-500">*</span></label>
                                    <input type="email" placeholder="nama@email.com" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs" required>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">No. HP / WhatsApp <span class="text-red-500">*</span></label>
                                    <input type="tel" placeholder="Contoh: 081234567890" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs" required>
                                </div>
                                <div class="space-y-1">
                                    <label class="font-bold text-slate-700 block">Kategori Pertanyaan</label>
                                    <select class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs bg-white">
                                        <option value="PPDB / Pendaftaran">PPDB / Pendaftaran Murid Baru</option>
                                        <option value="Informasi Akademik">Informasi Akademik & Kurikulum</option>
                                        <option value="Kunjungan Sekolah">Kunjungan Sekolah / Campus Tour</option>
                                        <option value="Lainnya">Pertanyaan Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label class="font-bold text-slate-700 block">Subjek Pesan</label>
                                <input type="text" placeholder="Tuliskan judul/subjek pesan singkat" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs">
                            </div>

                            <div class="space-y-1">
                                <label class="font-bold text-slate-700 block">Isi Pesan <span class="text-red-500">*</span></label>
                                <textarea rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda secara rinci..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:border-blue-600 text-xs" required></textarea>
                            </div>

                            <button type="button" class="w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-extrabold text-xs rounded-xl shadow-md transition">
                                Kirim Pesan Sekarang
                            </button>
                        </form>
                    </div>

                    <!-- LOKASI PETA GOOGLE MAPS -->
                    <div class="bg-white rounded-2xl p-8 border border-slate-200/80 shadow-sm space-y-4">
                        <div class="border-b border-slate-100 pb-4">
                            <h2 class="text-2xl font-black text-slate-900">Peta Lokasi Kampus</h2>
                            <p class="text-xs text-blue-600 font-bold uppercase tracking-wider mt-1">Kunjungi Kampus Sekolah Maitreyawira Palembang</p>
                        </div>

                        <div class="w-full h-80 rounded-xl overflow-hidden border border-slate-200 shadow-inner bg-slate-100">
                            {{-- Embed Google Maps --}}
                            <iframe
                                class="w-full h-full border-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.423984218939!2d104.75000000000000!3d-2.980000000000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f000000001%3A0x123456789abcdef!2sMaitreyawira%20School%20Palembang!5e0!3m2!1sid!2sid!4v1600000000000!5m2!1sid!2sid"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                </main>

                <!-- SIDEBAR INFORMASI KONTAK & JAM OPERASIONAL (4 Kolom) -->
                <aside class="lg:col-span-4 space-y-6 sticky top-28">

                    <!-- Kartu Informasi Alamat & Kontak -->
                    <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-sm space-y-6">
                        <h3 class="text-sm font-black text-slate-900 uppercase tracking-wider border-b border-slate-100 pb-3">
                            Informasi Kontak
                        </h3>

                        <div class="space-y-4 text-xs sm:text-sm text-slate-700">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    📍
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Alamat Sekolah</h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        Jl. Residen Abdul Rozak, Kalidoni, Kota Palembang, Sumatera Selatan
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    💬
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">WhatsApp & Telepon</h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        (0711) XXXXXX <br>
                                        08XX-XXXX-XXXX (PPDB Online)
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center font-bold text-base shrink-0 mt-0.5">
                                    📧
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Email Resmi</h4>
                                    <p class="text-slate-600 text-xs mt-0.5 leading-relaxed">
                                        info@maitreyawira-palembang.sch.id
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Operasional Sekretariat -->
                    <div class="bg-gradient-to-br from-slate-900 to-blue-950 text-white rounded-2xl p-6 shadow-md space-y-4">
                        <h4 class="font-bold text-amber-400 text-sm uppercase tracking-wider border-b border-slate-800 pb-2">
                            ⏰ Jam Operasional Kantor
                        </h4>
                        <div class="space-y-2 text-xs text-slate-300">
                            <div class="flex justify-between border-b border-slate-800/60 pb-1.5">
                                <span>Senin - Jumat</span>
                                <span class="font-bold text-white">07.30 - 15.30 WIB</span>
                            </div>
                            <div class="flex justify-between border-b border-slate-800/60 pb-1.5">
                                <span>Sabtu</span>
                                <span class="font-bold text-white">08.00 - 12.00 WIB</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Minggu / Hari Libur</span>
                                <span class="font-bold text-red-400">Tutup</span>
                            </div>
                        </div>
                    </div>

                    <!-- Widget PPDB Call-to-Action -->
                    <div class="bg-gradient-to-br from-amber-400 to-amber-500 rounded-2xl p-6 text-slate-900 shadow-md space-y-4">
                        <div class="font-black text-lg leading-tight">
                            Ingin Mendaftar PPDB Online?
                        </div>
                        <p class="text-xs text-slate-800 font-medium leading-relaxed">
                            Proses pendaftaran murid baru dapat dilakukan secara penuh melalui portal online kami.
                        </p>
                        <a href="/pendaftaran-siswa" class="inline-block w-full py-2.5 px-4 bg-slate-900 hover:bg-slate-800 text-amber-400 font-extrabold text-xs text-center rounded-xl shadow-xs transition">
                            Ke Halaman Pendaftaran →
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
