<div class="login">
    <h2>SISTEMA GIM</h2>
    <?= $this->Flash->render() ?>
    <P>Para acessar, digite sua matrícula com o "p" e a senha</P>
    <?= $this->Form->create(null) ?>
        <div class="dados-usuario">
            <input type="text" name="username" required>
            <label>Matrícula</label>
        </div>
        <div class="dados-usuario">
            <input type="password" name="password" required>
            <label>Senha</label>
        </div>
        <?= $this->Form->button(__('Acessar')) ?>
    <?= $this->Form->end() ?>
</div>