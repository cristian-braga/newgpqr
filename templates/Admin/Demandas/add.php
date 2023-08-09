<div class="row">
    <div class="column-responsive column-80">
        <div class="demandas form content">
            <?= $this->Form->create($demanda) ?>
            <fieldset class="container w-50 p-4">
                <h2 class="text-center text-gpqr mt-2 mb-4">Adicionar Demanda</h2>

                <!-- <?php
                    echo $this->Form->label('Título');
                    echo $this->Form->text('demanda_resumo');
                    echo $this->Form->label('Descrição');
                    echo $this->Form->textarea('demanda_descricao');
                    echo $this->Form->label('Prioridade');
                    echo $this->Form->select('demanda_prioridade', ['Urgente' => 'Urgente' , 'Alto' => 'Alto', 'Médio' => 'Médio', 'Baixo' => 'Baixo']); //array associativo
                    echo $this->Form->label('Tipo');
                    echo $this->Form->select('demanda_tipo', ['Erro' => 'Erro', 'Melhoria' => 'Melhoria', 'Criação' => 'Criação']);
                ?> -->
                <div class="mb-3">
                    <label for="" class="form-label">Título</label>
                    <input class="form-control" type="text" placeholder="Default input"
                        aria-label="default input example" id="demanda_resumo" name="demanda_resumo">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Descrição</label>

                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            id="demanda_descricao" name="demanda_descricao" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Digite...</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Prioridade</label>
                    <select class="form-select" aria-label="Default select example" id="demanda_prioridade" name="demanda_prioridade">
                            <option selected>Selecione</option>
                            <option value="Urgente">Urgente</option>
                            <option value="Alta">Alta</option>
                            <option value="Médio">Média</option>
                            <option value="Baixa">Baixa</option>

                        </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tipo</label>
                        <select class="form-select" aria-label="Default select example" id="demanda_tipo" name="demanda_tipo">
                            <option selected>Selecione</option>
                            <option value="Criação">Criação</option>
                            <option value="Melhoria">Melhoria</option>
                            <option value="Erro">Erro</option>
                        </select>
                </div>
                <button type="submit" class="btn btn-primary float-end">Adicionar</button>
                </form>
            </fieldset>
            <!-- <?= $this->Form->button(__('Submit')) ?> -->
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
