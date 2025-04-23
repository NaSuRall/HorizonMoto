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
        justify-content: space-around;
        background-color: black;
        width: 100%;
        height: 98px;

        & .onglets{
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            & a{
                text-decoration: none;
                font-size: 18px;
                color: white;
                transition: 0.5s all ease-in-out;
                padding: 10px 20px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                border-right: 2px solid #ffffff;
            }
            & a:hover{
                background-image: linear-gradient(to left, red, black);
                background-repeat: repeat-x;
                background-size: auto 100%;
                animation: bgScroll 5s linear infinite;
                height: 100%;
            }
        }
    }



</style>
<div class="content">
    <div class="navbar">

        <div class="onglets">
            <a href="#">Produits</a>
            <a href="#">Destockage</a>
            <a href="#">Contact</a>
            <a href="#">Nouvauté</a>
           <!-- Si il est connecter afficher mon compte sinon se connecter login-->
        </div>
    </div>
</div>

