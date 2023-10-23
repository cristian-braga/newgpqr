<h2 class="text-center text-gpqr mt-2 mb-4">DIGITALIZAÇÃO</h2>
<div class="container text-center mt-4">
	<div class="row text-center">
		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-file-import fa-3x" aria-hidden="true"></i>
        <h5>CADASTRO</h5>',
				['controller' => 'Digitalizacao', 'action' => 'index'],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-file-circle-question fa-3x" aria-hidden="true"></i>
				<h5>CONFERÊNCIA</h5>',
				['controller' => 'Digitalizacao', 'action' => ''],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-file-arrow-up fa-3x" aria-hidden="true"></i>
				<h5>LANÇAMENTO</h5>',
				['controller' => 'Digitalizacao', 'action' => ''],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-file-circle-check fa-3x" aria-hidden="true"></i>
				<h5>CONF. ALFRESCO</h5>',
				['controller' => 'Digitalizacao', 'action' => ''],
				['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>
	</div>
</div>