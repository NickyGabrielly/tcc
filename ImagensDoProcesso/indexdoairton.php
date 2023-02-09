<! DOCTYPE html>
<html lang="pt-br">
	<head>  
		<meta charset="utf-8">
		<title>AGRO</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <style type="text/css"> 
            body {
				
				background-size: cover; 
                background-color: #111313;
                color: #ffffff;
                text-align: center;
				justify-content: center;
				align-items: center;
				
            }
			
			.container{
				
				width: 100vw;
				height: 100vh;
				display: flex;
				flex-direction: row;
				justify-content: center;
				align-items: center;
				
			}
			 .caixinha{
				 background-color: rgba(0,0,0, .55);
			 }
			 
			

        </style>
</head>
	<body>
       
   	 <div class="container">
        <div class="caixinha">
		<?php
            //iniciando sessão
            session_start();
             if($_SESSION['msg_login'] !="")
            {
            echo '
                 <div class="alert alert-danger" role="alert">'.
                $_SESSION['msg_login'].'
                 </div>';
           }
        ?>
        
			<h3>AGRO</h3>
			<hr>
			<form name="acesso" action="valida.php" method="post">
			<div class="input-group">
					<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
						<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
					</svg>
					&nbsp;
				<input class="form-control" type="text" name="login" placeholder="login" required><br><br>
			</div>	
			<div class="input-group">	
				<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
					<path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
					<path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
				</svg>
				&nbsp;
				<input class="form-control" type="password" name="senha" placeholder="senha"required><br><br>
			</div>
				<input class="btn btn-success" type="submit" value="Acessar">
			</form>
		</div>
     </div>
	</body>
</html>

