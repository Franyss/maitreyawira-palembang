{{-- File: resources/views/partials/hero-banner.blade.php --}}
@props([
    'slug' => '',
    'badge' => '',
    'title' => '',
    'highlight' => '',
    'breadcrumbs' => [],
    'bgImage' => ''
])

@php
    $slug = $slug ?? '';
    $badge = $badge ?? '';
    $title = $title ?? '';
    $highlight = $highlight ?? '';
    $breadcrumbs = is_array($breadcrumbs) ? $breadcrumbs : [];
    $bgImage = $bgImage ?? '';

    // 1. Tentukan String Path Gambar dari Props (bgImage) atau AppMenu
    if (!empty($bgImage) && $bgImage !== '-') {
        $rawBg = trim($bgImage);
    } else {
        $menu = \App\Models\AppMenu::where('slug', $slug)->first();
        $rawBg = trim($menu->background_header ?? '');
    }

    $fileName = basename($rawBg);

    // 2. Penelusuran Lokasi Berkas Gambar di Server (Support Multi-folder Uploads)
    if (empty($rawBg) || $rawBg === '-') {
        $headerBgUrl = asset('images/slider-ppdb.jpg');
    } elseif (str_starts_with($rawBg, 'http://') || str_starts_with($rawBg, 'https://')) {
        $headerBgUrl = $rawBg;
    } elseif (file_exists(public_path($rawBg))) {
        $headerBgUrl = asset($rawBg);
    } elseif (file_exists(public_path('storage/' . $rawBg))) {
        $headerBgUrl = asset('storage/' . $rawBg);
    } elseif (!empty($fileName) && file_exists(public_path('uploads/school/' . $fileName))) {
        $headerBgUrl = asset('uploads/school/' . $fileName);
    } elseif (!empty($fileName) && file_exists(public_path('uploads/app_menu/' . $fileName))) {
        $headerBgUrl = asset('uploads/app_menu/' . $fileName);
    } elseif (!empty($fileName) && file_exists(public_path('uploads/' . $fileName))) {
        $headerBgUrl = asset('uploads/' . $fileName);
    } elseif (!empty($fileName) && file_exists(public_path('images/' . $fileName))) {
        $headerBgUrl = asset('images/' . $fileName);
    } else {
        $headerBgUrl = file_exists(public_path('storage/uploads/school/' . $fileName))
            ? asset('storage/uploads/school/' . $fileName)
            : asset('storage/' . $rawBg);
    }

    $displayTitle = !empty($title) ? $title : ($menu->title ?? '');
@endphp

<section class="relative bg-slate-950 text-white overflow-hidden h-[300px] sm:h-[400px] lg:h-[480px] flex items-center">
    <!-- GAMBAR BACKGROUND HEADER -->
    <div class="absolute inset-0 z-0">
        <img src="{{ $headerBgUrl }}"
             alt="Header Background"
             class="w-full h-full object-cover object-center filter brightness-90"
             onerror="this.onerror=null; this.src='{{ asset('images/slider-ppdb.jpg') }}';">

        <!-- OVERLAY SLATE GELAP PEKAT UNTUK MENJAGA KONTRAS TEKS -->
        <div class="absolute inset-0 bg-slate-950/85 backdrop-blur-[2px] z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/90 to-transparent z-10"></div>
    </div>

    <!-- KONTEN TEKS HERO & BREADCRUMB -->
    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20" data-aos="fade-down" data-aos-duration="1000">
        @if(!empty($breadcrumbs) && count($breadcrumbs) > 0)
            <nav class="flex text-xs font-semibold text-slate-300 mb-4 gap-2 items-center flex-wrap drop-shadow-md">
                <a href="/" class="hover:text-amber-400 transition">Beranda</a>
                @foreach($breadcrumbs as $crumb)
                    <span class="text-slate-500">/</span>
                    @if(!empty($crumb['url']) && $crumb['url'] !== '#')
                        <a href="{{ $crumb['url'] }}" class="hover:text-amber-400 transition">{{ $crumb['label'] }}</a>
                    @else
                        <span class="text-amber-400 font-bold">{{ $crumb['label'] }}</span>
                    @endif
                @endforeach
            </nav>
        @endif

        <div class="max-w-3xl space-y-4">
            @if(!empty($badge))
                <span class="inline-block px-3 py-1 rounded-full text-xs font-extrabold bg-amber-500/20 text-amber-300 border border-amber-400/30 uppercase tracking-widest shadow-sm backdrop-blur-md">
                    {{ $badge }}
                </span>
            @endif

            <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight drop-shadow-[0_4px_10px_rgba(0,0,0,0.9)]">
                {{ $displayTitle }}
                @if(!empty($highlight))
                    <br>
                    <span class="text-amber-400 font-black drop-shadow-[0_4px_10px_rgba(0,0,0,0.9)]">
                        {{ $highlight }}
                    </span>
                @endif
            </h1>
        </div>
    </div>
</section>
