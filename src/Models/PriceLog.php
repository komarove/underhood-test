<?php

namespace Admin\UnderhoodTestLocal\Models;

use Illuminate\Database\Eloquent\Model;

class PriceLog extends Model
{
    /**
     * Define the table name.
     *
     * @var string
     */
    protected $table = 'price_logs';

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
        'price',
    ];
}