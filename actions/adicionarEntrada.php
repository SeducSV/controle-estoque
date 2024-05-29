<?php

require_once('../models/Entrada.php');

use Dompdf\Dompdf;

require '../vendor/autoload.php';

if (isset($_POST['btn-entrada'])) {

    session_start();

    $tipoEquipamento = $_POST['tipoEquipamento'];
    $unidadeEquipamento = $_POST['unidadeEquipamento'];
    $quantidadeEquipamento = $_POST['quantidadeEquipamento'];
    $codigoEquipamento = $_POST['codigoEquipamento'];
    $motivoEntrada = $_POST['motivoEntrada'];
    $estadoEquipamento = $_POST['estadoEquipamento'];
    $observacaoEquipamento = $_POST['observacaoEquipamento'];
    $idUsuario = $_SESSION['idUsuario'];
    $nomePessoa = $_POST['nomePessoa'];
    $holeritePessoa = $_POST['holeritePessoa'];
    $marcaEquipamento = $_POST['marcaEquipamento'];
    $modeloEquipamento = $_POST['modeloEquipamento'];

    $tipo = explode('@',$tipoEquipamento);


    Entrada::adicionarEntrada(
        $unidadeEquipamento,
        $tipo[0],
        $quantidadeEquipamento,
        $motivoEntrada,
        $estadoEquipamento,
        $observacaoEquipamento,
        $codigoEquipamento,
        $idUsuario,
        $nomePessoa,
        $holeritePessoa,
        $marcaEquipamento,
        $modeloEquipamento
    );

    // Gerar a representação base64 da imagem
    $imagem_base64 = base64_encode(file_get_contents('../public/imgs/prefeitura.png'));

date_default_timezone_set('America/Sao_Paulo');
// Define a localidade para português do Brasil
$locale = 'pt_BR';
// Cria um objeto DateTime com a data e hora atuais
$data = new DateTime();
// Formatar a data usando IntlDateFormatter
$formatter = new IntlDateFormatter(
    $locale,
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'America/Sao_Paulo',
    IntlDateFormatter::GREGORIAN,
    " d 'de' MMMM 'de' y"
);

    $conteudo_pdf = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang='pt-br'>

    <head>
        <meta charset='UTF-8'>
        <title>Documento de Entrega</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 20px;
            }

            img {
                margin-left: 50px;
                width: 80%;
                height: 110px;
            }

            h1 {
                color: black;
                text-align: center;
                font-size: 20px;
                margin-bottom: 35px;
                margin-top: 35px;
            }

            p {
                color: black;
                text-align: justify;
                margin-bottom: 35px;
            }

            ul {
                list-style-type: none;
            }

            li {
                margin-bottom: 10px;
            }

            .local {
                margin-top:40px;
                text-align: center;
            }
           
        .observacao {
            font-style: italic;
            text-align: justify;
        }

        .assinatura {
            overflow: hidden; /* Clear the float */
            height: 300px;
            text-align: center;

        }

        .assinatura div {
            float: left;
            margin-top: 70px;
            font-size: 12px;
            width: 40%;
        }

        .espaco{
            float: right;
            margin-left:130px;
        }
        .assinatura div p{
            margin-bottom: 5px;
            text-align: center;
        }

        hr {
            width: 100%;
        }

        </style>
    </head>

    <body>
        <img src='data:image/jpeg;base64," . $imagem_base64 . "' alt='Descrição da imagem'>

        <h1>Documento de Entrega</h1>
        <p>Eu, <span>" . $nomePessoa . "</span>, servidor(a) municipal, registrado(a) sob o número <span>" . $holeritePessoa . "</span>, lotado na unidade escolar: <span>" . $unidadeEquipamento . "</span>, pertencente à rede Municipal de ensino de São Vicente.</p>

        <p>Declaro que entreguei nesta data, <span>".  $quantidadeEquipamento . " " . $tipo[1] . "</span> da marca <span>" . $marcaEquipamento . "</span> com patrimonio ou numero de serie: <span>" . $codigoEquipamento . "</span>, devido ao motivo de: <span>" . $motivoEntrada . "</span></p>

        <p class='observacao'>Obs: " . $observacaoEquipamento . ".</p>
        <p class='local'>São Vicente,".  $formatter->format($data)."</p>

        <div class='assinatura'>
            <div >
                <hr>
                <p>RESPONSÁVEL/SECRETARIA DE EDUCAÇÃO</p>
                <p>Atendido por: Paulo Veloso</p>
            </div>
            <div class='espaco'>
                <hr>
                <p>SERVIDOR</p>
                <p> $holeritePessoa - $nomePessoa </p>
            </div>

        </div> 
    </body>

    </html>
</body>

</html>";

    $dompdf = new Dompdf();

    $dompdf->loadHtml($conteudo_pdf);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->stream();


    echo "<script>alert('Entrada adicionada com sucesso!')</script>";
    echo "<script> window.location.href='http://localhost/controle-estoque/views/entrada.php'</script>";
}
