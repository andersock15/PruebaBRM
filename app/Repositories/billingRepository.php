<?php

namespace App\Repositories;

use App\Models\billing;
use App\Repositories\BaseRepository;

/**
 * Class billingRepository
 * @package App\Repositories
 * @version July 6, 2019, 7:34 pm UTC
*/

class billingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'bill_producto',
        'bill_cliente',
        'bill_cantidad',
        'bill_total'
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
        return billing::class;
    }
}
