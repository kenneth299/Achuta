<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Achuta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3.8.0/notyf.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
</style>

<body class="flex h-screen">
    <!-- Partie Menu (Sidebar) -->
    <aside class="w-64 bg-[#071114] text-white p-5 fixed h-full flex flex-col lg">
        <!-- Logo/Titre -->
        <div class="mb-10">
            <h1 class="text-2xl font-bold">ACHUTA/DAT/v0.1</h1>
        </div>

        <!-- Navigation principale -->
        <nav class="flex-1">
            <ul class="space-y-1">
                <li>
                    <a href="#" class="flex items-center text-[#008751] py-2 rounded-lg hover:text-[#008751] transition-all">
                      <i class="fas fa-tachometer-alt mr-3 text-[#008751]"></i>
                        Acceuil
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                        <i class="fas fa-tag mr-3"></i>
                         Annonces
                        <span class="ml-auto bg-white text-[#008751] text-xs px-2 py-1 rounded-full">42</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                        <i class="fas fa-comments mr-3"></i>
                        Messages
                        <span class="ml-auto bg-white text-[#008751] text-xs px-2 py-1 rounded-full">3</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                        <i class="fas fa-users mr-3"></i>
                        utilisateurs
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                        <i class="fas fa-chart-bar mr-3"></i>
                        Analytiques
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                        <i class="fas fa-flag mr-3"></i>
                        Signalements
                        <span class="ml-auto bg-white text-[#008751] text-xs px-2 py-1 rounded-full">7</span>
                    </a>
                </li>
            </ul>

            <!-- Section séparée en bas -->
            <div class="border-t border-gray-700 mt-5 pt-5">
                <ul class="space-y-1">
                    <li>
                        <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                            <i class="fas fa-shield-alt mr-3"></i>
                            Modération
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                            <i class="fas fa-cog mr-3"></i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center text-gray-500 py-2 rounded-lg hover:text-[#008751] transition-all">
                                    <i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
                                </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <section>
            <!-- Profil utilisateur avec menu déroulant -->
            <div class="pt-3 border-t border-gray-700 relative">
                <div class="flex items-center justify-between p-2 rounded-lg">
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-700 rounded-full mr-3 relative">
                            <img src="./assects/Brice_gboyou_fondateur_et_CEO-removebg-preview.png" alt="img/admin"
                                class="w-full h-full rounded-full">
                            <span
                                class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <p class="font-medium text-sm">{{Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">Administrateur</p>
                        </div>
                    </div>

                    <!-- Icône trois points -->
                    {{-- <button class="text-gray-400 hover:text-[#008751] transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                    </button> --}}
                </div>

                <!-- Menu déroulant (caché par défaut) -->
            </div>

        </section>
    </aside>


    <!-- Partie Contenu (Main Content) -->
    <main class="flex-1 ml-64 p-8 overflow-y-auto bg-white">
        <!-- En-tête -->
        <header class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-2xl font-semibold">Tableau de bord</h2>
                <p class="text-sm text-gray-500">Bienvenue sur votre espace administrateur</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Rechercher..."
                        class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#008751]/50">
                </div>
                <button class="p-2 rounded-full bg-gray-200 hover:bg-gray-300">
                    <i class="fas fa-bell text-gray-600"></i>
                </button>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Utilisateurs Actifs -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-gray-500 font-medium">Utilisateurs Actifs</h3>
                        <p class="text-3xl font-bold mt-2">1,248</p>
                    </div>
                    <div class="bg-[#008751]/10 p-3 rounded-full">
                        <i class="fas fa-users text-[#008751]"></i>
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <span class="bg-[#008751]/10 text-[#008751] text-xs px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-arrow-up mr-1 text-xs"></i>
                        +18%
                    </span>
                    <span class="text-gray-500 text-xs ml-2">vs mois dernier</span>
                </div>
            </div>

            <!-- Transactions -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-gray-500 font-medium">Rencontres</h3>
                        <p class="text-3xl font-bold mt-2">542</p>
                    </div>
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-exchange-alt text-blue-500"></i>
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <span class="bg-[#008751]/10 text-[#008751] text-xs px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-arrow-up mr-1 text-xs"></i>
                        +32%
                    </span>
                    <span class="text-gray-500 text-xs ml-2">vs mois dernier</span>
                </div>
            </div>

            <!-- Revenus -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-gray-500 font-medium">Revenus</h3>
                        <p class="text-3xl font-bold mt-2">$24,760</p>
                    </div>
                    <div class="bg-purple-100 p-3 rounded-full">
                        <i class="fas fa-dollar-sign text-purple-500"></i>
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <span class="bg-[#008751]/10 text-[#008751] text-xs px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-arrow-up mr-1 text-xs"></i>
                        +22%
                    </span>
                    <span class="text-gray-500 text-xs ml-2">vs mois dernier</span>
                </div>
            </div>
            <!-- Taux de Conversion -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-gray-500 font-medium">Conversion</h3>
                        <p class="text-3xl font-bold mt-2">3.2%</p>
                    </div>
                    <div class="bg-yellow-100 p-3 rounded-full">
                        <i class="fas fa-percent text-yellow-500"></i>
                    </div>
                </div>
                <div class="flex items-center mt-4">
                    <span class="bg-red-100 text-red-500 text-xs px-2 py-1 rounded-full flex items-center">
                        <i class="fas fa-arrow-down mr-1 text-xs"></i>
                        -0.4%
                    </span>
                    <span class="text-gray-500 text-xs ml-2">vs mois dernier</span>
                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <!-- Activité des Utilisateurs -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Activité des Utilisateurs</h3>
                    <select class="text-sm border rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-[#008751]/50">
                        <option>7 derniers jours</option>
                        <option>30 derniers jours</option>
                        <option>3 derniers mois</option>
                    </select>
                </div>
                <div class="h-64 bg-gray-50 rounded flex items-center justify-center">
                    <p class="text-gray-400">Graphique d'activité à intégrer</p>
                </div>
            </div>

            <!-- Répartition Géographique -->
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">Répartition Géographique</h3>
                    <select class="text-sm border rounded px-3 py-1 focus:outline-none focus:ring-2 focus:ring-[#008751]/50">
                        <option>Par pays</option>
                        <option>Par région</option>
                    </select>
                </div>
                <div class="h-64 bg-gray-50 rounded flex items-center justify-center">
                    <p class="text-gray-400">Carte géographique à intégrer</p>
                </div>
            </div>
        </div>

        <a href="/guide-rencontres" class="text-[#008751] hover:underline">
            <i class="fas fa-handshake mr-2"></i>Guide des rencontres sécurisées
        </a>
        
        <!-- <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
            <div class="p-4 border-b flex justify-between items-center">
                <h3 class="font-semibold">Dernières Transactions</h3>
                <a href="#" class="text-[#008751] text-sm hover:underline">Voir tout →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#AHU-5421</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Entreprise XYZ</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$1,240</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12/10/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Complété</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <button class="text-[#008751] hover:text-[#006641]">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->

        <!-- Quick Actions -->
        <!-- <div class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4">
            <button class="bg-[#008751] text-white py-3 px-4 rounded-lg flex items-center justify-center hover:bg-[#006641] transition-colors">
                <i class="fas fa-plus mr-2"></i>
                Nouvelle Transaction
            </button>
            <button class="bg-white border border-gray-300 py-3 px-4 rounded-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <i class="fas fa-file-export mr-2"></i>
                Exporter
            </button>
            <button class="bg-white border border-gray-300 py-3 px-4 rounded-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <i class="fas fa-filter mr-2"></i>
                Filtrer
            </button>
            <button class="bg-white border border-gray-300 py-3 px-4 rounded-lg flex items-center justify-center hover:bg-gray-50 transition-colors">
                <i class="fas fa-cog mr-2"></i>
                Paramètres
            </button>
        </div> -->

    </main>





     <script src="js/script.js"></script>
</body>

</html>