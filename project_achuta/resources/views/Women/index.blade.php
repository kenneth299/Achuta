@extends("Container.index")

@section('contain')

  <main class="mt-20 pb-16">
        <!-- En-tête -->
        <section class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Ton Style. Ton Pouvoir.</h1>
                    <p class="text-gray-600 mt-2">Explore les tendances qui te font briller</p>
                </div>
                <div class="relative w-full md:w-auto">
                    <button id="sortButton"
                        class="flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-lg w-full md:w-auto justify-between">
                        <span id="selectedSort">Trier par : Pertinence</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    <!-- Menu déroulant à implémenter -->

                    <ul id="sortMenu"
                        class="absolute right-0 mt-2 bg-white border rounded-md shadow-md w-48 hidden z-10">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Pertinence</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Nouveautés</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Prix croissant</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Prix décroissant</li>
                    </ul>
                </div>
            </div>

            <!-- Bannière thématique -->
            <section class="container mx-auto px-4 mb-12">
                <div class="splide" aria-label="Styles masculins">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="relative rounded-xl overflow-hidden h-80">
                                    <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                                        class="w-full h-full object-cover" alt="Style urbain homme" loading="lazy">
                                    <div
                                        class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6 rounded-b-xl">
                                        <h3 class="text-white font-bold text-xl">Style Urbain</h3>
                                        <p class="text-white/80 mt-1">Découvrez la collection</p>
                                    </div>
                                </div>
                            </li>
                            Ajouter d'autres slides
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Filtres rapides -->
            <div class="flex overflow-x-auto gap-2 py-4 scrollbar-hide">
                <button class="px-4 py-2 bg-[#008751] text-white rounded-full whitespace-nowrap">Tous</button>
                <button class="px-4 py-2 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200 transition">Vêtements</button>
                <button class="px-4 py-2 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200 transition">Chaussures</button>
                <button class="px-4 py-2 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200 transition">Accessoires</button>
                <button class="px-4 py-2 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200 transition">Sport</button>
                <button class="px-4 py-2 bg-gray-100 rounded-full whitespace-nowrap hover:bg-gray-200 transition">Casquette</button>
            </div>
        </section>



        <!-- Résultats -->
        <section class="container mx-auto px-4 mt-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Articles disponibles</h2>
                <span class="text-gray-600 text-sm">128 résultats</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span>
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 2-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Arcticle 3-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 4-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 5-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 6-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 7-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 8-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 9-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button class="absolute top-3 right-3 bg-white/80 rounded-full p-2 text-black backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i> 22
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>

                <!--Article 10-->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">

                    <div class="relative">
                        <img class="w-full h-48 object-cover"
                            src="./assets/articles/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                        <button
                            class="absolute top-3 right-3 bg-white/80 rounded-full p-2 backdrop-blur-sm hover:scale-110 transition-all">
                            <i class="far fa-heart text-gray-600 hover:text-red-500"></i>
                        </button>
                        <!-- <span
                            class="absolute top-3 left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-xs px-2 py-1 rounded-full font-bold shadow-md flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                    clip-rule="evenodd" />
                            </svg>
                            PROMO FLASH
                        </span> -->
                    </div>

                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <h3 class="font-bold text-gray-900">Sac à main cuir véritable</h3>
                            <div class="flex flex-col items-end">
                                <div class="flex items-end">
                                    <span class="font-bold text-[#008751] text-lg">42€</span>
                                </div>
                                <span
                                    class="mt-1 bg-green-100 text-green-800 text-xs px-1.5 py-0.5 rounded-full">-30%</span>
                            </div>
                        </div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mb-2">Neuf
                            avec étiquette</span>

                        <div class="flex flex-wrap gap-1 mt-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">S</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">M</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">L</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded">XL</span>
                        </div>
                        <div class="flex items-center text-gray-500 text-xs mt-2">
                            <i class="fas fa-eye mr-1"></i>
                            <span>127 vues aujourd'hui</span>
                        </div>

                        <div class="flex justify-between items-center mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-gray-400 text-sm mr-1.5"></i>
                                <span class="text-gray-600 text-sm">Paris 15e</span>
                            </div>
                            <div class="flex items-center text-green-600 text-xs">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-1.5 animate-pulse"></span>
                                En ligne
                            </div>
                        </div>
                        <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                            class="w-full mt-3 py-2 rounded-md text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                            <i class="fab fa-whatsapp mr-2"></i> Commander
                        </a>
                    </div>
                </div>
                <!-- Ajouter d'autres articles avec la même structure -->

            </div>


            <!-- Pagination -->
            <div class="flex justify-center mt-12">
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-[#008751] text-white rounded-full">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Section recommandations -->
     
    </main>

@endsection