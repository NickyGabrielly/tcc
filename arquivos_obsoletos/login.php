<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sistema Gerencial Escolar</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

		<!-- Tema CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style_tema.css">

        <style type="text/css">
        	/*body{
        		background-image: linear-gradient(to bottom, #f399a3, #ed6675, #a43c47, #5e2228);
        		background-repeat: no-repeat;
        		background-attachment: fixed;
        		font-family: Arial;
        		margin: 0px;
        	} 

        	.container{
        		width: 100vw;
				height: 100vh;
        		display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
        	}

        	.box_erro_login {
        		width: 100%;
				
        	}


        	.box{
        		background-color: rgba(0,0,0, .05);
        		border-radius: 30px;
        		width: 350px;
				height: 100%;
				text-align: center;
				display: flex;
				flex-direction: column;
				justify-content: center;
			    align-items: center;
				
        	}

			.botaozinho-rosa{
				background-color:#eb5666;
				color: white;
				font-weight: bold;
			}
			.botaozinho-rosa:hover{
				background-color: #bc4451;
				transition: 0.5s;
			}*/
        </style>
    </head>
    <body>
        <div class="container">

               <!--<div class="box">
	           <div class="box_erro_login">
              <?php                       
	                //iniciando sessão
	                session_start();
		                if($_SESSION['msg_login']!= ""){
		                    echo '<div class="alert alert-danger" id="alerta" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                            <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/></svg>'.$_SESSION['msg_login'].'</div>';
		                }
		               // echo '<div class="alert alert-danger" role="alert">'.$_SESSION['msg_login'].'</div>';
		                
	            ?>
               </div>-->

            	<div>
            		<h1>Acessar o Sistema...</h1>
		            <br>            
		            <form name="acesso" action="valida.php" method="post">
		                <input class="form-control" type="text" name="login" placeholder= "Nickname" required> 
		                <br><br>

		                <input class="form-control" type="password" name="senha" placeholder= "Senha" required>  
		                <br>

		                <a href="">Esqueci minha senha</a>
		                <br><br>

		                <input class="btn botaozinho-rosa " type="submit" value="Acessar">
		                <br><br>   
		            </form>     	
            	</div>
	            
            </div>
        </div>
    </body>
</html>
