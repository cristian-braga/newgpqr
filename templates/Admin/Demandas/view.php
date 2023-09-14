<div class="conteudo" style="width: 45%;">
    <div class="digitalizacao view content">
        <h3 class="text-center text-primary-emphasis mt-2 mb-4"> <?= h($demanda->id) ?> -
            <?= h($demanda->demanda_resumo) ?> </h3>
        <div class="row flex-column align-items-center mt-2">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"><?= __('Descrição') ?></label>
                <p><textarea name="" id="" cols="80" rows="5" class="form-control"
                        readonly><?= h($demanda->demanda_descricao) ?></textarea></p>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label"><?= __('Responsável') ?></label>
                <?php if(isset($demanda->demanda_responsavel)) : ?>
                <p><?= h($demanda->demanda_responsavel) ?></p>
                <?php else : ?>
                <p> - </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
