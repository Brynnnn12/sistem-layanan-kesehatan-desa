<x-layouts.home.main>
    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-r from-blue-600 to-teal-600 text-white rounded-xl p-8 mb-12 shadow-lg">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Pelayanan Kesehatan Desa</h1>
            <p class="text-xl mb-6">Memberikan layanan kesehatan terbaik untuk masyarakat desa dengan pelayanan yang
                ramah dan profesional.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/jadwal-kegiatan"
                    class="px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition duration-300 shadow-md hover:shadow-lg scroll-smooth">
                    Lihat Jadwal <i class="fas fa-calendar-alt ml-2"></i>
                </a>
                <a href="#contact"
                    class="px-6 py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-blue-600 transition duration-300 shadow-md hover:shadow-lg scroll-smooth">
                    Hubungi Kami <i class="fas fa-phone-alt ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="mb-16">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">Layanan Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <div class="text-blue-500 mb-4 text-center">
                        <i class="fas fa-user-md text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 text-center">Konsultasi Dokter
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">Layanan konsultasi dengan dokter umum dan
                        spesialis sesuai jadwal yang telah ditentukan.</p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <div class="text-blue-500 mb-4 text-center">
                        <i class="fas fa-syringe text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 text-center">Imunisasi</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">Program imunisasi rutin untuk bayi,
                        anak-anak, dan ibu hamil sesuai jadwal Kemenkes.</p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                    <div class="text-blue-500 mb-4 text-center">
                        <i class="fas fa-pills text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-3 text-center">Pengobatan</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-center">Pelayanan pengobatan dan penyediaan obat
                        dasar untuk masyarakat dengan resep dokter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="mb-16 bg-gray-50 dark:bg-gray-700 py-12 rounded-xl">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="/images/klinik-desa.jpg" alt="Klinik Desa"
                        class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-4">Tentang Kami</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Puskesmas Pembantu Desa kami berkomitmen untuk memberikan pelayanan kesehatan yang terjangkau
                        dan berkualitas bagi seluruh masyarakat desa. Didirikan sejak tahun 2010, kami telah melayani
                        dengan dedikasi tinggi.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Tim kami terdiri dari dokter umum, bidan, dan perawat terlatih yang siap memberikan pelayanan
                        terbaik dengan peralatan medis yang memadai.
                    </p>
                    <a href="/about"
                        class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 inline-flex items-center">
                        Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="mb-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Jadwal Pelayanan</h2>
                <a href="#schedule"
                    class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium mt-4 md:mt-0 inline-flex items-center scroll-smooth">
                    Lihat Jadwal Lengkap <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div
                    class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200 dark:divide-gray-700">
                    <!-- Weekday Schedule -->
                    <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <i class="fas fa-calendar-day text-blue-500 mr-3"></i> Senin - Jumat
                        </h3>
                        <div class="space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="far fa-clock mr-3 text-blue-500"></i> 08:00 - 14:00 WIB
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-user-md mr-3 text-blue-500"></i> Dr. Andi Pratama
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-procedures mr-3 text-blue-500"></i> Layanan Umum & Imunisasi
                            </p>
                        </div>
                    </div>

                    <!-- Saturday Schedule -->
                    <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <i class="fas fa-calendar-alt text-blue-500 mr-3"></i> Sabtu
                        </h3>
                        <div class="space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="far fa-clock mr-3 text-blue-500"></i> 08:00 - 12:00 WIB
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-user-md mr-3 text-blue-500"></i> Dr. Siti Rahayu
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-baby mr-3 text-blue-500"></i> Khusus Ibu & Anak
                            </p>
                        </div>
                    </div>

                    <!-- Sunday Schedule -->
                    <div class="p-6 hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 flex items-center">
                            <i class="fas fa-calendar-check text-blue-500 mr-3"></i> Minggu
                        </h3>
                        <div class="space-y-3">
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="far fa-clock mr-3 text-blue-500"></i> 09:00 - 12:00 WIB
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-user-nurse mr-3 text-blue-500"></i> Bidan Ratna
                            </p>
                            <p class="text-gray-600 dark:text-gray-300 flex items-center">
                                <i class="fas fa-heartbeat mr-3 text-blue-500"></i> Pemeriksaan Rutin
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Emergency Info -->
                <div class="bg-blue-50 dark:bg-blue-900/30 p-4 border-t border-blue-200 dark:border-blue-800">
                    <div class="flex items-center">
                        <div class="bg-red-100 dark:bg-red-900/30 p-3 rounded-full mr-4">
                            <i class="fas fa-exclamation-triangle text-red-500 dark:text-red-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 dark:text-white">Pelayanan Gawat Darurat</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">Untuk keadaan darurat, hubungi 24 jam:
                                <span class="font-bold">0812-3456-7890</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact"
        class="bg-gradient-to-r from-blue-500 to-teal-500 text-white rounded-xl p-8 mb-12 shadow-lg">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Butuh Informasi Lebih Lanjut?</h2>
            <p class="text-xl mb-6">Tim kami siap membantu Anda dengan segala pertanyaan mengenai layanan kesehatan
                kami.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#contact"
                    class="px-6 py-3 bg-white text-blue-600 font-medium rounded-lg hover:bg-gray-100 transition duration-300 shadow-md hover:shadow-lg scroll-smooth">
                    Hubungi Kami <i class="fas fa-envelope ml-2"></i>
                </a>
                <a href="/faq"
                    class="px-6 py-3 border-2 border-white text-white font-medium rounded-lg hover:bg-white hover:text-blue-600 transition duration-300 shadow-md hover:shadow-lg">
                    FAQ <i class="fas fa-question-circle ml-2"></i>
                </a>
            </div>
        </div>
    </section>
</x-layouts.home.main>
