<?php

namespace App\Repositories;

use App\Models\inventory;
use App\Repositories\BaseRepository;

/**
 * Class inventoryRepository
 * @package App\Repositories
 * @version July 6, 2019, 5:33 pm UTC
*/

class inventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'inv_nombre',
        'inv_cantidad',
        'inv_precio',
        'inv_lote',
        'inv_fecha_vencimiento'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return inventory::class;
    }
}
