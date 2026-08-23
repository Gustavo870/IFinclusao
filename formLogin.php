<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login - Plataforma de Inclusão em Informática</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <?php include "header.php"; ?>

        <main class="container my-5 py-3">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                    <!-- Mensagem de Erro -->
                    <?php
                        if(isset($_GET['erroLogin'])){
                            $erroLogin = $_GET['erroLogin'];
                            if($erroLogin == 'dadosInvalidos'){
                                echo "
                                <div class='alert alert-danger text-center shadow-sm rounded-3 mb-4 border-0' role='alert'>
                                    <strong>Atenção:</strong> E-mail ou senha inválidos!
                                </div>";
                            }
                        }
                    ?>

                    <!-- Card de Login -->
                    <div class="card login-card p-4 p-md-5">
                        
                        <div class="text-center mb-4">
                            <h2 class="fw-bold mb-1" style="letter-spacing: -0.5px;">Acessar o sistema</h2>
                            <p class="text-muted small">Informe seus dados abaixo para entrar</p>
                        </div>

                        <form action="actionLogin.php" method="POST">
                            
                            <div class="form-floating mb-3">
                                <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Email" class="form-control" required>
                                <label for="emailUsuario">E-mail</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" minlength="3" maxlength="8" required>
                                <label for="senhaUsuario">Senha</label>
                            </div>

                            <button type="submit" class="btn btn-custom-dark w-100 mb-3">Entrar</button>

                            <div class="text-center mt-3">
                                <p class="mb-0 text-muted small">Ainda não é cadastrado? 
                                    <a href="formUsuario.php" title="Cadastrar-se" class="link-destaque">Clique aqui!</a>
                                </p>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>