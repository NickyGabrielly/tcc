<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Principal</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Quicksand&family=Rye&display=swap" rel="stylesheet">

        <!-- Tema CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style_tema.css">


        <style>

            

            

            .alinhar-p{
                display: flex;
                align-content: center;
                justify-content: flex-start;
                align-items: center;
            }



            .escritas{
                height: 50vh;
            }

            #row-align{
                /* Para alinhar o botão no centro */
                display: flex;
                align-content: center;
                justify-content: center;
                align-items: center;
				background-color: var(--perfmod-bg);

                border-radius: 5px;
         		height: 67px;
            	padding-left: 10px;
            }

            h1{
                display: flex;
                justify-content: center;
                align-items: center;
                align-content: center;
            }

            .btn{
            	padding-left: 20px;
                padding-right: 20px;
                /*width: 7vw;*/
            }
            .btn-mb{
                display: none;
            }

            @media (max-width: 576px) {
                .btn-pc{
                    display: none;
                }

                .btn-mb{
                    display: block;
                }
                
                .bi-stars{
                    display: none;
                }

                #row-align{
                    /*Faz com que tenha uma certa magem e nao fique sem um "padding"*/
                    margin: 0px;
                    height: auto;
                    padding: 14px;
                }

                .align-c{
                    display: flex;
                    justify-content: center;
                    align-content: center;
                    align-items: center;
                }

                .alinhar-p{
                    display: flex;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                    padding-bottom: 10px!important;
                }
            }



            @media (min-width: 576px) and (max-width: 767px) {
                .btn-pc{
                    display: none;
                }

                .btn-mb{
                    display: block;
                }

                .bi-stars{
                    display: none;
                }

                #row-align{
                    /*Faz com que tenha uma certa magem e nao fique sem um "padding"*/
                    margin: 0px;
                    height: auto;
                    padding: 14px;
                }

                .align-c{
                    display: flex;
                    justify-content: center;
                    align-content: center;
                    align-items: center;
                }

                .alinhar-p{
                    display: flex;
                    align-content: center;
                    justify-content: center;
                    align-items: center;
                    padding-bottom: 10px!important;
                }
            }



        </style>
    </head>

    <body>
        <?php
        session_start();
        if ($_SESSION['login'] == "" or $_SESSION['nome'] == "") {
            header('location: index_fofo.php');
        }
        
        echo '<div>';
        include("barra_menu.php");
        echo'</div><br>';
        ?>


        <div class="container">
            <br><br>

            <?php
            echo '<br class="bi-stars"><br class="bi-stars">
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                    </svg>
                    Bem vindo(a) '.$_SESSION['login'].'
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                        <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                    </svg>
                </h1><br class="bi-stars"><br class="bi-stars">';

                require ("conecta.php");
                $conexao                =   mysqli_select_db($conecta, "scos");

                $abertas                =   "SELECT * FROM ordem_de_servico WHERE status_os = 'Aberta'";
                $sqlqueryaberta         =   mysqli_query($conecta, $abertas);
                $n_abertas              =   mysqli_num_rows($sqlqueryaberta);

                $fechadas               =   "SELECT * FROM ordem_de_servico WHERE status_os = 'Finalizada'";
                $sqlqueryfechada        =   mysqli_query($conecta, $fechadas);
                $n_fechadas             =   mysqli_num_rows($sqlqueryfechada);

                $aguardandopeca         =   "SELECT * FROM ordem_de_servico WHERE status_os = 'Aguardando peças'";
                $sqlqueryaguardando     =   mysqli_query($conecta, $aguardandopeca);
                $n_aguardando           =   mysqli_num_rows($sqlqueryaguardando);

                $eventos                =   "SELECT * FROM evento_os";
                $sqlqueryevento         =   mysqli_query($conecta, $eventos);
                $n_eventos              =   mysqli_num_rows($sqlqueryevento);
                //farei um if pra mostrar o zero pq por alguma razão o mysqli_num_rows é zerofóbico!
                //nao precisouu, o erro era meu kkkkkk
                //obs. não apagar esses comentários pois foram uma parte importante do processo 
            ?>
        <div class="escritas">
            <form action="exibe_ordens.php" method="post">

                <div id="row-align" class="row">
                    <div class="col-sm-12 col-md-10 alinhar-p">
                        <div class="align-c">
                            Existem <?php echo $n_abertas; ?> ordens em aberto
                        </div>
                    </div>
                    <div class="col-md-2 btn-pc">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value= "aberta" >
                                Ver
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2 btn-mb">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value= "aberta" >
                                Visualizar
                            </button>
                        </div>
                    </div>
                </div>
                <br>


                <div id="row-align" class="row">
                    <div class="col-sm-12 col-md-10 alinhar-p">
                        <div class="align-c">
                        Existem <?php echo $n_fechadas; ?> ordens fechadas
                    </div>
                    </div>
                    <div class="col-md-2 btn-pc">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value="finalizada" >
                                Ver
                            </button>
                        </div>
                    </div>
                    <div class="col-md-2 btn-mb">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value="finalizada" >
                                Visualizar
                            </button>
                        </div>
                    </div>
                </div>
                <br>


                <div id="row-align" class="row">
                    <div class="col-sm-12 col-md-10 alinhar-p">
                        <div class="align-c">
                        Existem <?php echo $n_aguardando; ?> ordem(ns) aguardando por peças.
                    </div>
                    </div>
                    <div class="col-sm-2 col-md-2 btn-pc">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value="aguardando">
                                Ver
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-2 col-md-2 btn-mb">
                        <div class="align-c">
                            <button class="btn" name="ver" type="submit" value="aguardando">
                                Visualizar
                            </button>
                        </div>
                    </div>

                </div>
                <br>


            </form>
            <div id="row-align" class="row">
                <div class="col-sm-12 col-md-10 alinhar-p">
                    <div class="align-c">
                    Existem <?php echo $n_eventos; ?> movimentações.
                </div>
                </div>
                <div class="col-sm-2 btn-pc">
                    <div class="align-c">
                        <button class="btn" onclick="window.location.href = 'exibe_ordens.php'">
                            Ver
                        </button>
                    </div>
                </div>
                <div class="col-sm-2 btn-mb">
                    <div class="align-c">
                        <button class="btn" onclick="window.location.href = 'exibe_ordens.php'">
                            Visualizar
                        </button>
                    </div>
                </div>
            </div>
            <br>
        </div>

        </div>
    </body>
</html>