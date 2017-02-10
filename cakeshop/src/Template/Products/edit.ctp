<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- inserto líneas nuevas de una estructura básica  -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar Producto</h2>
        </div>
        <!-- hacemos el código como si fuera html y luego cogemos el código que ha generado bake y lo pegamos -->
        <?= $this->Form->create($product) ?>
            <fieldset>
                <!--- como son los mismo campos todo el tiempo entonces creamos un elemento -->
                <?= $this->element('products/fields') ?>
            </fieldset>
            <?= $this->Form->button('Editar producto') ?>
         <?= $this->Form->end() ?>
    </div>
</div>
