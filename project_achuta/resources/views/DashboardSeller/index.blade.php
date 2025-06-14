<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Vendeur - Échange Direct</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --secondary: #f9fafb;
        }

        /* Animation douces */
        .sidebar,
        .main-content,
        .card,
        .nav-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Sidebar responsive */
        .sidebar {
            width: 280px;
        }

        .sidebar.collapsed {
            width: 80px;
        }

        .sidebar.collapsed .nav-text,
        .sidebar.collapsed .user-info,
        .sidebar.collapsed .badge {
            opacity: 0;
            width: 0;
            height: 0;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: absolute;
        }

        /* Effet de profondeur */
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }

        /* Mobile first */
        @media (max-width: 1024px) {
            .sidebar {
                position: fixed;
                z-index: 50;
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .sidebar.collapsed {
                transform: translateX(-100%);
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 40;
            }

            .overlay.active {
                display: block;
            }
        }

        /* Accessibilité */
        .focus-visible {
            @apply ring-2 ring-indigo-500 ring-offset-2 outline-none;
        }

        /* Scrollbar personnalisée */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #c7d2fe;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a5b4fc;
        }

        /* Chart responsive */
        .chart-container {
            position: relative;
            height: 250px;
        }

        .dashboard-section {
            display: none;
        }

        .dashboard-section.active {
            display: block;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-item.active {
            background-color: #4f46e5;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased text-gray-800">
    <!-- Overlay mobile -->
    <div id="overlay" class="overlay"></div>

    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="sidebar bg-indigo-800 text-white flex flex-col fixed lg:relative h-full z-50">
            <!-- Header -->
            <div class="p-4 flex items-center justify-between border-b border-indigo-700">
                <div class="flex items-center space-x-3 min-w-max">
                    <i class="fas fa-store text-2xl text-indigo-200"></i>
                    <span class="nav-text font-bold text-xl">Mon Échoppe</span>
                </div>
                <button id="toggleSidebar" class="text-white focus:outline-none lg:hidden focus-visible" aria-label="Toggle sidebar">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- User Profile -->
            <div class="p-4 flex items-center space-x-3 border-b border-indigo-700">
                <div class="relative min-w-max">
                    <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="Profile"
                        class="w-10 h-10 rounded-full border-2 border-indigo-200">
                    <span
                        class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                </div>
                <div class="nav-text overflow-hidden">
                    <div class="font-medium truncate">{{Auth::user()->name }}</div>
                    <div class="text-sm text-indigo-200 truncate">Vendeur Pro</div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 overflow-y-auto py-2">
                <ul class="space-y-1 px-2">
                    <li>
                        <a href="#" data-section="dashboard" class="nav-item flex items-center p-3 rounded-lg bg-indigo-700 text-white focus-visible active">
                            <i class="fas fa-tachometer-alt mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-section="products"
                            class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-box-open mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Mes produits</span>
                            <span class="ml-auto bg-indigo-600 text-xs px-2 py-1 rounded-full">12</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-section="appointments"
                            class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-handshake mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Rendez-vous</span>
                            <span class="ml-auto bg-indigo-600 text-xs px-2 py-1 rounded-full">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-section="messages"
                            class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-comments mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Messages</span>
                            <span class="ml-auto bg-pink-500 text-xs px-2 py-1 rounded-full">5</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-section="statistiques"
                            class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-chart-line mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Statistiques</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-section="transactions"
                            class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-wallet mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-item flex items-center p-3 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                            <i class="fas fa-cog mr-3 text-indigo-200 w-5 text-center"></i>
                            <span class="nav-text">Paramètres</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Logout -->
            <div class="p-4 border-t border-indigo-700">
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit"
                        class="nav-item flex items-center w-full p-2 rounded-lg hover:bg-indigo-700 text-white focus-visible">
                        <i class="fas fa-sign-out-alt mr-3 text-indigo-200 w-5 text-center"></i>
                        <span class="nav-text">Déconnexion</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content  espace tableau de bord-->
        <div class="main-content flex-1 overflow-auto h-full flex flex-col">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="px-4 sm:px-6 py-3 flex justify-between items-center">
                    <div class="flex items-center">
                        <button id="mobileMenuButton" class="lg:hidden mr-4 text-gray-600 focus:outline-none focus-visible">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                        <h1 class="text-xl sm:text-2xl font-bold text-gray-800">Tableau de bord</h1>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 p-4 sm:p-6 bg-gray-50">
                <!-- Welcome Banner  section dashboard-->
                <div id="dashboard-section" class="dashboard-section active">
                    <div class="bg-gradient-to-r from-indigo-600 to-indigo-500 rounded-xl shadow-md text-white p-5 mb-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div>
                                <h2 class="text-xl sm:text-2xl font-bold mb-1">Bonjour, {{Auth::user()->name }} 👋</h2>
                                <p class="opacity-90">Voici votre activité du jour. Vous avez 3 rendez-vous et 5
                                    nouveaux messages.</p>
                            </div>
                            <button data-section="messages" class="mt-4 md:mt-0 bg-white text-indigo-600 hover:bg-gray-100 px-4 py-2 rounded-lg font-medium transition-colors focus:outline-none focus-visible">
                                Voir les messages
                            </button>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Ventes totales</p>
                                    <h3 class="text-2xl font-bold mt-1">24</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="text-green-500 text-sm flex items-center">
                                            <i class="fas fa-arrow-up mr-1"></i> 12%
                                        </span>
                                        <span class="text-gray-400 text-xs ml-2">ce mois</span>
                                    </div>
                                </div>
                                <div class="p-3 rounded-full bg-indigo-100 text-indigo-600 h-fit">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Produits actifs</p>
                                    <h3 class="text-2xl font-bold mt-1">12</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="text-green-500 text-sm flex items-center">
                                            <i class="fas fa-arrow-up mr-1"></i> 3
                                        </span>
                                        <span class="text-gray-400 text-xs ml-2">ce mois</span>
                                    </div>
                                </div>
                                <div class="p-3 rounded-full bg-green-100 text-green-600 h-fit">
                                    <i class="fas fa-box-open"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">RDV à venir</p>
                                    <h3 class="text-2xl font-bold mt-1">3</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="text-red-500 text-sm flex items-center">
                                            <i class="fas fa-circle text-xs mr-1"></i> 1
                                        </span>
                                        <span class="text-gray-400 text-xs ml-2">aujourd'hui</span>
                                    </div>
                                </div>
                                <div class="p-3 rounded-full bg-blue-100 text-blue-600 h-fit">
                                    <i class="fas fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Revenus</p>
                                    <h3 class="text-2xl font-bold mt-1">1 450€</h3>
                                    <div class="flex items-center mt-2">
                                        <span class="text-green-500 text-sm flex items-center">
                                            <i class="fas fa-arrow-up mr-1"></i> 320€
                                        </span>
                                        <span class="text-gray-400 text-xs ml-2">ce mois</span>
                                    </div>
                                </div>
                                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 h-fit">
                                    <i class="fas fa-euro-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Charts and Recent Activities -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
                        <!-- Chart -->
                        <div class="bg-white rounded-xl shadow-sm p-5 lg:col-span-2 card-hover">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                                <h2 class="text-lg font-semibold mb-2 sm:mb-0">Performance des ventes</h2>
                                <div class="flex space-x-2">
                                    <button
                                        class="px-3 py-1 text-xs bg-indigo-100 text-indigo-700 rounded-full hover:bg-indigo-200 focus:outline-none focus-visible">7j</button>
                                    <button
                                        class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 focus:outline-none focus-visible">30j</button>
                                    <button
                                        class="px-3 py-1 text-xs bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 focus:outline-none focus-visible">90j</button>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>

                        <!-- Recent Activities -->
                        <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-lg font-semibold">Activités récentes</h2>
                                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Tout
                                    voir</a>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="p-2 rounded-full bg-green-100 text-green-600 mr-3 mt-1 flex-shrink-0">
                                        <i class="fas fa-check text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">Vente confirmée</p>
                                        <p class="text-sm text-gray-500 mt-1">Table en bois massif à Jean D. RDV demain
                                            à 14h</p>
                                        <p class="text-xs text-gray-400 mt-1">Il y a 2 heures</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="p-2 rounded-full bg-blue-100 text-blue-600 mr-3 mt-1 flex-shrink-0">
                                        <i class="fas fa-comment text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">Nouveau message</p>
                                        <p class="text-sm text-gray-500 mt-1">Sophie M.: "La lampe est-elle toujours
                                            disponible?"</p>
                                        <p class="text-xs text-gray-400 mt-1">Il y a 5 heures</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="p-2 rounded-full bg-yellow-100 text-yellow-600 mr-3 mt-1 flex-shrink-0">
                                        <i class="fas fa-exclamation text-sm"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">RDV annulé</p>
                                        <p class="text-sm text-gray-500 mt-1">Marc L. a annulé le RDV pour la chaise
                                            vintage</p>
                                        <p class="text-xs text-gray-400 mt-1">Il y a 1 jour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Appointments -->
                    <div class="bg-white rounded-xl shadow-sm p-5 mb-6 card-hover">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h2 class="text-lg font-semibold mb-2 sm:mb-0">Prochains RDV</h2>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Voir tout</a>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Client</th>
                                        <th scope="col"
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Produit</th>
                                        <th scope="col"
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Date/Heure</th>
                                        <th scope="col"
                                            class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Pierre Martin</div>
                                                    <div class="text-sm text-gray-500">4.8★</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="text-sm text-gray-900">Chaise design années 60</div>
                                            <div class="text-sm text-gray-500">120€</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Aujourd'hui, 14h</div>
                                            <div class="text-sm text-gray-500">Dans 3h</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-3">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                                    title="Message"><i class="fas fa-comment"></i></a>
                                                <a href="#" class="text-green-600 hover:text-green-900"
                                                    title="Confirmer"><i class="fas fa-check"></i></a>
                                                <a href="#" class="text-red-600 hover:text-red-900" title="Annuler"><i
                                                        class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://randomuser.me/api/portraits/women/22.jpg" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Sophie Lambert</div>
                                                    <div class="text-sm text-gray-500">4.5★</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="text-sm text-gray-900">Vase en céramique</div>
                                            <div class="text-sm text-gray-500">45€</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Demain, 10h30</div>
                                            <div class="text-sm text-gray-500">22h restantes</div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-3">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                                    title="Message"><i class="fas fa-comment"></i></a>
                                                <a href="#" class="text-green-600 hover:text-green-900"
                                                    title="Confirmer"><i class="fas fa-check"></i></a>
                                                <a href="#" class="text-red-600 hover:text-red-900" title="Annuler"><i
                                                        class="fas fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Top Products -->
                    <div class="bg-white rounded-xl shadow-sm p-5 card-hover">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                            <h2 class="text-lg font-semibold mb-2 sm:mb-0">Produits populaires</h2>
                            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Voir tout</a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Product Card -->
                            <div class="border rounded-lg overflow-hidden hover:shadow-md transition-all">
                                <div class="relative h-40 bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                        alt="Product" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2 right-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Top</span>
                                </div>
                                <div class="p-3">
                                    <h3 class="font-medium text-gray-900 truncate">Chaise vintage</h3>
                                    <p class="text-sm text-gray-500 truncate">Design années 60</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="font-bold">120€</span>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                                            <span class="ml-1 text-sm">4.8</span>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-3 w-full bg-indigo-600 hover:bg-indigo-700 text-white py-1 rounded-md text-sm transition-colors focus:outline-none focus-visible">
                                        Voir détails
                                    </button>
                                </div>
                            </div>

                            <!-- Product Card -->
                            <div class="border rounded-lg overflow-hidden hover:shadow-md transition-all">
                                <div class="relative h-40 bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                        alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3">
                                    <h3 class="font-medium text-gray-900 truncate">Lampe de bureau</h3>
                                    <p class="text-sm text-gray-500 truncate">Style industriel</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="font-bold">65€</span>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                                            <span class="ml-1 text-sm">4.5</span>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-3 w-full bg-indigo-600 hover:bg-indigo-700 text-white py-1 rounded-md text-sm transition-colors focus:outline-none focus-visible">
                                        Voir détails
                                    </button>
                                </div>
                            </div>

                            <!-- Product Card -->
                            <div class="border rounded-lg overflow-hidden hover:shadow-md transition-all">
                                <div class="relative h-40 bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                        alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="p-3">
                                    <h3 class="font-medium text-gray-900 truncate">Table en bois</h3>
                                    <p class="text-sm text-gray-500 truncate">Massif chêne</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="font-bold">240€</span>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                                            <span class="ml-1 text-sm">4.7</span>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-3 w-full bg-indigo-600 hover:bg-indigo-700 text-white py-1 rounded-md text-sm transition-colors focus:outline-none focus-visible">
                                        Voir détails
                                    </button>
                                </div>
                            </div>

                            <!-- Product Card -->
                            <div class="border rounded-lg overflow-hidden hover:shadow-md transition-all">
                                <div class="relative h-40 bg-gray-100">
                                    <img src="https://images.unsplash.com/photo-1540932239986-30128078f3c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                        alt="Product" class="w-full h-full object-cover">
                                    <span
                                        class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">Nouveau</span>
                                </div>
                                <div class="p-3">
                                    <h3 class="font-medium text-gray-900 truncate">Vase en céramique</h3>
                                    <p class="text-sm text-gray-500 truncate">Fait main</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="font-bold">45€</span>
                                        <div class="flex items-center">
                                            <i class="fas fa-star text-yellow-400 text-sm"></i>
                                            <span class="ml-1 text-sm">4.9</span>
                                        </div>
                                    </div>
                                    <button
                                        class="mt-3 w-full bg-indigo-600 hover:bg-indigo-700 text-white py-1 rounded-md text-sm transition-colors focus:outline-none focus-visible">
                                        Voir détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Produits -->
                <div id="products-section" class="dashboard-section">
                    <div class="bg-white rounded-xl shadow-sm p-5 mb-6">
                        <h2 class="text-2xl font-bold mb-6 text-indigo-800">Mes Produits</h2>

                        <!-- Barre d'actions -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                            <div class="relative w-full sm:w-64">
                                <input type="text" placeholder="Rechercher un produit..."
                                    class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            <button
                                class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-medium transition-colors focus:outline-none focus-visible flex items-center">
                                <i class="fas fa-plus mr-2"></i> Ajouter un produit
                            </button>
                        </div>

                        <!-- Liste des produits -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Produit</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Prix</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Statut</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Vues</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Produit 1 -->
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full object-cover"
                                                        src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Chaise vintage</div>
                                                    <div class="text-sm text-gray-500">Design années 60</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">120€</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            245
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-3">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                                    title="Éditer"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="text-green-600 hover:text-green-900" title="Voir"><i
                                                        class="fas fa-eye"></i></a>
                                                <a href="#" class="text-red-600 hover:text-red-900" title="Supprimer"><i
                                                        class="fas fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- [Autres produits...] -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="flex items-center justify-between mt-6">
                            <div class="text-sm text-gray-500">
                                Affichage de <span class="font-medium">1</span> à <span class="font-medium">5</span> sur
                                <span class="font-medium">12</span> produits
                            </div>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 border rounded-lg text-gray-500 hover:bg-gray-100"><i class="fas fa-chevron-left"></i></button>
                                <button class="px-3 py-1 border rounded-lg bg-indigo-600 text-white">1</button>
                                <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">2</button>
                                <button class="px-3 py-1 border rounded-lg hover:bg-gray-100">3</button>
                                <button class="px-3 py-1 border rounded-lg text-gray-500 hover:bg-gray-100"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white rounded-xl shadow-xl p-5 mb-6 mx-auto">
                        <h2 class="text-2xl font-bold mb-6 text-indigo-800">Ajouter un nouveau produit</h2>

                        <form id="product-form" class="space-y-6">
                            <!-- Section Informations de base -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Titre du produit -->
                                <div class="col-span-2">
                                    <label for="product-title"
                                        class="block text-sm font-medium text-gray-700 mb-1">Titre du produit*</label>
                                    <input type="text" id="product-title" name="title" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"placeholder="Ex: Sac à main cuir véritable">
                                </div>

                                <!-- Description -->
                                <div class="col-span-2">
                                    <label for="product-description"
                                        class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
                                    <textarea id="product-description" name="description" rows="3" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="Décrivez votre produit en détails"></textarea>
                                </div>

                                <!-- Catégorie -->
                                <div>
                                    <label for="product-category"
                                        class="block text-sm font-medium text-gray-700 mb-1">Catégorie*</label>
                                    <select id="product-category" name="category" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="">Sélectionnez une catégorie</option>
                                        <option value="men">Homme</option>
                                        <option value="femme">Femme</option>
                                        <option value="electronique">Électronique</option>
                                        <option value="kids">Kids</option>
                                        <option value="loisirs">Loisirs</option>
                                        <option value="autre">Autre</option>
                                    </select>
                                </div>

                                <!-- État du produit -->
                                <div>
                                    <label for="product-condition"
                                        class="block text-sm font-medium text-gray-700 mb-1">État*</label>
                                    <select id="product-condition" name="condition" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="new">Neuf avec étiquette</option>
                                        <option value="like_new">Comme neuf</option>
                                        <option value="good">Bon état</option>
                                        <option value="fair">État correct</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Section Prix -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Prix de base -->
                                <div>
                                    <label for="product-price" class="block text-sm font-medium text-gray-700 mb-1">Prix
                                        (€)*</label>
                                    <input type="number" id="product-price" name="price" min="0" step="0.01" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="42,00">
                                </div>

                                <!-- Promotion -->
                                <div>
                                    <label for="product-discount"
                                        class="block text-sm font-medium text-gray-700 mb-1">Réduction (%)</label>
                                    <input type="number" id="product-discount" name="discount" min="0" max="100"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="30">
                                </div>

                                <!-- Prix après réduction (calculé automatiquement) -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Prix final</label>
                                    <div class="px-4 py-2 bg-gray-100 rounded-lg font-bold text-[#008751] text-lg"
                                        id="final-price">
                                        42,00 €
                                    </div>
                                </div>
                            </div>

                            <!-- Section Images -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Images du produit*</label>
                                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                    <div id="drop-area" class="cursor-pointer">
                                        <div class="flex flex-col items-center justify-center space-y-2">
                                            <i class="fas fa-cloud-upload-alt text-4xl text-indigo-500"></i>
                                            <p class="text-sm text-gray-600">Glissez-déposez vos images ici ou cliquez
                                                pour sélectionner</p>
                                            <p class="text-xs text-gray-500">Formats acceptés: JPG, PNG (max 5MB par
                                                image)</p>
                                        </div>
                                        <input type="file" id="file-input" name="images" multiple accept="image/*"
                                            class="hidden">
                                    </div>

                                    <!-- Aperçu des images téléchargées -->
                                    <div id="image-preview"class="mt-4 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 hidden">
                                        <div class="relative">
                                            <img class="h-32 w-full object-cover rounded-lg border" src=""alt="Aperçu image">
                                            <button type="button" class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center hover:bg-red-600">
                                                <i class="fas fa-times text-xs"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Bouton pour définir l'image principale -->
                                    <div id="set-main-image" class="mt-3 hidden">
                                        <p class="text-sm text-gray-600 mb-2">Cliquez sur une image pour la définir comme principale</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section Tailles (si applicable) -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tailles disponibles</label>
                                <div class="flex flex-wrap gap-2">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="XS"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-2 text-sm text-gray-700">XS</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="S"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            checked>
                                        <span class="ml-2 text-sm text-gray-700">S</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="M"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            checked>
                                        <span class="ml-2 text-sm text-gray-700">M</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="L"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            checked>
                                        <span class="ml-2 text-sm text-gray-700">L</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="XL"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                            checked>
                                        <span class="ml-2 text-sm text-gray-700">XL</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="sizes" value="XXL"
                                            class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <span class="ml-2 text-sm text-gray-700">XXL</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Section Localisation -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="product-city"
                                        class="block text-sm font-medium text-gray-700 mb-1">Ville*</label>
                                    <input type="text" id="product-city" name="city" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="Ex: Paris">
                                </div>
                                <div>
                                    <label for="product-district"
                                        class="block text-sm font-medium text-gray-700 mb-1">Arrondissement/Quartier</label>
                                    <input type="text" id="product-district" name="district"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                        placeholder="Ex: 15e">
                                </div>
                            </div>

                            <!-- Boutons de soumission -->
                            <div class="flex justify-end space-x-4 pt-4">
                                <button type="button" class="md:px-6 md:py-2 px-4 py-1 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                                    Annuler
                                </button>
                                <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    Publier le produit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Section Rendez-vous -->
                <div id="appointments-section" class="dashboard-section">
                    <div class="bg-white rounded-xl shadow-sm p-5 mb-6">
                        <h2 class="text-2xl font-bold mb-6 text-indigo-800">Mes Rendez-vous</h2>

                        <!-- Filtres -->
                        <div class="flex flex-wrap gap-3 mb-6">
                            <button
                                class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium">Tous</button>
                            <button
                                class="px-4 py-2 bg-white border text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50">Aujourd'hui</button>
                            <button
                                class="px-4 py-2 bg-white border text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50">À
                                venir</button>
                            <button
                                class="px-4 py-2 bg-white border text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-50">Passés</button>
                        </div>

                        <!-- [Contenu des rendez-vous similaire à votre tableau existant mais étendu] -->
                    </div>
                </div>

                <!-- Section Messages -->
                <div id="messages-section" class="dashboard-section">
                    <div class="bg-white rounded-xl shadow-sm p-5 mb-6">
                        <h2 class="text-2xl font-bold mb-6 text-indigo-800">Messages</h2>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <!-- Liste des conversations -->
                            <div class="lg:col-span-1 border rounded-lg overflow-hidden">
                                <div class="p-4 border-b bg-gray-50">
                                    <div class="relative">
                                        <input type="text" placeholder="Rechercher une conversation..."
                                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                                    </div>
                                </div>
                                <div class="divide-y divide-gray-200 max-h-[600px] overflow-y-auto">
                                    <!-- Conversation 1 -->
                                    <div
                                        class="p-4 hover:bg-gray-50 cursor-pointer border-l-4 border-indigo-500 bg-indigo-50">
                                        <div class="flex items-center space-x-3">
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt=""
                                                class="w-10 h-10 rounded-full">
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">Pierre Martin</p>
                                                <p class="text-sm text-gray-500 truncate">La chaise est-elle toujours
                                                    disponible?</p>
                                            </div>
                                            <div class="text-xs text-gray-500">14:30</div>
                                        </div>
                                    </div>
                                    <!-- [Autres conversations...] -->
                                </div>
                            </div>

                            <!-- Zone de discussion -->
                            <div class="lg:col-span-2 border rounded-lg overflow-hidden flex flex-col">
                                <div class="p-4 border-b bg-gray-50 flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt=""
                                        class="w-10 h-10 rounded-full">
                                    <div>
                                        <p class="font-medium">Pierre Martin</p>
                                        <p class="text-xs text-gray-500">En ligne</p>
                                    </div>
                                </div>

                                <!-- Messages -->
                                <div class="flex-1 p-4 space-y-4 overflow-y-auto max-h-[500px]">
                                    <!-- Message reçu -->
                                    <div class="flex items-start space-x-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt=""
                                            class="w-8 h-8 rounded-full mt-1">
                                        <div>
                                            <div class="bg-gray-100 p-3 rounded-lg max-w-xs lg:max-w-md">
                                                <p>Bonjour, la chaise design est-elle toujours disponible?</p>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-1">14:30</p>
                                        </div>
                                    </div>

                                    <!-- Message envoyé -->
                                    <div class="flex items-start space-x-3 justify-end">
                                        <div class="text-right">
                                            <div class="bg-indigo-100 p-3 rounded-lg max-w-xs lg:max-w-md">
                                                <p>Oui, elle est toujours disponible. Vous souhaitez venir la voir?</p>
                                            </div>
                                            <p class="text-xs text-gray-500 mt-1">14:32 <i
                                                    class="fas fa-check-double text-indigo-500 ml-1"></i></p>
                                        </div>
                                        <img src="https://randomuser.me/api/portraits/women/46.jpg" alt=""
                                            class="w-8 h-8 rounded-full mt-1">
                                    </div>
                                </div>

                                <!-- Zone d'envoi -->
                                <div class="p-4 border-t">
                                    <div class="flex items-center space-x-2">
                                        <input type="text" placeholder="Écrivez un message..."
                                            class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <button
                                            class="p-2 rounded-full bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus-visible">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

        </main>
    </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        // Navigation entre les sections
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion du clic sur les liens de navigation
            document.querySelectorAll('[data-section]').forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Désactive toutes les sections et liens
                    document.querySelectorAll('.dashboard-section').forEach(section => {
                        section.classList.remove('active');
                    });
                    document.querySelectorAll('.nav-item').forEach(item => {
                        item.classList.remove('active', 'bg-indigo-700');
                    });

                    // Active la section cible
                    const sectionId = this.getAttribute('data-section') + '-section';
                    document.getElementById(sectionId).classList.add('active');

                    // Met en surbrillance le lien actif
                    this.classList.add('active', 'bg-indigo-700');

                    // Ferme le sidebar sur mobile
                    if (window.innerWidth < 1024) {
                        document.querySelector('.sidebar').classList.remove('active');
                        document.getElementById('overlay').classList.remove('active');
                    }
                });
            });


            // Toggle sidebar
            const toggleSidebar = () => {
                const sidebar = document.querySelector('.sidebar');
                const mainContent = document.querySelector('.main-content');
                const overlay = document.getElementById('overlay');

                if (window.innerWidth < 1024) {
                    // Mobile behavior
                    sidebar.classList.toggle('active');
                    overlay.classList.toggle('active');
                } else {
                    // Desktop behavior
                    sidebar.classList.toggle('collapsed');
                    mainContent.classList.toggle('lg:ml-[80px]');
                }
            };

            document.getElementById('toggleSidebar').addEventListener('click', toggleSidebar);
            document.getElementById('mobileMenuButton').addEventListener('click', toggleSidebar);
            document.getElementById('overlay').addEventListener('click', toggleSidebar);

            // Close mobile sidebar when clicking a nav item
            document.querySelectorAll('.nav-item').forEach(item => {
                item.addEventListener('click', function () {
                    if (window.innerWidth < 1024) {
                        toggleSidebar();
                    }
                });
            });
        });

        // Initialize chart
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('salesChart').getContext('2d');
            const salesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                    datasets: [{
                        label: 'Ventes',
                        data: [3, 5, 2, 4, 6, 8, 4],
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        borderColor: 'rgba(79, 70, 229, 1)',
                        borderWidth: 2,
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                        }
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                stepSize: 2
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Responsive chart resize
            window.addEventListener('resize', function () {
                salesChart.resize();
            });
        });

        // Add focus-visible class for keyboard navigation
        document.addEventListener('keyup', function (e) {
            if (e.key === 'Tab') {
                document.querySelectorAll('button, a, input, [tabindex]').forEach(el => {
                    el.classList.add('focus-visible');
                });
            }
        });

    </script>
</body>

</html>