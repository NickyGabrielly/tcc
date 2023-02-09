<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Akronim&family=Allan:wght@400;700&family=Aref+Ruqaa:wght@400;700&family=Atma:wght@500&family=Bahiana&family=Bangers&family=Berkshire+Swash&family=Bigelow+Rules&family=Bilbo&family=Ceviche+One&family=Charmonman&family=Codystar:wght@300;400&family=Cute+Font&family=Dokdo&family=DotGothic16&family=Eater&family=Englebert&family=Ewert&family=Fascinate+Inline&family=Faster+One&family=Finger+Paint&family=Freckle+Face&family=Frijole&family=Geo:ital@1&family=Goldman:wght@700&family=Iceberg&family=Inspiration&family=Jacques+Francois+Shadow&family=Julee&family=Just+Me+Again+Down+Here&family=Kaushan+Script&family=Kranky&family=Londrina+Shadow&family=Love+Ya+Like+A+Sister&family=Ma+Shan+Zheng&family=MedievalSharp&family=Megrim&family=Miniver&family=Molle&family=New+Rocker&family=Odibee+Sans&family=Over+the+Rainbow&family=Permanent+Marker&family=Pirata+One&family=Play&family=Port+Lligat+Slab&family=Quicksand&family=Ranga&family=Rationale&family=Ribeye+Marrow&family=Rubik+Glitch&family=Rubik+Puddles&family=Rubik+Wet+Paint&family=Ruslan+Display&family=Rye&family=Saira+Stencil+One&family=Sancreek&family=Shojumaru&family=Slackey&family=Smokum&family=Stick&family=Style+Script&family=Supermercado+One&family=Trade+Winds&family=UnifrakturCook&family=Unkempt&family=Vampiro+One&family=Vast+Shadow&family=Viga&family=Walter+Turncoat&family=Yatra+One&family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">

		<style>

			/* Faz com que não apareça a barra de rolagem, assim a nossa tela some de vez */
			html{
				white-space:nowrap;
			}

			body {
				/* Também faz com que não apareça a barra de rolagem */
				display:inline-block;
				overflow-x: hidden;
				overflow-y: hidden;


                background-image: url('https://media.gettyimages.com/videos/multicolored-motion-gradient-background-soft-background-colorful-video-id1220043602?s=640x640');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                text-align: center;
            }

            /********** PRIMEIRA PARTE "CAMADA 1" **********/
            /*
			img{
				padding: 0;
				margin: 0;
				width: 110vw;
				height: 100vh;
				position: fixed;
				display: block;
			}*/
			.imagem{
				background-color: white;
				padding: 0;
				margin: 0;
				width: 110vw;
				height: 100vh;
				position: fixed;
				display: block;
			}

			.botao-entrar{
				background-color: black;
                color: white;
                text-align:center;
                font-size: 20px;

				width: 30vh;
				height: 6vh;
				/*colocar na esquerda o total divido pela metade*/
				top: calc(50% - 3vh);
				left: calc(50% - 15vh);
				position: fixed;
				
                border: none;
                border-radius: 10px;

				cursor: pointer;
				outline: none;
				

			}

			
			.animacao{
				transition: 0.2s all;
				animation-duration: 1s;
				animation-name: animar;
				/*define quantos frames vai ter, sem ele fica meio bugadinho*/
				animation-timing-function: steps(1000, start);
				/*a animação fica mais fluida*/
				animation-timing-function: cubic-bezier(0.68, -0.3, 0.32, 1.6);
				animation-fill-mode: forwards;
			}

			@keyframes animar {
				0% {
					transform: translateX(0);
				}
				100% {
					transform: translateX(50vw);
				}
			}

