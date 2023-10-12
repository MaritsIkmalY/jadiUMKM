<x-main-layout>

    <section class="bg-white dark:bg-gray-900" style="background-image: url('assets/images/bgumkm.jpg');">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">

                <h1
                    class="max-w-5xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Menggali Potensi UMKM<br>Melalui Teknologi.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Partner yang tepat untuk menjadikan <span class="font-semibold text-gray-900">UMKM</span> mu <span
                        class="font-semibold text-gray-900">Go Digital</span> untuk menjangkau pasar yang lebih luas.
                    Tingkatkan
                    pendapatanmu dengan <span class="font-semibold text-gray-900">One Stop Solution</span> dari
                    JadiUMKM.id!</p>

                <x-jadiumkm-btn href="{{ route('login') }}">Mulai
                    Sekarang</x-jadiumkm-btn>
            </div>
        </div>
    </section>


    <section class="bg-gray-50 dark:bg-gray-800" style="background-color:#f9fafb;">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900">Mulai langkahmu
                    sekarang</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Coba rekomendasi AI kami untuk
                    analisa usahamu!</p>
            </div>

            @livewire('airecommender')
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Pilih rencanamu</h2>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div
                    class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800">
                    <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Pilihan terbaik untuk uji coba dan
                        eksplorasi usaha</p>
                    <div class="flex items-baseline justify-center my-8">
                        <span class="mr-2 text-5xl font-extrabold">Gratis</span>
                        <span class="text-gray-500 dark:text-gray-400"></span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <span>Analisis rekomendasi AI terbatas</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <span>3 Materi pertama edukasi bisnis</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <span>Freelance marketplace</span></span>
                        </li>
                    </ul>
                </div>
                <!-- Pricing Card -->
                <div
                    class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800">
                    <h3 class="mb-4 text-2xl font-semibold">Mini</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Cocok bagi yang sedang memulai
                        bisnis usahanya</p>
                    <div class="flex items-baseline justify-center my-8">
                        <span class="mr-2 text-5xl font-extrabold">Rp99.000</span>
                        <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/bulan</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Analisis rekomendasi AI <span class="font-semibold">prioritas utama</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Semua materi</span> edukasi bisnis</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Forum sharing UMKM</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Freelance marketplace</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Katalog UMKM</span></span>
                        </li>
                    </ul>
                    <x-jadiumkm-btn class="w-full ">Mulai sekarang</x-jadiumkm-btn>
                </div>
                <!-- Pricing Card -->
                <div
                    class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800">
                    <h3 class="mb-4 text-2xl font-semibold">Grow</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Solusi terbaik untuk pengembangan
                        tingkat lanjut</p>
                    <div class="flex items-baseline justify-center mt-4">
                        <span class="mr-2 text-5xl font-extrabold">Rp599.000</span>
                        <span class="text-gray-500 dark:text-gray-400">/tahun</span>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">R̶p̶9̶9̶.̶0̶0̶0̶ <span
                            class="font-semibold">Rp49.900/bulan</span></p>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Analisis rekomendasi AI <span class="font-semibold">prioritas utama</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Semua materi</span> edukasi bisnis</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Forum sharing UMKM</span></span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Freelance marketplace</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span><span class="font-semibold">Katalog UMKM</span></span>
                        </li>
                    </ul>
                    <x-jadiumkm-btn class="w-full ">Mulai sekarang</x-jadiumkm-btn>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800" style="background-color:#f9fafb;">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="assets/images/about.png"
                    alt="about">
                <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900">Tentang kami</h2>
                    <p class="mb-8 font-light lg:text-xl">JadiUMKM adalah platform pembelajaran terkait bisnis dan
                        digitalisasi untuk mengembangkan bisnis Anda. Kami memberi fitur dan pengetahuan yang Anda
                        butuhkan
                        untuk berkembang — baik untuk peluncuran produk baru atau upaya rebranding, kami ingin membantu
                        Anda
                        mengembangkan bisnis melalui berbagi pengetahuan, rekomendasi, dan lainnya.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
            <h2
                class="mt-10 mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl">
                Frequently asked questions</h2>
            <div class="max-w-screen-md mx-auto">
                <x-jadiumkm-faq />
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-800" style="background-color:#f9fafb;">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                        fill="currentColor" />
                </svg>
                <blockquote>
                    <p class="text-xl font-medium text-gray-900 md:text-2xl">"If you really look closely, most
                        overnight successes took a long time."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <div class="pr-3 font-medium text-gray-900">Steve Jobs</div>
                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Former CEO at Apple</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </section>
</x-main-layout>
