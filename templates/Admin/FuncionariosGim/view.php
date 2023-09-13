<div class="conteudo" style="width: 45%;">
        <div class="digitalizacao view content">
            <h3 class="text-center text-primary-emphasis mt-2 mb-4"><?= h($funcionariosGim->nome) ?></h3>
            <table class="table table-borderless table-striped mb-4 align-middle">
            <tr>
                    <th><?= __('Matrícula') ?></th>
                    <td><?= h($funcionariosGim->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($funcionariosGim->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($funcionariosGim->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contato Alternativo') ?></th>
                    <td><?= h($funcionariosGim->contatoAlt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone Alternativo') ?></th>
                    <td><?= h($funcionariosGim->telAlt) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereço') ?></th>
                    <td><?= h($funcionariosGim->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= h($funcionariosGim->turno) ?></td>
                </tr>
            </table>
        </div>
    </div>




     