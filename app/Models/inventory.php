<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class inventory
 * @package App\Models
 * @version July 6, 2019, 5:33 pm UTC
 *
 * @property id inv
 * @property string inv_nombre
 * @property integer inv_cantidad
 * @property float inv_precio
 * @property string inv_lote
 * @property string inv_fecha_vencimiento
 */
class inventory extends Model
{
    use SoftDeletes;

    public $table = 'inventories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'inv',
        'inv_nombre',
        'inv_cantidad',
        'inv_precio',
        'inv_lote',
        'inv_fecha_vencimiento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'inv_nombre' => 'string',
        'inv_cantidad' => 'integer',
        'inv_precio' => 'double',
        'inv_lote' => 'string',
        'inv_fecha_vencimiento' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
}
