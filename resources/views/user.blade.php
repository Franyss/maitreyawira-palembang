<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna - Sekolahi</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6 font-sans">

    <div class="max-w-7xl mx-auto">
        {{-- Header Section --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Manajemen Pengguna</h1>
                <p class="text-sm text-gray-500">Kelola daftar akun dan hak akses pengguna sistem.</p>
            </div>
            <a href="#" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm font-medium transition shadow-sm">
                + Tambah Pengguna
            </a>
        </div>

        {{-- Tabel Data User --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600">
                    <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500 border-b border-gray-200">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Pengguna</th>
                            <th class="px-6 py-4">Kontak</th>
                            <th class="px-6 py-4">Hak Akses</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Terakhir Login</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($users as $index => $user)
                            <tr class="hover:bg-gray-50/80 transition-colors">
                                {{-- Nomor Urut --}}
                                <td class="px-6 py-4 font-medium text-gray-900">
                                    {{ $index + 1 }}
                                </td>

                                {{-- Avatar & Nama --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        @if($user->avatar)
                                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover border border-gray-200">
                                        @else
                                            <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-700 font-bold flex items-center justify-center text-sm border border-indigo-200">
                                                {{ strtoupper(substr($user->first_name, 0, 1)) }}
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-semibold text-gray-900">
                                                {{ $user->first_name }} {{ $user->last_name }}
                                            </div>
                                            <div class="text-xs text-gray-400">ID: #{{ $user->user_id }}</div>
                                        </div>
                                    </div>
                                </td>

                                {{-- Email & Telepon --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900 font-medium">{{ $user->email }}</div>
                                    <div class="text-xs text-gray-500">{{ $user->phone ?? '-' }}</div>
                                </td>

                                {{-- Relasi Hak Akses --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200">
                                        {{ $user->access->access_name ?? 'Tanpa Akses' }}
                                    </span>
                                </td>

                                {{-- Status --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($user->status == '1')
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Nonaktif
                                        </span>
                                    @endif
                                </td>

                                {{-- Terakhir Login --}}
                                <td class="px-6 py-4 whitespace-nowrap text-xs text-gray-500">
                                    @if($user->datetime_last_login)
                                        {{ \Carbon\Carbon::parse($user->datetime_last_login)->translatedFormat('d M Y, H:i') }}
                                    @else
                                        <span class="text-gray-400 italic">Belum pernah</span>
                                    @endif
                                </td>

                                {{-- Tombol Aksi --}}
                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="#" class="px-2.5 py-1.5 text-xs font-medium text-amber-700 bg-amber-50 hover:bg-amber-100 border border-amber-200 rounded-md transition">
                                            Edit
                                        </a>
                                        <button type="button" class="px-2.5 py-1.5 text-xs font-medium text-rose-700 bg-rose-50 hover:bg-rose-100 border border-rose-200 rounded-md transition">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-12 text-center text-gray-400">
                                    Data pengguna tidak ditemukan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
