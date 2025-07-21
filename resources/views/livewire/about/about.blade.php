<div x-data="{ activeTab: 'visi' }" class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- Tab Navigation -->
    <div class="flex border-b border-gray-200 dark:border-gray-700 mb-8">
        <button @click="activeTab = 'visi'"
            :class="{ 'border-b-2 border-blue-500 text-blue-600 dark:text-blue-400': activeTab === 'visi', 'text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'visi' }"
            class="px-4 py-2 font-medium text-sm focus:outline-none transition">
            Visi
        </button>
        <button @click="activeTab = 'misi'"
            :class="{ 'border-b-2 border-blue-500 text-blue-600 dark:text-blue-400': activeTab === 'misi', 'text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300': activeTab !== 'misi' }"
            class="px-4 py-2 font-medium text-sm focus:outline-none transition">
            Misi
        </button>
    </div>

    <!-- Visi Content -->
    <div x-show="activeTab === 'visi'" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                Visi Kami
            </h2>
            <ol class="space-y-4">
                @foreach ($visi as $i => $item)
                    <li class="flex items-start">
                        <span
                            class="flex items-center justify-center bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full h-8 w-8 mr-4 flex-shrink-0">
                            {{ $i + 1 }}
                        </span>
                        <p class="text-gray-700 dark:text-gray-300">{{ $item }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

    <!-- Misi Content -->
    <div x-show="activeTab === 'misi'" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Misi Kami
            </h2>
            <ol class="space-y-4">
                @foreach ($misi as $i => $item)
                    <li class="flex items-start">
                        <span
                            class="flex items-center justify-center bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full h-8 w-8 mr-4 flex-shrink-0">
                            {{ $i + 1 }}
                        </span>
                        <p class="text-gray-700 dark:text-gray-300">{{ $item }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
