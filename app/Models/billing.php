<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class billing
 * @package App\Models
 * @version July 6, 2019, 7:34 pm UTC
 *
 * @property producto bill
 * @property integer bill_cliente
 * @property float bill_total
 */
class billing extends Model
{
    use SoftDeletes;

    public $table = 'billings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'bill_producto',
        'bill_cliente',
        'bill_cantidad',
        'bill_total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bill_producto' => 'integer',
        'bill_cliente' => 'string',
        'bill_cantidad' => 'integer',
        'bill_total' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bill_producto' => 'bill_cliente integer text'
    ];

    
}
