<!--
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

			.fundo{
                background-color: rgba(0, 0, 0, 0.3);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                /*distancia dos elementos entre as bordas*/
                padding-top: 10%;
                padding-bottom: 10%;
                padding-left: 10%;
                padding-right: 10%;
				/*arredondar as bordas*/                
                border-radius: 15px;

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
		<?php
			//Iniciando sessão
			//session_start();

			//if($_SESSION['msg_login'] != "")
			{
			//echo '
			//<div class="alert alert-danger msg" role="alert">'.
			   // $_SESSION['msg_login'].'              
			//</div>';
			}
		?>

		<div class="fundo">
            <h1>Login</h1>

            <br><br>

            <form name="acesso" action="valida.php" method="post">

                <input type="text" name="login" placeholder="Login" required><br><br>
                <input type="password" name="senha" placeholder="Senha" required><br><br>

                <button class="botao-logar" type="submit">Acessar</button>

                <br><br>

                <a href="http://s2.glbimg.com/lTUhRSG_HLiZm_hnV0PtPVRY1dw=/e.glbimg.com/og/ed/f/original/2016/04/05/2c.jpg">Esqueceu sua senha?</a>
            </form>
        </div>

		
	</body>
</html>-->