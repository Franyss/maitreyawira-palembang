{{-- File: resources/views/partials/navbar.blade.php --}}
<header class="bg-white border-b border-slate-200/80 sticky top-0 z-50 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

        <!-- LOGO BRAND SEKOLAH MAITREYAWIRA -->
        <a href="/" class="flex items-center gap-3 group shrink-0">
            <img src="{{ asset('images/logo-smw.png') }}"
                 alt="Logo Sekolah Maitreyawira Palembang"
                 class="h-12 sm:h-14 w-auto object-contain transition duration-200 group-hover:scale-105">
        </a>

        <!-- MENU NAVIGASI DESKTOP -->
        <nav class="hidden lg:flex items-center gap-1 font-bold text-xs text-[#1b2a6b]">

            <!-- 1. Beranda -->
            <a href="/"
               class="px-3 py-2 rounded-lg transition {{ request()->is('/') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                Beranda
            </a>

            <!-- 2. Tentang Kami (Dropdown) -->
            <div class="relative group py-2">
                <a href="/history"
                   class="px-3 py-2 rounded-lg flex items-center gap-1 transition {{ request()->is('tentang-kami*', 'history', 'visi-misi-motto', 'program-unggulan', 'fasilitas', 'pencapaian', 'testimoni*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                    <span>Tentang Kami</span>
                    <svg class="w-3.5 h-3.5 text-[#1b2a6b]/70 group-hover:text-[#1b2a6b] transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <!-- Area Dropdown Menu -->
                <div class="absolute left-0 top-full -mt-1 pt-2 w-56 hidden group-hover:block transition duration-150 z-50">
                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 py-2">
                        <a href="/history" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('history') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Sejarah Sekolah</a>
                        <a href="/visi-misi-motto" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('visi-misi-motto') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Visi, Misi & Motto</a>
                        <a href="/program-unggulan" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('program-unggulan') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Program Unggulan</a>
                        <a href="/fasilitas" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('fasilitas') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Fasilitas Sekolah</a>
                        <a href="/pencapaian" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('pencapaian') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Pencapaian & Prestasi</a>
                        <a href="/testimoni" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('testimoni*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Testimoni Orang Tua</a>
                    </div>
                </div>
            </div>

            <!-- 3. Sekolah (Dropdown) -->
            <div class="relative group py-2">
                <a href="/sekolah"
                   class="px-3 py-2 rounded-lg flex items-center gap-1 transition {{ request()->is('sekolah*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                    <span>Sekolah</span>
                    <svg class="w-3.5 h-3.5 text-[#1b2a6b]/70 group-hover:text-[#1b2a6b] transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div class="absolute left-0 top-full -mt-1 pt-2 w-52 hidden group-hover:block transition duration-150 z-50">
                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 py-2">
                        <a href="/sekolah#tk" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] text-[#1b2a6b] transition">Taman Kanak-Kanak (TK)</a>
                        <a href="/sekolah#sd" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] text-[#1b2a6b] transition">Sekolah Dasar (SD)</a>
                        <a href="/sekolah#smp" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] text-[#1b2a6b] transition">Sekolah Menengah Pertama (SMP)</a>
                        <a href="/sekolah#sma" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] text-[#1b2a6b] transition">Sekolah Menengah Atas (SMA)</a>
                    </div>
                </div>
            </div>

            <!-- 4. Bergabung (Dropdown) -->
            <div class="relative group py-2">
                <a href="/pendaftaran-siswa"
                   class="px-3 py-2 rounded-lg flex items-center gap-1 transition {{ request()->is('bergabung*', 'pendaftaran-siswa', 'rekrutmen') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                    <span>Bergabung</span>
                    <svg class="w-3.5 h-3.5 text-[#1b2a6b]/70 group-hover:text-[#1b2a6b] transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div class="absolute left-0 top-full -mt-1 pt-2 w-52 hidden group-hover:block transition duration-150 z-50">
                    <div class="bg-white rounded-xl shadow-xl border border-slate-100 py-2">
                        <a href="/pendaftaran-siswa" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('pendaftaran-siswa') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Pendaftaran Siswa (PPDB)</a>
                        <a href="/rekrutmen" class="block px-4 py-2 hover:bg-[#1b2a6b]/10 hover:text-[#1b2a6b] transition {{ request()->is('rekrutmen') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'text-[#1b2a6b]' }}">Rekrutmen & Karir</a>
                    </div>
                </div>
            </div>

            <!-- 5. Galeri -->
            <a href="/galeri"
               class="px-3 py-2 rounded-lg transition {{ request()->is('galeri*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                Galeri
            </a>

            <!-- 6. Berita -->
            <a href="/berita"
               class="px-3 py-2 rounded-lg transition {{ request()->is('berita*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                Berita
            </a>

            <!-- 7. Hubungi Kami -->
            <a href="/hubungi-kami"
               class="px-3 py-2 rounded-lg transition {{ request()->is('hubungi-kami*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : 'hover:text-[#1b2a6b] hover:bg-slate-100/80' }}">
                Hubungi Kami
            </a>
        </nav>

        <!-- TOMBOL PPDB & MOBILE BUTTON -->
        <div class="flex items-center gap-3">
            <a href="/pendaftaran-siswa"
               class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 bg-amber-400 hover:bg-amber-300 text-[#1b2a6b] font-black text-xs rounded-xl shadow-sm hover:shadow transition">
                <span>PPDB ONLINE</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>

            <!-- Tombol Hamburger Mobile -->
            <button id="mobile-menu-btn"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                    class="lg:hidden p-2 rounded-xl text-[#1b2a6b] hover:bg-slate-100 focus:outline-none transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- MENU MOBILE DROPDOWN -->
    <div id="mobile-menu"
         class="hidden lg:hidden bg-white border-b border-slate-200 px-4 pt-2 pb-6 space-y-2 text-xs font-bold text-[#1b2a6b] shadow-xl">
        <a href="/" class="block px-3 py-2 rounded-lg hover:bg-slate-100 {{ request()->is('/') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : '' }}">Beranda</a>

        <div class="space-y-1 pl-3 border-l-2 border-slate-200">
            <span class="block px-3 py-1 text-[11px] text-slate-400 uppercase tracking-wider font-extrabold">Tentang Kami</span>
            <a href="/sejarah" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Sejarah Sekolah</a>
            <a href="/visi-misi-motto" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Visi, Misi & Motto</a>
            <a href="/program-unggulan" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Program Unggulan</a>
            <a href="/fasilitas" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Fasilitas Sekolah</a>
            <a href="/pencapaian" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Pencapaian & Prestasi</a>
            <a href="/testimoni-orang-tua-siswa" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Testimoni Orang Tua</a>
        </div>

        <div class="space-y-1 pl-3 border-l-2 border-slate-200">
            <span class="block px-3 py-1 text-[11px] text-slate-400 uppercase tracking-wider font-extrabold">Sekolah</span>
            <a href="/sekolah#tk" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Taman Kanak-Kanak (TK)</a>
            <a href="/sekolah#sd" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Sekolah Dasar (SD)</a>
            <a href="/sekolah#smp" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Sekolah Menengah Pertama (SMP)</a>
            <a href="/sekolah#sma" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Sekolah Menengah Atas (SMA)</a>
        </div>

        <div class="space-y-1 pl-3 border-l-2 border-slate-200">
            <span class="block px-3 py-1 text-[11px] text-slate-400 uppercase tracking-wider font-extrabold">Bergabung</span>
            <a href="/pendaftaran-siswa" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Pendaftaran Siswa (PPDB)</a>
            <a href="/rekrutmen" class="block px-3 py-1.5 rounded-lg hover:bg-slate-100">Rekrutmen & Karir</a>
        </div>

        <a href="/galeri" class="block px-3 py-2 rounded-lg hover:bg-slate-100 {{ request()->is('galeri*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : '' }}">Galeri</a>
        <a href="/berita" class="block px-3 py-2 rounded-lg hover:bg-slate-100 {{ request()->is('berita*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : '' }}">Berita</a>
        <a href="/hubungi-kami" class="block px-3 py-2 rounded-lg hover:bg-slate-100 {{ request()->is('hubungi-kami*') ? 'text-[#1b2a6b] bg-[#1b2a6b]/10 font-extrabold' : '' }}">Hubungi Kami</a>

        <div class="pt-2">
            <a href="/pendaftaran-siswa" class="block w-full py-2.5 bg-amber-400 text-[#1b2a6b] font-black text-center rounded-xl shadow-xs">
                PPDB ONLINE
            </a>
        </div>
    </div>
</header>