/*@keyframes animar {
  0% {
    transform: scaleX(1);
    transform-origin: 100% 50%;
    opacity: 1;
  }
  100% {
    transform: scale(0);
    transform-origin: 100% 50%;
    opacity: 1;
  }
}
			@keyframes animar{
				from {
					transform: translateX(calc(50% - 15vh));

				}

				to {
					transform: translateX(calc(100vw - 35px));
				}
			}*/


			/********** TELA DE LOGIN **********/

			.fundo{
                /*background-color: rgba(0, 0, 0, 0.3);*/
                width: 50vw;
                height: 100vh;
                padding-top: 30%;
                padding-bottom: 30%;
                padding-left: 10%;
                padding-right: 10%;

                /*position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                distancia dos elementos entre as bordas
                width: 50%;
                height: 50%;
                padding: 10%;*/

                z-index: -1;


                /*arredondar as bordas                
                border-radius: 15px;*/

            }

            h1{
                color: white;
                font-size: 80px;
                font-family: Baskerville Old Face;
            }

            a{
            	color: white;
            	font-size: 20px;
            	text-decoration:none; 
            }
            /* Serve só para tirar aquele azul e sublinhado padrão dos links */
            a:hover {
            	color: grey;
            	text-decoration:none; 
            }

            input{
            	background-color: rgba(255, 252, 252, 0.9);
            	/* Cor da escrita não da palavra login e senha */
            	color: black;
            	border:none;
            	padding: 15px;
                width: 35vw;
                
                outline: none;
				
				
				border-radius: 10px;
            }

            /* Cor do placeholder login e senha */
			input::placeholder {
				color: black;
				font-size: 18px;
			}
			button{
				/*Remove focus around button*/
    			outline: none;
			}

            .botao-logar{
                background-color: rgba(0, 25, 50, 0.5);
                color: white;
                font-size: 20px;
                border: none;
                padding: 15px;
                width: 35vw;
                border-radius: 10px;
                
            }
            .botao-logar:hover{
                background-color: rgba(0, 25, 50, 0.9);
                cursor: pointer;
            }
            .msg{
                background-color: rgba(0, 0, 0, 0.3);
                position: absolute;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
                /*distancia dos elementos entre as bordas*/
                padding-top: 20px;
                padding-bottom: 20px;
                padding-right: 60px;
                padding-left: 60px;
                /*arredondar as bordas*/
                border-radius: 15px;
            }


		</style>
	</head>
	<body>

        <script id="rendered-js">	
            $(document).ready(function nicolly()
            {
		        $(".botao-entrar").click(function () 
                {
			        $(".botao-entrar").toggleClass("animacao");
			        $(".imagem").toggleClass("animacao");
			    }
                );
		    });

		</script>


		<?php session_start();
		
        //echo $_SESSION['acessado']; 

        if($_SESSION['acessado']  == 1)
        {
            echo "
            <script>
			    function click(botao-entrar)
			    {
				    var element = document.getElementById('botao-entrar');
				    if(element.click)
					    element.click(botao-entrar);
				    else if(document.createEvent)
				    {
					    var eventObj = document.createEvent('MouseEvents');
					    eventObj.initEvent('click',true,true);
					    element.dispatchEvent(eventObj);
				    }
			    }
		    </script>";
        }

		


        if($_SESSION['msg_login'] != "")
        {
        echo '
        <div class="alert alert-danger msg" role="alert">'.
            $_SESSION['msg_login'].'              
        </div>';
        }
    ?>



			<div>
				<div class="imagem">
					
				</div>

				<div>
					<button class="botao-entrar" id="botao-entrar">Entrar</button>
				</div>
			</div>


		<div class="fundo">
            <h1>Login</h1>
            <br><br><br>
            <form name="acesso" action="valida.php" method="post">
                <input type="text" name="login" placeholder="Login" required><br><br>
                <input type="password" name="senha" placeholder="Senha" required><br><br>
                <button class="botao-logar" type="submit">Acessar</button>
                <br><br>
                <a href="http://s2.glbimg.com/lTUhRSG_HLiZm_hnV0PtPVRY1dw=/e.glbimg.com/og/ed/f/original/2016/04/05/2c.jpg">Esqueceu sua senha?</a>
            </form>
        </div>

		
	</body>
</html>








<!-- NÃO APAGUE ISSO PFV VOU USAR DE BASE



