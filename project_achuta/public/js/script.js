document.addEventListener('DOMContentLoaded', function () {
    // 1. Initialisation des carrousels Splide
    const initSlides = () => {
        const sliders = document.querySelectorAll('.splide');
        if (sliders.length > 0) {
            sliders.forEach(slider => {
                new Splide(slider, {
                    type: 'loop',
                    perPage: 1,
                    autoplay: true,
                    interval: 3000,
                    pauseOnHover: true,
                    arrows: false,
                    pagination: false
                }).mount();
            });
        }
    };
    initSlides();

    // 2. Carrousel personnalisé
    const initCustomCarousel = () => {
        const carousel = document.getElementById('caroucel');
        const btnPrev = document.getElementById('trend-prev');
        const btnNext = document.getElementById('trend-next');

        if (carousel && btnPrev && btnNext) {
            btnNext.addEventListener('click', () => {
                carousel.scrollBy({ left: 320, behavior: 'smooth' });
            });

            btnPrev.addEventListener('click', () => {
                carousel.scrollBy({ left: -320, behavior: 'smooth' });
            });
        }
    };
    initCustomCarousel();

    // 3. Gestion du menu mobile
    const initMobileMenu = () => {
        const menuButton = document.querySelector('.mobile-menu-button');
        const menuMobile = document.querySelector('.mobile-menu');
        const closeButton = document.querySelector('.close-menu-button');
        const overlay = document.querySelector('.overlay');

        if (menuButton && menuMobile && closeButton && overlay) {
            const openMenu = () => {
                menuMobile.classList.replace('translate-x-full', 'translate-x-0');
                overlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            };

            const closeMenu = () => {
                menuMobile.classList.replace('translate-x-0', 'translate-x-full');
                overlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            };

            menuButton.addEventListener('click', openMenu);
            closeButton.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);

            document.querySelectorAll('.mobile-menu a').forEach(link => {
                link.addEventListener('click', closeMenu);
            });
        }
    };
    initMobileMenu();

    // 4. Gestion du tri
    const initSortMenu = () => {
        const sortButton = document.getElementById('sortButton');
        const sortMenu = document.getElementById('sortMenu');
        const selectedSort = document.getElementById('selectedSort');

        // Affiche ou cache le menu quand on clique sur le bouton
        sortButton.addEventListener('click', () => {
            sortMenu.classList.toggle('hidden');
        });

        // Quand on clique sur un élément du menu
        sortMenu.querySelectorAll('li').forEach(item => {
            item.addEventListener('click', () => {
                selectedSort.textContent = `Trier par : ${item.textContent}`;
                sortMenu.classList.add('hidden');

                // Ici tu peux appeler une fonction pour trier réellement les produits
                console.log("Tri par :", item.textContent);
            });
        });

        // Optionnel : Ferme le menu si on clique ailleurs
        document.addEventListener('click', (e) => {
            if (!sortButton.contains(e.target) && !sortMenu.contains(e.target)) {
                sortMenu.classList.add('hidden');
            }
        });
    };
    initSortMenu();
});



const loginTab = document.getElementById('login-tab');
const registerTab = document.getElementById('register-tab');
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
const toggleAuths = document.querySelectorAll('.toggle-auth');

// Basculer entre connexion et inscription
function showLogin() {
    loginTab.classList.add('active', 'text-[#008751]', 'border-[#008751]');
    loginTab.classList.remove('text-gray-500');
    registerTab.classList.remove('active', 'text-[#008751]', 'border-[#008751]');
    registerTab.classList.add('text-gray-500');
    loginForm.classList.remove('hidden');
    registerForm.classList.add('hidden');
}

function showRegister() {
    registerTab.classList.add('active', 'text-[#008751]', 'border-[#008751]', 'border-b-2');
    registerTab.classList.remove('text-gray-500');
    loginTab.classList.remove('active', 'text-[#008751]', 'border-[#008751]');
    loginTab.classList.add('text-gray-500');
    registerForm.classList.remove('hidden');
    loginForm.classList.add('hidden');
}

