<?php

namespace Admin\UnderhoodTestLocal\database\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceLogTable
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Capsule::schema()->create('price_logs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('product_id');
            $table->integer('price');
        });
    }

    /**
     * Rollback the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Capsule::schema()->dropIfExists('price_logs');
    }
}
