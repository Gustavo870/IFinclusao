<?php include "header.php" ?>


<div class="d-flex justify-content-center mb-3">
        <h2>Cadastro</h2>
</div>

    <div class="d-flex justify-content-center mb-3">
        <form action="actionUsuario.php" method="POST" class="was-validated" enctype="multipart/form-data">

            <div class="form-floating mt-3 mb-3">
                <input type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Nome Completo" class="form-control">
                <label for="nomeUsuario">Nome</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Email" class="form-control">
                <label for="emailUsuario">Email</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" minlength="3" maxlength="8">
                <label for="senhaUsuario">Senha</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="confirmarSenhaUsuario" id="confirmarSenhaUsuario" placeholder="Confirme a Senha" class="form-control" minlength="3" maxlength="8">
                <label for="confirmarSenhaUsuario">Confirme a Senha</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

             <div class="form-floating mt-3 mb-3">
                <select name="opcaoUsuario" id="opcaoUsuario" placeholder="opção" class="form-control">
                    <option value="SOU UMA PESSOA SURDA">SOU UMA PESSOA SURDA</option>
                    <option value="SOU UMA PESSOA OUVINTE">SOU UMA PESSOA OUVINTE</option>
                    <option value="TENHO CONTATO COM UMA PESSOA SURDA">TENHO CONTATO COM UMA PESSOA SURDA</option>
                    <option value="ESTOU APRENDENDO LIBRAS">ESTOU APRENDENDO LIBRAS</option>
                    <option value="OUTRO" >OUTRO</option>
                    <option value="PREFIRO NÃO RESPONDER">PREFIRO NÃO RESPONDER</option>
                </select>
                <label for="opcaoUsuario">Qual opção melhor representa voçê?</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="btn btn-outline-dark">Cadastrar</button>

        </form>

    </div>




<?php include "footer.php" ?>