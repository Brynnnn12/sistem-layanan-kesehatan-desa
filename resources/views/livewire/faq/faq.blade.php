<div x-data="{ activeIndex: null }" class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800 dark:text-white">Frequently Asked Questions</h2>

    <div class="space-y-4">
        @foreach ($faqs as $index => $faq)
            <div x-data="{
                id: {{ $index }},
                get expanded() { return this.activeIndex === this.id },
                toggle() { this.activeIndex = this.expanded ? null : this.id }
            }"
                class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden border border-gray-200 dark:border-gray-700 transition-all duration-200"
                :class="{ 'ring-2 ring-blue-500': expanded }">
                <button @click="toggle()" class="w-full px-6 py-4 text-left focus:outline-none" :aria-expanded="expanded">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200">{{ $faq['question'] }}</h3>
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 transform transition-transform duration-200"
                            :class="{ 'rotate-180': expanded }" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </button>

                <div x-show="expanded" x-collapse class="px-6 pb-4 pt-0 text-gray-600 dark:text-gray-300">
                    <p>{{ $faq['answer'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
