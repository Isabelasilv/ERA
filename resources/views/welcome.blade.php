<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto TCC</title>
        <link rel="stylesheet" type="text/css" href="css/welcome.css">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

body {
    background-color:	#D3D3D3;
 }

 .logoverde {
    top: 30px;
    left: 30px;
    position: absolute;
}

footer {
    
    top: 680px;
    left: 0px;
    position: absolute;
    bottom: 8;
    background-color:#39c339;
    color: #000000;
    width: 100%;
    height: 90px;    
    text-align: center;
    line-height: 30px;
    
}

.logotipo img {
    opacity: 0;
    position: absolute;
 
    width: 300%;
    height: 100%;
 
    object-fit: cover;
 
}
.redes {
   width: 100%;
   text-align: center;
   
}

.redes ul li {
   text-transform: uppercase;
   list-style-type: none;
   display: inline;
}
@media only screen and (min-width: 450px)
and (max-width: 769px){
   footer {
       clear: both;
       width: 100%;
    }
    .logotipo {
        width: 50%;
        float: left;
        
        text-align: left;
    }
    .redes {
        width: 50%;
        float: right;
       
    }
}
@media only screen and (min-width: 769px) {
   footer {
       width: 100%;
       clear: both;
       margin-bottom: 5%;
   }
   .logotipo {
       font-size: 1em;
       width: 50%;
       float: left;
       text-align: left;
       font-family: cursive;   
       
    }
    .logotipo img, .redes img {
        width: 7%;
    }
    .redes {
        width: 35%;
        float: right;
        margin-right: 3%;
        text-align: right;
    }
}


@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

 @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
 
            html, body {
                background-color: 
                color: #264527;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
 
        </style>
    </head>

    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif
            <img id="logo" src="img/logo01.png" alt="logo" width="1000" height="500">
        </div>

        <footer>
            <div class="logoverde" width="1530" height="450" >
                 Para mais informações, siga nossas redes sociais!
            </div>
            <nav class="redes" width="50" height="50">
                <ul>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/instagram.png"  alt="Perfil no Instagram"></a></li>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/facebook.png" alt="Perfil no Twitter"></a></li>
                    <li><a href="https://www.instagram.com/corpoevidaacademia/" target="_blank"><img src="img/telegram.png" alt="Perfil no Twitter"></a></li>
               </ul>
            </nav>
        </footer>

    </body>
</html>

