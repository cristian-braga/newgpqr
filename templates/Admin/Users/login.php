<div class="login">
    <h2>SISTEMA GIM</h2>
    <?= $this->Flash->render() ?>
    <P>Para acessar, digite sua matrícula com o "p" e a senha</P>
    <form method="post">
        <div class="dados-usuario">
            <input type="text" name="username" required>
            <label>Matrícula</label>
        </div>
        <div class="dados-usuario">
            <input type="password" name="password" required>
            <label>Senha</label>
        </div>
        <button type="submit">Acessar</button>
    </form>
</div>