<?php

namespace Admin\UnderhoodTestLocal\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Define the table name.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'date',
        'product_id',
        'quantity',
    ];
}