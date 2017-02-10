<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- colocamos una pequeña estructura --> 
<div class="well">
    <h2><?= h($product->name) ?></h2>
    <br>
    <dl>
        <dt>Id</dt>
        <dd>
             <?= $this->Number->format($product->id) ?>
            &nbsp;
        </dd>
        <br>
        <dt>Descripción</dt>
        <dd>
             <?= $this->Text->autoParagraph(h($product->descriptions)); ?>
            &nbsp;
        </dd>
        <br>
        
         <dt>Cantidad</dt>
        <dd>
             <?= $this->Number->format($product->quantity) ?>
            &nbsp;
        </dd>
        <br>
        
        <dt>Precio</dt>
        <dd>
             <?= $this->Number->format($product->price) ?>
            &nbsp;
        </dd>
        <br>
        
        <dt>Foto</dt>
        <dd>
            <?= h($product->photo) ?>
            &nbsp;
        </dd>
        <br>
        
        <dt>Dir Foto</dt>
        <dd>
             <?= h($product->photo_dir) ?>
            &nbsp;
        </dd>
        <br>
        
        <dt>Creado</dt>
        <dd>
              <?= h($product->created) ?>
            &nbsp;
        </dd>
        <br>
        
        <dt>Modificado</dt>
        <dd>
            <?= h($product->modified) ?>
            &nbsp;
        </dd>
        <br>
        
       
    </dl>
</div>

