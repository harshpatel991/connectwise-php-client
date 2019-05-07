<?php

namespace Spinen\ConnectWise\Models\v2018_5\Finance;

use Spinen\ConnectWise\Support\Model;

/**
 * Class TaxCodeExpenseTypeExemption
 *
 * @property integer $id
 * @property array $taxableLevels
 */
class TaxCodeExpenseTypeExemption extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'taxableLevels' => 'array',
    ];
}
