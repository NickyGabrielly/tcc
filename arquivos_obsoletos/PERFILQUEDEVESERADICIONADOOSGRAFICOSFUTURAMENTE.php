<?php
    include('verifica.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Perfil</title>


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
                width: 26vw;
    height: 100%;
    /*top: 21px;*/
    /* background: rgb(5, 6, 45); */
    position: relative;
    padding: 0;
    object-fit: cover;
    margin: auto;
    display: block;
    border-radius: 10px;
            }

            .img-h1-border{
                width: 100%;
                height: 30vh;

                
                
                
                /*background: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);*/
                position: relative;
                /*padding: 8px;*/
                margin: auto;
                display: block;
            }



            /*.alinhar1{

                
            }*/

            .alinhar2{
                position: absolute;
                left: 50%;
                transform: translate(-50%, -0);
            }

            .fundo1{

                width: 30vw;
                height: calc(95vh - 5em);
                
                
                /*left: 5.8em;*/

                
                border: black 5px solid;
                border-radius: 10px;




            }

            .fundo2{

                width: 52vw;
                height: calc(95vh - 5em);

                display: flex;
                align-content: center;
    			justify-content: center;

                border: black 5px solid;
                
            }

            .padding-fundo{
                display: flex;
                align-content: center;
                justify-content: center;

                padding-bottom: 24px;
            }


            .h3-align{
                text-align: left;
                
                
            }
            h3{
                font-size: 20px !important;
                display: flex;
            }

            .h3-border{
                /*background: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);*/
                
                position: relative;
                /*padding: 8px;*/
                
                
            }

            .h3-bg{
                /*background: rgb(5, 6, 45);*/
                color: var(--text-color);
                
                width: 100%;
                height: 100%;

                /* Faz com que o texto não transborde da div e pule linhas. Arrumar o tamanho com width se for necessário */
                white-space: break-spaces;
                overflow-wrap: anywhere;

                display: flex;

                padding-left: 23px;
                padding-right: 16px;
                padding-top: 16px;
                padding-bottom: 16px;


                
            }

            .alinhar-todos-h3{
            	    /*top: 20px;*/
                    position: relative;




            }

            #none-break{
            	overflow-wrap: break-word;
            }

            .h3-break{
            	
                

            }

            

            button{
                /*Remove o foco em volta do button*/
                outline: none !important;
            }

            .botao{
                background-color: var(--btn-perfil-bg);
                /*background: linear-gradient(90deg, rgba(184,143,255,1) 0%, rgba(116,141,255,1) 100%);*/
                color: white;
                font-size: 20px;
                border: none;
                padding: 7px;
                width: 26vw;
                border-radius: 5px;
                outline: none !important;


            }

            .botao:hover{
                background-color: var(--btn-hover-perfil-bg);
                color: var(--btn-hover-color);
                cursor: pointer;
                transform: scale(1.05);
            }

            .align-button{
                display: flex;
                    align-content: center;
    justify-content: center;
    align-items: center;
            }

            /*.display-flex-button{
                        position: absolute;
    bottom: -9vh;
    width: 100%;
            }*/

            /*.botao{
            	width: 9vw;
            	height: 5vh;

            	border: none;
            }
            https://www.htmlcssbuttongenerator.com/css-button-generator.html#EnterIcon
            .botao:hover, .botao:focus, .botao:active{

            	border: none;
            }*/
            
            svg{
                width: 0;
                height: auto;
            }

            .display-edita-button{
                display: none;
            }
            .display-button{
                display: none;
            }
            .display-btn-cima{
                display: none;
            }
            .display-btn-baixo{
                display: none;
            }



            .modal-dialog {
                color: var(--text-color);
            }





            @media (max-width: 970px){

                .display-flex-button{
                    display: none;
                }
                .display-edita-button{
                    display: block;
                }

                
                
            }


            

            @media (min-width: 766px) and (max-width: 800px){
                .fundo1{
                    width: 90vw;
                }

                .fundo2{
                    display: none;
                }

                .display-button{
                    display: none;
                }

                .display-flex-button{
                    display: none;
                }
                .display-edita-button{
                    display: none;
                }

                .display-btn-cima{
                    display: block;
                    padding-bottom: 8px;
                }
                .display-btn-baixo{
                    display: block;
                }

                img{
                    width: 45vw;
                }
                /*Serve para tirar o padding das col dos botões, pois estava deixando eles muito piticos*/
                #p-r{
                    padding-right: 0;
                }
                #p-l{
                    padding-left: 0;
                }

                .botao {
                    width: 45vw;
                }

                .alinhar1{
                    display: flex;
                    flex-direction: column;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                }

                .alinhar-todos-h3 {
                    width: 49vw;
                }

            }

			@media (max-width: 800px){
                .fundo1{
	                width: 90vw;
            	}

                .fundo2{
                    display: none;
                }

                .display-button{
                    display: none;
                }

                .display-flex-button{
                    display: none;
                }
                .display-edita-button{
                    display: none;
                }

                .display-btn-cima{
                    display: block;
                    padding-bottom: 8px;
                }
                .display-btn-baixo{
                    display: block;
                }

                img{
                    width: 45vw;
                }
                /*Serve para tirar o padding das col dos botões, pois estava deixando eles muito piticos*/
                #p-r{
                    padding-right: 0;
                }
                #p-l{
                    padding-left: 0;
                }

                .botao {
                    width: 45vw;
                }

                .alinhar1{
                    display: flex;
                    flex-direction: column;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                }

                .alinhar-todos-h3 {
                    width: 49vw;
                }

			}

            @media (max-width: 500px){
                .display-button{
                    display: block;
                }

                .display-flex-button{
                    display: none;
                }
                .display-edita-button{
                    display: block;
                }

                .display-btn-cima{
                    display: none;
                }
                .display-btn-baixo{
                    display: none;
                }

                .botao{
                    width: 40vw;
                }

                .alinhar-todos-h3 {
                    width: 100%;
                }
                img {
                    width: 76vw;
                    height: 30vh;
                }

            }

            @media (max-height: 800px){
                h3{
                    font-size: 15px !important;
                }
            }
            @media (max-height: 700px){
                .h3-bg {
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

            }
            @media (max-height: 575px){
                .h3-bg {
                    padding-top: 5px;
                    padding-bottom: 5px;
                }

            }





        </style>



    </head>
    <body>
        <nav>
            <?php
            
            /*
                session_start();
 if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
            header('location: index_fofo.php');
        }
        
                //if ($_SESSION['login'] == "" or $_SESSION['nome'] == "" or $_SESSION['ativo']  != 1) {
                //    header('location: index_fofo.php');
                //}
                
                */
                include("barra_menu.php");

                require("conecta.php");
                $busca          =        "SELECT * FROM usuario WHERE id_usuario='".$_SESSION['id_usuario']."';";
                $vai            =        mysqli_query($conecta, $busca);
                $perfil         =        mysqli_fetch_array($vai);

                if ($perfil['nome'] == "" and $_SESSION['nome'] == ""){
                header('location: sair.php');
                }
            ?>
        </nav>




        <?php
        echo '
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="padding-fundo">
                    <div class="fundo1">
                        <div class="alinhar1">';
                            //FOTO
                            if($perfil["foto"] == "")
                            {
                               echo '
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$perfil['id_usuario'].'">'; 
                               echo '<div class="img-h1-border"><img src="imgs/semfotos.jpg" alt="Sem foto"></div></a>';


                            }
                            else {
                                echo '
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$perfil['id_usuario'].'">'; 

                                echo '<div class="img-h1-border"><img src="imgs/'.$perfil["foto"].'" alt="Foto do Usuário"></div></a>';

                            }
                            //Fim foto

                            
                            echo'
                            <div class="alinhar-todos-h3">
                            	<div class="h3-border h3-align">
                            		<div class="h3-bg">
                            			<h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
											<path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
											</svg>&nbsp;<b id="none-break">NOME:&nbsp;</b>'.$perfil["nome"].'</h3>
									</div>
								</div>';

                             echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
</svg>&nbsp;<b id="none-break">LOGIN:&nbsp;</b>'.$perfil["login"].'</h3></div></div>';

                            echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>&nbsp;<b id="none-break">EMAIL:&nbsp;</b>'.$perfil["email"].'</h3></div></div>';

                            if($perfil['nivel'] == 1){
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
  <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
</svg>&nbsp;<b id="none-break">NÍVEL:&nbsp;</b>Administrador</h3></div></div>';
                            }
                            elseif($perfil['nivel'] == 0){
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg>&nbsp;<b id="none-break">NÍVEL:&nbsp;</b>Técnico</h3></div></div>';
                            }

                            else{
                                echo '<div class="h3-border h3-align"><div class="h3-bg"><h3>&nbsp;<b id="none-break">NÍVEL:&nbsp;</b>curioso</h3></div></div>';
                            } 

                            echo '<div class="h3-border h3-align"><div class="h3-bg"><h3><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>&nbsp;<b id="none-break">CPF:&nbsp;</b>'.$perfil["cpf"].'</h3></div></div></div>

                            
                            <div class="row">
                                <div class="col-sm-0 col-md-12">
                                    <div class="display-flex-button">
                                        <div class="align-button">
                							<a id="margin-button" href="#" data-toggle="modal" data-target="#modal_edicao'.$perfil['id_usuario'].'">
                								<!--colocar modal para editar dados do usuario-->
                                                <button class="botao" type="submit">Editar seus dados Pessoais</button>
                							</a>
                                        </div>
                                    </div>
                                </div>


                            

                                <div class="col-6 col-sm-6 col-md-12" id="p-r">
                                    <div class="display-edita-button">
                                        <div class="align-button">
                                            <a id="margin-button" href="#" data-toggle="modal" data-target="#modal_edicao'.$perfil['id_usuario'].'">
                                                <!--colocar modal para editar dados do usuario-->
                                                <button class="botao" type="submit">Editar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="col-6 col-sm-6 col-md-0" id="p-l">
                                    <div class="display-button">
                                        <div class="align-button">
                                            <a id="margin-button" href="edita_usuario.php?matricula='.$perfil["id_usuario"].'">
                                                <!--colocar modal para editar dados do usuario-->
                                                <button class="botao" type="submit">Gráficos</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>



                                <!--botões que fica um em cima outro embaixo-->
                                <div class="col-sm-12 col-md-0">
                                    <div class="display-btn-cima">
                                        <div class="align-button">
                                            <a id="margin-button" href="#" data-toggle="modal" data-target="#modal_edicao'.$perfil['id_usuario'].'">
                                                <!--colocar modal para editar dados do usuario-->
                                                <button class="botao" type="submit">Editar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-0">
                                    <div class="display-btn-baixo">
                                        <div class="align-button">
                                            <a id="margin-button" href="edita_usuario.php?matricula='.$perfil["id_usuario"].'">
                                                <!--colocar modal para editar dados do usuario-->
                                                <button class="botao" type="submit">Gráficos</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-7">
                <div class="padding-fundo">
                    <div class="fundo2">
                        <div class="alinhar2">';
                           echo'';
                       echo' </div>
                    </div>
                </div>
            </div>
        </div>';


        //Modal de edição :(

        echo '
            <div class="modal fade" id="modal_edicao'.$perfil["id_usuario"].'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Editar Perfil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">';
                            echo '
                            <form name="form3" action="atualiza_perfil.php" method="post">
                                <div class="form-group">
                                    <input name="id_usuario" type="hidden" value="'.$perfil["id_usuario"].'">

                                    <label>Email: </label><br>
                                    <input name="email" type="email" class="form-control" placeholder="nome@email.com" value="'.$perfil["email"].'"required>              
                                    <br>

                                    <label>Login: </label><br>
                                    <input name="login" type="text" class="form-control" placeholder="Login" value="'.$perfil["login"].'" required>

                                    <br>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label> Nova senha: </label><br>
                                            <input name="senha" type="password" min-lenght="8" class="form-control" placeholder="No mínimo 8 caracteres">
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Confirme a nova senha: </label><br>
                                            <input name="confirmasenha" type="password" min-lenght="8" class="form-control" placeholder="Redigite a senha">
                                        </div>
                                    </div>

                                    <br>
                                        <div>
                                            <br>
                                            <input type="submit" value="Atualizar" class="btn form-control form-control-file" onclick="return validar()">
                                        </div>
                                </div>
                            </form>';   
                        echo '</div>
                
                    </div>
                </div>
            </div>';

        //fim do modal de edição de dados.

            

        //***************MODAL PARA MUDANÇA DE FOTO PELO PRÓPRIO USUÁRIO******************//
        echo '
        <div class="modal fade" id="upload'.$perfil['id_usuario'].'" tabindex="-1" role="dialog" aria-labelledby="janelamodallabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center id="janelamodallabel">Sua foto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <center> </center>';
                                if($perfil["foto"] == ""){
                                    echo 
                                        '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$perfil['id_usuario'].'">
                                        <img src="imgs/semfoto.jpg" width="200" height="200" alt="Sem foto" align = "center" ></a>';
                                        
                                 }
                                 else{
                                     echo 
                                        '<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#upload'.$perfil['id_usuario'].'">
                                            <img src="imgs/'.$perfil["foto"].'" width="95" height="95" alt="Foto de'.$perfil['nome'].'" style="object-fit: cover;" align = "center" >
                                        </a>';                     
                                    };
                            echo'<hr>
                            <h6>Nova Foto:</h6>
                       
                        <form name="upload" action="grava_foto.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_usuario" value="'.$perfil['id_usuario'].'">
                                 
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
        // finalizando o modal de UPLOAD DE FOTO   
        ?>
    </body>
</html>
