<div x-data="{ searchOpen: false }">
    <div class="py-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Riwayat Pemeriksaan Pasien</h2>
        <div class="mb-4 flex justify-end">
            <div class="relative">
                <input type="text" wire:model.live.debounce.300ms="search" x-on:focus="searchOpen = true"
                    x-on:keydown.escape="searchOpen = false; $event.target.blur()"
                    placeholder="Cari pasien, keluhan, atau catatan..."
                    class="px-4 py-2 border rounded-md w-64 focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-900 dark:text-white" />
                <button x-show="searchOpen && $wire.search.length > 0"
                    x-on:click="$wire.set('search', ''); searchOpen = false"
                    class="absolute right-2 top-2 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Tabel dan konten lainnya tetap sama -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Pasien</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Tanggal</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Berat Badan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Tinggi Badan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Keluhan</th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Catatan</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($riwayat as $item)
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->pasien->nama ?? '-' }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($item->tanggal_pemeriksaan)->translatedFormat('d F Y') }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->berat_badan ?? '-' }} kg</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->tinggi_badan ?? '-' }} cm</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->keluhan ?? '-' }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $item->catatan ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-2 text-center text-gray-500 dark:text-gray-400">Tidak ada
                                data riwayat pemeriksaan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($riwayat->hasPages())
            <div class="mt-4">
                {{ $riwayat->links() }}
            </div>
        @endif

        <div class="mt-6">
            <a href="{{ route('home') }}"
                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">
                Kembali ke Home
            </a>
        </div>
    </div>
</div>
