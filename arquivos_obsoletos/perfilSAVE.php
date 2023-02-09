<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">

        <style>
            /* Parte temporaria ate a gente colocar a mudança futura de quantas os ele fez etc */
            /* Faz com que não apareça a barra de rolagem */
            html{
                white-space:nowrap;
            }

            /* Também faz com que não apareça a barra de rolagem */
            body {
                display:inline-block;
                overflow-x: hidden;
                /*overflow-y: hidden;*/
                

                position: relative;
                width: 100%;
                min-height: 100vh;

                /*background: white!important;*/
            }

            /* Faz com que não apareça a tela de rolagem em aparelhos mobile */
            div.fixed {
                position: fixed; 
                top: 0; 
                left: 0; 
            }


            /*.alinhar-img{
                float: right;
                position: absolute;
                top: 60%;
                left: 80%;
                transform: translate(-50%, -60%);
            }*/

            img{
                width: 100%;
                height: 100%;

                background: rgb(5, 6, 45);
                position: relative;
                padding: 8px;
                border-radius: 10px;
                /* Faz com que as imagens fiquem do mesmo tamanho sem distorcer */
                object-fit: cover;
                /* Alinha a imagem no centro */
                margin: auto;
                display: block;
            }

            .img-border{
                width: 40vh;
                height: 40vh;

                /*background: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);*/
                position: relative;
                padding: 8px;
                border-radius: 10px;
                margin: auto;
                display: block;
            }



            .alinhar1{
                position: absolute;
                left: 50%;
                transform: translate(-50%, -0);
            }

            .alinhar2{
                position: absolute;
                left: 50%;
                transform: translate(-50%, -0);
            }

            .fundo-img{

                width: 50vw;
                height: 70vh;

                display: flex;
            }

            .fundo2{

                width: 50vw;
                height: 70vh;

                display: flex;
            }


            .h3-align{
                text-align: center;
                margin: auto;
                display: block;
                
            }
            h3{
                font-size: 30px !important;
            }

            .h3-border{
                /*background: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);*/
                width: 40vw;
                position: relative;
                padding: 8px;
                border-radius: 10px;
            }

            .h3-bg{
                background: rgb(5, 6, 45);
                color: white;
                
                width: 100%;
                height: 100%;
                padding: 25px;
                border-radius: 10px;
                

                /* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: break-word;

            }

            #ativo-w{
                /* Caso precise mudar o tamanho do ativo */
                width: 40vw !important;
            }





        </style>
    </head>
    <body>
        <nav>
            <?php
                session_start();
                include("barra_menu.php");
            ?>
        </nav>
        <?php
            echo '
            <div class="row">
                <div class="col-sm-0 col-md-6">
                    <div class="fundo-img">
                        <div class="alinhar1">';
                            //FOTO
                            if($_SESSION["foto"] == "")
                            {
                               echo '
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$_SESSION['id_usuario'].'">'; 
                               echo '<div class="img-border"><img src="imgs/semfotos.jpg" alt="Sem foto"></div></a>';


                            }
                            else {
                                echo '
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$_SESSION['id_usuario'].'">'; 

                                echo '<div class="img-border"><img src="imgs/'.$_SESSION["foto"].'" alt="Foto do Usuário"></div></a>';

                            }
                            //Fim foto

                            
                            echo'<br><br><div class="h3-border h3-align"><div class="h3-bg"><h3><b>Nome:</b> '.$_SESSION["nome"].'</h3></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="fundo2">
                        <div class="alinhar2">';
                            echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>Login:</b> '.$_SESSION["login"].'</h3></div></div><br>';

                            echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>Email:</b>&nbsp;'.$_SESSION["email"].'</h3></div></div><br>';

                            if($_SESSION['nivel'] == 1){
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>Nível:</b> Administrador</h3></div></div><br>';
                            }
                            elseif($_SESSION['nivel'] == 0){
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>Nível:</b> Técnico</h3></div></div><br>';
                            }

                            else{
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>Nível:</b> curioso</h3></div></div><br>';
                            } 

                            echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><b>CPF:</b> '.$_SESSION["cpf"].'</h3></div></div>
                        </div>
                    </div>
                </div>
            </div>';

            if($_SESSION['ativo'] != 1){
                echo '<div id="ativo-w" class="h3-border h3-align"><div class="h3-bg"><h3 id="h3-align">Você está inativo no sistema!</h3></div></div>';
                
            }
            //else{
              // //echo '<div id="ativo-w" class="h3-border h3-align"><div class="h3-bg"><h3 id="h3-align">Você está ativo no sistema!</h3></div></div>'; 
            //}

            //***************MODAL PARA MUDANÇA DE FOTO PELO PRÓPRIO USUÁRIO******************//
                echo '<div class="modal fade" id="upload'.$_SESSION['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="janelamodallabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center id="janelamodallabel">Sua foto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>';
                                            if($_SESSION["foto"] == ""){
                                                echo 
                                                    '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$_SESSION['id_usuario'].'">
                                                    <img src="imgs/semfoto.jpg" width="200" height="200" alt="Sem foto" align = "center" ></a>';
                                                    
                                             }
                                             else{
                                                 echo 
                                                    '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$_SESSION['id_usuario'].'">
                                                        <img src="imgs/'.$_SESSION["foto"].'" width="150" alt="Foto de'.$_SESSION['nome'].'" style="object-fit: cover;" align = "center" >
                                                    </a>';                     
                                                };
                                        echo'<hr>
                                        <h6>Nova Foto:</h6>
                                    </center>
                                    <form name="upload" action="grava_foto.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_usuario" value="'.$_SESSION['id_usuario'].'">
                                             
                                        Localizar:<br>
                                        <input type="file" name="arquivo" id="arquivo" accept=".jpg, .jpeg, .png, .gif">
                                        <br><br>
                                </div>
                                <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" value="Enviar">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>';
        // finalizando o modal de UPLOAD DE FOTO DE CADASTRO    
        ?>
    </body>
</html>

<!--
<!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">

        <style>
            /* Parte temporaria ate a gente colocar a mudança futura de quantas os ele fez etc */
            /* Faz com que não apareça a barra de rolagem */
            html{
                white-space:nowrap;
            }

            /* Também faz com que não apareça a barra de rolagem */
            body {
                display:inline-block;
                overflow-x: hidden;
                overflow-y: hidden;
            }

            /* Faz com que não apareça a tela de rolagem em aparelhos mobile */
            div.fixed {
                position: fixed; 
                top: 0; 
                left: 0; 
            }


            /*.alinhar-img{
                float: right;
                position: absolute;
                top: 60%;
                left: 80%;
                transform: translate(-50%, -60%);
            }*/

            img{
                width: 37.65vh;
                /* Alinha a imagem no centro */
                margin: auto;
                display: block;
            }



            .alinhar1{
                position: absolute;
                left: 50%;
                transform: translate(-50%, -0);
            }

            .alinhar2{
                position: absolute;
                left: 50%;
                transform: translate(-50%, -0);
            }

            .fundo-img{

                width: 50vw;
                height: 70vh;
            }

            .fundo2{

                width: 50vw;
                height: 70vh;
            }


            .h3-align{
                text-align: center;
                margin: auto;
                display: block;
                
            }
            h3{
                font-size: 30px !important;
            }

            .h3-border{
                background: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
                width: 40vw;
                position: relative;
                padding: 8px;
                border-radius: 10px;
            }

            .h3-bg{
                background: rgb(5, 6, 45);
                color: white;
                
                width: 100%;
                height: 100%;
                padding: 25px;
                border-radius: 10px;
                

                /* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: break-word;

            }

            #ativo-w{
                /* Caso precise mudar o tamanho do ativo */
                width: 40vw !important;
            }



        </style>
    </head>
    
    <!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">

        <style>
            .alinhar-img{
                float: right;
            }

            img{
                width: 400px;
            }

            h2, h3{
                background: violet;
                width: 50vw;
                height: 100px;
                padding: 10px;
                border-radius: 10px;
            }



        </style>
    </head>
    <body>
        <nav>
            <php
                //session_start();
                //include("barra_menu.php");
            /*?>
        </nav>

        <div class="container">
            <*?php
                /*session_start();
                //require ("conecta.php");
                //$conexao    =   mysqli_select_db($conecta, "scos");
                //recebendo o valor da matricula ou id_usuario via REQUESTE
                //$id_usuario = $_REQUEST['utilizador'];

                //echo $id_usuario;
                
                //$query = "SELECT * FROM usuario WHERE id_usuario ='".$id_usuario."';";
                //$sqlusuario = mysqli_query($conecta, $query);
                //$exibeusuario = mysqli_fetch_array($sqlusuario);

                //echo" - ".$exibeusuario['nome'];

                //echo '<h2>Nome: '.$registro["nome"].'</h2><br>';
                //echo '<h3>Nível: '.$registro["nivel"].'</h3><br>';
                //echo '<h3>Email: '.$registro["email"].'</h3><br>';
                //echo '<h3>CPF: '.$registro["cpf"].'</h3><br>';
                //echo '<h3>Login: '.$registro["login"].'</h3><br>';

                //if($registro['ativo'] == 1){
                    //echo '<h3>Você está ativo no sistema!</h3>';
                }
                //else{
                    //echo '<h3>Você está inativo no sistema!</h3>';
                }    
            /*?>

            <div class="alinhar-img">
                <img src="https://cdn-icons-png.flaticon.com/512/54/54538.png">
            </div>
            
        </div>
    </body>
</html>--><!--

    <!DOCTYPE html>
<html lang="pt-br" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Perfil</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">

        <style>
            .alinhar-img{
                float: right;
            }

            img{
                width: 400px;
            }

            h2, h3{
                background: violet;
                width: 50vw;
                height: 100px;
                padding: 10px;
                border-radius: 10px;
            }



        </style>
    </head>
    <body>
        <nav>
            <php
                //session_start();
                //include("barra_menu.php");
            /*?>
        </nav>

        <div class="container">
            <*?php
                /*session_start();
                //require ("conecta.php");
                //$conexao    =   mysqli_select_db($conecta, "scos");
                //recebendo o valor da matricula ou id_usuario via REQUESTE
                //$id_usuario = $_REQUEST['utilizador'];

                //echo $id_usuario;
                
                //$query = "SELECT * FROM usuario WHERE id_usuario ='".$id_usuario."';";
                //$sqlusuario = mysqli_query($conecta, $query);
                //$exibeusuario = mysqli_fetch_array($sqlusuario);

                //echo" - ".$exibeusuario['nome'];

                //echo '<h2>Nome: '.$registro["nome"].'</h2><br>';
                //echo '<h3>Nível: '.$registro["nivel"].'</h3><br>';
                //echo '<h3>Email: '.$registro["email"].'</h3><br>';
                //echo '<h3>CPF: '.$registro["cpf"].'</h3><br>';
                //echo '<h3>Login: '.$registro["login"].'</h3><br>';

                //if($registro['ativo'] == 1){
                    //echo '<h3>Você está ativo no sistema!</h3>';
                }
                //else{
                    //echo '<h3>Você está inativo no sistema!</h3>';
                }    
            /*?>

            <div class="alinhar-img">
                <img src="https://cdn-icons-png.flaticon.com/512/54/54538.png">
            </div>
            
        </div>
    </body>
</html>-->