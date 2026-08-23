<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Cadastro - Plataforma de Inclusão em Informática</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <!-- Bootstrap 5 CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">

        <?php include "header.php"; ?>

        <main class="container my-5 py-3">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">

                    <!-- Card de Cadastro -->
                    <div class="card register-card p-4 p-md-5">
                        
                        <div class="text-center mb-4">
                            <h2 class="fw-bold mb-1" style="letter-spacing: -0.5px;">Criar Conta</h2>
                            <p class="text-muted small">Preencha os campos abaixo para se cadastrar</p>
                        </div>

                        <form action="actionUsuario.php" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-floating mb-3">
                                <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome Completo" class="form-control" required>
                                <label for="nomeUsuario">Nome Completo</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Email" class="form-control" required>
                                <label for="emailUsuario">E-mail</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" minlength="3" maxlength="8" required>
                                <label for="senhaUsuario">Senha</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="confirmarSenhaUsuario" id="confirmarSenhaUsuario" placeholder="Confirme a Senha" class="form-control" minlength="3" maxlength="8" required>
                                <label for="confirmarSenhaUsuario">Confirme a Senha</label>
                            </div>

                            <div class="form-floating mb-4">
                                <select name="opcaoUsuario" id="opcaoUsuario" class="form-select" required>
                                    <option value="" disabled selected>Selecione uma opção...</option>
                                    <option value="SOU UMA PESSOA SURDA">SOU UMA PESSOA SURDA</option>
                                    <option value="SOU UMA PESSOA OUVINTE">SOU UMA PESSOA OUVINTE</option>
                                    <option value="TENHO CONTATO COM UMA PESSOA SURDA">TENHO CONTATO COM UMA PESSOA SURDA</option>
                                    <option value="ESTOU APRENDENDO LIBRAS">ESTOU APRENDENDO LIBRAS</option>
                                    <option value="OUTRO">OUTRO</option>
                                    <option value="PREFIRO NÃO RESPONDER">PREFIRO NÃO RESPONDER</option>
                                </select>
                                <label for="opcaoUsuario">Qual opção melhor representa você?</label>
                            </div>

                            <button type="submit" class="btn btn-custom-dark w-100 mb-3">Cadastrar</button>

                            <div class="text-center mt-3">
                                <p class="mb-0 text-muted small">Já possui uma conta? 
                                    <a href="formLogin.php" title="Fazer Login" class="link-destaque">Faça login aqui!</a>
                                </p>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>

        <!-- Bootstrap 5 JS Bundle CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>