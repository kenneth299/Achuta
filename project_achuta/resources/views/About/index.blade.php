@extends('Container.index')

@section('contain')

<section class="hero-pattern py-16 md:py-24">
    <div class="container mx-auto px-6">
      <div class="max-w-4xl mx-auto text-center">
        <span class="inline-block px-3 py-1 text-sm font-semibold text-[#008751] bg-[#f2f9fe] rounded-full mb-4">NOTRE HISTOIRE</span>
        <h1 class="text-4xl md:text-5xl font-bold mt-4 mb-6">Plus qu'une marketplace,<br>une <span
            class="text-[#008751]">communauté locale</span></h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          Achuta connecte les passionnés de votre région pour des transactions sans commission, en toute confiance.
        </p>
      </div>
    </div>
  </section>

  


  <!-- Notre Mission -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
          <div class="w-full h-full relative flex items-center justify-center">
            <div class="w-auto h-auto">
                <img src="./assets/image/freepik__a-smiling-black-young-woman-with-curly-hair-stands__80660.jpeg" alt="" class="object-cover w-full h-80 rounded-xl shadow-b-xl">
            </div>
            <span class="absolute lg:left-0 left-7 top-14 flex items-center gap-2 px-4 py-2 rounded-full bg-white shadow-md">
                <svg class="w-5 h-5 mx-auto text-[#008751]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg> Vendeurs
            </span>

            <span class="absolute right-3 bottom-14 flex items-center gap-2 px-4 py-2 rounded-full bg-white shadow-md">
                <svg class="w-5 h-5 mx-auto text-[#008751]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg> acheteurs
            </span>
        </div>
        </div>
        <div class="md:w-1/2">
          <span class="inline-block px-3 py-1 text-sm font-semibold text-[#008751] bg-[#f2f9fe] rounded-full mb-4">NOTRE RAISON D'ÊTRE</span>
          <h2 class="text-3xl font-bold mt-2 mb-6">Redonner du pouvoir aux économies locales</h2>
          <p class="text-gray-600 mb-6">
            Fondée en 2023, Achuta est née d'un constat simple : les plateformes traditionnelles prennent des
            commissions trop élevées tout en éloignant les utilisateurs les uns des autres.
          </p>
          <ul class="space-y-4">
            <li class="flex items-start">
              <svg class="w-6 h-6 text-[#008751] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span><strong>0% de commission</strong> - Gardez l'intégralité de vos ventes</span>
            </li>
            <li class="flex items-start">
              <svg class="w-6 h-6 text-[#008751] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span><strong>Rencontres locales</strong> - Échangez directement comme en vrai</span>
            </li>
            <li class="flex items-start">
              <svg class="w-6 h-6 text-[#008751] mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span><strong>Écologique</strong> - Privilégiez le réemploi près de chez vous</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Timeline -->
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="max-w-3xl mx-auto text-center mb-12">
        <span class="inline-block px-3 py-1 text-sm font-semibold text-[#008751] bg-[#f2f9fe] rounded-full mb-4">NOTRE PARCOURS</span>
        <h2 class="text-3xl font-bold mt-2">L'évolution d'Achuta</h2>
      </div>

      <div class="relative max-w-2xl mx-auto">
        <!-- Timeline bar -->
        <div class="absolute left-4 top-0 h-full w-0.5 bg-[#008751] bg-opacity-30"></div>

        <!-- Timeline items -->
        <div class="space-y-12">
          <div class="relative timeline-item pl-12">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
              <span class="text-[#008751] font-medium">Janvier 2023</span>
              <h3 class="text-xl font-bold mt-1">Naissance du projet</h3>
              <p class="mt-2 text-gray-600">
                L'idée germe après une mauvaise expérience avec les plateformes traditionnelles. Premiers prototypes.
              </p>
            </div>
          </div>

          <div class="relative timeline-item pl-12">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
              <span class="text-[#008751] font-medium">Mai 2023</span>
              <h3 class="text-xl font-bold mt-1">Lancement beta</h3>
              <p class="mt-2 text-gray-600">
                200 utilisateurs testeurs recrutés dans notre ville natale. Premières transactions réussies !
              </p>
            </div>
          </div>

          <div class="relative timeline-item pl-12">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
              <span class="text-[#008751] font-medium">Septembre 2023</span>
              <h3 class="text-xl font-bold mt-1">Version 1.0</h3>
              <p class="mt-2 text-gray-600">
                Ouverture à 5 nouvelles villes. Dépassement des 10 000 utilisateurs actifs.
              </p>
            </div>
          </div>

          <div class="relative timeline-item pl-12">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
              <span class="text-[#008751] font-medium">Aujourd'hui</span>
              <h3 class="text-xl font-bold mt-1">Notre ambition</h3>
              <p class="mt-2 text-gray-600">
                Couvrir toute la région d'ici fin 2024, avec des fonctionnalités sociales renforcées.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-16 bg-[#f9fafb]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <span class="inline-block px-3 py-1 text-sm font-semibold text-[#008751] bg-[#f2f9fe] rounded-full mb-4">NOTRE MISSION</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Redonner du pouvoir aux échanges locaux</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Nous croyons en une économie plus directe, plus humaine et plus bénéfique pour tous.</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md mission-card transition duration-300">
                <div class="w-12 h-12 bg-[#f2f9fe] rounded-full flex items-center justify-center text-[#008751] mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Transactions humaines</h3>
                <p class="text-gray-600">Nous favorisons les rencontres en présentiel pour recréer du lien social dans les échanges commerciaux.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-md mission-card transition duration-300">
                <div class="w-12 h-12 bg-[#f2f9fe] rounded-full flex items-center justify-center text-[#008751] mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Zéro commission</h3>
                <p class="text-gray-600">Contrairement aux autres plateformes, Achuta ne prend aucun pourcentage sur vos ventes.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-md mission-card transition duration-300">
                <div class="w-12 h-12 bg-[#f2f9fe] rounded-full flex items-center justify-center text-[#008751] mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Sécurité renforcée</h3>
                <p class="text-gray-600">Notre système de notation et de messagerie intégrée protège acheteurs et vendeurs.</p>
            </div>
        </div>
    </div>
</section>

 

  
  <section class="py-16 bg-gradient-to-r from-[#008751] to-[#006b43] text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Prêt à rejoindre la communauté ?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Inscrivez-vous en 2 minutes et commencez à vendre ou acheter près de chez vous.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <button class="bg-white hover:bg-gray-100 text-[#008751] font-bold py-3 px-8 rounded-lg transition duration-300">
                S'inscrire gratuitement
            </button>
            <button class="border border-white hover:bg-white hover:text-[#008751] font-bold py-3 px-8 rounded-lg transition duration-300">
                Nous contacter
            </button>
        </div>
    </div>
</section>


@endsection