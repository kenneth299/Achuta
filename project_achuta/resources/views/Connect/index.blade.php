@extends('Container.index')

@section('contain')
<section class="min-h-screen flex items-center justify-center flex-col p-5">
<div class="flex justify-center py-6">
        {{-- <div class="w-48 h-12 items-center justify-center flex">
            <!-- Remplacez par votre logo image si vous en avez un -->
             <h1 class="text-3xl text-[#008751]">Achûta</h1> 
        </div> --}}
    </div>
    <div class="w-full max-w-md bg-white shadow-lg overflow-hidden">
        <!-- En-tête avec onglets -->
        <div class="flex border-b">
            <button id="login-tab" class="tab-btn active flex-1 py-4 font-medium text-center text-[#008751] border-b-2 border-[#008751]">
                Connexion
            </button>
            <button id="register-tab" class="tab-btn flex-1 py-4 font-medium text-center text-gray-500">
                Inscription
            </button>
        </div>

        <!-- Contenu des onglets -->
        <div class="p-8">
            <!-- Formulaire de Connexion -->
            <div id="login-form" class="auth-form">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Connectez-vous à votre compte</h2>
                
                <!-- Boutons sociaux -->
                <div class="space-y-4 mb-6">
                    <button class="social-btn w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg bg-white text-gray-700 font-medium transition-all duration-300">
                        <i class="fab fa-google text-red-500 mr-3"></i>
                        Continuer avec Google
                    </button>
                    <button class="social-btn w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg bg-white text-gray-700 font-medium transition-all duration-300">
                        <i class="fab fa-facebook-f text-blue-600 mr-3"></i>
                        Continuer avec Facebook
                    </button>
                </div>

                <div class="flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 text-gray-500">ou</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <!-- Formulaire email/mot de passe -->
                <form class="space-y-4" method="POST" action="{{ route('login') }}">
                     @csrf
                    <div>
                        <label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                          <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus class="form-control @error('email') is-invalid @enderror input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="tanjirokamado@gmail.com" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div>
    <label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
       <div class="relative">
           <input id="password-identified" type="password" name="password" autocomplete="current-password" class="form-control @error('password') is-invalid @enderror input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="••••••••" required>
           <button type="button" onclick="identifiedPassword()"
                class="absolute right-3 top-3 text-gray-500 hover:text-gray-700 focus:outline-none">
            <!-- SVG de l'œil (masqué par défaut) -->
            <svg id="eye-open-identified" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <!-- SVG de l'œil barré (visible par défaut) -->
            <svg id="eye-closed-identified" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
          </button>
        </div>
    @error('password')
        <span class="invalid-feedback text-right mt-1" role="alert">
            <p class="text-xs text-red-600">{{ $message }}</p>
        </span>
    @enderror
    <div class="text-right mt-1">
        <a href="#" class="text-sm text-[#008751] hover:underline">Mot de passe oublié ?</a>
    </div>
</div>


                    <button type="submit" class="w-full py-3 px-4 bg-[#008751] hover:bg-[#006b43] text-white font-medium rounded-lg transition duration-300">
                        Se connecter
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-gray-600">
                    Pas encore de compte ? <span class="toggle-auth text-[#008751] font-medium">S'inscrire</span>
                </div>
            </div>

            <!-- Formulaire d'Inscription -->
            <div id="register-form" class="auth-form hidden">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Créez votre compte Achuta</h2>
                
                <!-- Boutons sociaux -->
                <div class="space-y-4 mb-6">
                    <button class="social-btn w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg bg-white text-gray-700 font-medium transition-all duration-300">
                        <i class="fab fa-google text-red-500 mr-3"></i>
                        S'inscrire avec Google
                    </button>
                    <button class="social-btn w-full flex items-center justify-center py-3 px-4 border border-gray-300 rounded-lg bg-white text-gray-700 font-medium transition-all duration-300">
                        <i class="fab fa-facebook-f text-blue-600 mr-3"></i>
                        S'inscrire avec Facebook
                    </button>
                </div>

                <div class="flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <span class="mx-4 text-gray-500">ou</span>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>

                <!-- Formulaire d'inscription -->
                <form class="space-y-4" method="POST" action="{{ route('register') }}">
                     @csrf
                    <div>
                        <label for="register-name" class="block text-sm font-medium text-gray-700 mb-1">Nom & Prénom</label>
                        <input autocomplete="name" autofocus type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="KAMADO Tanjiro" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                               <p class="text-xs text-red-600">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                        
                    <div>
                        <label for="register-email" class=" block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control @error('email') is-invalid @enderror input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="tanjirokamado@gmail.com" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                              <p class="text-xs text-red-600">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                        <div class="relative">
                          <input type="password" id="register-password" name="password" required autocomplete="new-password" class="form-control @error('password') is-invalid @enderror input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="••••••••" required>
                          <button type="button" onclick="togglePassword()"
                class="absolute right-3 top-3 text-gray-500 hover:text-gray-700 focus:outline-none">
            <!-- SVG de l'œil (masqué par défaut) -->
            <svg id="eye-open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <!-- SVG de l'œil barré (visible par défaut) -->
            <svg id="eye-closed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
        </button>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="register-confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirmer le mot de passe</label>
                        <div class="relative">
                          <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control input-field w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" placeholder="••••••••" required>
                          <button type="button" onclick="confirmPassword()"
                class="absolute right-3 top-3 text-gray-500 hover:text-gray-700 focus:outline-none">
            <!-- SVG de l'œil (masqué par défaut) -->
            <svg id="eye-open-confirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
            <!-- SVG de l'œil barré (visible par défaut) -->
            <svg id="eye-closed-confirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
            </svg>
        </button>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="mt-1 mr-2 rounded border-gray-300 text-[#008751] focus:ring-[#008751]" required>
                        <label for="register-terms" class="text-sm text-gray-600">
                            J'accepte les <a href="#" class="text-[#008751] hover:underline">Conditions d'utilisation</a> et la <a href="#" class="text-[#008751] hover:underline">Politique de confidentialité</a>
                        </label>
                    </div>
                    <button type="submit" class="w-full py-3 px-4 bg-[#008751] hover:bg-[#006b43] text-white font-medium rounded-lg transition duration-300">
                        S'inscrire
                    </button>
                </form>

                <div class="mt-6 text-center text-sm text-gray-600">
                    Vous avez déjà un compte ? <span class="toggle-auth text-[#008751] font-medium">Se connecter</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection