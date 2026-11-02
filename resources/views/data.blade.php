<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Viewer - {{ ucfirst($tableName) }}</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6 font-sans">
    <div class="max-w-7xl mx-auto space-y-6">

        {{-- Header & Navigasi Tabel --}}
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Database Viewer</h1>
                <p class="text-sm text-gray-500">Menampilkan data tabel: <span class="font-semibold text-indigo-600">{{ $tableName }}</span></p>
            </div>

            {{-- Tombol Pilihan Tabel --}}
            <div class="flex flex-wrap gap-2">
                @foreach($tables as $table)
                    <a href="{{ route('data.index', $table) }}"
                       class="px-3 py-1.5 rounded-lg text-xs font-medium transition {{ $tableName === $table ? 'bg-indigo-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                        {{ $table }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Tabel Data Dinamis --}}
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-600 border-collapse">
                    <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-3 border-r border-gray-200">#</th>
                            @foreach($columns as $column)
                                <th class="px-4 py-3 whitespace-nowrap border-r border-gray-200">{{ $column }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($rows as $index => $row)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-4 py-3 font-medium text-gray-900 border-r border-gray-100">{{ $index + 1 }}</td>
                                @foreach($columns as $column)
                                    <td class="px-4 py-3 whitespace-nowrap border-r border-gray-100">
                                        {{ $row->$column ?? '-' }}
                                    </td>
                                @endforeach
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ count($columns) + 1 }}" class="px-4 py-8 text-center text-gray-400">
                                    Tabel ini belum memiliki data.
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
