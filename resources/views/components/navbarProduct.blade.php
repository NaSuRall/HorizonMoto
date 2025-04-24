<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    .navbar {
        background-color: #000000;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px 0;
        font-family: Arial, sans-serif;
    }

    .navbar-container {
        max-width: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        flex-wrap: wrap;
    }

    .logo img {
        height: 50px;
    }

    .nav-links {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
    }

    .nav-links a {
        text-decoration: none;
        color: #ffffff;
        font-weight: 500;
        transition: color 0.3s;
    }

    .nav-links a:hover {
        color: var(--color-btn-red);
    }

    .auth-links, .account {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .auth-links a {
        text-decoration: none;
        padding: 8px 12px;
        border: 1px solid var(--color-btn-red);
        color: white;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .auth-links a:hover {
        background-color: var(--color-btn-red);
        color: white;
    }

    .account img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--color-btn-red);
    }
</style>
<div class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('logo.png') }}" alt="Logo">
        </div>

        <!-- Onglets de navigation -->
        <div class="nav-links">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="#">Destockage</a>
            <a href="#">Contact</a>
            <a href="#">Nouveauté</a>
        </div>

        <!-- Compte ou Connexion -->
        @if(Auth::check())
            <div class="account">
                <a href="">
                    <img src="{{ asset('K') }}" alt="Avatar">
                </a>
            </div>
        @else
            <div class="auth-links">
                <a href="">Se connecter</a>
                <a href="">S'inscrire</a>
            </div>
        @endif
    </div>
</div>

