<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    .content{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navbar{
        display: flex;
        align-content: center;
        justify-content: center;
        background-color: black;
        width: 100%;
        height: 78px;

        & .onglets{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            gap: 20px;
            & a{
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                color: #ffffff;
                width: 150px;
                height: 70%;
                padding: 20px;

                border-radius: 10px;
            }
        }
        & .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;

            & img{
                width: 30%;
            }
        }
    }

</style>
<div class="content">
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('logo.png') }}" alt="">
        </div>
        <div class="onglets">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="#">Destockage</a>
            <a href="#">Contact</a>
            <a href="#">Nouvauté</a>


            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="account">
                    <div class="round">
                        <img src="{{ asset('K') }}" alt="">
                    </div>
                </div>
            @else
                <div class="registration">
                    <a href="#"> Se Connecter</a>
                    <a href="#"> S'inscrire</a>
                </div>
            @endif
            <!-- Si il est connecter afficher mon compte sinon se connecter login-->
        </div>
    </div>
</div>

