<header class="sticky top-0 z-50 bg-white dark:bg-gray-800 shadow-md">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Logo/Brand -->
            <div class="flex items-center">
                <div class="bg-blue-500 text-white p-2 rounded-lg mr-3">
                    <i class="fas fa-hospital text-xl"></i>
                </div>
                <a href="#home" class="text-xl font-bold text-gray-800 dark:text-white">
                    Kesehatan Desa
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#home"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium scroll-smooth">
                    Home
                </a>
                <a href="#services"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium scroll-smooth">
                    Layanan
                </a>
                <a href="#about"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium scroll-smooth">
                    Tentang Kami
                </a>
                <a href="#schedule"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium scroll-smooth">
                    Jadwal
                </a>
                <a href="#contact"
                    class="nav-link text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium scroll-smooth">
                    Kontak
                </a>
            </nav>

            <!-- Auth Links -->
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="hidden md:inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                            class="w-full text-center px-4 py-2 text-red-500 hover:text-red-600 dark:text-red-400 dark:hover:text-red-300 transition duration-300">
                            Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="hidden md:inline-block px-4 py-2 text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 transition duration-300">
                        Masuk
                    </a>
                @endauth

                <!-- Mobile menu button -->
                <button class="md:hidden text-gray-700 dark:text-gray-300 focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden hidden bg-white dark:bg-gray-800 shadow-lg" id="mobile-menu">
        <div class="container mx-auto px-4 py-2 flex flex-col space-y-3">
            <a href="#home"
                class="py-2 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium border-b border-gray-200 dark:border-gray-700 scroll-smooth">
                Home
            </a>
            <a href="#services"
                class="py-2 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium border-b border-gray-200 dark:border-gray-700 scroll-smooth">
                Layanan
            </a>
            <a href="#about"
                class="py-2 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium border-b border-gray-200 dark:border-gray-700 scroll-smooth">
                Tentang Kami
            </a>
            <a href="#schedule"
                class="py-2 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium border-b border-gray-200 dark:border-gray-700 scroll-smooth">
                Jadwal
            </a>
            <a href="#contact"
                class="py-2 text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 font-medium border-b border-gray-200 dark:border-gray-700 scroll-smooth">
                Kontak
            </a>
            <div class="py-2 flex flex-col space-y-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="w-full text-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                            class="w-full text-center px-4 py-2 text-red-500 hover:text-red-600 dark:text-red-400 dark:hover:text-red-300 transition duration-300">
                            Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="w-full text-center px-4 py-2 text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300 transition duration-300">
                        Masuk
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
