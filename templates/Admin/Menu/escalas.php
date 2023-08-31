<div class="container text-center mt-4">
	<div class="row text-center">
		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-people-line fa-3x" aria-hidden="true"></i>
                <h5>MANHÃ</h5>',
				['controller' => 'Escala', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>
        
		<div class="col-lg-3 col-md-6 col-sm-3">
			<?= $this->Html->link(
				'<i class="fa-solid fa-people-line fa-3x" aria-hidden="true"></i><h5>TARDE</h5>',
				['controller' => 'EscalaTarde', 'action' => 'index'],
                ['class' => 'menu-gpqr', 'escape' => false]
			) ?>
		</div>
	</div>
</div>