<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style>
			*{
				padding: 0;
				margin: 0;
			}
			body{
				background-image: url('https://i.pinimg.com/originals/42/48/dc/4248dc2842854731abc80bee7ecb1346.png');
				background-size: cover;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}

			


			.imagem{
				width: 10px;
				height: 10px;

			}

			.animarimg{
				position: fixed;

				outline: none;
				transition: 0.2s all;

				animation-duration: 1s;
				animation-name: imagem;
				/*define quantos frames vai ter, sem ele fica meio bugadinho*/
				animation-timing-function: steps(1000, start);
				/*a animação fica mais fluida*/
				animation-timing-function: cubic-bezier(0.68, -0.3, 0.32, 1.6);
				/*animation-iteration-count: infinite;*/

				/*isso a gente vai usar quando descobrirmos como fazer um botao que faca uma animacao depois de clicar nele, é o delay da animação
				animation-delay: 0.5s;*/

				/*esse aqui vai fazer com que ela pare no ultimo frame ao final da animação, VAI SER MUITO UTIL*/
				animation-fill-mode: forwards;

			}

			



			@keyframes imagem {
				from {
					transform: translateX(0);
				}

				to {
					transform: translateX(calc(100vw));
				}
			}

			.btn{
				width: 30vh;
				height: 5vh;
				top: 50%;
				left: calc(50% - 15vh);
				position: fixed;
				background-color: rgba(0, 25, 50, 0.5);
                color: white;
                border: none;
                border-radius: 10px;

				cursor: pointer;
				outline: none;
				transition: 0.2s all;

			}

			
			.ir{
				width:100%;
				height: 50px;
				animation-duration: 1s;
				animation-name: botaozin;
				/*define quantos frames vai ter, sem ele fica meio bugadinho*/
				animation-timing-function: steps(1000, start);
				/*a animação fica mais fluida*/
				animation-timing-function: cubic-bezier(0.68, -0.3, 0.32, 1.6);
				animation-fill-mode: forwards;
			}

			@keyframes botaozin {
				from {
					transform: translateX(calc(50% - 15vh));
				}

				to {
					transform: translateX(calc(100vw - 35px));
				}
			}

			/*@keyframes camada1 {
			from {
			margin-left: 0%;
			width: 100%;
			}

			to {
			margin-left: 100%;
			width: 300%
			}
			}*/

		</style>
	</head>
	<body>

		Faz com que não saia da tela
		<div class="overflow:hidden">

			<div>
				

				<div class="imagem">
					<img src="https://www.imagenspng.com.br/wp-content/uploads/2020/10/among-us-brown-leaf-hat-png-01-596x1024.png">
				</div>
					<br>



				<div class="btn">

					<button>Acessar</button>
				</div>

			</div>
		</div>




		<script id="rendered-js" >
			$(document).ready(function () {
			$(".btn").click(function () {
			$(".btn").toggleClass("ir");
			});
			});
		</script>
		<script id="rendered-js" >
			$(document).ready(function () {
			$(".imagem").click(function () {
			$(".imagem").toggleClass("animarimg");
			});
			});
		</script>

		
	</body>
</html>
-->




<!--<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <meta charset="UTF-8">
        <title>Sistema Gerencial Escolar</title>
        <style>
            body {
                /*
                background-image: url('https://images.unsplash.com/photo-1614852207091-9d38a326d2ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGFic3RyYWN0JTIwZ3JlZW58ZW58MHx8MHx8&w=1000&q=80');
                
                background: rgb(0,0,0);
                background: linear-gradient(100deg, rgba(0,0,0,1) 0%, rgba(0,25,50,1) 25%, rgba(0,81,91,1) 50%, rgba(6,116,0,1) 80%, rgba(6,177,0,1) 100%);*/
                background-image: url('https://media.gettyimages.com/videos/multicolored-motion-gradient-background-soft-background-colorful-video-id1220043602?s=640x640');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            div{
                background-color: rgba(0, 0, 0, 0.3);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                /*distancia dos elementos entre as bordas*/
                padding-top: 3%;
                padding-bottom: 5%;
                padding-right: 8%;
                padding-left: 8%;


                /*arredondar as bordas*/
                border-radius: 15px;
            }

            .msg{
                background-color: rgba(0, 0, 0, 0.3);
                position: absolute;
                top: 20%;
                left: 50%;
                transform: translate(-50%, -50%);
                /*distancia dos elementos entre as bordas*/
                padding-top: 20px;
                padding-bottom: 20px;
                padding-right: 60px;
                padding-left: 60px;
                /*arredondar as bordas*/
                border-radius: 15px;
            }


            input{
                color: black;
                border-radius: 10px;
                padding: 15px;
                border: none;
                outline: none;
            }
            button{
                background-color: rgba(0, 25, 50, 0.5);
                color: white;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
            }
            h1{
                color: rgba(255, 255, 255);
                font-family: Garamond, serif;
                font-size: 400%;
            }
        </style>
    </head>
    <body style="text-align: center; color: white;">

        
<div class="container">
            <h1>Login</h1>
            <form name="acesso" action="valida.php" method="post">
                <input class="form-control" type="text" name="login" placeholder="Login" required><br><br>
                <input class="form-control" type="password" name="senha" placeholder="Senha" required><br><br><br>
                
                <button class="btn btn-success" type="submit">Acessar</button>
            </form>
        </div>
    </body>
</html>
-->
