<?php

namespace Admin\UnderhoodTestLocal\database\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Capsule::schema()->create('products', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('product_id');
            $table->integer('quantity');
        });
    }

    /**
     * Rollback the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Capsule::schema()->dropIfExists('products');
    }
}
