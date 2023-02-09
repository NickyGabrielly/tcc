<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Jcrop - Upload</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />

        <!-- Tema CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style_tema.css">
        
    <style>
        h1 {
            text-align: center;
        }

        .jcrop-centered {
            display: inline-block;
        }

        #preview {
            width: 150px;
            height: 150px;
            overflow: hidden;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Exemplo Jcrop - Upload</h1>

        <form method="POST" action="index2.php" enctype="multipart/form-data">
            <div>
                <label for="arquivo">Arquivo</label>
                <input type="file" name="arquivo" id="arquivo" class="form-control-file">

                <input type="submit" value="Enviar" class="btn btn-primary mt-3">
            </div>
        </form>
        <br>

        <?php if (!empty($_FILES['arquivo'])) {

            $file_name  = $_FILES['arquivo']['name'];
            //['name'] pega o nome original do arquivo, q no meu é bart xDxDxDxD (sem os xd)
            $file_tmp   = $_FILES['arquivo']['tmp_name'];
            //O nome de arquivo temporário no qual foi armazenado no servidor.
            $file_type  = $_FILES['arquivo']['type'];
            //O tipo do arquivo, tipo image/jpeg, image/png, image/jpg
            $file_error = $_FILES['arquivo']['error'];
            //E o erro que pode vir, como por exemplo, n ter nada tlgd

            $erro = '';
            //Verificar se tem erro, e se sim, tratar de acordo com o tipo
            if ($file_error == UPLOAD_ERR_CANT_WRITE) 
            //UPLOAD_ERR_CANT_WRITE: Falha ao escrever o arquivo no disco
                $erro = "Falha ao grava  arquivo no disco.<br>";
            else if ($file_error == UPLOAD_ERR_NO_TMP_DIR)
            //UPLOAD_ERR_NO_TMP_DIR: Pasta temporária ausente
                $erro .= "Pasta temporária faltando.<br>";
            else if ($file_error == UPLOAD_ERR_NO_FILE)
            //UPLOAD_ERR_NO_FILE: Nenhum arquivo foi enviado
                $erro .= 'Desculpe, mas o arquivo não foi enviado, por favor, tente novamente<br>';
            else if ($file_error == UPLOAD_ERR_PARTIAL)
            //O upload do arquivo foi feito parcialmente: O upload do arquivo foi feito parcialmente
                $erro .= 'Desculpe, o envio do arquivo não foi completado com sucesso, por favor, tente novamente.<br>';
            else if ($file_error == UPLOAD_ERR_FORM_SIZE)
            //UPLOAD_ERR_FORM_SIZE:  arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.
                $erro .= 'Esta imagem é muito grande, por favor, selecione uma imagem menor!<br>';
            else if ($file_error == UPLOAD_ERR_INI_SIZE)
            //UPLOAD_ERR_INI_SIZE: O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini
                $erro .= 'Esta imagem é muito grande, por favor, selecione uma imagem menor!<br>';
            else {

                define("OUT", 'uploads/');
                //Cria uma variavel chamada OUT(pode ser qualquer nome) 
                //e define como uploads/

                switch ($file_type) {
                    case 'image/jpeg':
                        $ext = '.jpg';
                        break;
                    case 'image/png':
                        $ext = '.png';
                        break;
                    default:
                        $erro .= 'Selecione um arquivo jpg ou png.<br>';
                }
                //Se n ter erro
                if (empty($erro)) {
                    $dst = OUT . md5(time()) . $ext;
                    //$dst armazena o OUT, escriptando o tempo que foi feito o negocio
                    //e junto coloca o ext, que vale
                    //.jpg ou .png, q foi criado no switch

                    $up = move_uploaded_file($file_tmp, $dst);
                    //move_uploaded_file: Move um arquivo enviado para uma nova localização
                    list($width, $height, $type, $attr) = getimagesize($dst);
                    //list(): É usada para criar uma lista de variáveis em apenas uma operação.
                    //getimagesize(): Pega o tamanho da imagem
                }
            }
        } else {
            $erro = 'Erro ao enviar arquivo.';
        } ?>

        <?php if (!empty($erro)) { ?>
            <div class="alert alert-danger">
                <?php echo $erro; ?>
            </div>
        <?php } ?>

        <?php if (isset($up) && $up) { ?>
            <div class="row">
                <div class="col-md-3">
                    <div id="preview">
                        <img src="<?php echo $dst ?>" alt="Imagem upload preview do recorte">
                    </div>
                    <div>
                        <form method="POST" action="redimensionar.php">

                            <input type="hidden" name="input_x1" id="input_x1">
                            <input type="hidden" name="input_y1" id="input_y1">
                            <input type="hidden" name="input_x2" id="input_x2">
                            <input type="hidden" name="input_y2" id="input_y2">
                            <input type="hidden" name="input_w" id="input_w">
                            <input type="hidden" name="input_h" id="input_h">


                            <input type="hidden" name="filename" id="filename" value="<?php echo $dst ?>">

                            <input type="submit" value="recortar" class="btn btn-primary">
                        </form>

                    </div>
                </div>
                <div class="col-md-9">
                    <img src="<?php echo $dst ?>" alt="Imagem upload " id="imagem">


                </div>
            </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/jquery.Jcrop.min.js"></script>

    <script language="Javascript">
        //quando o documento da pagina estar pronto, ele pega o item com
        //o id #imagem e usa o Jcrop(a biblioteca q faz os recortes)
        $(document).ready(function() {
            $('#imagem').Jcrop({
                addClass: 'jcrop-centered',
                //addClass: coloca uma classe para o item selecionado
                onSelect: show_preview,
                //onSelect: Chama a função que esta como valor, aaaaa show_preview, com os parametros
                //as cordenadas da parte cortada da imagem
                onChange: mostrar_coordenadas,
                //onChange: sempre que vc estiver com o coisa selecionada e mudar, ira chamar a função,
                //Com as cordenadas, igual como expliquei no onSelect
                aspectRatio: 1 / 1,
                //aspectRatio: determina a proporção da janela de recorte, 
                //se for tipo 150/150, sai um quadrado 

            });
        });

        function mostrar_coordenadas(coord) {
            //Aqui esta pegando os valores das cordenadas (x, y, x2, y2, w, h)
            //h == height e w == width
            //E colocando seus valores nos devidos inputs tlgd
            $('#input_x1').val(coord.x);
            $('#input_y1').val(coord.y);
            $('#input_x2').val(coord.x2);
            $('#input_y2').val(coord.y2);
            $('#input_w').val(coord.w);
            $('#input_h').val(coord.h);
        }

        function show_preview(coords) {
            //Nao entendi nada daquikkkkkkkkkkkkkktocomsonooooo
            //mas isso renderiza o quadradinho de preview tlgd
            rx = 150 / coords.w;
            ry = 150 / coords.h;
            console.log(rx + " - " + ry);

            $('#preview img').css({
                width: Math.round(rx * <?php echo $width; ?>) + 'px',
                height: Math.round(ry * <?php echo $height; ?>) + 'px',
                marginLeft: '-' + Math.round(rx * coords.x) + 'px',
                marginTop: '-' + Math.round(ry * coords.y) + 'px',
            });

        }
    </script>


<?php } ?>

</div>




</body>

</html>

