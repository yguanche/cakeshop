<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- coloco una pequeña estructura de bootstrap para poner una tabla -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <!-- nos damos cuenta que nos faltó el botón añadir y lo ponemos junto al encabezado. -->
            <h2>
                Productos
                <!-- podemos darle un estilo al botón de una clase de bootstrap class -->
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span>Nuevo', ['controller' => 'Products', 'action' => 'add'],
                ['class' => 'btn btn-sm btn-primary pull-right', 'escape' => false]) ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= $this->Number->format($product->quantity) ?></td>
                        <td><?= $this->Number->format($product->price) ?></td>
                        <td><?= h($product->photo) ?></td>
                        <td><?= h($product->photo_dir) ?></td>
                        <td><?= h($product->created) ?></td>
                        <td><?= h($product->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>    
            </table>
        </div>
        
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter('{{page}} de {{pages}}') ?></p>
        </div>
    </<div>
</div>

<!-- copiamos las partes de la tabla arriba de lo que nos generó bake pero borramos todo lo de bake -->