// Événements
loginTab.addEventListener('click', showLogin);
registerTab.addEventListener('click', showRegister);
toggleAuths.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        if (btn.textContent.trim() === "S'inscrire") {
            showRegister();
        } else {
            showLogin();
        }
    });
});







//controller formulaire

document.addEventListener('DOMContentLoaded', function () {
    const registerForm = document.querySelector('#register-form form');

    registerForm.addEventListener('submit', function (e) {
        let isValid = true;

       

        // Validation de l'email
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
            showError(email, 'Veuillez entrer une adresse email valide');
            isValid = false;
        }

        // Validation du mot de passe
        const password = document.getElementById('register-password');
        const passwordRegex = /^(?=.*\d).{8,}$/;
        if (!passwordRegex.test(password.value)) {
            showError(password, 'Au moins 8 caractères dont 1 chiffre');
            isValid = false;
        }

        // Validation de la confirmation du mot de passe
        const confirmPassword = document.getElementById('password-confirm');
        if (confirmPassword.value !== password.value) {
            showError(confirmPassword, 'Les mots de passe ne correspondent pas');
            isValid = false;
        }


        if (!isValid) {
            e.preventDefault();
        }
    });

    function showError(input, message) {
        // Crée ou met à jour un élément d'erreur
        let errorElement = input.nextElementSibling;
        if (!errorElement || !errorElement.classList.contains('error-message')) {
            errorElement = document.createElement('p');
            errorElement.className = 'error-message text-xs text-red-600 mt-1';
            input.parentNode.insertBefore(errorElement, input.nextSibling);
        }
        errorElement.textContent = message;

        // Ajoute une classe d'erreur au champ
        input.classList.add('border-red-500');
    }

    // Supprime les erreurs lors de la saisie
    const inputs = document.querySelectorAll('.input-field');
    inputs.forEach(input => {
        input.addEventListener('input', function () {
            this.classList.remove('border-red-500');
            const errorElement = this.nextElementSibling;
            if (errorElement && errorElement.classList.contains('error-message')) {
                errorElement.remove();
            }
        });
    });
});

//mot de passe connexion
function identifiedPassword() {
    const passwordIdentified = document.getElementById('password-identified');
    const eyeOpenidentified = document.getElementById('eye-open-identified');
    const eyeClosedidentified = document.getElementById('eye-closed-identified');

    // Basculer entre 'password' et 'text'
    if (passwordIdentified.type === 'password') {
        passwordIdentified.type = 'text';
        eyeOpenidentified.classList.remove('hidden');
        eyeClosedidentified.classList.add('hidden');
    } else {
        passwordIdentified.type = 'password';
        eyeOpenidentified.classList.add('hidden');
        eyeClosedidentified.classList.remove('hidden');
    }
}

//mot de passe affiche inscription
function togglePassword() {
    const passwordField = document.getElementById('register-password');
    const eyeOpen = document.getElementById('eye-open');
    const eyeClosed = document.getElementById('eye-closed');

    // Basculer entre 'password' et 'text'
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeOpen.classList.remove('hidden');
        eyeClosed.classList.add('hidden');
    } else {
        passwordField.type = 'password';
        eyeOpen.classList.add('hidden');
        eyeClosed.classList.remove('hidden');
    }
}



//affiche mot de passe de comfirmation
function confirmPassword() {
    const passwordConfirm = document.getElementById('password-confirm');
    const eyeOpenconfirm = document.getElementById('eye-open-confirm');
    const eyeClosedconfirm = document.getElementById('eye-closed-confirm');

    // Basculer entre 'password' et 'text'
    if (passwordConfirm.type === 'password') {
        passwordConfirm.type = 'text';
        eyeOpenconfirm.classList.remove('hidden');
        eyeClosedconfirm.classList.add('hidden');
    } else {
        passwordConfirm.type = 'password';
        eyeOpenconfirm.classList.add('hidden');
        eyeClosedconfirm.classList.remove('hidden');
    }
}




