<div class="container text-center mt-4">
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-cog fa-3x" aria-hidden="true"></i><h5>DEMANDAS</h5>',
				['controller' => 'Demandas', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-address-book fa-3x" aria-hidden="true"></i><h5>NOVA FASE</h5>',
				['controller' => 'Servico', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-clipboard fa-3x" aria-hidden="true"></i><h5>FUNCIONÁRIOS GIM</h5>',
				['controller' => 'FuncionariosGim', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-suitcase fa-3x" aria-hidden="true"></i><h5>PROGRAMAÇÃO DE FÉRIAS</h5>',
				['controller' => 'FuncionarioFerias', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i><h5>ESTAGIÁRIOS</h5>',
				['controller' => 'ContratosEstagiarios', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-handshake fa-3x" aria-hidden="true"></i><h5>FORNECEDORES</h5>',
				['controller' => 'Contratos', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-bar-chart fa-3x" aria-hidden="true"></i><h5>MEDIDORES</h5>',
				['controller' => 'Medidores', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<?= $this->Html->link(
				'<i class="fa fa-book fa-3x" aria-hidden="true"></i><h5>REUNIÕES</h5>',
				['controller' => 'Reunioes', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>
	</div>
</div>