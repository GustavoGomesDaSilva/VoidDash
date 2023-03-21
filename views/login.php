    <div class ="main-login">
    <div class ="login-esquerda">
        <img src="../components/assets/imgLogin.png" class="imagem-esquerda-login" alt="">
    </div>
    <div class="login-direita">
        <form action="../config/logar.php" method="POST">
            <div class ="card-login">
                <img src="../components/assets/logoVoidTech.png" alt="">
                <h1>Faça login e começe a usar</h1>
                <div class="text-field">
                    <label for="email">Endereço de Email</label>
                    <input type="text" class="login-email" name= "email" placeholder="Digite seu email">
                </div>
                <div class="text-field">
                    <label for="senha">Senha</label>
                    <input type="password" class="login-senha" name="senha" placeholder="Senha">
                </div>
                <div class ="lembrar">
                    <!-- <input type="checkbox" id="checkbox"><label for="checkbox" id="lembrar">Lembrar-se de mim</label> -->
                </div>
                <button class="btn-login" type="submit" name="btn-login">Fazer login</button>
        </form>
                <!-- <div class="esqueceu-senha"><a href="#"> Esqueceu sua Senha</a></div> -->
                <div class="cadastrar"><a href="cadastro.php">Não Possui Conta: Cadastre-se Agora</div>
            </div>


    </div>
</body>

</html>