<?php
$paginator = $this->Paginator->setTemplates([
    'first' => '<li class="page-item"><a href="{{url}}" class="page-link">Primeira</a></li>',
    'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&laquo;</a></li>',
    'number' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a href="{{url}}" class="page-link">{{text}}</a></li>',
    'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">&raquo;</a></li>',
    'last' => '<li class="page-item"><a href="{{url}}" class="page-link">Última</a></li>',
]);
?>

<nav aria-label="Page navigation example" class="mt-4">
    <ul class="pagination-gpqr pagination-sm">
        <?php
        echo $paginator->first();
        if ($paginator->hasPrev()) {
            echo $paginator->prev();
        }

        echo $paginator->numbers();
        if ($paginator->hasNext()) {
            echo $paginator->next();
        }

        echo $paginator->last();
        ?>
    </ul>
    <!-- <p class="d-flex justify-content-center"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p> -->
</nav>