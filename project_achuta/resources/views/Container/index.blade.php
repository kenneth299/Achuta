<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3.8.0/notyf.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    h1 {
        font-family: V-Inter, "Helvetica Neue", Helvetica-Neue, Arial, sans-serif;
    }

    ul li a {
        font-family: 'Poppins', sans-serif;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .splide__arrow {
        background: #008751;
    }



    .splide__pagination__page.is-active {
        background: #008751;
    }



    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-pulse {
        animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }

    .splide__arrow {
        background: rgba(255, 255, 255, 0.3);
    }

    .splide__pagination__page {
        background: gray
    }

    .splide__pagination__page.is-active {
        background: white;
        transform: none;
    }

    .input-field:focus {
        border-color: #008751;
        box-shadow: 0 0 0 2px rgba(0, 135, 81, 0.2);
    }

    .social-btn:hover {
        transform: translateY(-2px);
    }

    .toggle-auth {
        color: #008751;
        cursor: pointer;
        text-decoration: underline;
    }

    /* Masquer la scrollbar tout en permettant le scroll */
</style>

<body>

    <nav class="w-full h-24 shadow-md bg-white z-50">
        <!-- Première ligne (logo + actions utilisateur) -->
        <div class="w-full h-1/2 border-b flex justify-center items-center">
            <div class="w-11/12 h-full flex justify-between items-center">
                <!-- Logo -->
                <div class="w-auto h-auto items-center justify-start flex">
                    <h2 class="md:text-2xl text-xl font-bold text-[#008751]">Achûta</h2>
                </div>

                <!-- Actions desktop -->
                <div class="w-9/12 h-full lg:flex items-center hidden gap-4 justify-end">
                    <!-- Sélecteur de langue desktop -->
                    <div class="relative group">
                        <button class="flex items-center text-xs text-gray-600 hover:text-[#008751] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                            Français
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div
                            class="absolute right-0 w-32 bg-white rounded-md shadow-lg py-1 hidden group-hover:block z-50 border border-gray-100">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f2f9fe]">English</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f2f9fe]">Español</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#f2f9fe]">Deutsch</a>
                        </div>
                    </div>

                    @auth
                    {{-- Affiché quand l'utilisateur est connecté --}}

                    <div class="flex items-center gap-3">
                        <!-- Favoris -->
                        <div class="relative group">
                            <button class="text-gray-600 w-5 h-5 transition-colors relative">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>

                        <!-- Notifications -->
                        <div class="relative group">
                            <button class="text-gray-600 w-5 h-5 transition-colors relative">
                                <i class="fa-regular fa-bell text-xl"></i>
                                <span
                                    class="absolute -top-1 -right-1 w-3 h-3 bg-yellow-500 rounded-full text-white text-[8px] flex items-center justify-center">5</span>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">

                        <div class="relative group">
                            <div class="flex items-center cursor-pointer">
                                <span
                                    class="bg-[#008751] rounded-full items-center justify-center text-lg flex w-7 h-7 text-white cursor-pointer">
                                    {{ Str::upper(substr(Auth::user()->name, 0, 1)) }}
                                </span>
                                <svg class="w-4 h-4 text-gray-600 transition-transform group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>


                            {{-- Menu dropdown --}}
                            <div
                                class="hidden group-hover:block absolute right-0 w-72 bg-white rounded-md shadow-lg z-10">
                                <div class="py-1">
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-user mr-2"></i>Mon profil
                                    </a>
                                    <a href=""
                                        class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-center">
                                            <!-- Icône de portefeuille -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span>Mon porte-monnaie</span>
                                        </div>
                                        <!-- Montant -->
                                        <span
                                            class="font-medium bg-[#008751]/10 text-[#008751] px-2 py-1 rounded text-xs">
                                            500
                                        </span>
                                    </a>
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-headset mr-2"></i> Contact admin
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                                        </button>
                                    </form>
                                    <a href=""
                                        class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-center">
                                            <!-- Icône de portefeuille -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 0a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                            </svg>
                                            <span>Messages</span>
                                        </div>
                                        <!-- Montant -->
                                        <span
                                            class="font-medium bg-[#008751]/10 text-[#008751] px-2 py-1 rounded text-xs">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="/dashboardSeller" class="py-1 px-3 bg-[#008751] text-white text-xs rounded-md transition-colors hover:bg-[#006b43] flex items-center justify-center gap-2">
                            <i class="fas fa-home text-sm"></i>
                            <span class="font-bold">Dashboard</span>
                        </a>
                    </div>
                    @else
                    {{-- Affiché quand l'utilisateur n'est pas connecté --}}
                    <div class="flex items-center gap-3">
                        <a href="{{ route('connect') }}"
                            class="py-2 font-bold px-2 text-xs text-[#008751] border border-[#008751] rounded-md hover:bg-[#f2f9fe] transition-colors">
                            Se connecter
                        </a>
                        <a href="{{ route('connect') }}"
                            class="py-2 font-bold px-2 text-xs text-[#008751] border border-[#008751] rounded-md hover:bg-[#f2f9fe] transition-colors">
                            S'inscrire
                        </a>
                        <a href=""
                            class="py-2 font-bold px-2 bg-[#008751] text-white text-xs rounded-md transition-colors hover:bg-[#006b43]">
                            Vends tes articles
                        </a>
                    </div>
                    @endauth
                </div>
            <div class="lg:hidden flex items-center gap-2">
                @auth
                {{-- Utilisateur connecté - version mobile --}}
                <div class="flex items-center gap-3">

                    <!-- Avatar utilisateur (mobile) -->
                    <div class="flex items-center gap-4">
                               <a href="#" class="h-8 w-auto px-3 bg-[#008751] text-white rounded-md transition-colors hover:bg-[#006b43] flex items-center justify-center">Dashboard</a>
                        <div class="relative group">
                            <div class="flex items-center cursor-pointer">
                                <span
                                    class="p-2 bg-[#008751] rounded-full items-center justify-center text-lg flex w-8 h-8 text-white cursor-pointer">
                                    {{ Str::upper(substr(Auth::user()->name, 0, 1)) }}
                                </span>
                                <svg class="w-4 h-4 text-gray-600 transition-transform group-hover:rotate-180"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>


                            {{-- Menu dropdown --}}
                            <div class="hidden group-hover:block absolute right-3 left-auto  w-72 bg-white rounded-md shadow-lg z-10 ">
                                <div class="py-1">
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-user mr-2"></i>Mon profil
                                    </a>
                                    <a href=""
                                        class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-center">
                                            <!-- Icône de portefeuille -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span>Mon porte-monnaie</span>
                                        </div>
                                        <!-- Montant -->
                                        <span
                                            class="font-medium bg-[#008751]/10 text-[#008751] px-2 py-1 rounded text-xs">
                                            500
                                        </span>
                                    </a>
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                                        <i class="fas fa-headset mr-2"></i> Contact admin
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                                        </button>
                                    </form>
                                    <a href=""
                                        class="flex items-center justify-between px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-center">
                                            <!-- Icône de portefeuille -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 0a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                                            </svg>
                                            <span>Messages</span>
                                        </div>
                                        <!-- Montant -->
                                        <span
                                            class="font-medium bg-[#008751]/10 text-[#008751] px-2 py-1 rounded text-xs">2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                {{-- Utilisateur non connecté - version mobile --}}
                <div class="flex items-center gap-2">
                    <!-- Bouton connexion simplifié -->
                    <a href="{{ route('connect') }}" class="p-2 text-gray-600 hover:text-[#008751] transition-colors">
                        <i class="fas fa-sign-in-alt text-lg"></i>
                    </a>

                    <!-- Bouton inscription simplifié -->
                    <a href="{{ route('connect') }}" class="p-2 text-gray-600 hover:text-[#008751] transition-colors">
                        <i class="fas fa-user-plus text-lg"></i>
                    </a>
                </div>
                @endauth
                <!-- Bouton "Vendre" toujours visible -->
            </div>
        </div>
        </div>

        <!-- Deuxième ligne (navigation principale) -->
        <div class="w-full h-1/2 lg:flex justify-center items-center hidden">
            <div class="w-11/12 h-full flex items-center  overflow-x-auto scrollbar-hide">
                <ul class="flex items-center h-full space-x-1">
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/acceuil" class="whitespace-nowrap">Accueil</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/men" class="whitespace-nowrap">Hommes</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/women" class="whitespace-nowrap">Femmes</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/creator" class="whitespace-nowrap">Articles Créateurs</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/electronics" class="whitespace-nowrap">Electroniques</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/kids" class="whitespace-nowrap">Enfants</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/about" class="whitespace-nowrap">A propos</a>
                    </li>
                    <li
                        class="text-sm text-black hover:bg-[#f2f9fe] h-full items-center justify-center flex px-4 min-w-fit transition-colors">
                        <a href="/entertainment" class="whitespace-nowrap">Livres & divertissements</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Menu burger mobile -->
        <div class="w-11/12 h-1/2 flex items-center justify-end lg:hidden">
            <button class="mobile-menu-button p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>


    <!-- Menu mobile -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-40 overlay hidden"></div>

    <div
        class="mobile-menu fixed inset-y-0 right-0 w-10/12 bg-white z-50 shadow-2xl transform transition-transform duration-300 ease-in-out translate-x-full">
        <div class="flex justify-between p-4 border-b">
            <div class="w-auto h-auto items-center justify-start flex">
                <h2 class="text-2xl font-bold text-[#008751]">Achûta</h2>
            </div>
            <button class="close-menu-button p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="h-[calc(100%-120px)] overflow-y-auto">
            <ul class="flex flex-col w-full">
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/acceuil" class="w-full">Accueil</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/men" class="w-full">Hommes</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/women" class="w-full">Femmes</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/creator" class="w-full">Articles Créateurs</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/electronics" class="w-full">Electroniques</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/kids" class="w-full">Enfants</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/about" class="w-full">A propos</a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="/entertainment" class="w-full">Livres & divertissements</a>
                </li>

                @auth
                <!-- Options pour utilisateur connecté -->
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="fas fa-user mr-2"></i> Mon profil
                    </a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="far fa-heart mr-2"></i> Favoris
                    </a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="fa-regular fa-bell mr-2"></i> Notifications
                        <span class="ml-auto bg-yellow-500 rounded-full text-white text-xs px-1.5 py-0.5">5</span>
                    </a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="fas fa-wallet mr-2"></i> Mon porte-monnaie
                        <span class="ml-auto bg-[#008751]/10 text-[#008751] text-xs px-1.5 py-0.5 rounded">500</span>
                    </a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="fas fa-envelope mr-2"></i> Messages
                        <span class="ml-auto bg-[#008751]/10 text-[#008751] text-xs px-1.5 py-0.5 rounded">2</span>
                    </a>
                </li>
                <li
                    class="text-sm text-black hover:bg-[#f2f9fe] h-12 items-center justify-start flex p-4 border-b border-gray-100">
                    <a href="#" class="w-full flex items-center">
                        <i class="fas fa-headset mr-2"></i> Contact admin
                    </a>
                </li>
                @endauth
            </ul>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-6 bg-white border-t border-gray-100">
            @auth
            <!-- Bouton déconnexion pour utilisateur connecté -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="block w-full py-2 px-2 text-center font-medium text-white bg-[#008751] rounded-lg hover:bg-[#006b43] transition mb-3">
                    <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                </button>
            </form>
            <a href="#"
                class="block py-2 px-2 text-center font-medium text-white bg-[#008751] rounded-lg hover:bg-[#006b43] transition">
                Vends tes articles
            </a>
            @else
            <!-- Boutons connexion/inscription pour utilisateur non connecté -->
            <div class="grid gap-3">
                <a href="{{ route('connect') }}"
                    class="block py-2 px-2 text-center font-medium text-[#008751] border border-[#008751] rounded-lg hover:bg-[#f2f9fe] transition">
                    Se connecter
                </a>
                <a href="{{ route('connect') }}"
                    class="block py-2 px-2 text-center font-medium text-white bg-[#008751] rounded-lg hover:bg-[#006b43] transition">
                    S'inscrire
                </a>
                <a href="#"
                    class="block py-2 px-2 text-center font-medium text-white bg-[#008751] rounded-lg hover:bg-[#006b43] transition">
                    Vends tes articles
                </a>
            </div>
            @endauth
        </div>
    </div>


    @yield('contain')


    <footer class="bg-white text-gray-800 pt-12 pb-6 border-t border-gray-200 mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Colonne 1 - Logo & Description -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <div class="flex items-center mb-4">
                        <h2 class="text-2xl font-bold text-[#008751]">Achûta</h2>
                    </div>
                    <p class="text-gray-600 text-sm mb-4">
                        La marketplace locale sans commission, pour des transactions humaines et sécurisées.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" aria-label="Facebook" class="text-gray-500 hover:text-[#008751] transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="Instagram" class="text-gray-500 hover:text-[#008751] transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" aria-label="Twitter" class="text-gray-500 hover:text-[#008751] transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn" class="text-gray-500 hover:text-[#008751] transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Colonne 2 - Liens Acheteurs -->
                <div>
                    <h4 class="font-bold text-lg mb-4 text-[#008751]">Acheteurs</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Comment
                                acheter</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Paiements
                                sécurisés</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Guide d'achat</a>
                        </li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">FAQ</a></li>
                    </ul>
                </div>

                <!-- Colonne 3 - Liens Vendeurs -->
                <div>
                    <h4 class="font-bold text-lg mb-4 text-[#008751]">Vendeurs</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Vendre un
                                article</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Conseils de
                                vente</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Politique de
                                vente</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Frais &
                                commissions</a></li>
                    </ul>
                </div>

                <!-- Colonne 4 - Infos -->
                <div>
                    <h4 class="font-bold text-lg mb-4 text-[#008751]">Infos</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">À propos</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Blog</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Contact</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#008751] transition text-sm">Presse</a></li>
                    </ul>
                </div>

                <!-- Colonne 5 - Contact & Newsletter -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <h4 class="font-bold text-lg mb-4 text-[#008751]">Newsletter</h4>
                    <p class="text-gray-600 text-sm mb-4">
                        Abonnez-vous pour recevoir nos offres exclusives.
                    </p>

                    <div class="flex items-center text-gray-600 text-sm">
                        <i class="fas fa-phone-alt text-[#008751] mr-2"></i>
                        <span>+33 6 12 34 56 78</span>
                    </div>
                    <div class="flex items-center mt-1 text-gray-600 text-sm">
                        <i class="fas fa-envelope text-[#008751] mr-2"></i>
                        <span>contact@achuta.com</span>
                    </div>
                </div>
            </div>

            <!-- Ligne de copyright -->
            <div class="border-t border-gray-200 mt-8 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-500 text-sm text-center md:text-left mb-4 md:mb-0">
                        © 2023 Achûta - Tous droits réservés
                    </div>
                    <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                        <a href="#" class="text-gray-500 hover:text-[#008751] text-sm transition">Mentions légales</a>
                        <a href="#" class="text-gray-500 hover:text-[#008751] text-sm transition">CGU</a>
                        <a href="#" class="text-gray-500 hover:text-[#008751] text-sm transition">Confidentialité</a>
                        <a href="#" class="text-gray-500 hover:text-[#008751] text-sm transition">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</body>

</html>