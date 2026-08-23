<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Status do Cadastro - Plataforma de Inclusão em Informática</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <?php include "header.php"; ?>

        <main class="container my-5 py-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">

                    <div class="card register-card p-4 p-md-5">

                        <?php
                            function filtrar_entrada($dado){
                                $dado = trim($dado); 
                                $dado = stripslashes($dado); 
                                $dado = htmlspecialchars($dado); 
                                return($dado);
                            }

                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $nomeUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = $opcaoUsuario = "";
                                $erros = [];

                                // Validação Nome
                                if(empty($_POST["nomeUsuario"])){
                                    $erros[] = "O campo <strong>NOME</strong> é obrigatório!";
                                } else {
                                    $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
                                    if(!preg_match('/^[\p{L} ]+$/u', $nomeUsuario)){
                                        $erros[] = "O campo <strong>NOME</strong> deve conter apenas letras!";
                                    }
                                }

                                // Validação E-mail
                                if(empty($_POST["emailUsuario"])){
                                    $erros[] = "O campo <strong>E-MAIL</strong> é obrigatório!";
                                } else {
                                    $emailUsuario = filtrar_entrada($_POST["emailUsuario"]);
                                }

                                // Validação Senha
                                if(empty($_POST["senhaUsuario"])){
                                    $erros[] = "O campo <strong>SENHA</strong> é obrigatório!";
                                } else {
                                    $senhaUsuario = md5(filtrar_entrada($_POST["senhaUsuario"]));
                                }

                                // Validação Confirmação de Senha
                                if(empty($_POST["confirmarSenhaUsuario"])){
                                    $erros[] = "O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!";
                                } else {
                                    $confirmarSenhaUsuario = md5(filtrar_entrada($_POST["confirmarSenhaUsuario"]));
                                    if($senhaUsuario != $confirmarSenhaUsuario){
                                        $erros[] = "As <strong>SENHAS</strong> informadas não são iguais!";
                                    }
                                }

                                // Validação Opção
                                if(empty($_POST["opcaoUsuario"])){
                                    $erros[] = "O campo <strong>OPÇÃO</strong> é obrigatório!";
                                } else {
                                    $opcaoUsuario = filtrar_entrada($_POST["opcaoUsuario"]);
                                }

                                // Exibição dos Erros ou Processamento do Cadastro
                                if(!empty($erros)){
                                    echo "<div class='text-center mb-4'><h2 class='fw-bold text-danger'>Atenção</h2></div>";
                                    foreach($erros as $erro){
                                        echo "<div class='alert alert-warning text-center border-0 rounded-3 shadow-sm mb-3' role='alert'>$erro</div>";
                                    }
                                    echo "<a href='formUsuario.php' class='btn btn-outline-dark w-100 mt-3 fw-bold'>Voltar ao Formulário</a>";
                                } else {
                                    include "conexaoBD.php";

                                    $inserirUsuario = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario, opcaoUsuario) VALUES ('$nomeUsuario', '$emailUsuario', '$senhaUsuario', '$opcaoUsuario')";

                                    if(mysqli_query($conn, $inserirUsuario)){
                                        echo "
                                        <div class='text-center mb-4'>
                                            <h2 class='fw-bold text-success mb-2'>Cadastro Realizado!</h2>
                                            <p class='text-muted small'>Seus dados foram salvos com sucesso no sistema.</p>
                                        </div>

                                        <div class='table-responsive mb-4'>
                                            <table class='table table-borderless align-middle bg-light rounded-3 p-3'>
                                                <tbody>
                                                    <tr>
                                                        <th class='ps-3 text-muted fw-semibold' style='width: 30%;'>Nome:</th>
                                                        <td class='pe-3 fw-bold'>$nomeUsuario</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='ps-3 text-muted fw-semibold'>E-mail:</th>
                                                        <td class='pe-3 fw-bold'>$emailUsuario</td>
                                                    </tr>
                                                    <tr>
                                                        <th class='ps-3 text-muted fw-semibold'>Perfil:</th>
                                                        <td class='pe-3 fw-bold'>$opcaoUsuario</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <a href='formLogin.php' class='btn btn-custom-dark w-100'>Ir para o Login</a>
                                        ";
                                    } else {
                                        echo "
                                        <div class='alert alert-danger text-center border-0 rounded-3 shadow-sm mb-4' role='alert'>
                                            <strong>Erro:</strong> Não foi possível salvar os dados no banco de dados.
                                        </div>
                                        <a href='formUsuario.php' class='btn btn-outline-dark w-100 fw-bold'>Tentar Novamente</a>
                                        ";
                                    }
                                }
                            } else {
                                header("location:formUsuario.php");
                                exit();
                            }
                        ?>

                    </div>

                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>