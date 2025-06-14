@extends('Container.index')

@section('contain')

    <section class="w-full h-auto mt-10 flex items-center justify-center bg-white">
        <div class="w-full md:w-11/12 h-auto rounded-xl">
            <div class="splide" aria-label="Carousel avec texte et images">
                <div class="splide__track rounded-xl">
                    <ul class="splide__list lg:h-96">
                        <!-- Slide 1 -->
                        <li class="splide__slide">
                            <div class="w-full h-ful grid grid-cols-1 md:grid-cols-2">
                                <div class="w-full h-auto p-10 bg-gradient-to-r from-black to-gray-900">
                                    <span class="text-[#008751] p-2 bg-white w-52 rounded-xl font-semibold text-sm flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 animate-pulse"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        MARKETPLACE LOCALE
                                    </span>
                                    <h1 class="text-2xl md:text-3xl font-bold text-white mt-10 leading-tight">
                                        Vendez et achetez <br>
                                        <span class="text-[#008751]">en toute confiance</span>
                                    </h1>
                                    <p class="text-sm text-gray-300 mt-5 max-w-lg">
                                        Achuta met en relation les passionnés de votre région. Pas de commissions
                                        cachées,
                                        juste des transactions locales sécurisées.
                                    </p>
                                    <button
                                        class="mt-8 bg-[#008751] text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                                        Découvrir comment
                                    </button>
                                </div>
                                <div class="w-full h-full flex items-center justify-center">
                                    <!-- Image suggérée : transaction locale -->
                                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Transaction locale" class="object-cover w-full h-full">
                                </div>
                            </div>
                        </li>

                        <!-- Slide 2 -->
                        <li class="splide__slide">
                            <div class="w-full h-full grid grid-cols-1 md:grid-cols-2">
                                <div class="w-full h-auto p-10 bg-gradient-to-r from-black to-gray-900">
                                    <span
                                        class="text-[#008751] p-2 bg-white w-48 rounded-xl font-semibold text-sm flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 animate-pulse"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        ZÉRO COMMISSION
                                    </span>
                                    <h1 class="text-2xl md:text-3xl font-bold text-white mt-10 leading-tight">
                                        Gardez 100% de votre<br>
                                        <span class="text-[#008751]">argent</span>
                                    </h1>
                                    <p class="text-sm text-gray-300 mt-5 max-w-lg">
                                        Contrairement aux autres plateformes, Achuta ne prend aucune commission sur vos
                                        ventes.
                                        Ce que vous ce que vous gagnez.
                                    </p>
                                    <button
                                        class="mt-8 bg-[#008751] text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                                        Commencer à vendre
                                    </button>
                                </div>
                                <div class="w-full h-full flex items-center justify-center">
                                    <!-- Image suggérée : transaction locale -->
                                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80"
                                        alt="Transaction locale" class="object-cover w-full h-full">
                                </div>
                            </div>
                        </li>

                        <!-- Slide 3 -->
                        <li class="splide__slide">
                            <div class="w-full h-full grid grid-cols-1 md:grid-cols-2">
                                <div class="w-full h-auto p-10 bg-gradient-to-r from-black to-gray-900">
                                    <span
                                        class="text-[#008751] p-2 bg-white w-48 rounded-xl font-semibold text-sm flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 animate-pulse"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                        RENCONTRE LOCALE
                                    </span>
                                    <h1 class="text-2xl md:text-3xl font-bold text-white mt-10 leading-tight">
                                        Discutez directement<br>
                                        <span class="text-[#008751]">comme en vrai</span>
                                    </h1>
                                    <p class="text-sm text-gray-300 mt-5 max-w-lg">
                                        Notre système intégré à WhatsApp vous permet d'échanger l avec les
                                        acheteurs/vendeurs
                                        et de convenir une rencontre.
                                    </p>
                                    <button
                                        class="mt-8 bg-[#008751] text-white font-bold py-2 px-4 rounded-xl transition duration-300">
                                        Voir comment ça marche
                                    </button>
                                </div>
                                <div class="w-full h-full flex items-center justify-center">
                                    <!-- Image suggérée : transaction locale -->
                                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                        alt="Transaction locale" class="object-cover w-full h-full">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <!-- Catégories Modernisées -->
 

    <section class="w-full mt-14">
        <div class="w-11/12 mx-auto">
            <!-- En-tête avec titre et navigation -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold text-gray-900">Tendances du moment</h2>
                    <p class="text-gray-600 mt-2">Découvrez ce que la communauté Achûta préfère en ce moment</p>
                </div>
                <div class="flex space-x-3">
                    <button id="trend-prev"
                        class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="trend-next"
                        class="px-4 py-2 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Carrousel des tendances -->
            <div class="trend-carousel">
                <div id="caroucel" class="flex space-x-6 overflow-x-hidden scroll-smooth snap-x snap-mandatory">
                    <!-- Item 1 -->
                    <div
                        class="min-w-[300px] bg-white rounded-xl  overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Montre tendance" class="w-full h-48 object-cover">
                            <span
                                class="absolute top-2 left-2 bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded">Nouveau</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg">Montres vintage</h3>
                            <p class="text-gray-500 text-sm mt-1">+45% de recherches cette semaine</p>
                            <a href="#" class="inline-block mt-4 text-[#008751] font-medium hover:underline">
                                Voir les articles
                            </a>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="min-w-[300px] bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Appareil photo" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg">Appareils photo</h3>
                            <p class="text-gray-500 text-sm mt-1">+32% de ventes ce mois</p>
                            <a href="#" class="inline-block mt-4 text-[#008751] font-medium hover:underline">
                                Explorer
                            </a>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="min-w-[300px] bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Vélo urbain" class="w-full h-48 object-cover">
                            <span
                                class="absolute top-3 left-3 bg-[#008751] text-white text-xs px-2 py-1 rounded-full font-bold">
                                POPULAIRE
                            </span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg">Vélos urbains</h3>
                            <p class="text-gray-500 text-sm mt-1">+62% d'annonces nouvelles</p>
                            <a href="#" class="inline-block mt-4 text-[#008751] font-medium hover:underline">
                                Découvrir
                            </a>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div
                        class="min-w-[300px] bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                        <div class="relative">
                            <img src="./assets/image/freepik__a-smiling-black-young-woman-with-curly-hair-stands__80660.jpeg"
                                alt="Plantes d'intérieur" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg">Plantes d'intérieur</h3>
                            <p class="text-gray-500 text-sm mt-1">Nouvelle tendance écologique</p>
                            <a href="#" class="inline-block mt-4 text-[#008751] font-medium hover:underline">
                                Voir plus
                            </a>
                        </div>
                    </div>

                    <div
                        class="min-w-[300px] bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                        <div class="relative">
                            <img src="./assets/image/freepik__a-smiling-black-young-woman-with-curly-hair-stands__80662.jpeg"
                                alt="Plantes d'intérieur" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg">Plantes d'intérieur</h3>
                            <p class="text-gray-500 text-sm mt-1">Nouvelle tendance écologique</p>
                            <a href="#" class="inline-block mt-4 text-[#008751] font-medium hover:underline">
                                Voir plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bannière promo en bas -->
            <div class="mt-12 bg-gradient-to-r from-[#25D366] to-[#128C7E] rounded-xl p-6 md:p-8 text-white">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/3 mb-6 md:mb-0">
                        <h3 class="text-2xl font-bold mb-2">Vendez vos articles tendance</h3>
                        <p class="opacity-90">Profitez de la visibilité sur ces catégories populaires pour vendre plus
                            vite.</p>
                    </div>
                    <div class="md:w-1/3 text-center md:text-right">
                        <a href="#"
                            class="inline-block px-6 py-3 bg-white text-[#008751] font-medium rounded-lg hover:bg-gray-100 transition">
                            Commencer à vendre
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    <!--section des articles-->
    <section class="w-full h-auto mt-10 flex justify-center items-center">
        <div class="w-11/12 h-auto">
            <!-- Titre en dehors du carrousel -->
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold">Fil d'articles</h1>
            </div>
            <div class="w-full border border- mt-5 mb-8"></div>
    
    
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 sm:gap-6">
                    <!--Article 1-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">
                        <div class="p-4 flex items-center gap-3">
                            <img class="w-8 h-8 object-cover rounded-full"
                                src="./assets/articles/full-shot-smiley-girl-playing-videogame.jpg"
                                alt="Profil SELO Kenneth">
                            <div>
                                <a href="#" class="font-medium text-sm hover:text-[#008751]">SELO Kenneth</a>
                                <div class="flex items-center mt-1">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span class="text-gray-500 text-xs ml-1">(24)</span>
                                </div>
                            </div>
                        </div>
                        
                
                        <div class="relative flex-shrink-0">
                            <img class="w-full h-40 sm:h-48 object-cover cursor-pointer" src="/assets/imageProduits/retro-brown-man-leather-bag-notebook-bright-colorful-summer-grass-park.jpg" alt="Sac à main">
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                               <i class="fas fa-images mr-1"></i>
                                <span id="image-count">3</span>
                           </div>
                           
                           <button class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-white/80 rounded-full p-1.5 sm:p-2 backdrop-blur-sm hover:scale-110 transition-all">
                                <i class="far fa-heart text-gray-600 hover:text-[#E8112D] text-sm sm:text-base"></i>
                            </button>
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-[10px] text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded-full font-bold shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 sm:h-3 sm:w-3 mr-0.5 sm:mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z" clip-rule="evenodd" />
                                </svg>
                                PROMO
                            </span>
                        </div>
                        
                        
                        
                        <div class="p-3 sm:p-4 flex-grow flex flex-col">
                            <div class="flex justify-between items-start mb-1 sm:mb-2">
                                <h3 class="font-bold text-gray-900 text-xs md:text-base line-clamp-2">Sac à main cuir véritable</h3>
                                   <div class="flex flex-col items-end">
                                    <div class="flex items-end">
                                        <span class="font-bold text-[#008751] text-xs md:text-lg">42€</span>
                                    </div>
                                    <span v-if="product.originalPrice" class="mt-0.5 sm:mt-1 bg-green-100 text-green-800 text-[10px] sm:text-xs px-1 sm:px-1.5 py-0.5 rounded-full">-30%</span>
                                    <span v-if="product.discount" class="text-gray-400 text-xs line-through ml-1">00€</span>
                                </div>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-[10px] sm:text-xs px-1.5 sm:px-2 py-0.5 sm:py-1 rounded mb-1 sm:mb-2">Neuf avec étiquette</span>
                
                            <div class="flex flex-wrap gap-1 mt-1 sm:mt-2">
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">S</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">M</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">L</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">XL</span>
                            </div>
                            <div class="flex items-center text-gray-500 text-[10px] sm:text-xs mt-1 sm:mt-2">
                                <i class="fas fa-eye mr-0.5 sm:mr-1 text-[10px] sm:text-xs"></i>
                                <span>127 vues aujourd'hui</span>
                            </div>
                
                            <div class="flex justify-between items-center mt-2 sm:mt-3">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-[10px] sm:text-xs mr-1 sm:mr-1.5"></i>
                                    <span class="text-gray-600 text-[10px] sm:text-xs md:text-sm">Paris 15e</span>
                                </div>
                                <div class="flex items-center text-green-600 text-[10px] sm:text-xs">
                                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1 sm:mr-1.5 animate-pulse"></span>
                                    En ligne
                                </div>
                            </div>
                            <div class="w-full h-auto flex items-center justify-between mt-2 gap-3">
                                <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                                    class="w-auto p-2 rounded-md text-[10px] sm:text-xs text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                                    <i class="fab fa-whatsapp mr-1 sm:mr-2 text-xs sm:text-sm"></i> Commander
                                </a>
                                <button class="w-auto p-2 md:text-[10px] text-xs rounded-md text-gray-900 border-gray-900 border flex items-center justify-center hover:text-white bg-transparent hover:bg-gray-900 transition">
                                    <i class="far fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <!--Article 2-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">
                        <div class="p-4 flex items-center gap-3">
                            <img class="w-8 h-8 object-cover rounded-full"
                                src="./assets/articles/full-shot-smiley-girl-playing-videogame.jpg"
                                alt="Profil SELO Kenneth">
                            <div>
                                <a href="#" class="font-medium text-sm hover:text-[#008751]">SELO Kenneth</a>
                                <div class="flex items-center mt-1">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span class="text-gray-500 text-xs ml-1">(24)</span>
                                </div>
                            </div>
                        </div>
                
                        <div class="relative flex-shrink-0">
                            <img class="w-full h-40 sm:h-48 object-cover cursor-pointer" src="/assets/imageProduits/still-life-spring-wardrobe-switch.jpg" alt="Sac à main">
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                               <i class="fas fa-images mr-1"></i>
                                <span id="image-count">3</span>
                           </div>
                            <button class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-white/80 rounded-full p-1.5 sm:p-2 backdrop-blur-sm hover:scale-110 transition-all">
                                <i class="far fa-heart text-gray-600 hover:text-[#E8112D] text-sm sm:text-base"></i>
                            </button>
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-[10px] text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded-full font-bold shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 sm:h-3 sm:w-3 mr-0.5 sm:mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                PROMO
                            </span>
                        </div>
                
                        <div class="p-3 sm:p-4 flex-grow flex flex-col">
                            <div class="flex justify-between items-start mb-1 sm:mb-2">
                                <h3 class="font-bold text-gray-900 text-xs md:text-base line-clamp-2">Sac à main cuir véritable</h3>
                                <div class="flex flex-col items-end">
                                    <div class="flex items-end">
                                        <span class="font-bold text-[#008751] text-xs md:text-lg">42€</span>
                                    </div>
                                    <span v-if="product.originalPrice" class="mt-0.5 sm:mt-1 bg-green-100 text-green-800 text-[10px] sm:text-xs px-1 sm:px-1.5 py-0.5 rounded-full">-30%</span>
                                    <span v-if="product.discount" class="text-gray-400 text-xs line-through ml-1">00€</span>
                                </div>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-[10px] sm:text-xs px-1.5 sm:px-2 py-0.5 sm:py-1 rounded mb-1 sm:mb-2">Neuf avec étiquette</span>
                
                            <div class="flex flex-wrap gap-1 mt-1 sm:mt-2">
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">S</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">M</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">L</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">XL</span>
                            </div>
                            <div class="flex items-center text-gray-500 text-[10px] sm:text-xs mt-1 sm:mt-2">
                                <i class="fas fa-eye mr-0.5 sm:mr-1 text-[10px] sm:text-xs"></i>
                                <span>127 vues aujourd'hui</span>
                            </div>
                
                            <div class="flex justify-between items-center mt-2 sm:mt-3">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-[10px] sm:text-xs mr-1 sm:mr-1.5"></i>
                                    <span class="text-gray-600 text-[10px] sm:text-xs md:text-sm">Paris 15e</span>
                                </div>
                                <div class="flex items-center text-green-600 text-[10px] sm:text-xs">
                                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1 sm:mr-1.5 animate-pulse"></span>
                                    En ligne
                                </div>
                            </div>
                            <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                                    class="w-auto p-2 rounded-md text-sm text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition mt-2">
                                    <i class="fab fa-whatsapp mr-1 sm:mr-2 text-sm sm:text-sm"></i> Commander
                                </a>
                        </div>
                    </div>
    
                    <!--Article 3-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">
                        <div class="p-4 flex items-center gap-3">
                            <img class="w-8 h-8 object-cover rounded-full"
                                src="./assets/articles/full-shot-smiley-girl-playing-videogame.jpg"
                                alt="Profil SELO Kenneth">
                            <div>
                                <a href="#" class="font-medium text-sm hover:text-[#008751]">SELO Kenneth</a>
                                <div class="flex items-center mt-1">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span class="text-gray-500 text-xs ml-1">(24)</span>
                                </div>
                            </div>
                        </div>
                
                        <div class="relative flex-shrink-0">
                            <img class="w-full h-40 sm:h-48 object-cover cursor-pointer" src="" alt="Sac à main">
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                               <i class="fas fa-images mr-1"></i>
                                <span id="image-count">3</span>
                           </div>
                            <button class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-white/80 rounded-full p-1.5 sm:p-2 backdrop-blur-sm hover:scale-110 transition-all">
                                <i class="far fa-heart text-gray-600 hover:text-[#E8112D] text-sm sm:text-base"></i>
                            </button>
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-[10px] text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded-full font-bold shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 sm:h-3 sm:w-3 mr-0.5 sm:mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                PROMO
                            </span>
                        </div>
                
                        <div class="p-3 sm:p-4 flex-grow flex flex-col">
                            <div class="flex justify-between items-start mb-1 sm:mb-2">
                                <h3 class="font-bold text-gray-900 text-xs md:text-base line-clamp-2">Sac à main cuir véritable</h3>
                                 <div class="flex flex-col items-end">
                                    <div class="flex items-end">
                                        <span class="font-bold text-[#008751] text-xs md:text-lg">42€</span>
                                    </div>
                                    <span v-if="product.originalPrice" class="mt-0.5 sm:mt-1 bg-green-100 text-green-800 text-[10px] sm:text-xs px-1 sm:px-1.5 py-0.5 rounded-full">-30%</span>
                                    <span v-if="product.discount" class="text-gray-400 text-xs line-through ml-1">00€</span>
                                </div>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-[10px] sm:text-xs px-1.5 sm:px-2 py-0.5 sm:py-1 rounded mb-1 sm:mb-2">Neuf avec étiquette</span>
                
                            <div class="flex flex-wrap gap-1 mt-1 sm:mt-2">
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">S</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">M</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">L</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">XL</span>
                            </div>
                            <div class="flex items-center text-gray-500 text-[10px] sm:text-xs mt-1 sm:mt-2">
                                <i class="fas fa-eye mr-0.5 sm:mr-1 text-[10px] sm:text-xs"></i>
                                <span>127 vues aujourd'hui</span>
                            </div>
                
                            <div class="flex justify-between items-center mt-2 sm:mt-3">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-[10px] sm:text-xs mr-1 sm:mr-1.5"></i>
                                    <span class="text-gray-600 text-[10px] sm:text-xs md:text-sm">Paris 15e</span>
                                </div>
                                <div class="flex items-center text-green-600 text-[10px] sm:text-xs">
                                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1 sm:mr-1.5 animate-pulse"></span>
                                    En ligne
                                </div>
                            </div>
                            <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                                    class="w-auto p-2 rounded-md text-sm text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition mt-2">
                                    <i class="fab fa-whatsapp mr-1 sm:mr-2 text-sm sm:text-sm"></i> Commander
                                </a>
                        </div>
                    </div>
    
                    <!--Article 4-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">
                        <div class="p-4 flex items-center gap-3">
                            <img class="w-8 h-8 object-cover rounded-full"
                                src="./assets/articles/full-shot-smiley-girl-playing-videogame.jpg"
                                alt="Profil SELO Kenneth">
                            <div>
                                <a href="#" class="font-medium text-sm hover:text-[#008751]">SELO Kenneth</a>
                                <div class="flex items-center mt-1">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span class="text-gray-500 text-xs ml-1">(24)</span>
                                </div>
                            </div>
                        </div>
                
                        <div class="relative flex-shrink-0">
                            <img class="w-full h-40 sm:h-48 object-cover cursor-pointer" src="" alt="Sac à main">
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                               <i class="fas fa-images mr-1"></i>
                                <span id="image-count">3</span>
                           </div>
                            <button class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-white/80 rounded-full p-1.5 sm:p-2 backdrop-blur-sm hover:scale-110 transition-all">
                                <i class="far fa-heart text-gray-600 hover:text-[#E8112D] text-sm sm:text-base"></i>
                            </button>
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-[10px] text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded-full font-bold shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 sm:h-3 sm:w-3 mr-0.5 sm:mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                PROMO
                            </span>
                        </div>
                
                        <div class="p-3 sm:p-4 flex-grow flex flex-col">
                            <div class="flex justify-between items-start mb-1 sm:mb-2">
                                <h3 class="font-bold text-gray-900 text-xs md:text-base line-clamp-2">Sac à main cuir véritable</h3>
                                 <div class="flex flex-col items-end">
                                    <div class="flex items-end">
                                        <span class="font-bold text-[#008751] text-xs md:text-lg">42€</span>
                                    </div>
                                    <span v-if="product.originalPrice" class="mt-0.5 sm:mt-1 bg-green-100 text-green-800 text-[10px] sm:text-xs px-1 sm:px-1.5 py-0.5 rounded-full">-30%</span>
                                    <span v-if="product.discount" class="text-gray-400 text-xs line-through ml-1">00€</span>
                                </div>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-[10px] sm:text-xs px-1.5 sm:px-2 py-0.5 sm:py-1 rounded mb-1 sm:mb-2">Neuf avec étiquette</span>
                
                            <div class="flex flex-wrap gap-1 mt-1 sm:mt-2">
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">S</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">M</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">L</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">XL</span>
                            </div>
                            <div class="flex items-center text-gray-500 text-[10px] sm:text-xs mt-1 sm:mt-2">
                                <i class="fas fa-eye mr-0.5 sm:mr-1 text-[10px] sm:text-xs"></i>
                                <span>127 vues aujourd'hui</span>
                            </div>
                
                            <div class="flex justify-between items-center mt-2 sm:mt-3">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-[10px] sm:text-xs mr-1 sm:mr-1.5"></i>
                                    <span class="text-gray-600 text-[10px] sm:text-xs md:text-sm">Paris 15e</span>
                                </div>
                                <div class="flex items-center text-green-600 text-[10px] sm:text-xs">
                                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1 sm:mr-1.5 animate-pulse"></span>
                                    En ligne
                                </div>
                            </div>
                            <div class="w-full h-auto flex items-center justify-between mt-2 gap-3">
                                <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                                    class="w-auto p-2 rounded-md text-[10px] sm:text-xs text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                                    <i class="fab fa-whatsapp mr-1 sm:mr-2 text-xs sm:text-sm"></i> Commander
                                </a>
                                <button class="md:w-10 w-auto p-2 md:text-[10px] text-xs rounded-md text-gray-900 border-gray-900 border flex items-center justify-center hover:text-white bg-transparent hover:bg-gray-900 transition">
                                    <i class="far fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
    
                    <!--Article 5-->
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition border border-gray-100 h-full">
                        <div class="p-4 flex items-center gap-3">
                            <img class="w-8 h-8 object-cover rounded-full"
                                src="./assets/articles/full-shot-smiley-girl-playing-videogame.jpg"
                                alt="Profil SELO Kenneth">
                            <div>
                                <a href="#" class="font-medium text-sm hover:text-[#008751]">SELO Kenneth</a>
                                <div class="flex items-center mt-1">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span class="text-gray-500 text-xs ml-1">(24)</span>
                                </div>
                            </div>
                        </div>
                
                        <div class="relative flex-shrink-0">
                            <img class="w-full h-40 sm:h-48 object-cover cursor-pointer" src="" alt="Sac à main">
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                               <i class="fas fa-images mr-1"></i>
                                <span id="image-count">3</span>
                           </div>
                            <button class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-white/80 rounded-full p-1.5 sm:p-2 backdrop-blur-sm hover:scale-110 transition-all">
                                <i class="far fa-heart text-gray-600 hover:text-[#E8112D] text-sm sm:text-base"></i>
                            </button>
                            <span class="absolute top-2 left-2 sm:top-3 sm:left-3 bg-gradient-to-r from-[#FF6B00] to-[#FF8F00] text-white text-[10px] text-xs px-1.5 py-0.5 sm:px-2 sm:py-1 rounded-full font-bold shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5 sm:h-3 sm:w-3 mr-0.5 sm:mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm4.707 5.707a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L8.414 10l2.293-2.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                PROMO
                            </span>
                        </div>
                
                        <div class="p-3 sm:p-4 flex-grow flex flex-col">
                            <div class="flex justify-between items-start mb-1 sm:mb-2">
                                <h3 class="font-bold text-gray-900 text-xs md:text-base line-clamp-2">Sac à main cuir véritable</h3>
                                 <div class="flex flex-col items-end">
                                    <div class="flex items-end">
                                        <span class="font-bold text-[#008751] text-xs md:text-lg">42€</span>
                                    </div>
                                    <span v-if="product.originalPrice" class="mt-0.5 sm:mt-1 bg-green-100 text-green-800 text-[10px] sm:text-xs px-1 sm:px-1.5 py-0.5 rounded-full">-30%</span>
                                    <span v-if="product.discount" class="text-gray-400 text-xs line-through ml-1">00€</span>
                                </div>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-800 text-[10px] sm:text-xs px-1.5 sm:px-2 py-0.5 sm:py-1 rounded mb-1 sm:mb-2">Neuf avec étiquette</span>
                
                            <div class="flex flex-wrap gap-1 mt-1 sm:mt-2">
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">S</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">M</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">L</span>
                                <span class="text-[10px] sm:text-xs bg-gray-100 px-1.5 sm:px-2 py-0.5 sm:py-1 rounded">XL</span>
                            </div>
                            <div class="flex items-center text-gray-500 text-[10px] sm:text-xs mt-1 sm:mt-2">
                                <i class="fas fa-eye mr-0.5 sm:mr-1 text-[10px] sm:text-xs"></i>
                                <span>127 vues aujourd'hui</span>
                            </div>
                
                            <div class="flex justify-between items-center mt-2 sm:mt-3">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-gray-400 text-[10px] sm:text-xs mr-1 sm:mr-1.5"></i>
                                    <span class="text-gray-600 text-[10px] sm:text-xs md:text-sm">Paris 15e</span>
                                </div>
                                <div class="flex items-center text-green-600 text-[10px] sm:text-xs">
                                    <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-green-500 rounded-full mr-1 sm:mr-1.5 animate-pulse"></span>
                                    En ligne
                                </div>
                            </div>
                            <div class="w-full h-auto flex items-center justify-between mt-2 gap-3">
                                <a href="https://wa.me/33612345678?text=Je%20suis%20intéressé%20par%20votre%20sac%20à%20main"
                                    class="w-auto p-2 rounded-md text-[10px] sm:text-xs text-white flex items-center justify-center bg-[#008751] hover:bg-[#128C7E] transition">
                                    <i class="fab fa-whatsapp mr-1 sm:mr-2 text-xs sm:text-sm"></i> Commander
                                </a>
                                <button class="md:w-10 w-auto p-2 md:text-[10px] text-xs rounded-md text-gray-900 border-gray-900 border flex items-center justify-center hover:text-white bg-transparent hover:bg-gray-900 transition">
                                    <i class="far fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>
    
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
        </div>
    </section>



@endsection