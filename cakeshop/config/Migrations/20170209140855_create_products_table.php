<?php

use Phinx\Migration\AbstractMigration;

class CreateProductsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('products');     //creamos la tabla products
        $table->addColumn('name', 'string', ['limit' => 100]) // name es string de 100 caracteres
              ->addColumn('descriptions', 'text')
              ->addColumn('quantity', 'integer', ['signed'=>'disable']) // disable no permita num negativos
              ->addColumn('price','decimal', ['precision'=>5, 'scale'=> 2, 'signed' => 'disable']) // decimal, nº dígitos --> precisión, scale num de decimales, signed -> disable no permite colocar precios negativos
              ->addColumn('photo', 'string')
              ->addColumn('photo_dir','string')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
